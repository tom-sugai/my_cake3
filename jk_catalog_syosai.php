<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang=ja>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-JP">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Pragma" content="no-cache">

<link rel="canonical" href="https://www.janken.jp/goods/jk_catalog_syosai.php">

<title> ���ʾҲ�ڡ���</title>
<meta name="description" content=" �ξ��ʾ���ڡ���">
<meta name="keywords" content=",JAN������,JAN����,�С�������,����,Ź�޸���,��ʪ�ݥ����,����ޥå�,�ݥ����,�ȷ���">
<link rel="stylesheet" href="../css/catalog.css" type="text/css">

<script type="text/javascript">
<!--
function goGoodsUpd(jan){
    wx = 620;
    wy = 530;
    x = (screen.width  - wx) / 2;
    y = (screen.height - wy) / 2;
    var strStyle = "resizable=yes,status=yes,left="+x+",top="+y+",width="+wx+",height="+wy;
    var popURL = "../export/sp_catalog_syosai.php?jan="+jan+"&mode=read";
    var popWin = window.open("","wscatalog",strStyle);
    popWin.location.href=popURL;
    popWin.focus();
    return false;
}
function addFavorite(){
    document.frmGoods.syori.value = "addfav";
    document.frmGoods.action = "./jk_catalog_syosai.php";
    document.frmGoods.method = "post";
    document.frmGoods.submit();
    return false;
}
function addFavYotei(){
    document.frmGoods.syori.value = "addfavYotei";
    document.frmGoods.action = "./jk_catalog_syosai.php";
    document.frmGoods.method = "post";
    document.frmGoods.submit();
    return false;
}
function goBlogOubo(prgid){
    wx = 630;
    wy = 450;
    x = (screen.width  - wx) / 2;
    y = (screen.height - wy) / 2;
    var strStyle = "resizable=yes,status=yes,left="+x+",top="+y+",width="+wx+",height="+wy;
    var popURL = "../export/sp_blog_oubo.php?prg="+prgid;
    var popWin = window.open("","wblogoubo",strStyle);
    popWin.location.href=popURL;
    popWin.focus();
    return false;
}
function goEnquete(eid){
    var popURL = "./jk_prgoodsEnquete.php?eid="+eid;
    var popWin = window.open("","wenquate");
    popWin.location.href=popURL;
    popWin.focus();
    return false;
}
function goPresent(pid){
    wx = 700;
    wy = 400;
    x = (screen.width  - wx) / 2;
    y = (screen.height - wy) / 2;
    var strStyle = "resizable=yes,status=yes,left="+x+",top="+y+",width="+wx+",height="+wy;
    var popURL = "../export/sp_showPresent.php?no="+pid;
    var popWin = window.open("","wpresent",strStyle);
    popWin.location.href=popURL;
    popWin.focus();
    return false;
}
function showPriceCheck(jan){
    wx = 250;
    wy = 250;
    x = (screen.width  - wx) / 2;
    y = (screen.height - wy) / 2;
    var strStyle = "resizable=yes,status=yes,left="+x+",top="+y+",width="+wx+",height="+wy;
    var popURL = "./sp_priceCheck.php?jan="+jan;
    var popWin = window.open("","wpriceCheck",strStyle);
    popWin.location.href=popURL;
    popWin.focus();
    return false;
}
//-->
</script>

<style type="text/css">
<!--
.basew { width: 850px; height: auto; }
.basel { width: 700px; height: auto; text-align:left; float:left;}
.baser { width: 150px; height: auto; text-align:left; float:right; }

