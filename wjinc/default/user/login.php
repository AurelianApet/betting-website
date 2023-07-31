<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php $this->display('inc_base_lr.php',0,'用户登录'); ?>
<link href="/skin/new/css/login.css"  type="text/css" rel="stylesheet" /> <!--new-->
</head>
<body>
<?php $this->display('inc_header_lr.php',0,'用户登录'); ?>
<div class="pageBady custom clearfix">     
  <div class="login-main clearfix">
    <div class="fl">
                <span class="loginBanner" style="margin-left:30%">
                    <img src="/images/new/loginBanner.jpg" />
                </span>
    </div>
    <div class="fr">
        <div class="loginBox">
            <div class="login-tit">
                <h3>用户登录</h3>
              <span class="lik">还没有账号，<a href="/user/r/i7YswF*HMco0jN3L">免费注册</a></span>
            </div>
			<form action="/user/loginedto" method="post" onajax="userBeforeLoginto" enter="true" call="userLoginto" target="ajax">
            <div class="loginM">
                    <div class="pr ui-form-item">
                        <i class="ico-user"></i>
                        <input type="text" class="ui-input" name="username" id="username" placeholder="用户名" />
                    </div>
                    <div class="pr ui-form-item mt">
                        <i class="ico-pw"></i>
                        <i class="ico-jp"></i>
                        <input type="password" class="ui-input" name="password" id="password" placeholder="密码" />
                    </div>
                    <div class="pr ui-form-item mt">
                        <input type="text" class="ui-input" name="vcode" id="vcode" placeholder="验证码" />
                        <i class="ico-code">
						<img width="150" height="40" border="0" style="cursor:pointer;margin-bottom:0px;" alt="验证码" align="absmiddle" src="/user/vcode/<?=$this->time?>" title="看不清楚，点我换图" onclick="this.src='/user/vcode/'+(new Date()).getTime()"/></i>
                    </div>
                <div class="loginSave mt">
                            <span class="fr">
                                <a href="javascript:void(0)" onclick="boekf()"  id="findPwd">忘记密码？</a>
                            </span>
                </div>
                <button id="loginPost" class="loginBtn" type="button" onclick="$(this).closest('form').submit()">登录</button>
            </div>
				</form>
			<div style="margin-bottom:80px"></div>
        </div>
    </div>
  </div>
</div>
<?php $this->display('inc_footer.php') ?>

