<?
require_once("conn.php");  
//�ӿڽ���QQ2572707257
$OrderEncodeType = 5;//2Ϊmd5���ܣ�0Ϊ������
$Gateway_Type = "01"; //֧������
$Currency_Type  = "RMB" ;//���� 
$orderTime =date("YmdHis");   
$BillNo =$_POST['p2_Order']; 
 
$Merchanturl="http://".$_SERVER['SERVER_NAME']."/ips/return_url.php" ;//��ת��ַ
$ServerUrl="http://".$_SERVER['SERVER_NAME']."/ips/receive.php";//�������ص�ַ 
$Amount = number_format($_POST['p3_Amt'], 2, '.', '');	

$datestr1=date('Ymd');  //[����]����ʱ��YYYYMMDD
$bankco=$_POST['issuerId'];

//billno+��������š�+ currencytype +�����֡�+ amount +��������+ date +���������ڡ�+ orderencodetype +������֧���ӿڼ��ܷ�ʽ��+���̻��ڲ�֤���ַ���
$strcontent1 = 'billno'.$BillNo.'currencytype'.$Currency_Type.'amount'.$Amount.'date'.$datestr1.'orderencodetype'.$OrderEncodeType.$strcert;


$SignMD5 =md5($strcontent1);	//ǩ����֤��Ϣ

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
