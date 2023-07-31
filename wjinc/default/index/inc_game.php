<div class="game-main">
<div id="bet-game">
     <!--选号区域 begin-->
	<div class="game-btn">
	<?php
		if($_COOKIE['mode']){
			$mode=$_COOKIE['mode'];
		}else{
			$mode=2.00;
		}
		$this->getSystemSettings();
		$this->getTypes();
		$sql="select id, groupName, enable from {$this->prename}played_group where enable=1 and type=? order by sort";
		$groups=$this->getObject($sql, 'id', $this->types[$this->type]['type']);
		if($this->groupId && !$groups[$this->groupId]) unset($this->groupId);
		
		if($groups) foreach($groups as $key=>$group){
			if(!$this->groupId) $this->groupId=$group['id'];
	?>
		<div class="ul-li<?=($this->groupId==$group['id'])?' current':''?>">
        	<a class="cai" href="/index.php/index/group/<?=$this->type .'/'.$group['id']?>"><span class="content"><?=$group['groupName']?></span></a>
		</div>
	<?php } ?>
       <div class="clear"></div>
	</div>
     <!--选号区域 end-->
	<div class="game-cont">
     <!--玩法-->
		<?php $this->display('index/inc_game_played.php'); ?>
 <div class="betBox pr clearfix" id="gameCon">
 <!--玩法详细-->
 <style type="text/css"> 
