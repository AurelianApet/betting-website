<!DOCTYPE html>
<html>
<head lang="en">
<?php $this->display('inc_base.php',0,'个人首页') ?>
	<link href="/skin/new/css/mem.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
$(document).ready(function () {
    $("#member").click(
     function(){
		  $("#membernav").slideToggle();
		 }
    );
	$("#daili").click(
     function(){
		  $("#dailinav").slideToggle();
		 }
    );
	$("#report").click(
     function(){
		  $("#reportnav").slideToggle();
		 }
    );
});
</script>
</head>
<body>
<?php $this->display('inc_header.php') ?>
  <div class="pageBady custom clearfix">
    <div class="w1200 memberMod clearfix">
        <div class="aside" style="height:900px;">
          <ul class="menu-record">
             <li><a href="/safe/info"><i class="ico ico-acc"></i>账户首页<i class="arrow-r"></i></a></li>
             <li id="report"><a href="javascript:;"onclick="return false;"><i class="ico ico-buy"></i>购彩报表<i class="arrow-gray"></i></a></li>
			  <div id="reportnav" style="display:none; font-weight:normal">
                   <li><a href="/record/search">游戏记录</a></li>
			       <li><a href="/report/count">盈亏报表</a></li>
			       <li><a href="/report/coin">帐变记录</a></li>
			  </div>
             <li id="member"><a href="javascript:;"onclick="return false;"><i class="ico ico-chase"></i>会员中心<i class="arrow-gray"></i></a></li>
			  <div id="membernav" style="display:none; font-weight:normal">
			       <li><a href="/cash/rechargeLog">充值记录</a></li>
			       <li><a href="/cash/toCashLog">提现记录</a></li>
			       <li><a href="/deposit/main">余额宝记录</a></li>
			  </div>
			  <?php if($this->user['type']){ ?>
             <li id="daili"><a href="javascript:;"onclick="return false;"><i class="ico ico-mx"></i>代理中心<i class="arrow-gray"></i></a></li>
			  <div id="dailinav" style="display:none; font-weight:normal">
			    <li><a href="/team/memberList" >会员管理</a></li>
				<li><a href="/team/onlineMember">在线会员</a></li>
				<li><a href="/team/gameRecord" >团队记录</a></li>
				<li><a href="/team/report" >团队盈亏</a></li>
				<li><a href="/team/coinall" >团队统计</a></li>
				<li><a href="/team/coin" >团队帐变</a></li>
				<li><a href="/team/cashRecord" >团队提现</a></li>
				<li><a href="/team/linkList" >推广链接</a></li>
				<?php if($this->user['fanDian'] == '13.0' || $this->user['fanDian'] == '12.9'){?>
				<li><a href="/team/shareBonus" >代理分红</a></li>
				<?php } ?>
			  </div>
			  <?php } ?>
             <li><a href="/safe/passwd"><i class="ico ico-safe"></i>安全中心<i class="arrow-r"></i></a></li>
             <li><a href="/notice/info/"><i class="ico ico-info"></i>公告通知<i class="arrow-r"></i></a></li>
             <li><a href="/score/goods/current"><i class="ico ico-mes"></i>活动中心<i class="arrow-r"></i></a></li>
          </ul>
           <div class="link">
            <a href="/cash/toCash">提现</a>&nbsp;<a href="/cash/recharge" class="pay">充值</a>
           </div>
           <div class="link">
            <a href="/deposit/recharge" style="font-size:15px;">余额宝（存）</a>&nbsp;<a href="/deposit/tocash" class="pay" style="font-size:15px;">余额宝（取）</a>
           </div>
        </div>      
		
    <div class="article" >
	
<!--</div></div><?php $this->display('inc_footer.php') ?></body></html>-->
