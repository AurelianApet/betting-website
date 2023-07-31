<!DOCTYPE html>
<html>
<head>
<?php $this->display('inc_base.php',0,'梦想改变人生') ?>
	<link href="/skin/new/css/index.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php $this->display('inc_header.php') ?>
    <div class="pageBady custom clearfix">     
    <div id="banner" class="clearfix">
        <div class="w1200 pr" style="z-index: 101;width:1199px;">
            <div id="flexslider">
                <ul class="slides">
                    <li style="background: url(/images/new/banner_xb.jpg) center repeat-x;"></li>
                    <li style="background: url(/images/new/banner_xn.jpg) center repeat-x;"></li>
                </ul>
            </div>
            <div class="loginBox">
                <div class="title" style="margin-top:35px;">
                    <h2><span>梦/想/改/变/人/生</span><br />
                        <em class="fs12">DREAM CHANCE LIFE</em></h2>
                </div>
                <div class="buyInfo" style="display:none">
					<p style="margin-bottom:15px;margin-top:50px;margin-left:50px">上午好，<span><b>ciqing</b></span> | <a style="color:#0066FF" href="#">退出</a></p>
					<p style="margin-bottom:15px;margin-left:50px">账户现金：<span style="color:#FF9D3C"><b>0.00</b></span> |  <a style="color:#0066FF" href="#">充值</a></p>
					<p style="margin-bottom:15px;margin-left:50px">可提现金额：<span style="color:#15FF15"><b>0.00</b></span> |  <a style="color:#0066FF" href="#">提现</a></p>
                </div> 
                <div class="nologin">
				    <div class="buyInfo">
				        <p>2016年<strong><?=$this->settings['totalcount']?></strong>在吉彩国际购买彩票</p>
                        <p>共中得奖金<strong><?=$this->settings['totalcoin']?></strong>元</p>
					</div>
                    <div class="loginInfo" style="display: none;">
                        <a href="login.htm" class="btn-org-112x40">登录</a>&nbsp;
                        <a href="register.htm" class="btn-green-112x40">注册</a>
                    </div>
                </div>
                <div id="loginInfo_index">
				 <p><span class="fee" style="margin-left:20px;"><?=$this->user['nickname']?></span>， <em class="b0b">|</em> <a href="/user/logout" id="loginOut" class="blue">退出</a></p>
                    <p>账户现金：<strong id="headAccMoney" class="green"><?=$this->user['coin']?></strong> <em class="b0b">|</em> <a href="/cash/recharge" class="blue">充值</a>
					 <em class="b0b">|</em><a href="/cash/toCash" class="blue">提现</a></p>
					 <p style="margin-left:28px;"> 积分：<strong id="headAccMoney" class="gray"><?=$this->user['score']?></strong></p>
                    <p class="links">
                        <a href="/display/sign" dataType="json" call="indexSign" target="ajax" class="btn btn1">签到</a>
                        <a href="/score/goods/current" class="btn">积分兑换</a>
                        <a href="/deposit/pull" dataType="json" call="pull" target="ajax" class="btn btn1">领取收益</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="w1200 clearfix">
        <div class="maincontent">
            <div class="product clearfix">
                <ul>
                    <li class="safety" style="border:0">
                       
                    </li>
                    <li class="absorbed" style="margin-left:-25px; margin-right:25px;">
                        <i></i>
                        <h3 class="title">专业</h3>
                        <p>
                             我们只做官方数字彩<br />
                                因为专注，所以更专业!
                        </p>
                    </li>
                    <li class="sincerity">
                        <i></i>
                        <h3 class="title">诚信</h3>
                        <p>
						  致力打造健康购彩环境<br />
                                为广大彩民提供便捷、优质的购彩服务
                        </p>
                    </li>
                </ul>
            </div>
            <div class="hotLottery " >
				<style type="text/css">
				   #scrollmessage ul{
				   margin: auto auto auto 40px;
				   padding:auto auto auto auto;
				   list-style:none;
				   font-size:13px;
				   }
				   #andyscroll {
				   	overflow: hidden;
				   	padding: 0 13px;
				   	text-align:left;
				   	line-height:3em;
				   	width:592px;
				   	height:147px;
					overflow:hidden;
				   }
				   </style>
                <h2 class="title">即时中奖排行榜</h2>
                   <div id="andyscroll">
                      <div id="scrollmessage">
                        <ul>  
                      <?php
                          $this->getSystemSettings();
                          $this->getTypes();
                          $types=array(1,3,5,6,9,10,12,14,15,16,20,7);
                          $name=explode('|',$this->settings['paihangsjnr']);
                          $name2=explode('|',$this->settings['paihangsjje']);
                          $gg=$this->getRows("select * from {$this->prename}bets where zjCount=1 and bonus>=? order by id desc limit 10",$this->settings['sbje']);
                          if($gg) foreach($gg as $var){
                          $gg=$this->getRows("select * from {$this->prename}bets where zjCount=1 and bonus>=? order by id desc limit 10",$this->settings['sbje']);
                          switch($var['type']){
                          case 1:
                          echo '<li>恭喜会员&nbsp&nbsp【<b style="color:#63B8FF">',$var['nickname'],'</b>】&nbsp重庆时时彩&nbsp ','<b style="color:#ff0000">',$var['actionNo'],'</b>&nbsp期','&nbsp喜中&nbsp<b style="color:#76EE00">',$var['bonus'],'</b>&nbsp元</li>
			             <li>恭喜会员&nbsp【<b style="color:#63B8FF">',$name[rand(0,count($name)-1)],'</b>】&nbsp',$this->types[$num=$types[rand(0,14)]]['title'],'&nbsp','<b style="color:#ff0000">',$this->iff($sss=$this->getGameLastNo($num),$sss['actionNo'],'--'),'</b>&nbsp期','&nbsp喜中&nbsp<b style="color:#76EE00">',$name2[rand(0,count($name2)-1)],'</b>&nbsp元</li>';
                          break;
                          case 3:
                          echo '<li>恭喜会员&nbsp&nbsp【<b style="color:#63B8FF">',$var['nickname'],'</b>】&nbsp&nbsp江西时时彩&nbsp&nbsp','<b style="color:#fedcbd">',$var['actionNo'],'</b>期','&nbsp喜中&nbsp<b style="color:#6a6da9">',$var['bonus'],'</b>&nbsp元</li>';
                          break;
                          case 12:
                          echo '<li>恭喜会员&nbsp&nbsp【<b style="color:#63B8FF">',$var['nickname'],'</b>】&nbsp&nbsp新疆时时彩&nbsp&nbsp','<b style="color:#817936">',$var['actionNo'],'</b>期','&nbsp喜中&nbsp<b style="color:#2b4490">',$var['bonus'],'</b>&nbsp元</li>';
                          break;
                          case 6:
                          echo '<li>恭喜会员&nbsp&nbsp【<b style="color:#63B8FF">',$var['nickname'],'</b>】&nbsp&nbsp广东11选5&nbsp&nbsp&nbsp','<b style="color:#c37e00">',$var['actionNo'],'</b>期','&nbsp喜中&nbsp<b style="color:#e6d12e">',$var['bonus'],'</b>&nbsp元</li>';
                          case 16:
                          echo '<li>恭喜会员&nbsp&nbsp【<b style="color:#63B8FF">',$var['nickname'],'</b>】&nbsp&nbsp江西多乐彩&nbsp&nbsp','<b style="color:#705628">',$var['actionNo'],'</b>期','&nbsp喜中&nbsp<b style="color:#e6d12e">',$var['bonus'],'</b>&nbsp元</li>';
                          break;
	                          	}
                          	}
	                          ?>
                        </div>
                     </div>
                </ul>
            </div>
			<div class="weixin" style="width:272px; position:absolute; margin-top:-190px; margin-left:606px;">
                <i><img src="/images/code.png" width="100px" height="100px" /></i>
                <div class="desc">
                    <span class="st">&nbsp;</span>
                    <p>
                        随时随地购彩<br />
                        把财富装进口袋!
                    </p>
                </div>
            </div>
        </div>
        <div class="siderBox" >
            <div class="notice" style="margin-top:13px;">
                <h2>站点公告</h2>
                <ul>
				 <?php
            $data=$this->getRows("select id,title,content,addtime from {$this->prename}content where nodeId=1 and enable=1 order by addtime desc limit 4");
            if($data) foreach($data as $var){ 
            echo "<li val=\"8\"><a href=\"index.php/notice/view/".$var['id']."\"style=\"color:#ED3507;\">{$var['title']}</a><span class=\"fr\">".date('m/d',$var['addtime'])."</span></li>";
            } 
  ?>
                                    </ul>
            </div>
			
			 <div class="authentication">
                <em class="afc"></em>
                <em class="atc"></em>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    </div>   
  <?php $this->display('inc_footer.php') ?> 
	<script type="text/javascript">
	   $("#lotteryList").removeClass("block");
	</script>
	<script type="text/javascript">
var stopscroll = false;
var scrollElem = document.getElementById("andyscroll");
var marqueesHeight = scrollElem.style.height;
scrollElem.onmouseover = new Function('stopscroll = true');
scrollElem.onmouseout  = new Function('stopscroll = false');
var preTop = 0;
var currentTop = 0;
var stoptime = 0;
var leftElem = document.getElementById("scrollmessage"); 
scrollElem.appendChild(leftElem.cloneNode(true));
init_srolltext();
function init_srolltext(){
	scrollElem.scrollTop = 0;
	setInterval('scrollUp()', 100);//确定滚动速度的, 数值越小, 速度越快
}
function scrollUp(){
	if(stopscroll) return;
	currentTop += 2; //设为1, 可以实现间歇式的滚动; 设为2, 则是连续滚动
	if(currentTop == 19) {
		stoptime += 1;
		currentTop -= 1;
		if(stoptime == 180) {
			currentTop = 0;
			stoptime = 0;
		}
	}else{
		preTop = scrollElem.scrollTop;
		scrollElem.scrollTop += 1;
		if(preTop == scrollElem.scrollTop){
			scrollElem.scrollTop = 0;
			scrollElem.scrollTop += 1;
		}
	}
}
</script>
</body>
</html>