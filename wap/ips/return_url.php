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
<title>֧�����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>
<body>
<!-- �����������վ�Ŀ�ܡ�����������վ��ͷ��top����left�ȡ�������������Ƕ�Ҫ�������� -->

 <?
 if ($signature1==$signature){
	if ($succ =="Y") {
		
				echo 'success';
                echo "<script>alert('���ѳɹ���ֵ');windows.close();window.opener.close();</script>";
				
		}
		else{
			echo "<script>alert('���ѳ�ֵ�����𷴸�ˢ��,лл');windows.close();</script>";
	exit;
			}
	 }else{
	       echo "������Ϣ���۸�";
        }


 ?>
</body>
</html>
