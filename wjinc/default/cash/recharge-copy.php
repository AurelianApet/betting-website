<!--//复制程序 flash+js------end-->

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
     </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copyss"> 充值编号 ：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
        </td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
    <td colspan="2" align="right" class="copyss">
	 <form action="/ips/send.php" method="post" name="a" target="_blank" > 
    <table width="75%"  border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#ffffff">
                            <tbody>
                                <tr>
                                  <td width="20" height="40" bgcolor="#ffffff">
                                      <input type="radio" name="issuerId" value="00004"   id="bank_icbc" 
                                            checked="checked" ></td>
                                    <td width="281" bgcolor="#ffffff"><img src="/ips/bank/bank_icbc.gif" alt="icbc" /></td>
                                    <td width="20" height="40" bgcolor="#ffffff">
                                        <input type="radio" name="issuerId" value="00017"   id="bank_abc" ></td>
                                    <td width="295" bgcolor="#ffffff"><img src="/ips/bank/bank_abc.gif" alt="abc" /></td>
                                    <td width="20" height="40" bgcolor="#ffffff">
                                        <input type="radio" name="issuerId" value="00083"   id="bank_boc" ></td>
                                    <td width="259" bgcolor="#ffffff"><img src="/ips/bank/bank_boc.gif" alt="boc" /></td>
                                </tr>
                                <tr>
                                  <td height="40" bgcolor="#ffffff">
                                      <input type="radio" name="issuerId" value="00005"   id="bank_comm" ></td>
                                    <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_comm.gif" alt="comm" /></td>
                                    <td height="40" bgcolor="#ffffff">
                                        <input type="radio" name="issuerId" value="00021"   id="bank_cmb" ></td>
                                    <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_cmb.gif" alt="cmb" /></td>
                                    <td height="40" bgcolor="#ffffff">
                                        <input type="radio" name="issuerId" value="00032"   id="bank_spdb" ></td>
                                    <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_spdb.gif" alt="spdb" /></td>
                                </tr>
                                <tr>
                                  <td height="40" bgcolor="#ffffff">
                                      <input type="radio" name="issuerId" value="00016"   id="bank_cib" ></td>
                                    <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_cib.gif" alt="cib" /></td>
                                    <td height="40" bgcolor="#ffffff">
                                        <input type="radio" name="issuerId" value="00057"   id="bank_ceb" ></td>
                                    <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_ceb.gif" alt="ceb" /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00052"   id="bank_cgb"></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_cgb.gif" alt="cgb"  /></td>
                                </tr>
                                <tr>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00054"   id="bank_citic"></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_citic.gif" alt="citic"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00032"   id="bank_psbc" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_bos.gif" alt="psbc" /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00087"   id="radio" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_pingan.gif" alt="psbc"  /></td>
                                </tr>
                                <tr>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00050"   id="bank_citic"></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/beijing.gif" alt="citic"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00194"   id="bank_psbc" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/nanjing.gif" alt="psbc"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00095"   id="radio" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_bh.gif" alt="psbc"  /></td>
                                </tr>
                        
                                <tr>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00056"   id="bank_psbc2" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/BJRCB_OUT.gif" alt="psbc"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00096"   id="radio3" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_dy.gif" alt="psbc"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00051"   id="radio2" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_psbc.gif" alt="psbc"  /></td>
                                </tr>
                                <tr>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00023"   id="bank_hxb" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_sdb.gif" alt="hxb" /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00015"   id="bank_ccb" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_ccb.gif" alt="ccb"  /></td>
                                  <td height="40" bgcolor="#ffffff"><input type="radio" name="issuerId" value="00013"   id="bank_cmbc" /></td>
                                  <td height="40" bgcolor="#ffffff"><img src="/ips/bank/bank_cmbc.gif" alt="cmbc"  /></td>
                                </tr>
                                <tr>
                                  <td height="40" colspan="6" align="center" bgcolor="#ffffff"><input name="submit2" type='submit' style="width:130px; height:36px;" value="确认支付" />&nbsp;</td>
                                </tr>
                               
                            </tbody>
      </table>
     <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
     <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
     <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
    
</div>
</form>
</td>
</tr>
</table>

    <!--左边栏body结束-->
<? }else if($memberBank['bankId']==2){  //支付宝 ?>

<table width="100%" border="0" cellspacing="1" cellpadding="3" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    
    <tr height=25 class='table_b_tr_b' >
      <td align="right" class="copys">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" />
      </td> 
    </tr>
	<tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">收款户名：</td>
      <td align="left" ><input id="bank-username" readonly value="<?=$memberBank["username"]?>" style="width:200px"/>
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
      <td align="left" ><input id="bank-account" readonly value="<?=$memberBank["account"]?>"  style="width:200px"/>
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
	 </div>&nbsp;&nbsp;&nbsp;<div class="spn12" style="display:inline;">*网银充值金额必须与网站填写金额一致方能到账！</div>
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
        </div>&nbsp;&nbsp;&nbsp;<div class="spn12"  style="display:inline;">*网银充值请务必将此编号填写到汇款“附言”里，每个充值编号仅用于一笔充值！</div>
	   </td> 
    </tr>
	<tr>
	<td height="40" colspan="4" align="center">
	<form name="alipaypay" method="post" accept-charset="gbk" target="_blank" onsubmit="document.charset='gbk'" action="https://shenghuo.alipay.com/send/payment/fill.htm">
	<input type="hidden" name="optEmail" value="<?=$memberBank['account']?>">
    <input type="hidden" name="payAmount" value="<?=$args[0]['amount']?>">
    <input type="hidden" name="title" value="<?=$this->user['username']?>">
    <input type="hidden" name="memo" value="<?=$args[0]['rechargeId']?>">
    <input type="hidden" name="isSend" value="">
    <input type="hidden" name="smsNo" value=""> 
	<input name="submit" type="submit" style="width:250px;" value="前往支付宝充值(免填信息直充)" class="btn chazhao"/>
	 </form></td>
	 </tr>
   <div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.吉彩国际已与支付宝合作，开通直接转账功能，会员将无需再次输入帐号、备注信息;</dd>
        <dd>2.跳往支付宝充值页面时，请会员再次核实金额、账户名是否符合;</dd>
        <dd>3.转账后如5分钟未到账，请联系客服，告知您的充值编号和您的充值金额及你的支付宝姓名。</dd>
    </dl>
</div>
</table>
<? }else{  //其它收款方式 ?>
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
      <td align="left" ><input id="bank-username" readonly value="<?=$memberBank["username"]?>" style="width:200px"/>
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
      <td align="left" ><input id="bank-account" readonly value="<?=$memberBank["account"]?>"  style="width:200px"/>
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
	 </div>&nbsp;&nbsp;&nbsp;<div class="spn12" style="display:inline;">*网银充值金额必须与网站填写金额一致方能到账！</div>
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
        </div>&nbsp;&nbsp;&nbsp;<div class="spn12"  style="display:inline;">*网银充值请务必将此编号填写到汇款“附言”里，每个充值编号仅用于一笔充值！</div>
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