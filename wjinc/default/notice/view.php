<?php $this->display('inc_left.php'); $info=$args[0]; ?>
<div class="pagemain">
    <div class="display biao-cont">
    	
        <div class="detail">
        	<h1><?=$info['title']?></h1>
            <div class="cont"><?=nl2br($info['content'])?></div>
        </div>
    </div>


</div>
<!--以下为模板代码-->
</div></div></div><?php $this->display('inc_footer.php') ?></body></html>
   
 