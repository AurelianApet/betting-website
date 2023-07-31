<?php
	$sql="select time, number, data from {$this->prename}data where type={$this->type} order by number desc,time desc limit {$args[0]}";
	if($data=$this->getRows($sql)) foreach($data as $var){
	 $udata=explode(",",$var['data']);
	 //$115 = array("6","7","15","16");
	 if($this->type==18){ //快乐十分)
?>
<style type="text/css"> /* 159px  182px*/
.periodlist b{ background:url('/images/new/ball_base.png') no-repeat -19px -163px; color:#FFFFFF; width:22px; height:22px;  padding:5px 1px 1px 5px;}</style>
<tr align=center><td><div class='periodlist'><?= substr($var['number'],-3)?></div></td><td title='<?=$var['data']?>'><div class='periodlist'><?php foreach($udata as $num){ echo "<b>".$num."</b>";} ?></div></td></tr> 
<?php }else if($this->type==6 ||$this->type==7 ||$this->type==15 ||$this->type==16){ //十一选五 ?>
<style type="text/css"> /* 159px  182px*/
.periodlist b{ background:url('/images/new/ball_base.png') no-repeat -20px -164px;  color:#FFFFFF;  width:22px; height:22px; padding:5px 1px 1px 5px;}
</style>
<tr align=center>
  <td><div class='periodlist'><?=$var['number']?></div></td>
  <td title='<?=$udata?>'><div class='periodlist'><?php foreach($udata as $num){ echo "<b>".$num."</b>";} ?></div></td>
</tr> 
<?php }else if($this->type==20){ //北京PK10 ?>
<style type="text/css"> /* 159px  182px*/
.periodlist b{  color:#000066; width:22px; height:22px; padding:1px 1px 1px 1px;}
</style>
<tr align=center>
  <td><div class='periodlist'><?=$var['number']?></div></td>
  <td title='<?=$udata?>'><div class='periodlist'><?php foreach($udata as $num){ echo "<b>".$num."</b>|";} ?></div></td>
</tr> 
<?php }else{ ?>
<style type="text/css"> /* 159px  182px*/.periodlist b{ background:url('/images/new/ball_base.png') no-repeat -21px -159px; color:#FFFFFF; width:22px; height:22px; padding:10px 8px 8px 8px;}</style>
<tr align=center>
  <td><div class='periodlist'><?=$var['number']?></div></td>
  <td title='<?=$udata?>'><div class='periodlist'><?php foreach($udata as $num){ echo "<b>".$num."</b>";} ?></div></td>
</tr> 
<?php } } ?>
