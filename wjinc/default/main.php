<!DOCTYPE html>
<html>
<?php $this->display('inc_base.php',0,'投注中心') ?>
<head>
<?php 
if($this->type){
	$row=$this->getRow("select enable,title from {$this->prename}type where id={$this->type}");
	if(!$row['enable']){
		echo $row['title'].'预备上线中！具体时间请关注公告，感谢您对BOECP的支持！';
		exit;
	}
}else{
	$this->type=1;
	$this->groupId=2;
	$this->played=10;
}
?>
<link href="/skin/new/css/lottery.css" rel="stylesheet" type="text/css" />
<link href="/skin/main/skins.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/main/game.js"></script>
<script type="text/javascript" src="/skin/js/jquery.simplemodal.src.js"></script>
</head> 
<body>
<div id="mainbody">  
<?php $this->display('inc_header.php'); ?>
<div  class="gamemain pageBady clearfix">
   <div class="lotMain w1200">
        <!-- 开奖信息 -->
        <?php $this->display('index/inc_data_current.php'); ?>
        <!-- 开奖信息 end -->
        <div class="game">
        <!--游戏body-->
        <?php $this->display('index/inc_game.php'); ?>
        <!--游戏body  end-->
        </div>
	    <?php if($this->settings['switchDLBuy']==0 || ($this->settings['switchZDLBuy']==0 && ($this->user['parents']==$this->user['uid']))){ //代理和总代不能买单?>
        <input name="wjdl" type="hidden" value="<?=$this->ifs($this->user['type'],1)?>" id="wjdl" />
        <?php } ?>
    </div>
</div> 
<?php $this->display('inc_footer.php');  ?>
</div>
<script type="text/javascript">
var game={
	type:<?=json_encode($this->type)?>,
	played:<?=json_encode($this->played)?>,
	groupId:<?=json_encode($this->groupId)?>
},
user="<?=$this->user['username']?>",
aflag=<?=json_encode($this->user['admin']==1)?>;
</script>
</body>
</html>