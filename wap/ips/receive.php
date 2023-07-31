<?
require_once("conn.php");
include '../config.php';
$billno = $_GET['billno'];
$amount = $_GET['amount'];
$mydate = $_GET['date'];
$succ = $_GET['succ'];
$msg = $_GET['msg'];
$attach = $_GET['attach'];
$ipsbillno = $_GET['ipsbillno'];
$retEncodeType = $_GET['retencodetype'];
$currency_type = $_GET['Currency_type'];
$signature = $_GET['signature'];
$r3_Amt=$amount;

$content = 'billno'.$billno.'currencytype'.$currency_type.'amount'.$amount.'date'.$mydate.'succ'.$succ.'ipsbillno'.$ipsbillno.'retencodetype'.$retEncodeType;
$signature1=md5($content.$strcert);	
$conn = mysql_connect($dbhost,$conf['db']['user'],$conf['db']['password']);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($dbname,$conn);
mysql_query("SET NAMES UTF8");

$chaxuna = mysql_query("SELECT username FROM ssc_member_recharge where rechargeid='".$billno."'");
$r8_MP=mysql_result($chaxuna,0);
$chaxun2 = mysql_query("select actionIP from ssc_member_recharge where rechargeid= '".$billno."'");
$actionIP = mysql_result($chaxun2,0);
$chaxun3 = mysql_query("select id from ssc_member_recharge where rechargeid= '".$billno."'");
$id = mysql_result($chaxun3,0);
$chaxun4 = mysql_query("select uid from ssc_member_recharge where rechargeid= '".$billno."'");
$uid = mysql_result($chaxun4,0);
$chaxun5 = mysql_query("select coin from ssc_members where uid= '".$uid."'");
$coin = mysql_result($chaxun5,0);
$chaxun6 = mysql_query("select value from ssc_params where name='czzs'");
$czzs = mysql_result($chaxun6,0);
if($czzs){
	$r3_Amt=$r3_Amt*(1+number_format($czzs/100,2,'.',''));
}
$inserts = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('".$uid."',0,0,'".$r3_Amt."','".$coin."'+'".$r3_Amt."',0,1,0,UNIX_TIMESTAMP(),'".$actionIP."','在线支付','".$id."','".$uid."')";

$update2 = "UPDATE ssc_members SET coin = coin+'".$r3_Amt."' WHERE username = '".$r8_MP."'";
$update3 = "update ssc_member_recharge set state=2,rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='".$r3_Amt."',coin='".$coin."', info='在线支付' where rechargeid='".$billno."'";
?>
<html>
<head>
<title>php</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>
<!-- 请加上你们网站的框架。就是你们网站的头部top，左部left等。还有字体等你们都要做调整。 -->

 <?
 if ($signature1==$signature){
	if ($succ =="Y") {
$sql="SELECT * FROM ssc_member_recharge where rechargeid = '".$billno."' and state=0";
$banduan=mysql_query($sql);
$row2 = mysql_fetch_array($banduan);
if($row2){
		
                if(mysql_query($update3,$conn)){
                mysql_query($update2,$conn);
                mysql_query($inserts,$conn);
				echo 'success';
				}
               
}
		
	 }else{
	       echo "交易信息被篡改";
        }
 }
else
{
	echo 'success';
	
	exit;
 }
 mysql_close($conn);
 ?>
</body>
</html>
