﻿<form name="form1" id="form1" method="post" action="https://pay.ips.com.cn/ipayment.aspx" target="_self">
<input type="hidden" name="Mer_code" value="<?php echo $_POST["Mer_code"] ?>">
      <input type="hidden" name="Billno" value="<?php echo $_POST["Billno"] ?>">
      <input type="hidden" name="Amount" value="<?php echo $_POST["Amount"] ?>" >
  <input type="hidden" name="Date" value="<?php echo $_POST["Date"] ?>">
  <input type="hidden" name="Currency_Type" value="<?php echo $_POST["Currency_Type"] ?>">
  <input type="hidden" name="Gateway_Type" value="<?php echo $_POST["Gateway_Type"] ?>">
  <input type="hidden" name="Lang" value="GB">
  <input type="hidden" name="Merchanturl" value="<?php echo $_POST["Merchanturl"] ?>">
  <input type="hidden" name="FailUrl" value="<?php echo $_POST["FailUrl"] ?>">
  <input type="hidden" name="ErrorUrl" value="<?php echo $_POST["ErrorUrl"] ?>">
  <input type="hidden" name="Attach" value="<?php echo $_POST["Attach"] ?>">
  <input type="hidden" name="DispAmount" value="<?php echo $_POST["DispAmount"] ?>">
  <input type="hidden" name="OrderEncodeType" value="<?php echo $_POST["OrderEncodeType"] ?>">
  <input type="hidden" name="RetEncodeType" value="17">
  <input type="hidden" name="Rettype" value="1">
  <input type="hidden" name="ServerUrl" value="<?php echo $_POST["ServerUrl"] ?>">
  <input type="hidden" name="SignMD5" value="<?php echo $_POST["SignMD5"] ?>">

</form>
<script language="javascript">document.form1.submit();</script>