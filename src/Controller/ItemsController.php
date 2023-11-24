<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Event;
use Cake\Http\Client;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{ 
    public function initialize():void
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
            'limit' => 5
        ];

        $category_list = array_values(array_unique($this->Items->find()->all()->extract('category')->toArray()));
        $this->set('category_list', $category_list);
        debug($category_list);

        //$items = $this->Items;
        //$this->set(compact('items'));
        $this->set('items', $this->paginate($this->Items));
        
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('item', $item);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $users = $this->Items->Users->find('list', ['limit' => 200]);
        $this->set(compact('item', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function readProduct(){
        $this->autoLayout = false;
        $this->autoRender = false;
        $msg = "Read jan-code-list from csv file into products[] array.";
        $this->set('msg', $msg);

        // 商品リスト（csv file: /webroot/data/）を読み込んで配列(products)に格納
        //$fname ='data/product-list-jan-code.csv';
        $fname ='data/codes_202311022226590.csv';
        $file = fopen($fname, 'r');
        $jancodeList = [];
        $idx = 0;
        while(feof($file) == False) {
            $jancodeList[$idx] = fgetcsv($file, 100);
            $idx++;
        }
        //debug($jancodeList);
        $this->set('jancodeList', $jancodeList);

        // Yahooサイトから商品情報を検索して$productArrayに格納する
        // 検索した商品情報を格納する配列 ItemsContoroller 内で共有する
        $productArray = [];
        // $productArray のインデックスの初期値 **skip first-line because title-line
        $idx = 1;
        //create http-client instance
        $http = new Client();
        foreach ($jancodeList as $jancode){
            // $jancodeList[n] から $jancode[4] を取り出して、検索結果の、イメージ、janCode、商品名を、配列 $productArray へ格納する  
            // call ShoppingWebService with $jancode[4] (= jancode).
            $jcode = $jancode[4];
            $appId = 'dj00aiZpPTY0eUxBNDFjUVpvYiZzPWNvbnN1bWVyc2VjcmV0Jng9ODc-';    
            $response = $http->get('https://shopping.yahooapis.jp/ShoppingWebService/V3/itemSearch?appid=' . $appId . '&jan_code=' . $jcode . '&results=1');    
            //debug($response);
            // change response to responseArray ( $response->getJson() )
            $responseArray = $response->getJson();
            //debug($responseArray);
            // check $responseArray['hits'] == null skip data
            if($responseArray['hits'] != null){
                // extract productImage, janCode, ProductName
                // janCode : $responseArray['hits'][0]['janCode']
                $productArray[$idx]['jancode'] = $responseArray['hits'][0]['janCode'];
                // productName : $responseArray['hits'][0]['name']
                $productArray[$idx]['pname'] = $responseArray['hits'][0]['name'];
                // productBrand
                $productArray[$idx]['brand'] = $responseArray['hits'][0]['brand']['name'];
                // ctegories
                $productArray[$idx]['category'] = $responseArray['hits'][0]['parentGenreCategories'][0]['name'];
                // productImage : $responseArray['hits'][0]['image']['medium']
                $productArray[$idx]['image'] = $responseArray['hits'][0]['image']['medium'];
                // url
                $productArray[$idx]['site'] = $responseArray['hits'][0]['url'];
                // store empty
                $productArray[$idx]['store'] = null;
                //debug($productArray[$idx]);
            }  else {
 
                // set null to all fileds without jancode
                $productArray[$idx]['jancode'] = $jcode;
                // productName
                $productArray[$idx]['pname'] = null;
                // productBrand
                $productArray[$idx]['brand'] = null;
                // ctegories
                $productArray[$idx]['category'] = null;
                // productImage
                $productArray[$idx]['image'] = null;
                // url
                $productArray[$idx]['site'] = null;
                // store empty
                $productArray[$idx]['store'] = null;

               //echo "skip data : " . $jcode . "<br/>";
            }  
            $idx++;
        }
        //debug($productArray);

        // 作成した配列、$productArray をビューに渡す
        $this->set('productArray', $productArray);
        // メソッド echoProductList() を呼び出す
        //$this->setAction('echoProductList');
        $this->setAction('storeDb', $productArray);

        /** 
        // $productArray を json 形式に変換してビューへ渡す
        $productJson = json_encode($productArray);
        //debug($productJson);
        $this->set('productJson', $productJson);
        // json test
        //$this->setAction('passproductJson');
        */
    }

    public function storeDb($productArray){
        $this->autoLayout = false;
        $this->autoRender = false;
        //debug($productArray);
        // set initial value for test
        $user_id = 1;

        // set product properties 
        foreach($productArray as $product){
            // check exist using jancode
            debug($product['jancode']);
            debug($product['pname']);
            // exist test for product using user_id and jancode
            $query = $this->Items->find();
            $result = $query->where(['jancode = ' => $product['jancode']])->toArray();
            //debug($result);
            if ($result == null){
                // create empty Entity
                $item = $this->Items->newEntity();
                // set $item properties
                $item->user_id = $user_id;
                $item->category = $product['category'];
                $item->jancode = $product['jancode'];
                $item->pname =  $product['pname'];
                $item->brand = $product['brand'];
                $item->store = $product['store'];
                $item->image = $product['image'];
                $item->site = $product['site'];
                //debug($item->pname);  
                // save $item
                if ($this->Items->save($item)) {
                    //$this->Flash->success(__('The item has been saved.'));
                    echo $item->jancode . " : " . "The item has been saved." . "<br/>";
                    echo "-------------------------------------------------" . "<br/>";                    
                } else {
                    //$this->Flash->error(__('The item could not be saved. Please, try again.'));
                    echo "The item could not be saved. Please" . "<br/>";
                }
            } else {
                echo "Record exist!!" . "<br/>";
                echo "-------------------------------------------------" . "<br/>";  
            }
        }
    }

    public function echoProductList(){
        $this->autoLayout = false;
        $this->autoRender = true;
    }

    public function passProductJson(){
        // Object $productJson を JavaScript へ渡す
        $this->autoLayout = false;
        $this->autoRender = true;
        // for test
        $array = ['a' => 10, 'b' => 20, 'c' => 30];
        $json_array = json_encode($array);
        debug($json_array);
        $this->set('json_array', $json_array);
    }

    public function newIndex(){
        $this->autoLayout = true;
        $this->autoRender = true;
        $this->viewBuilder()->setLayout('new_layout');

        $this->paginate = [
            'contain' => ['Users'],
            'limit' => 10
        ];

        $category_list = array_values(array_unique($this->Items->find()->all()->extract('category')->toArray()));
        $this->set('category_list', $category_list);
        //debug($category_list);

        $result = "";

        if ($this->request->isPost()){
            $result = $this->request->data['select-1'];
        }
        //debug($this->request->data);
        //debug($category_list[$result]);

        if ( $result == null) {
            $items = $this->Items->find('all');
        }   else {
            $items = $this->Items->find()->where(['category =' => $category_list[$result]]);
        }
        $this->set('items', $this->paginate($items));

    }

    public function boxTest() {
    $this->autoLayout = true;
    $this->autoRender = true;
    //$this->viewBuilder()->setLayout('new_layout');
    
    }

}