.over {color:#000000;padding:5px 5px 5px 5px; border:solid #666666;} 
</style> 
 <script type="text/javascript"> 
function chg(a){ 
  if(a=='y'){
     $('#y').addClass("over");//清除class
     $('#j').removeClass("over");//清除class
     $('#f').removeClass("over");//清除class
  }else if(a=='j'){
     $('#j').addClass("over");//清除class
     $('#y').removeClass("over");//清除class
     $('#f').removeClass("over");//清除class
  }else if(a=='f'){
     $('#f').addClass("over");//清除class
     $('#y').removeClass("over");//清除class
     $('#j').removeClass("over");//清除class
  }
} 
</script>
<script type="text/javascript">
function zhuidiv(){
    $("#zh-div").toggle(500);//显示隐藏切换,参数可以无,参数说明同上 
}
</script>
<style type="text/css">
.select{
font-family:"微软雅黑";
padding:3px 2px;
font-size:12px;
height:25px;
width:60px;
*width:52px;
margin:-1px;
}
.select_border,.container {*width:50px;}
</style> 
<div class="betSubmit danwei clearfix" id="game-dom" style="text-align:left; font-size:16px;">
					<span id="game-tip-dom" style="color:#800000"></span><span class="fs14 " style="margin-left:40px;">倍数：</span><span class="beiBox"><button class="surbeishu">-</button><input id="beishu" value="<?=$this->ifs($_COOKIE['beishu'],1)?>" class="txt"/><button class="addbeishu">+</button></span>
		<span style="margin-left:40px;">模式：</span>

		<label id="y" onclick="chg('y')" class="over" style="margin-left:5px; margin-right:5px;">元<input type="radio" value="2.00" style="cursor:pointer; margin-left:5px; margin-right:5px; display:none;" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian0']?>" name="danwei" <?=$this->iff($mode=='2.00','checked')?> /></label>
		
		<label id="j" onclick="chg('j')" style="margin-left:5px; margin-right:5px;">角<input type="radio" value="0.20" style="cursor:pointer; margin-left:5px; margin-right:5px; display:none;" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian1']?>" name="danwei" <?=$this->iff($mode=='0.20','checked')?> /></label>

		<?php if($this->settings['fenmosi']==1){?>
		<label id="f" onclick="chg('f')" style="margin-left:5px; margin-right:5px;">分<input type="radio" value="0.02" style="cursor:pointer; margin-left:5px; margin-right:5px; display:none;" data-max-fan-dian="<?=$this->settings['betModeMaxFanDian2']?>" name="danwei" <?=$this->iff($mode=='0.02','checked')?> /></label>
		<?php } ?>

      <a href="javascript:void(0)" onclick="gameActionAddCode()" style="margin-left:20px;" class="btn-green-112x40 noOne">选好了</a> 
</div>
<!--.betSubmit end -->
      <div style=" margin-top:-60px;float:right; margin-right:20px;">  
	      <span>奖金/返点：</span>
	      <div id="slider" class="slider" style="width:150px; cursor:pointer" value="<?=$this->ifs($_COOKIE['fanDian'], 0)?>" data-bet-count="<?=$this->settings['betMaxCount']?>" data-bet-zj-amount="<?=$this->settings['betMaxZjAmount']?>" max="<?=$this->user['fanDian']?>" game-fan-dian="<?=$this->settings['fanDianMax']?>" fan-dian="<?=$this->user['fanDian']?>" game-fan-dian-bdw="<?=$this->settings['fanDianBdwMax']?>" fan-dian-bdw="<?=$this->user['fanDianBdw']?>" min="0" step="0.1" slideCallBack="gameSetFanDian">
		   </div>
		   <span id="fandian-value"><?=$maxPl?>/0%</span>
	   </div>
<div class="codeList clearfix"><ul class="touzhu-cont" style="border:0px;"><table></table></ul></div>
<div class="jixuanBox clearfix">
    <a href="javascript:void(0)" onclick="gameActionRandom(1)"  class="btn-gray-80x28 fl randBall" num="1">机选1注</a>
    <a href="javascript:void(0)" onclick="genMultiRandom(5)" class="btn-gray-80x28 fl randBall" num="5">机选5注</a>
    <a href="javascript:void(0)" onclick="gameActionRemoveCode()" class="btn-gray-80x28 fr">清空列表</a>
</div>
<div class="betSubmit danwei clearfix"  >
<span class="tz-tongji fs14" style="position:absolute; float:left; margin-left:-600px">总投注数：<strong class="fe0" id="all-count">0</strong>注，
                    总金额：￥<strong class="fe0" id="all-amount">0.00</strong>元</span>
<div></div>
	<span id="zh-div"  style="color:black;display:none;font-size:16px;font-weight:normal;">请选择追号期数：<select id="zhselect" class="select"><option value="0">-</option><option value="5">5期</option><option value="10">10期</option><option value="20">20期</option><option value="50">50期</option><option value="80">80期</option></select>
	<!--&nbsp;&nbsp;起始倍数：--><input id="zh_bs" style="width:45px;text-align:center;display:none" value="1" type="text">
	</span>
	<label class="btn-grayO-118x36 touzhu-bottom" id="zhui">追号生成<input type="checkbox" style="display:none" name="zhuiHao" value="生成追号" /></label>
	<input type="button" id="qzhui" style="display:none" onclick="zhuidiv()" />
    <a href="javascript:void(0)" class="btn-blue-160x39" style="margin-top:10px;" id="btnPostBet">确认购买</a>
</div>
<!--#gameCon end-->
<div class="curlot clearfix" id="myLot">
    <div class="todayNumber fl">
        <div class="todayNumber-tit pr">
            <span id="historyNav">
                <b style="font-size:16px;">开奖号码</b>
            </span>
            <!--<a class="refresh" id="historyRef" href="javascript:void(0)">刷新</a>-->
        </div>
        <div class="totayNumber-con" id="historyList">
            <ul class="issul" style="text-align:center">
                <li name="th"><span>期号</span><em style="color:#666;;font-weight:normal;font-size:12px;">开奖号码</em></li>
				<?php
	               $sql="select time, number, data from {$this->prename}data where type={$this->type} order by number desc,time desc limit 15";
	              if($data=$this->getRows($sql)) foreach($data as $var){
				     if($this->type=='20'){
				 ?>
				   <li><span style="width:60px;"><?=$var['number']?></span><em style="font-size:13px; font-weight:600;"><?=$var['data']?></em></li>
				   <?php }else if($this->type=='18'){ //快乐十分 ?>
				    <li><span style="width:90px;"><?=$var['number']?></span><em style="font-size:13px; font-weight:600;"><?=$var['data']?></em></li>
					 <?php }else{ //其它 ?>
				    <li><span><?=$var['number']?></span><em><?=$var['data']?></em></li>
					<?php } } ?>
            </ul>        
		</div>
    </div>
    <div class="mylot fr">
        <div class="mylot-tit pr">
            <span  style="font-size:16px;">购彩明细</span>
            <!--<a class="refresh" id="hmRefresh" href="javascript:void(0)">刷新</a>-->
        </div>
        <div class="hmList">
           <?php if($this->settings['tzjl']==1){?>
		<div class="touzhu-true" >
			<table width="100%">
				<thead>
					<tr>
					    <td>单号</td><td>投注时间</td><td>彩种</td><td>玩法</td><td>期号</td><td>投注号码</td><td>倍数</td><td>模式</td><td>金额(元)</td><td>奖金(元)</td>
						<td>操作</td>
					</tr>
				</thead>
				<tbody id="order-history"><?php $this->display('index/inc_game_order_history.php'); ?></tbody>
			</table>
		</div>
		<? } ?>
        </div>
    </div>
</div>
<!--#myLot end-->
</div></div></div>
<!--game-cont end-->
