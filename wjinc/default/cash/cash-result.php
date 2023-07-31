<?php $this->display('inc_left.php') ?>
<?php
	$txcount=$this->getValue("select count(id) from {$this->prename}member_cash  where state=1")
?>
<div class="pagetop"></div>
<div class="pagemain">
	
    <div class="display biao-cont">

		<div class="tips">
        	<p>提现正在处理中，排队<strong class="red"><?=intval($txcount)+intval($this->settings['cashPersons'])?></strong></p>
        </div>

    </div>
	
</div>
<!--以下为模板代码-->
</div></div></div><?php $this->display('inc_footer.php') ?></body></html>
   