h5        { margin:0px; font-size:12px; color:#333333; line-height:14px; font-weight:normal; }
h5#gname  { margin:0px; padding-left: 5px; font-size:16px; color:#1020A0; line-height:18px; font-weight:bold; }
h5#seaqret{ margin:0px; padding: 0px; font-size:5px; color:#FFFFFF; line-height:5px; }

.sponcer { background-color:#F00000; height:20px; font-size:13px; line-height:20px; font-weight:bold; color:#FFFFFF; }
.brog    { background-color:#008000; height:20px; font-size:13px; line-height:20px; font-weight:bold; color:#FFFFFF; }
.enquete { background-color:#0040C0; height:20px; font-size:13px; line-height:20px; font-weight:bold; color:#FFFFFF; }
.present { background-color:#9933FF; height:20px; font-size:13px; line-height:20px; font-weight:bold; color:#FFFFFF; }

/* ���ݥ󥵡��դ��Υܥ����� */
a#spbtn         { color: #F0F080; font-Size:13px; text-decoration: none }
a#spbtn:link    { color: #F0F080; }
a#spbtn:visited { color: #F0F080; }
a#spbtn:active  { color: #F0F0F0; font-weight: bolder; }
a#spbtn:hover   { color: #80FFFF; font-weight: bolder; }

/* PageView�� ̤����*/
.pvarea   {
  width: 80px; height: 15px;
  padding: 3 4 3 4;
  background: #CCCCCC;
  border: #FF0066 2px solid;
  color: #FF0066;
  font-size:12px;
  text-align:center;
}

/* ���ݥ󥵡��罸 �� */
a#bosyu         { text-decoration:none; font-size:16px; font-weight: bold; }
a#bosyu:link    { color: #CC0066; }
a#bosyu:visited { color: #CC0066; }
a#bosyu:active  { color: #CC0000; }
a#bosyu:hover   { color: #CC0066; text-decoration:underline; }

/* �Хʡ������� */
.bnrtop {
  margin: 25 2 2 5;
  width: 140px; height: auto;
  color: #999999;
  text-align:center;
}
.bnr {
  margin: 10 2 2 5;
  padding: 5;
  width: 140px; height: auto;
  border: #993300 1px solid;
  color: #333333; line-height:14px;
  overflow:hidden;
}

a#bn         { font-Size:12px; text-decoration: underline; }
a#bn:link    { color: #000099; }
a#bn:visited { color: #000099; }
a#bn:active  { color: #000099; }
a#bn:hover   { color: #009900; }

.prmark { width: 50px; height: auto; float:left;
          color:#666666; background-color:#FFD000;
          font-size:16px; line-height:18px; font-weight:bold; text-align:center; }
.prbody { width: 630px; height: auto; margin-left:10px; color:#333333; line-height:14px; float:left; }
//-->
</style>

</head>
<body class="page">
<div class="basew">


<div class="basel">

<!-- ���������ȥ� -->
<div class="logoarea">
  <div class="logoleft">
      <a href="https://www.janken.jp/" target="wjankentop" id="jktop">JANKEN.JP�ȷ���</a>
      �����ʾҲ�ڡ���
  </div>
    <div class="logoright">
      <form name="loginForm" action="../userLoginCheck.php" method="post">
      JANKEN.JP�桼��ID
      <input type="text" name="userid" style="width:70px; ime-mode:disabled;" value="">
      �ѥ����
      <input type="password" name="passwd" style="width:70px; ime-mode:disabled;" value="">
      <input type="image" src="../img/login.jpg" alt="LOGIN" name="btn_login" style="vertical-align:middle;padding:1px;">
    </form>
    </div>
  <div class="cleaner"></div>
</div>
<div class="jktitlebar">
  <div class="jktitletxt1"><h1></h1></div>
  <div class="jktitletxt2">[ guest ]</div>
  <div class="cleaner"></div>
</div>

<h5 id="seaqret">  </h5>

<table border="0" cellspacing="5" cellpadding="0">
<tr><td valign="top">

  
  <table border="0" cellspacing="2" cellpadding="0" width="690" summary="��Ͽ����" style="word-break: break-all;">
   <tr>
    <td class="goodskey">����̾</td>
    <td colspan="3"><h5 id="gname"></h5></td>
    <td align="right">��������Total �� <span class="bblue"></span>������ �� <span class="bblue"></span></td>
   </tr>
   <tr>
    <td class="goodskey">�ʣ���</td>
    <td class="goodsval" colspan="2"></td>

    <!-- ************* ���ʲ��� ************** -->
    <td rowspan="" align="center">
      <img src="https://www.janken.jp/img/no_image150.jpg" width="130" alt="https://www.janken.jp/img/no_image150.jpg"><br>    </td>
    <td rowspan="12" align="right" valign="top">

    <!-- ************* ��¦��ɽ ************** -->
    <form name="frmGoods" action="jk_catalog_syosai.php" method="post">
    <input type="hidden" name="syori" value="">
    <input type="hidden" name="jan" value="">
    <input type="hidden" name="gadgetuser" value="">

        </form>
    <br>

    ���������������Ƥ���桼������
    <table class="favortbl" border="0" cellspacing="0" cellpadding="0" width="200" summary="�����������٥����">
            <tr>
        <td class="favorkey" width="55">
         �繥��        </td>
        <td class="favorval" width="30">  </td>
        <td class="favorgrf"></td>
      </tr>
            <tr>
        <td class="favorkey" width="55">
         ����        </td>
        <td class="favorval" width="30">  </td>
        <td class="favorgrf"></td>
      </tr>
            <tr>
        <td class="favorkey" width="55">
         ����        </td>
        <td class="favorval" width="30">  </td>
        <td class="favorgrf"></td>
      </tr>
          </table>
    <br>
    <table class="favortbl2" border="0" cellspacing="0" cellpadding="0" width="200" summary="�������٥����">
            <tr>
        <td class="favorkey2" width="55">
         ������        </td>
        <td class="favorval2" width="30">  </td>
        <td class="favorgrf2"></td>
      </tr>
            <tr>
        <td class="favorkey2" width="55">
         ��������        </td>
        <td class="favorval2" width="30">  </td>
        <td class="favorgrf2"></td>
      </tr>
            <tr>
        <td class="favorkey2" width="55">
         ������        </td>
        <td class="favorval2" width="30">  </td>
        <td class="favorgrf2"></td>
      </tr>
            <tr>
        <td class="favorkey2" width="55">
         �����Ѥ�        </td>
        <td class="favorval2" width="30">  </td>
        <td class="favorgrf2"></td>
      </tr>
            <tr>
        <td class="favorkey2" width="55">
         ����ͽ��        </td>
        <td class="favorval2" width="30">  </td>
        <td class="favorgrf2"></td>
      </tr>
          </table>
    <!-- ************* ��¦��ɽ����� ************** -->

    </td>
   </tr>
   <tr>
    <td class="goodskey">����̾����</td>
    <td class="goodsval" colspan="2"></td>
   </tr>
   <tr>
    <td class="goodskey">ȯ�丵</td>
    <td class="goodsval" colspan="2"></td>
   </tr>
   <tr>
    <td class="goodskey">�ƴ����</td>
    <td class="goodsval" colspan="2">
          </td>
   </tr>
   <tr>
    <td class="goodskey">���</td>
    <td class="goodsval" colspan="2"></td>
   </tr>
   <tr>
    <td class="goodskey">ʬ��</td>
    <td class="goodsval" colspan="2"></td>
   </tr>
      <tr>
    <td class="goodskey">ȯ����</td>
    <td class="goodsval" colspan="2">
        </td>
    <!-- =================================== �С������� ===================================== -->
    <td rowspan="3" align="center" valign="top" style="padding:5px;">
          </td>
   </tr>
   <tr>
    <td class="goodskey">ȯ�丵URL</td>
    <td class="goodsval" colspan="2">
        </td>
   </tr>
   <tr>
    <td class="goodskey">����URL</td>
    <td class="goodsval" colspan="2">
          </td>
   </tr>
   <tr>
    <td class="goodskey" width="80">��Ͽ�桼��</td>
    <td class="goodsval" width="145">
          </td>
    <td class="goodskey" width="80">��Ͽ��</td>
    <td class="goodsval" width="145">
        </td>
   </tr>
   <tr>
    <td class="goodskey">�����桼��</td>
    <td class="goodsval">
          </td>
    <td class="goodskey">������</td>
    <td class="goodsval">
        </td>
   </tr>
  </table>
  <br>

    <div class="sp10"></div>

  
  </td>
</tr>
</table>
</div>
<div class="baser">
  </div>
<div class="cleaner"></div>

  <div id="footer">
    <div id="footer-l">
      <a href="https://www.janken.jp/company/" target="_blank" title="��ҳ��פ򳫤�">���Ĳ��</a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.janken.jp/company/kiyaku.html" target="_blank" title="���ѵ���򳫤�">���ѵ���</a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.janken.jp/company/privacypolicy.html" target="_blank" title="�ץ饤�Х����ݥꥷ���򳫤�">�ץ饤�Х����ݥꥷ��</a>&nbsp;&nbsp;&nbsp;
      <a href="https://www.janken.jp/toiawaseMail.php" target="_blank" title="���䤤��碌�᡼������">���䤤��碌</a>
      <br>
      <br>

      Copyright (c)2006-2023 Busicom.Co.,Ltd. All rights reserved.
    </div>
  </div>

</div>

</body>
</html>
