﻿<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive"> <!-- 屏蔽-->
<meta content="IE=EmulateIE8" http-equiv="X-UA-Compatible" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$this->iff($args[0], $args[0] . '－'). $this->settings['webName']?></title>
<script type="text/javascript">
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    //var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (( bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) )
	{
		window.location.href="http://wap.jicai888.com";  //手机页面
	}
}
browserRedirect();
</script>
<link href="/boe.ico" rel="shortcut icon" type="image/x-icon" />
<link type="text/css" rel="stylesheet" href="/skin/main/bl_stand.css?version=20150420" />
<link href="/skin/new/css/lib.min.css?version=20150420"  type="text/css" rel="stylesheet" /> <!--new-->
<!--<script type="text/javascript" src="/skin/js/jquery-1.8.3.min.js"></script>-->
<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="/skin/main/onload.js?version=20150420"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/js/gamecommon.js"></script>
