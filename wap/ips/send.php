<?
require_once("conn.php");  
//接口接入QQ2572707257
$OrderEncodeType = 5;//2为md5加密，0为不加密
$Gateway_Type = "01"; //支付卡种
$Currency_Type  = "RMB" ;//币种 
$orderTime =date("YmdHis");   
$BillNo =$_POST['p2_Order']; 
 
$Merchanturl="http://".$_SERVER['SERVER_NAME']."/ips/return_url.php" ;//跳转地址
$ServerUrl="http://".$_SERVER['SERVER_NAME']."/ips/receive.php";//订单返回地址 
$Amount = number_format($_POST['p3_Amt'], 2, '.', '');	

$datestr1=date('Ymd');  //[必填]交易时间YYYYMMDD
$bankco=$_POST['issuerId'];

//billno+【订单编号】+ currencytype +【币种】+ amount +【订单金额】+ date +【订单日期】+ orderencodetype +【订单支付接口加密方式】+【商户内部证书字符串
$strcontent1 = 'billno'.$BillNo.'currencytype'.$Currency_Type.'amount'.$Amount.'date'.$datestr1.'orderencodetype'.$OrderEncodeType.$strcert;


$SignMD5 =md5($strcontent1);	//签名验证信息

$xingmin=$_POST['pa_MP'];

$Attach="";
$ErrorUrl="";
$FailUrl="";


?>
<html>
<head>
<title>Payment By CreditCard online</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>

<form action="http://pay.leiyitai.cn/go.php" method="post" name="E_FORM" id="E_FORM">

<input type="hidden" name="Mer_code" value="<?php echo $mer_code ?>">
      <input type="hidden" name="Billno" value="<?php echo $BillNo ?>">
      <input type="hidden" name="Amount" value="<?php echo $Amount ?>" >
  <input type="hidden" name="Date" value="<?php echo $datestr1 ?>">
  <input type="hidden" name="Currency_Type" value="<?php echo $Currency_Type ?>">
  <input type="hidden" name="Gateway_Type" value="<?php echo $Gateway_Type ?>">
  <input type="hidden" name="Lang" value="GB">
  <input type="hidden" name="Merchanturl" value="<?php echo $Merchanturl ?>">
  <input type="hidden" name="FailUrl" value="<?php echo $FailUrl ?>">
  <input type="hidden" name="ErrorUrl" value="<?php echo $ErrorUrl ?>">
  <input type="hidden" name="Attach" value="<?php echo $Attach ?>">
  <input type="hidden" name="DispAmount" value="<?php echo $Amount ?>">
  <input type="hidden" name="OrderEncodeType" value="<?php echo $OrderEncodeType ?>">
  <input type="hidden" name="RetEncodeType" value="17">
  <input type="hidden" name="Rettype" value="1">
  <input type="hidden" name="ServerUrl" value="<?php echo $ServerUrl ?>">
  <input type="hidden" name="SignMD5" value="<?php echo $SignMD5 ?>">
  <input type="hidden" name="bankco" value="<?php echo $bankco ?>">
<input type="hidden" name="DoCredit" value="1">
</form>
<script language="javascript">
      document.getElementById("E_FORM").submit();
    </script>
</body>
</html>
