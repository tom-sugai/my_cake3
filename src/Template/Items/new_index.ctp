<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>

<!--
    <div id="midasi">
        <?= "id" ?>
        <?= "Image" ?>
        <?= "Jancode" ?>
        <?= "Category" ?>
        <?= "Name" ?>
        <?= "user_id" ?>
        <?= __('Actions') ?>
    </div>
-->

<?php $this->set('headertext', 'This is headertext in the new_index.ctp file.'); ?>

<div class="sheader">
        <p><?= "-- This is Page Info Block in the new_index.ctp file. --" ?></p>
</div>
<div class="categoryform">
			<?= $this->Form->create(null, ['type' => 'post', 'url' => ['action' => 'new-index']]) ?>
		    <div class="cat-in"><?= $this->Form->select('select-1', $category_list, array('empty' => '分類を選択', 'width' => 100)) ?></div>
            <div class="cat-in"><?= $this->Form->submit(__('Submit')) ?></div>
		    <?= $this->Form->end() ?>
</div>
<div class="scontainor">   
    <?php foreach ($items as $item): ?>
        <div class="syohin">
            <div class="boxA">
                <?= $this->Number->format($item->id) ?>
            </div>
        
            <div class="syohin-1">
                <div class="boxD"><?= $this->Html->image($item->image,  ['width' => 60, 'height' => 60]) ?></div>
                <div class="syohin-2">
                    <div class="boxB">
                        <?= $item-> category ?><?= "  ----  " ?><?= $item-> jancode ?>
                    </div>
                    <div class="boxE"><?= $item-> pname ?></div>
                    <div class="boxF"><?= "---- Price or Others line -----" . "<br>" ?></div>
                </div>
            </div>
            <div class="boxG">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
            </div>
            <!--<div class="boxH"><?= "---- fotter line  for each Product----890----------0---------0---------0---------0---------0" ?></div>-->    
        </div>            
    <?php endforeach; ?>
</div>    
<div class="pctrl">
    <ul class="pagination">
        <!--<?= $this->Paginator->first('<< ' . __('first')) ?>-->
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <!--<?= $this->Paginator->last(__('last') . ' >>') ?>-->
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>




