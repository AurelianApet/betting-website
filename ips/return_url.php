<?
require_once("conn.php");

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



?>
<html>
<head>
<title>支付结果</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>
<!-- 请加上你们网站的框架。就是你们网站的头部top，左部left等。还有字体等你们都要做调整。 -->

 <?
 if ($signature1==$signature){
	if ($succ =="Y") {
		
				echo 'success';
                echo "<script>alert('您已成功充值');windows.close();window.opener.close();</script>";
				
		}
		else{
			echo "<script>alert('您已充值，请勿反复刷新,谢谢');windows.close();</script>";
	exit;
			}
	 }else{
	       echo "交易信息被篡改";
        }


 ?>
</body>
</html>
