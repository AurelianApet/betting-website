
<div class="header w1200 clearfix">
        <div class="fl">
            <a href="/"  class="logo" title="BOECP">
                <img src="/images/new/siteLogo.png"  alt="BOECP" title="BOECP"/>
            </a>
        </div>
        <div class="fr service">
            <a href="#" onclick="boekf();" class="siteQq"></a>
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