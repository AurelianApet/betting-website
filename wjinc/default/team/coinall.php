<?php $this->display('inc_left.php') ?>
<?php
$teamAll=$this->getRow("select sum(u.coin) coin, count(u.uid) count from {$this->prename}members u where u.isDelete=0 and concat(',', u.parents, ',') like '%,{$this->user['uid']},%'");
$teamAll2=$this->getRow("select count(u.uid) count from {$this->prename}members u where u.isDelete=0 and u.parentId={$this->user['uid']}");
?>
<div class="pagemain">
	
    <div class="display biao-cont">
    <table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
        <tr class='table_b_th'>
          <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>团队金额</td> 
        </tr>
        
        <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">账号类型：</td>
          <td align="left" ><?=$this->iff($this->user['type'], '代理', '会员')?></td> 
        </tr>  
        <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">我的账号：</td>
          <td align="left" ><?=$this->user['username']?></td> 
        </tr>  
         <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">可用余额：</td>
          <td align="left" ><?=$this->user['coin']?> 元</td> 
        </tr> 
        <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">团队余额：</td>
          <td align="left" ><?=$teamAll['coin']?> 元</td> 
        </tr>  
        <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">直属下级：</td>
          <td align="left" ><?=$teamAll2['count']?> 个</td> 
        </tr>   
         <tr height=25 class='table_b_tr_b'>
          <td align="right" style="font-weight:bold;">所有下级：</td>
          <td align="left" ><?=($teamAll['count']-1)?> 个</td> 
        </tr>  
    </table> 
    </div>

</div>
<!--以下为模板代码-->
</div></div></div><?php $this->display('team/inc_footer.php') ?></body></html>
  