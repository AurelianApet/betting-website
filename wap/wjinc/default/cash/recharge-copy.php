﻿<!--//复制程序 flash+js------end-->

<?php
$mBankId=$args[0]['mBankId'];
$sql="select mb.*, b.name bankName, b.logo bankLogo, b.home bankHome from {$this->prename}sysadmin_bank mb, {$this->prename}bank_list b where mb.id=$mBankId and b.isDelete=0 and mb.bankId=b.id";
$memberBank=$this->getRow($sql);
if($memberBank['bankId']==12){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" height="80" class="copyss">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copyss">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-recharg" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" width="62" height="23" name="copy-recharg" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
	 </div>      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copyss"> 充值编号 ：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-username" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-username&inputID=username" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-username&inputID=username" width="62" height="23" name="copy-username" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object> 
            </div>			</td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
    <td colspan="2" align="right" class="copyss">
	  <form action="http://<?=$_SERVER['HTTP_HOST']?>/ips/send.php" method="POST" name="a32" target="_blank">
	    <table width="414" border="0" align="center"  cellpadding="2" cellspacing="0" id="banklist" >
	      <tr>
	        <td width="72" height="40" valign="middle">
	          <div class="banklogo">
	            <input name="rbPayMType" type="radio" value="ICBC-NET-B2C" checked>
            <img src="/wjinc/default/cash/images/gongshang.gif" title="工商银行" alt="工商银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									</td>
			  <td width="72" height="40" valign="middle">
			    <div class="banklogo">
			      <input name="rbPayMType" type="radio" value="ABC-NET-B2C">
		        <img src="/wjinc/default/cash/images/nongye.gif" title="中国农业银行"  alt="中国农业银行"  border="0" style="border:1px solid #CCCCCC;" /></div>									  </td>
              <td width="72" height="40" valign="middle">
                 <div class="banklogo">
                   <input name="rbPayMType" type="radio" value="CCB-NET-B2C">
            <img src="/wjinc/default/cash/images/jianshe.gif" title="建设银行" alt="建设银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									</td>
                      <td width="191" valign="middle"><div class="banklogo">
                        <input name="rbPayMType" type="radio" value="BCCB-NET-B2C">
                        <img src="/wjinc/default/cash/images/beijing.gif" title="北京银行" alt="北京银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>								     
	        <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" type="radio" value="BOC-NET-B2C">
	            <img src="/wjinc/default/cash/images/zhongguo.gif" title="中国银行" alt="中国银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" type="radio" value="BOCO-NET-B2C">
                <img src="/wjinc/default/cash/images/jiaotong.gif" title="交通银行" alt="交通银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" type="radio" value="CEB-NET-B2C">
                <img src="/wjinc/default/cash/images/guangda.gif" title="光大银行" alt="光大银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
                                   <td><div class="banklogo">
                                     <input name="rbPayMType" type="radio" value="POST-NET-B2C">
                                     <img src="/wjinc/default/cash/images/youzheng.gif" title="中国邮政" alt="中国邮政"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40">  <div class="banklogo">
	          <input name="rbPayMType" type="radio" value="CMBCHINA-NET-B2C"  />
	          <img src="/wjinc/default/cash/images/zhaohang.gif" title="招商银行" alt="招商银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" type="radio" value="CMBC-NET-B2C" />
              <img src="/wjinc/default/cash/images/minsheng.gif" title="中国民生银行" alt="中国民生银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" type="radio" value="GDB-NET-B2C" />
              <img src="/wjinc/default/cash/images/guangfa.gif" title="广发银行" alt="广发银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
			          <td><div class="banklogo">
                        <input name="rbPayMType" type="radio" value="BJRCB-NET-B2C">
                        <img src="/wjinc/default/cash/images/nongcunshangye.gif" title="北京农村商业银行" alt="北京农村商业银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40"><div class="banklogo">
	          <input name="rbPayMType" type="radio" value="NJCB-NET-B2C" />
	          <img src="/wjinc/default/cash/images/nanjing.gif" title="南京银行" alt="南京银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" type="radio" value="NBCB-NET-B2C" />
              <img src="/wjinc/default/cash/images/ningbo.gif" title="宁波银行" alt="宁波银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" type="radio" value="PINGANBANK-NET" />
              <img src="/wjinc/default/cash/images/pingan.gif" title="平安银行" alt="平安银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
			          <td><div class="banklogo">
                        <input name="rbPayMType" type="radio" value="HKBEA-NET-B2C">
                        <img src="/wjinc/default/cash/images/dongya.gif" title="东亚银行" alt="东亚银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" type="radio" value="SPDB-NET-B2C">
               <img src="/wjinc/default/cash/images/shangpufa.gif"  title="上海浦东发展银行" alt="上海浦东发展银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									 </td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" type="radio" value="CIB-NET-B2C">
                <img src="/wjinc/default/cash/images/xingye.gif" title="兴业银行" alt="兴业银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
		    <td>
		        <div class="banklogo">
		          <input name="rbPayMType" type="radio" value="SDB-NET-B2C">
	            <img src="/wjinc/default/cash/images/shenfa.gif" title="深圳发展银行" alt="深圳发展银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
							       <td><div class="banklogo">
                                     <input name="rbPayMType" type="radio" value="SHB-NET-B2C">
                                     <img src="/wjinc/default/cash/images/shanghaibank.gif"  title="上海银行" alt="上海银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" type="radio" value="ECITIC-NET-B2C">
               <img src="/wjinc/default/cash/images/zhongxin.gif" title="中信银行" alt="中信银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									 </td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" type="radio" value="HXB-NET-B2C">
                <img src="/wjinc/default/cash/images/huaxia.gif" title="华夏银行" alt="华夏银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
		    <td>
		        <div class="banklogo">
		          <input name="rbPayMType" type="radio" value="CBHB-NET-B2C">
	            <img src="/wjinc/default/cash/images/buohai.gif" title="渤海银行" alt="渤海银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
							       <td><div class="banklogo">
                                     <input name="rbPayMType" type="radio" value="CZ-NET-B2C" />
                                     <img src="/wjinc/default/cash/images/zheshang.gif" alt="浙商银行" width="154" height="33"  border="0" style="border:1px solid #CCCCCC;" title="浙商银行" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40">&nbsp;</td>
            <td>&nbsp;</td>
		    <td>&nbsp;</td>
		    <td>&nbsp;</td>
	      <tr>
	         <td height="40" colspan="4" align="center"><input name="submit" type="submit" value="确认充值" class="btn chazhao"/></td>
          </tr>
        </table>
	    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div style="display:inline">*注意：在线充值付款成功后，请等待30s后再关闭充值的窗口，以防资金不到账。若付款后未到账，请联系客服。
		
      </form></td>
	</td>
   </tr>
</table>
    <!--左边栏body结束-->
<?
}else{
?>
<!--左边栏body-->
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    
    <tr height=25 class='table_b_tr_b' >
      <td align="right" class="copys">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" />
            <a id="bank-link" target="_blank" href="<?=$memberBank['bankHome']?>" class="spn11" style="margin-left:50px;">进入银行网站>></a>
      </td> 
    </tr>
	<tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">收款户名：</td>
      <td align="left" ><input id="bank-username" readonly value="<?=$memberBank["username"]?>" />
	  <div class="btn-a copy" for="bank-username">
	  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-bankuser" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-bankuser&inputID=bank-username" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-bankuser&inputID=bank-username" width="62" height="23" name="copy-bankuser" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object> 
	  </div></td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" class="copys" >收款账号：</td>
      <td align="left" ><input id="bank-account" readonly value="<?=$memberBank["account"]?>" />
	  <div class="btn-a copy" for="bank-account">
	  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-account" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-account&inputID=bank-account" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-account&inputID=bank-account" width="62" height="23" name="copy-account" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
		</div>
	  </td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-recharg" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-recharg&inputID=recharg-amount" width="62" height="23" name="copy-recharg" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
	 </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="spn12" style="display:inline;">*网银充值金额必须与网站填写金额一致方能到账！</div>
      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值编号：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="62" height="23" id="copy-username" align="top">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="/skin/js/copy.swf?movieID=copy-username&inputID=username" />
                <param name="quality" value="high" />
				<param name="wmode" value="transparent">
                <param name="bgcolor" value="#ffffff" />
                <param name="scale" value="noscale" /><!-- FLASH原始像素显示-->
                <embed src="/skin/js/copy.swf?movieID=copy-username&inputID=username" width="62" height="23" name="copy-username" align="top" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object> 
        </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div class="spn12"  style="display:inline;">*网银充值请务必将此编号填写到汇款“附言”里，每个充值编号仅用于一笔充值，重复使用将不能到账！</div>
	   </td> 
    </tr>
<!--左边栏body结束-->
<?php if($memberBank["rechargeDemo"]){?>
   <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;"></td>
      <td align="left" > <div class="example">充值图示：<div class="example2" rel="<?=$memberBank["rechargeDemo"]?>">查看</div></div></td> 
  </tr>
<? }?>
<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"附言"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与网友转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额及你的银行用户姓名。</dd>
    </dl>
</div>
</tr>
</table> 
<?php }?>