<?php $this->display('inc_left.php') ?>
<script type="text/javascript">
$(function(){
	
	$('.chazhao').click(function(){
		$(this).closest('form').submit();
	});

	$('.bottompage a[href]').live('click', function(){
		$('.biao-cont').load($(this).attr('href'));
		return false;
	});
});
function searchData(err, data){
	if(err){
		alert(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
<div class="pagemain">
	<div class="search">
  		<form action="/index.php/report/countSearch" target="ajax" call="searchData" dataType="html">
        <input type="text" name="fromTime" class="datainput"  value="<?=$this->iff($_REQUEST['fromTime'],$_REQUEST['fromTime'],date('Y-m-d',$GLOBALS['fromTime']))?>"/>至<input type="text" name="toTime"  class="datainput" value="<?=$this->iff($_REQUEST['toTime'],$_REQUEST['toTime'],date('Y-m-d',$GLOBALS['toTime']))?>"/>
         
      <input type="button" value="查 询" class="btn chazhao">
  </form> 
    </div>
    <div class="display biao-cont">
    	 <!--列表-->
        <?
            $this->display('report/count-list.php');
        ?>
        <!--列表 end -->
    </div>
</div>
<!--以下为模板代码-->
</div></div></div><?php $this->display('inc_footer.php') ?></body></html>
   <script type="text/javascript">
    $("#reportnav").show();
 </script>
   
   
 