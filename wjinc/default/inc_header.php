<script>
$(document).ready(function () {
    $("#lotteryListEntry").click(
     function(){
		  $("#lotteryList").slideToggle();
		 }
    );
});
</script>
<div id="userInfo"><?php $this->display('index/inc_user.php') ?></div>
<div class="header w1200 clearfix">
        <div class="fl">
            <a href="/index.php"  class="logo" title="BOECP">
                <img src="/images/new/siteLogo.png"  alt="BOECP" title="BOECP"/>
            </a>
        </div>
        <div class="fr service">
            <a href="#" onclick="boekf();" class="siteQq"></a>
        </div>
</div>
    <div class="topNav clearfix">
        <div class="w1200">
            <ul class="fl funcTab">
			 <!--<li id="lotteryListEntry_index" class="pr">
                    <h1 class="all">8791彩票网</h1><span class="wi"></span>全部彩种
                    <div id="lotteryList" style="">
					<div class="box">
					<a href="http://www.8791.com/ssq/">
					<span class="gameLogo-list-s"><i class="gameLogo SSQ"></i></span>
					<span class="text fs16">双色球<i class="zs" style="top:0"></i></span>
					<em class="info fee fs12 fl">奖池3.5亿</em></a></div>
					<div class="box">
					<a href="http://www.8791.com/dlt/"><span class="gameLogo-list-s"><i class="gameLogo DLT"></i></span>
					<span class="text fs16">大乐透<i class="zs" style="top:0"></i></span><em class="info blue fs12 fl">奖池9.8亿</em></a>
					</div>
					<div class="box box-own"><span class="gameLogo-list-s"><i class="gameLogo CQSSC"></i></span>
					<ul>
					<li class="fs16"><a href="http://www.8791.com/cqssc/">老时时彩</a></li>
					<li class="fs16"><a href="http://www.8791.com/jxssc/">新时时彩</a></li>
					</ul>
					</div>
					<div class="box box-w"><span class="gameLogo-list-s"><i class="gameLogo JX11X5"></i></span>
					<ul><li class="c8c fs12"><a href="http://www.8791.com/jx11x5/">新11选5</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/sd11x5/">老11选5</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/gd11x5/">粤11选5</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/zj11x5/">11选5</a></li>
					</ul></div>
					<div class="box box-w"><span class="gameLogo-list-s"><i class="gameLogo AHKS"></i></span>
					<ul><li class="c8c fs12"><a href="http://www.8791.com/ahks/">新快3</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/jsks/">老快3</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/hubks/">好运快3</a></li>
					<li class="c8c fs12"><a href="http://www.8791.com/nmgks/">快3</a></li></ul>
					</div>
					<div class="box nob box-pl morebox box-none">
					<div class="show-tophalf"></div>
					<div class="showbg" style="width:322px"><a href="http://www.8791.com/fc3d/"><span class="gameLogo-list-s"><i class="gameLogo FC3D"></i></span>
					<span class="text fs16">福彩3D<i class="zs"></i></span></a>
					<a href="http://www.8791.com/pl3/"><span class="gameLogo-list-s"><i class="gameLogo FC3D"></i></span><span class="text fs16 c8c">排列3</span></a>
					<a href="http://www.8791.com/pl5/"><span class="gameLogo-list-s" style="margin-left:25px"><i class="gameLogo FC3D"></i></span><span class="text fs16 c8c">排列5</span></a>
					</div><span class="arrow-more"></span></div></div>
                </li>-->
				
<style type="text/css">
	   #lotteryList a{font-size:16px;color:#666666; font-weight:normal}
	   #lotteryList .cqssc a{font-size:16px;color:#666666; font-weight:normal}
	   #lotteryList .cqssc a:hover{text-decoration: none;color:#fe7c31}
	   #lotteryList label{font-size:12px;color:#5959FF;margin:auto 10px auto 10px;}
	   .block{ display:none; } 
