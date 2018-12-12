<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?> 
<?php $video_cache = getcache('video', 'video');?>
<link href="<?php echo CSS_PATH;?>vms/vms.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<div class="clr ct show_pg">
	<div class="crumbs"><a href="<?php echo APP_PATH;?>">首页</a>  <span id="play_title"> > 我的播放列表 > <?php echo $title;?></span></div>
	<div class="ad">
	<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad960x40.gif"></a>
	
	</div>
    <div class="lty1">
    	<div class="clr">
    <div class="zj"><h5><?php echo $title;?></h5></div>
    <div class="clr xxg">
        <div class="clr">总播放：<span id="hits"></span>  <span>|</span>  更新时间：<?php echo $inputtime;?></div>
    </div>
    </div>
    	<div class="plbox clr"> 
<?php if($video_info[vid]!="") { ?>
<?php echo player_code('video_player',$video_info['channelid'],$video_info['vid'],600,500);?>
<?php } else { ?>
非常抱歉，该视频不存在，或者尚没有通过审核！
<?php } ?>
		
		
		</div>
        <div class="sr">
        	<ul class="srli">
               <li>
                 	<strong>分享视频：</strong><a href="#" title="text" class=""></a>
                    <div class="clr sr_tag wp">
                     <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_b" style="line-height: 12px;"><img src="http://share.baidu.com/static/images/type-button-5.jpg" />
		<a class="shareCount"></a>
	</div>
<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=6434581" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
<!-- Baidu Button END -->
                   </div>
                </li>
                <li>
                <strong>嵌入代码：</strong>
                <input name="html" id="html" type="text" size="50" class="fz_ipt" style="margin-left:2px;" ><input type="button" class="fz_btn" value="复制" onclick="copy_text(html);">
				</li> 
            </ul>
        </div>
        <div class="clr bfj">
		<?php if($video[data]) { ?>
		<?php $n=1;if(is_array($video[data])) foreach($video[data] AS $v) { ?>
         	<a href="<?php echo $v['url'];?>" ><?php echo $v['title'];?></a>
		<?php $n++;}unset($n); ?>
		<?php } ?>
        </div> 
		
		 <div class="bk10"></div>
      <?php if($allow_comment && module_exists('comment')) { ?>
      <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
      <div class="box">
        		<h5>评论排行</h5>
				 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=9eeaba0a57bcf88c1b4779f4dc232d7a&action=bang&siteid=%24siteid&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('siteid'=>$siteid,)).'9eeaba0a57bcf88c1b4779f4dc232d7a');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('siteid'=>$siteid,'limit'=>'20',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            	<ul class="content list blue f14 row-2">
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 40);?></a><span>(<?php echo $r['total'];?>)</span></li>
					<?php $n++;}unset($n); ?>
                </ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <?php } ?>
		 
    </div>
  <div class="wp lty2">  
	
	  <div class="box0">
    	<div class="nav">
			<span class="more" onclick="delcookie('player_list');alert('已经清空播放列表！');javascript:window.location.href='<?php echo APP_PATH;?>';"><label for="lb">清空播放列表</label></span>
             <h5>上升最快的视频</h5>
        </div>
        <div class="bct">
        	<div class="lbbox">
            <ul class="c1 c2" id="select_video"> 
				
            </ul>
            </div>
        </div>
    </div>
	
	
	
    <div class="ad"> 
	
	<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad318x64.gif"></a>
	
	</div>
     <div class="box0">
    	<div class="nav"><h5>精彩推荐</h5></div>
        <div class="bct">
        	<ul class="c1 c2">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=308a08a0130fabfacd9e12e8339d05fb&action=position&posid=18&catid=%24catid&order=listorder+DESC&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'18','catid'=>$catid,'order'=>'listorder DESC','limit'=>'6',));}?>
			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                <li>
                    <div class="clr h77">
                      <a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"><img src="<?php echo $v['thumb'];?>" width="104" height="65" class="l"></a>
                      <div class="lh21"><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],22,false);?></a></div>
                      <div class="sz"><span class="shows">播放次数：<?php echo get_views('c-'.$CATEGORYS[$v[catid]][modelid].'-'.$v['id']);?></span><span>评论：<?php echo get_comments(id_encode("content_$v[catid]",$v[id],$siteid));?></span></div>
                    </div>
                </li>  
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					
            </ul>
        </div>
    </div>
  </div>
  <div class="hr"></div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $contentid;?>&modelid=<?php echo $CATEGORYS[$catid]['modelid'];?>"></script>
<script language="JavaScript">
<!--
$(function(){ 
	var ck = getcookie('player_list'); 
	show_playerlist();
	$('#html').val('<embed src="<?php echo player_code('video_player',$video_info['channelid'],$video_info['vid'],600,500);?>" quality="high" width="600" height="500" align="middle" allowScriptAccess="always" allowfullscreen="true" flashvars="auto=1" type="application/x-shockwave-flash"></embed>');
	return false;
})

//设置COOKIE
function set_cookie(id,title){
	setcookie('now',id);
}	

//切换地址 playReady, playFinish.
function playReady() { 
}

function playFinish(id,vid) {  
 	var player_list = getcookie('player_list');
	var now = getcookie('now'); 
   	if(player_list!=null){
		var list_array=new Array();
		var player=new Array();
		list_array = player_list.split("|"); 
		if(now==null){
			alert('now 是空的');exit;
			setcookie('now','0');
			player=list_array[0].split("@");//url@标题@vid
 			document.getElementById('video_player').playVideoByVid(player[2]);
		}else{
 			var new_now = parseInt(now)+1;
      		if(typeof(list_array[new_now])=="undefined"){
				setcookie('now','0');
				alert('播完了');
				return false;
			} 
 			setcookie('now',new_now);
 			window.open($('#url'+new_now).attr("href"),'_self');
			//return false;
		} 
 	}
 }

// 数组循环 
function show_playerlist() {
	var player_list = getcookie('player_list');
	var now = getcookie('now');
	var content = "";
	if(player_list!=null){
		var list_array=new Array();
		var player=new Array();
		list_array = player_list.split("|");
 		for(var i=0;i<list_array.length;i++) {//调条记录循环
			player=list_array[i].split("@"); 
			
			if('<?php echo $contentid;?>'==player[2]){
				var ac = 'ac';
			}else {
				var ac = '';
			}
			content +=("<li class='"+ac+"' id='playid"+i+"'><a href='"+player[0]+"' onclick='set_cookie("+i+");' id='url"+i+"' title='"+player[1]+"'>"+player[1].substring(0,24)+"</a></li>");
		}
 	}else{
		content = "<li>没有播放列表</li>";
	}
	$('#select_video').html(content);
}

//-->
</script>
<?php include template("content","footer"); ?>
