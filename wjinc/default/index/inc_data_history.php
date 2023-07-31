<?php
		 $x115 = array(6,7,15,16);
		 $ssc = array(1,3,5,12,14);
		 if(in_array($this->type, $x115)){
				$ttt = 'chart115'; 
		 }else if(in_array($this->type, $ssc)){
				$ttt='chartssc';
		 }else{
		        $ttt=' ';
		 }
?>
<table border='0' cellspacing='0' cellpadding='0' width=100%>
<tr>
<?php if($ttt==' '){ ?>
<th>期号</th>
<?php }else{ ?>
<th><a href="/index.php/<?=$ttt ?>?type=<?=$this->type ?>&count=30" target="_blank">历史号码走势</a></th>
<?php } ?>
	<th><a href="#myLot" style="text-decoration:none">开奖号码</a></th></tr>
<?php $this->display('index/inc_data_history_get.php', 0, 5); ?>
</table>