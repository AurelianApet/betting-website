 <?php
	$lastNo=$this->getGameLastNo($this->type);
	$kjHao=$this->getValue("select data from {$this->prename}data where type={$this->type} and number='{$lastNo['actionNo']}'");
	if($kjHao) $kjHao=explode(',', $kjHao);
	$actionNo=$this->getGameNo($this->type);
	$types=$this->getTypes();
	$kjdTime=$types[$this->type]['data_ftime'];
	$diffTime=strtotime($actionNo['actionTime'])-$this->time-$kjdTime;
	$kjDiffTime=strtotime($lastNo['actionTime'])-$this->time;
?> <!--获取开奖时间、期号等DATA -->
<style type="text/css">
.gameimg{margin:10px auto auto 8px; position:absolute;}
.gamediv{margin-top:90px;  position:absolute; font-size:14px; color:#990000;}
</style>
 <div class="todayNumber fl" style="width:1200px">
        <div class="totayNumber-con" id="historyList" style="width:1200px;">
            <!-- 以下是投注区域顶部模块-->
 <div class="bd" id="kaijiang" type="<?=$this->type?>" ctype="<?=$types[$this->type]['type']?>">
      <table width="100%" cellpadding="0" cellspacing="0" border="0" class="game_top_area">
        <tr valign="top">
          <td class="game_top_aleft">
		  <?php if($types[$this->type]['type']==2) { //11选5?>
		  <img src="/images/index/c4.png" class="gameimg" /> 
		  <div class="gamediv"><span><?=$types[$this->type]['title']?></span></div>
		  <?php }else if($types[$this->type]['type']==6){ //北京赛车?>
		   <img src="/images/index/c7.png" class="gameimg"/>
		   <div class="gamediv"><span><?=$types[$this->type]['title']?></span></div>
		   <?php }else if($types[$this->type]['type']==4){ //快乐十分?>
		  <img src="/images/index/c9.png" class="gameimg" />
		    <div class="gamediv"><span><?=$types[$this->type]['title']?></span></div>
		  <?php }else if($types[$this->type]['id']==9){ //福彩3D?>
		  <img src="/images/index/3d.png" class="gameimg" />
		    <div class="gamediv" style="margin-left:10px;"><span><?=$types[$this->type]['title']?></span></div>
		  <?php }else if($types[$this->type]['id']==10){ //排列三?>
		  <img src="/images/index/p3.png" class="gameimg" />
		    <div class="gamediv" style="margin-left:10px"><span><?=$types[$this->type]['title']?></span></div>
		  <?php }else{ ?>
		   <img src="/images/index/c1.png" class="gameimg"/>
		   <div class="gamediv"><span><?=$types[$this->type]['title']?></span></div>
		  <?php } ?>
          <ul style="margin-left:110px;">
              <li class="ni kj-title"><p class="i2">&nbsp;第<span class="i1"><?=$actionNo['actionNo']?></span> 期 </p></li>
			  <li class="tm"><span id='current_titles' style="font-size:15px; margin-left:25px;">正在销售中，&nbsp;&nbsp;截止时间</span></li>
			  <li><span id="current_endtime"><b style="color:#FF0000"><?=$actionNo['actionTime']?></b></span></li>
			  <li class="tb"><em>剩余</em><span class="i2" action="/index.php/display/freshKanJiang/<?=$this->type?>" id="pre-kanjiang">00:00:00</span></li>
	    </ul>
	  </td>
       <?php if($types[$this->type]['type']==4) { //快乐十分?>
       <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></span></b> 期  总共:<b style="color:#FF0000"><?=$types[$this->type]['num']?></b>&nbsp;期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>
          <div class="grid_code_ssc wjkjData" style="margin-top:15px; margin-left:40px;">
          	   <p style="display:none"><img src="/images/common/kjts.png" /></p>
              <ul class="kj-hao" ctype="g1" cnum="8" >
                <li id="span_lot_0" class="gr_s gr_s020"> <?=$kjHao[0]?> </li>
                <li id="span_lot_1" class="gr_s gr_s020"> <?=$kjHao[1]?> </li>
                <li id="span_lot_2" class="gr_s gr_s020"> <?=$kjHao[2]?> </li>
                <li id="span_lot_3" class="gr_s gr_s020"> <?=$kjHao[3]?> </li>
                <li id="span_lot_4" class="gr_s gr_s020"> <?=$kjHao[4]?> </li>
                <li id="span_lot_5" class="gr_s gr_s020"> <?=$kjHao[5]?> </li>
                <li id="span_lot_6" class="gr_s gr_s020"> <?=$kjHao[6]?> </li>
                <li id="span_lot_7" class="gr_s gr_s020"> <?=$kjHao[7]?> </li>

              </ul>
              <div class="clear"></div>
          </div>   
	  </td>
      <td class="game_top_period" width='300' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
     <?php }else if($types[$this->type]['type']==6) { //PK10?>
       <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></span></b> 期  总共:<b style="color:#FF0000"><?=$types[$this->type]['num']?></b>&nbsp;期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>
          <div class="grid_code_ssc wjkjData" style="margin-top:15px;">
          	  <p style="display:none"><img src="/images/common/kjts.png" /></p>
              <ul class="kj-hao" ctype="g1" cnum="10">
                <li id="span_lot_0" class="gr_s gr_s020"> <?=$kjHao[0]?> </li>
                <li id="span_lot_1" class="gr_s gr_s020"> <?=$kjHao[1]?> </li>
                <li id="span_lot_2" class="gr_s gr_s020"> <?=$kjHao[2]?> </li>
                <li id="span_lot_3" class="gr_s gr_s020"> <?=$kjHao[3]?> </li>
                <li id="span_lot_4" class="gr_s gr_s020"> <?=$kjHao[4]?> </li>
                <li id="span_lot_5" class="gr_s gr_s020"> <?=$kjHao[5]?> </li>
                <li id="span_lot_6" class="gr_s gr_s020"> <?=$kjHao[6]?> </li>
                <li id="span_lot_7" class="gr_s gr_s020"> <?=$kjHao[7]?> </li>
                <li id="span_lot_8" class="gr_s gr_s020"> <?=$kjHao[8]?> </li>
                <li id="span_lot_9" class="gr_s gr_s020"> <?=$kjHao[9]?> </li>
              </ul>
              <div class="clear"></div>
          </div>   
	  </td>
      <td class="game_top_period" width='285' >
	    <div id='historylot' style="font-size:13px;">
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
	  <?php }else if($types[$this->type]['type']==10) { //六合彩?>
       <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><?=$lastNo['actionNo']?></span> 期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>
          <div class="grid_code_tl wjkjData" >
          	   <p style="display:none"><img src="/images/common/kjts.png" /></p>
              <ul class="kj-hao" ctype="g1" cnum="49" style="margin-left:60px;padding-top:20px;">
                    <li id="span_lot_0" class="gr_s gr_s020"> <?=$kjHao[0]?> </li>
                    <li id="span_lot_1" class="gr_s gr_s020"> <?=$kjHao[1]?> </li>
                    <li id="span_lot_2" class="gr_s gr_s020"> <?=$kjHao[2]?> </li>
                    <li id="span_lot_3" class="gr_s gr_s020"> <?=$kjHao[3]?> </li>
                    <li id="span_lot_4" class="gr_s gr_s020"> <?=$kjHao[4]?> </li>
                    <li id="span_lot_5" class="gr_s gr_s020"> <?=$kjHao[5]?> </li>
					<li id="span_lot_5" class="gr_s gr_s020"> <?=$kjHao[6]?> </li>
              </ul>
              <div class="clear"></div>
           </div> 
	  </td>
	  <td class="game_top_period" width='265' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
     <?php }else if($types[$this->type]['type']==9) { //快3?>
      <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></span></b> 期  总共:<b style="color:#FF0000"><?=$types[$this->type]['num']?></b>&nbsp;期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span> </span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>  
            <div class="grid_code_tl wjkjData" >
               <p style="display:none"><img src="/images/common/kjts.png" /></p>
              <ul class="kj-hao k3" ctype="g2"  cnum="6" style="margin-left:70px;">
                    <li id="span_lot_0" class="gr_ks gr_ks<?=intval($kjHao[0])?>"> </li>
                    <li id="span_lot_1" class="gr_ks gr_ks<?=intval($kjHao[1])?>"> </li>
                    <li id="span_lot_2" class="gr_ks gr_ks<?=intval($kjHao[2])?>"> </li>
                  </ul>
              <div class="clear"></div>
           </div>
       </td> 
       <td class="game_top_period" width='320' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
     <?php }else if($types[$this->type]['type']==3) { //3D?>
      <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></span></b> 期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>  
            <div class="grid_code_tl wjkjData" >
              	 <p style="display:none"><img src="/images/common/kjts.png" /></p>
              	<ul class="kj-hao" ctype="g0"  cnum="6" style="margin-left:100px;">
                    <li id="span_lot_0" class="gr_s gr_s<?=intval($kjHao[0])?>"> </li>
                    <li id="span_lot_1" class="gr_s gr_s<?=intval($kjHao[1])?>"> </li>
                    <li id="span_lot_2" class="gr_s gr_s<?=intval($kjHao[2])?>"> </li>
                  </ul>
              <div class="clear"></div>
           </div>
       </td> 
       <td class="game_top_period" width='320' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
      <?php }else if($types[$this->type]['type']==2) { //11选5?>
       
         <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></b></span> 期  总共:<b style="color:#FF0000"><?=$types[$this->type]['num']?></b>&nbsp;期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>  
              <div class="grid_code_ssc wjkjData" >
              	 <p style="display:none"><img src="/images/common/kjts.png" /></p>
                  <ul class="kj-hao" ctype="g3" cnum="6" >
                    <li id="span_lot_0" class="gr_s gr_s<?=$kjHao[0]?>"> </li>
                    <li id="span_lot_1" class="gr_s gr_s<?=$kjHao[1]?>"> </li>
                    <li id="span_lot_2" class="gr_s gr_s<?=$kjHao[2]?>"> </li>
                    <li id="span_lot_3" class="gr_s gr_s<?=$kjHao[3]?>"> </li>
                    <li id="span_lot_4" class="gr_s gr_s<?=$kjHao[4]?>"> </li>
                  </ul>
                  <div class="clear"></div>
            </div>   
             
	  </td>
	  <td class="game_top_period" width='250' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
      
 	<?php }else{  ?>
       
         <td class="game_top_aright"> 
	    <div class="kj-bottom"><span class="tit">&nbsp;&nbsp;第 <span class="last_issues"><b><?=$lastNo['actionNo']?></b></span> 期  总共:<b style="color:#FF0000"><?=$types[$this->type]['num']?></b>&nbsp;期  <span id="kjsay">开奖倒计时：<em class="kjtips">00:00</em></span></span><img id="voice" class="voice-on"  title="声音开启，点击关闭" onclick="voiceKJ()"><span id="lockgame"></span><div class="clear"></div></div>  
              <div class="grid_code_ssc wjkjData" >
              	  <p style="display:none"><img src="/images/common/kjts.png" /></p>
                  <ul class="kj-hao" ctype="g0"  cnum="10">
                    <li id="span_lot_0" class="gr_s gr_s<?=intval($kjHao[0])?>"> </li>
                    <li id="span_lot_1" class="gr_s gr_s<?=intval($kjHao[1])?>"> </li>
                    <li id="span_lot_2" class="gr_s gr_s<?=intval($kjHao[2])?>"> </li>
                    <li id="span_lot_3" class="gr_s gr_s<?=intval($kjHao[3])?>"> </li>
                    <li id="span_lot_4" class="gr_s gr_s<?=intval($kjHao[4])?>"> </li>
                  </ul>
                  <div class="clear"></div>
            </div>   
             
	  </td>
	  <td class="game_top_period" width='250' >
	    <div style='padding:3px 5px' id='historylot'>
        <?php  $this->display('index/inc_data_history.php'); ?>
        </div>
	  </td>
       <?php }?>
        </tr>
      </table>
    </div> 
	<!-- ID kaijiang END  -->
		</div>
    </div>
	
    <div class="clear"></div>
<script type="text/javascript">
$(function(){
	window.S=<?=json_encode($diffTime>0)?>;
	window.KS=<?=json_encode($kjDiffTime>0)?>;
	window.kjTime=parseInt(<?=json_encode($kjdTime)?>);
	
	if($.browser.msie){
		window.diffTime=<?=$diffTime?>;
		setTimeout(function(){
			gameKanJiangDataC(<?=$diffTime?>);
		}, 1000);
	}else{
		setTimeout(gameKanJiangDataC, 1000, <?=$diffTime?>);
	}
	<?php if($kjDiffTime>0){ ?> 
		if($.browser.msie){
		setTimeout(function(){
			setKJWaiting(<?=$kjDiffTime?>);
		}, 1000);
		}else{
			setTimeout(setKJWaiting, 1000, <?=$kjDiffTime?>);
		}
	<?php } ?> 
	
	<?php if(!$kjHao){ ?> 
		loadKjData();
	<?php } ?> 
});
</script>