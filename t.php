<?php 
/**
 * 微语部分
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleftt"style="background-color: rgba(255, 255, 255, 0.6);">
<div id="tw">
    <div class="tw-body">
    <?php 
    foreach($tws as $val):
    $author = $user_cache[$val['author']]['name'];
    $avatar = empty($user_cache[$val['author']]['avatar']) ? 
                BLOG_URL . 'admin/views/images/avatar.jpg' : 
                BLOG_URL . $user_cache[$val['author']]['avatar'];
    $tid = (int)$val['id'];
    $img = empty($val['img']) ? "" : '<a title="查看图片" href="'.BLOG_URL.str_replace('thum-', '', $val['img']).'" target="_blank"><img style="border: 1px solid #EFEFEF;" src="'.BLOG_URL.$val['img'].'"/></a>';
    ?> 
		<article class="post-list" role="article">
    <div class="tw-wenzi">
	<div class="main_img">
    <img src="<?php iitboy_weiyu($value['content']); ?>">
    </div>
    <div class="post1"><span class="hint--top  hint--rounded chaffle" data-hint="<?php echo $user_cache[1]['des']; ?>" data-lang="zh"><?php echo $author; ?></span><br><?php echo $val['t'].'<br><br>'.$img;?></div>
    <div class="clear"></div>
    <div class="bttome">
       <!-- <p class="post"><a href="javascript:loadr('<?php echo DYNAMIC_BLOGURL; ?>?action=getr&tid=<?php echo $tid;?>','<?php echo $tid;?>');">回复 (<span id="rn_<?php echo $tid;?>"><?php echo $val['replynum'];?></span>)</a></p>
        <p class="time"><?php echo $val['date'];?> </p>-->
    </div>
	<div class="clear"></div>
   	<ul id="r_<?php echo $tid;?>" class="r123"></ul>
		
    <?php if ($istreply == 'y'):?>
    <div class="huifu" id="rp_<?php echo $tid;?>">
	<textarea id="rtext_<?php echo $tid; ?>"></textarea>
    <div class="tbutton">
        <div class="tinfo" style="display:<?php if(ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER){echo 'none';}?>">
        昵称：<input type="text" id="rname_<?php echo $tid; ?>" value="">
        <span style="display:<?php if($reply_code == 'n'){echo 'none';}?>">验证码：<input type="text" id="rcode_<?php echo $tid; ?>" value=""></span><span class="img-yzm"><?php echo $rcode; ?></span>        
        </div>
        <input class="button_p" type="button" onclick="reply('<?php echo DYNAMIC_BLOGURL; ?>index.php?action=reply',<?php echo $tid;?>);" value="回 复"> 
        <div class="msg"><span id="rmsg_<?php echo $tid; ?>" style="color:#FF0000"></span></div>
    </div>
		
    </div>
    <?php endif;?>
    </div></article>
    <?php endforeach;?>
	<li id="pagemenui"><?php echo $pageurl;?></li>
    </div>
	
</div><!--end #tw-->
</div><!--end #contentleftt-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>