</style>
               <li id="lotteryListEntry" class="pr">
                    <h1 class="all">BOECP</h1><span class="wi"></span><span style="cursor:pointer">全部彩种</span>
                    <div id="lotteryList" class="block">
					 <dl> 
					    <dt class="cqssc">
					       <span class="gameLogo-list-s" style="margin-top:20px"><img src="/images/index/sscs.png" /></span>
					       <a href="/index/game/1/2">重庆时时彩<label style="color:#fe7c31;"> 奖金19万</label></a><br />
					       <span><!--a style="font-size:15px; position:absolute; margin:-50px auto auto 55px;" href="/index/game/3/2">江西时时彩</a-->
						   <a style="font-size:15px; position:absolute; margin:-50px auto auto 55px;" href="/index/game/12/2">新疆时时彩</a></span>
						</dt>
					    <dt style="border-top:1px solid #FFD5AA;" ></dt>
					    <dt class="cqssc">
					       <span class="gameLogo-list-s" style="margin-top:20px"><img src="/images/index/115s.png" /></span>
					       <a href="/index/game/6/10">广东11选5<label style="color:#408080;margin:auto 5px auto 5px;"> 返奖率69%</label></a><br />
					       <span><a style="font-size:15px; position:absolute; margin:-50px auto auto 55px;" href="/index/game/7/10">山东11选5</a>
						   <a style="font-size:15px; position:absolute; margin:-50px auto auto 140px;" href="/index/game/16/2">江西多乐彩</a></span>
						</dt>

						 <dt style="border-top:1px solid #FFD5AA;" ></dt>
					    <dt>
					       <span class="gameLogo-list-s"><img src="/images/index/pk10s.png" /></span>
					       <a href="/index/game/20/26"  style="margin-right:20px">北京赛车PK10<label style="color:#00DB00">简单趣味</label></a>
						</dt>
					    <dt style="border-top:1px solid #FFD5AA;" ></dt>
					    <dt>
					       <span class="gameLogo-list-s"><img src="/images/index/3ds.png" /></span>
					       <a href="/index.php/index/game/9/12" style="margin-left:10px">福彩3D<label style="color:#7777FF">高额奖金</label></a>
						</dt>
					    <dt style="border-top:1px solid #FFD5AA;" ></dt>
					    <dt>
					       <span class="gameLogo-list-s"><img src="/images/index/p3s.png" /></span>
					       <a href="/index.php/index/game/10/12" style="margin-left:10px">排列三<label style="color:#fe7c31">小小一注</label></a>
						</dt>
					    <dt style="border-top:1px solid #FFD5AA; height:6px;" ></dt>
						 <dt class="cqssc">
					       <span class="gameLogo-list-s" ><img src="/images/index/sscs.png" /></span><br />
					       <span><a style="font-size:15px; position:absolute; margin:-50px auto auto 60px;" href="/index.php/index/game/14/59">澳门五分彩</a>
						   <a style="font-size:15px; position:absolute; margin:-50px auto auto 145px;" href="/index.php/index/game/5/59">急速分分彩</a></span>
						</dt>
					 </dl>
                    </div>
                </li>
                <li class="own"><a href="/" >首页</a></li>
                <li><a href="/record/search">游戏记录</a></li>
                <li><a href="/report/coin">帐变记录</a></li>
                <li><a href="/safe/info">账户首页</a></li>
                <li><a href="/index2" >安全保障</a></li>
                <li><a href="/index3" >服务专区</a></li>
                <li><a href="/helpkj" >玩法说明</a></li>
                <li><a href="/index1" >关于我们</a></li>
                <li><a href="/sale" >热门活动</a></li>
            </ul>
        </div>
    </div>
<script type='text/javascript'>
function boekf(){
<?php if($this->settings['kefuStatus']){ ?>
	var iTop = (window.screen.availHeight-30-570)/2; //获得窗口的垂直位置;
	var iLeft = (window.screen.availWidth-10-750)/2; //获得窗口的水平位置;
	var url = '<?=$this->settings['kefuGG']?>';
	var winOption = "height=570,width=750,top="+iTop+",left="+iLeft+",toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,fullscreen=1";
	var newWin = window.open(url,window, winOption);
	<?php }else{?>
     	alert("客服系统正在维护，程序猿在拼命打代码，请稍后访问！");
	<?php }?>
	return false;
}
</script>