<meta NAME="robots" CONTENT="noindex,nofollow">
<meta name="robots" content="noarchive"> <!-- 屏蔽-->
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
		window.location.href="http://wap.jicai888.com";  //
	}
}
browserRedirect();
</script>
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="/style/css/common.css" type="text/css" rel="stylesheet" />
<link href="/style/css/jquery-ui.css" rel="stylesheet" >
<link href="/style/css/main.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/style/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/style/js/onload.js"></script>
<script type="text/javascript" src="/style/js/reglogin.js"></script>
<!--[if IE 6]> 
<script src="/style/js/DD_belatedPNG.js"></script> 
<script> 
	DD_belatedPNG.fix('.fixpng'); 
</script> 
<![endif]-->