<?php $this->freshSession();
		$ngrade=$this->getValue("select max(level) from {$this->prename}member_level where minScore <= {$this->user['scoreTotal']} limit 1");
		if($ngrade>$this->user['grade']){
			$sql="update ssc_members set grade={$ngrade} where uid=?";
			$this->update($sql, $this->user['uid']);
		}else{$ngrade=$this->user['grade'];}
		$date=strtotime('00:00:00');
?>
<style type="text/css">
#userclass span{margin: auto 10px auto 10px;}
</style>
	<div id="userclass" style="margin-left:20%; font-size:15px;">
	<span>会员帐号：<span class="fee"><?=$this->user['nickname']?></span></span>
	<span>账户余额：<strong>￥<span  class="green"><?=$this->user['coin']?></span><a href="#"  onclick="reloadMemberInfo()"><img src="/images/common/ref.png" alt="刷新余额"></a></span>
	<span style="font-weight:normal">可兑换积分：<strong>＄<span style="color:#999999"><?=$this->user['score']?></span></strong></span>
	<span><a href="/deposit/recharge">余额宝</a></span>
	<span><a href="/cash/recharge">充值</a></span>
    <span><a href="/cash/toCash">提款</a></span>
    <span><a href="/user/logout">退出</a></span>
</div>