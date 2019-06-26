<?php 
/**
 * 侧边栏组件、页面模块
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<?php
//widget：blogger 分类
function widget_blogger($title){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$name = $user_cache[1]['mail'] != '' ? "<a href=\"mailto:".$user_cache[1]['mail']."\">".$user_cache[1]['name']."</a>" : $user_cache[1]['name'];?>
	<div id="zhanzhang">
	<div id="zhanzhang_biaoti"><span><?php echo $title; ?></span></div>
	<div id="zhanzhang_biankuang">
	<div id="zhanzhang_img">
	<?php if (!empty($user_cache[1]['photo']['src'])): ?>
	<img src="<?php echo BLOG_URL.$user_cache[1]['photo']['src']; ?>" width="<?php echo $user_cache[1]['photo']['width']; ?>" height="<?php echo $user_cache[1]['photo']['height']; ?>" alt="blogger" />
	<?php endif;?>
	</div>
	<div id="zhanzhang_wenzi"><b>站长：</b><?php echo $name; ?><br>
    <b>签名：</b><?php echo $user_cache[1]['des']; ?></div>
	<div id="gaodu1"></div></div></div>
<div id="zidingyi">
	<h3><span></span></h3>
	<ul>
	<div id="zidingyi">
	<ul>
	<div id="qq">
<a href="http://wpa.qq.com/msgrd?v=3&uin=987284242&site=qq&menu=yes" target="_blank" class="hint--top  hint--rounded" data-hint="在线联系站长QQ">
<img src="/content/templates/iitboy/images/qq.png" onmouseover="this.src='/content/templates/iitboy/images/qq2.png'" onmouseout="this.src='/content/templates/iitboy/images/qq.png'"></a> 
<a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=w-r79PH79-H38YOysu2grK4" target="_blank" class="hint--top  hint--rounded" data-hint="在线给站长写信。">
<img src="/content/templates/iitboy/images/mail.png" onmouseover="this.src='/content/templates/iitboy/images/mail2.png'" onmouseout="this.src='/content/templates/iitboy/images/mail.png'"></a> 
<a href="/" target="_blank" class="hint--top  hint--rounded" data-hint="扫一扫加站长微信。">
<img src="/content/templates/iitboy/images/weixin.png" onmouseover="this.src='/content/templates/iitboy/images/weixin2.png'" onmouseout="this.src='/content/templates/iitboy/images/weixin.png'"></a> 
<a href="/rss.php" target="_blank" class="hint--top  hint--rounded" data-hint="RSS订阅本站文章"><img src="/content/templates/iitboy/images/rss.png" onmouseover="this.src='/content/templates/iitboy/images/rss2.png'" onmouseout="this.src='/content/templates/iitboy/images/rss.png'"></a> 
<a href="/about/zzjs.html" target="_blank" class="hint--top  hint--rounded" data-hint="站长介绍"><img src="/content/templates/iitboy/images/ren.png" onmouseover="this.src='/content/templates/iitboy/images/ren2.png'" onmouseout="this.src='/content/templates/iitboy/images/ren.png'"></a>	
<a href="/lyb.html" class="hint--left  hint--rounded" data-hint="给本站留言"><img src="/content/templates/iitboy/images/liuyan.png" onmouseover="this.src='/content/templates/iitboy/images/liuyan2.png'" onmouseout="this.src='/content/templates/iitboy/images/liuyan.png'"></a>	
<a href="/" class="hint--left  hint--rounded" data-hint="喜欢本站就捐赠支持吧！"><img src="/content/templates/iitboy/images/juan.png" onmouseover="this.src='/content/templates/iitboy/images/juan2.png'" onmouseout="this.src='/content/templates/iitboy/images/juan.png'"></a></div>	</ul>
	</div>	</ul>
	</div>
<?php }?>
<?php
//widget：日历
function widget_calendar($title){ 
    if (!blog_tool_ishome()) return;
    ?>
    <div id="rili">
	<div id="rili_biaoti"><span><?php echo $title; ?></span></div>
	<div id="rili_biankuang">
	<div id="calendar">
	</div></div></div>
	<script>sendinfo('<?php echo Calendar::url(); ?>','calendar');</script>
<?php }?>
<?php
//widget：分类
function widget_sort($title){
	global $CACHE;
	$sort_cache = $CACHE->readCache('sort'); ?>
	<div id="fenlei">
	<div id="fenlei_biaoti"><span><?php echo $title; ?></span></div>
	<div id="fenlei_biankuang">
	<ul id="blogsort">
	<?php
	foreach($sort_cache as $value):
		if ($value['pid'] != 0) continue;
	?>
	<li>
	<i class="fa fa-folder-o fa-fw"></i><a href="<?php echo Url::sort($value['sid']); ?>"title="<?php echo $value['sortname']; ?>共有<?php echo $value['lognum'] ?>篇文章"><?php echo $value['sortname']; ?> (<?php echo $value['lognum'] ?>)</a>
	<?php if (!empty($value['children'])): ?>
		<ul>
		<?php
		$children = $value['children'];
		foreach ($children as $key):
			$value = $sort_cache[$key];
		?>
		<li>
			<a href="<?php echo Url::sort($value['sid']); ?>"title="<?php echo $value['sortname']; ?>共有<?php echo $value['lognum'] ?>篇文章"><?php echo $value['sortname']; ?> (<?php echo $value['lognum'] ?>)</a>
		</li>
		<?php endforeach; ?>
		</ul>
    </li>
	<?php endif; ?>
	<?php endforeach; ?>
	</ul><div id="gaodu1"></div></div></div>
<?php }?>
<?php
//widget：最新微语
function widget_twitter($title){
	global $CACHE; 
	$newtws_cache = $CACHE->readCache('newtw');
	$istwitter = Option::get('istwitter');
	?>
	<div id="weiyu">
	<div id="weiyu_biaoti"><span><?php echo $title; ?></span></div>
	<div id="weiyu_biankuang">
	<ul id="twitter">
	<?php foreach($newtws_cache as $value): ?>
	<?php $img = empty($value['img']) ? "" : '<a title="查看图片" class="t_img" href="'.BLOG_URL.str_replace('thum-', '', $value['img']).'" target="_blank">&nbsp;</a>';?>
	<li><?php echo $value['t']; ?><?php echo $img;?><p><?php echo smartDate($value['date']); ?></p></li>
	<?php endforeach; ?>
    <?php if ($istwitter == 'y') :?>
	<p><a href="<?php echo BLOG_URL . 't/'; ?>">更多&raquo;</a></p>
	<?php endif;?>
	</ul></div></div>
<?php }?>
<?php
//widget：最新评论
function widget_newcomm($title){
	global $CACHE; 
	$com_cache = $CACHE->readCache('comment');
	?>
	<div id="pinglun">
	<div id="pinglun_biaoti"><span><?php echo $title; ?></span></div>
	<div id="pinglun_wenzi">
	<ul id="newcomment">
	<?php
	foreach($com_cache as $value):
	$url = Url::comment($value['gid'], $value['page'], $value['cid']);
	?>
	<li id="comment">
<script>
var str=new Array("<?php echo TEMPLATE_URL; ?>images/user1.png","<?php echo TEMPLATE_URL; ?>images/user2.png","<?php echo TEMPLATE_URL; ?>images/user3.png","<?php echo TEMPLATE_URL; ?>images/user4.png","<?php echo TEMPLATE_URL; ?>images/user5.png","<?php echo TEMPLATE_URL; ?>images/user6.png","<?php echo TEMPLATE_URL; ?>images/user7.png","<?php echo TEMPLATE_URL; ?>images/user8.png","<?php echo TEMPLATE_URL; ?>images/user9.png");
var a;
a=str[parseInt(Math.random()*(str.length))];
document.write("<img src="+a+">");
</script>
	<span id="mzi"><?php echo $value['name']; ?></span> 说：
	<br /><a title="<?php echo $value['content']; ?>" href="<?php echo $url; ?>"><?php echo $value['content']; ?></a></li>
	<?php endforeach; ?>
	</ul></div></div>
<?php }?>
<?php
//widget：最新文章
function widget_newlog($title){
	global $CACHE; 
	$newLogs_cache = $CACHE->readCache('newlog');
	?>
	<div id="zuixinwenzhang">
	<div id="zuixin_biaoti"><span><?php echo $title; ?></span></div>
	<div id="zuixin_biankuang"><div class="wenzhang">
	<ul>
	<?php $i=1;
    foreach($newLogs_cache as $value){?>
	<li>
    <?php if($i==1){?><em class="hotone"><?php echo $i;?></em>
	<?php }else if($i==2){ ?><em class="hottwo"><?php echo $i;?></em>
	<?php }else if($i==3){ ?><em class="hotthree"><?php echo $i;?></em>
	<?php }else{ ?><em class="hotSoSo"><?php echo $i;?></em><?php }?>
		
    <a title="<?php echo $value['title']; ?>" href="<?php echo Url::log($value['gid']); ?>"><?php echo subString(strip_tags($value['title']),0,16); ?></a></li>
	<?php $i++;
     }  ?>
	</ul></div></div></div>
<?php }?>
<?php
//widget：热门文章
function widget_hotlog($title){
	$index_hotlognum = Option::get('index_hotlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getHotLog($index_hotlognum);?>
	<div id="remenwenzhang">
	<div id="remen_biaoti"><span><?php echo $title; ?></span></div>
	<div id="remen_biankuang"><div class="wenzhang">
	<ul>
	<?php foreach($randLogs as $value): ?>
	<li><i class="fa fa-dot-circle-o"></i><a href="<?php echo Url::log($value['gid']); ?>"title="<?php echo $value['title']; ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div></div></div>
<?php }?>
<?php
//widget：随机文章
function widget_random_log($title){
	$index_randlognum = Option::get('index_randlognum');
	$Log_Model = new Log_Model();
	$randLogs = $Log_Model->getRandLog($index_randlognum);?>
	<div id="suijiwenzhang">
	<div id="suiji_biaoti"><span><?php echo $title; ?></span></div>
	<div id="suiji_biankuang"><div class="wenzhang">
	<ul>
	<?php foreach($randLogs as $value): ?>
	<li><i class="fa fa-pencil"></i>&nbsp;<a href="<?php echo Url::log($value['gid']); ?>"><?php echo $value['title']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	</div></div></div>
<?php }?>
<?php
//widget：搜索
function widget_search($title){ ?>
	<div id="sousuo">
	<h3><span><?php echo $title; ?></span></h3>
	<ul id="logsearch">
	<form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
	<input name="keyword" class="search" type="text" onblur="if(this.value==''){this.value='请输入搜索关键字';}" onfocus="this.value='';" value="请输入搜索关键字" title="丘比龙小提示：如果你要搜索内容，请在搜索框中输入关键词，然后按“回车”即可查询到结果。">
    <input type="submit" name="submit" value="搜索" class="submit button" title="猛击我搜索">
	</form>
	</ul>
	</div>
<?php } ?>
<?php
//widget：归档
function widget_archive($title){
	global $CACHE; 
	$record_cache = $CACHE->readCache('record');
	?>
	<div id="cundang">
	<div id="cundang_biaoti"><span><?php echo $title; ?></span></div>
	<div id="cundang_biankuang">
	<ul id="record">
	<?php foreach($record_cache as $value): ?>
	<li><a href="<?php echo Url::record($value['date']); ?>"><?php echo $value['record']; ?>(<?php echo $value['lognum']; ?>)</a></li>
	<?php endforeach; ?>
	</ul><div id="gaodu1"></div></div></div>
<?php } ?>
<?php
//widget：自定义组件
function widget_custom_text($title, $content){ ?>
	<div id="zidingyi">
	<h3><span><?php echo $title; ?></span></h3>
	<ul>
	<?php echo $content; ?>
	</ul>
	</div>
<?php } ?>
<?php
//widget：链接
function widget_link($title){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
    if (!blog_tool_ishome()) return;
	?>
	<div id="yqlj">
	<div id="yqlj_biaoti"><span><?php echo $title; ?></span></div>
	<div id="yqlj_link">
	<ul id="link">
	<?php foreach($link_cache as $value): ?>
	<li><i class="fa fa-link fa-fw"></i><a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a></li>
	<?php endforeach; ?>
	</ul>
	<div id="gaodu1"></div></div>
	</div>
<?php }?> 
<?php
//blog：导航
function blog_navi(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<ul class="bar">
	<?php
	foreach($navi_cache as $value):

        if ($value['pid'] != 0) {
            continue;
        }

		if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
			?>	
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
			<li class="item common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
			<?php 
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'current' : 'common';
		?>
		
		<li class="item <?php echo $current_tab;?>">
			<a href="<?php echo $value['url']; ?>" <?php echo $newtab;?> class="chaffle" data-lang="zh"><?php echo $value['naviname']; ?></a>
			<?php if (!empty($value['children'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['children'] as $row){
                        echo '<li><a href="'.Url::sort($row['sid']).'" class="chaffle" data-lang="zh">'.$row['sortname'].'</a></li>';
                }?>
			</ul>
            <?php endif;?>

            <?php if (!empty($value['childnavi'])) :?>
            <ul class="sub-nav">
                <?php foreach ($value['childnavi'] as $row){
                        $newtab = $row['newtab'] == 'y' ? 'target="_blank"' : '';
                        echo '<li><a class="chaffle" data-lang="zh" href="' . $row['url'] . "\" $newtab >" . $row['naviname'].'</a></li>';
                }?>
			</ul>
			
            <?php endif;?>

		</li>
	<?php endforeach; ?>
	</ul>
<?php }?>

<?php
//blog：880以下的竖导航
function blog_navi2(){
	global $CACHE; 
	$navi_cache = $CACHE->readCache('navi');
	?>
	<div class="daohang2">
	<?php
	foreach($navi_cache as $value):

        if ($value['pid'] != 0) {
            continue;
        }

		if($value['url'] == ROLE_ADMIN && (ROLE == ROLE_ADMIN || ROLE == ROLE_WRITER)):
			?>	
            <li class="item common"><a href="<?php echo BLOG_URL; ?>admin/">管理站点</a></li>
			<li class="item common"><a href="<?php echo BLOG_URL; ?>admin/?action=logout">退出</a></li>
			<?php 
			continue;
		endif;
		$newtab = $value['newtab'] == 'y' ? 'target="_blank"' : '';
        $value['url'] = $value['isdefault'] == 'y' ? BLOG_URL . $value['url'] : trim($value['url'], '/');
        $current_tab = BLOG_URL . trim(Dispatcher::setPath(), '/') == $value['url'] ? 'current' : 'common';
		?>	
		<li class="item <?php echo $current_tab;?>">
			<a href="<?php echo $value['url']; ?>" <?php echo $newtab;?> class="shake shake-little"><?php echo $value['naviname']; ?></a>&nbsp;&nbsp;&nbsp;
		</li>
	<?php endforeach; ?>
	</div>
<?php }?>
<?php
//blog：置顶
function topflg($top, $sortop='n', $sortid=null){
    if(blog_tool_ishome()) {
       echo $top == 'y' ? "<span class=\"good-label\"title=\"这篇置顶的文章\">置顶</span><i class=\"good-arrow\"></i> " : '';
    } elseif($sortid){
       echo $sortop == 'y' ? "<span class=\"good-label\"title=\"这篇置顶的文章\">置顶</span><i class=\"good-arrow\"></i> " : '';
    }
}
?>

<?php
//blog：编辑
function editflg($logid,$author){
	$editflg = ROLE == ROLE_ADMIN || $author == UID ? '<a href="'.BLOG_URL.'admin/write_log.php?action=edit&gid='.$logid.'" target="_blank">编辑</a>' : '';
	echo $editflg;
}
?>
<?php
//blog：分类
function blog_sort($blogid){
	global $CACHE; 
	$log_cache_sort = $CACHE->readCache('logsort');
	?>
	<?php if(!empty($log_cache_sort[$blogid])): ?>
    <a href="<?php echo Url::sort($log_cache_sort[$blogid]['id']); ?>"><?php echo $log_cache_sort[$blogid]['name']; ?></a>
	<?php endif;?>
<?php }?>
<?php
//blog：日志页标签
function blog_tag($blogid){
	global $CACHE;
	$log_cache_tags = $CACHE->readCache('logtags');
	if (!empty($log_cache_tags[$blogid])){
		foreach ($log_cache_tags[$blogid] as $value){
		$tag = '';
		echo 	'<a rel="tag" href="'.Url::tag($value['tagurl']).'" title='.$value['tagname'].'>' .$value['tagname'].'</a>';
		}
		echo $tag;
	}
	else {$tag = '<span class="color">&nbsp;╭(′▽`)╯标签走丢啦~</span>';
	    echo $tag;}
}
?>
<?php
//widget：侧边栏标签
function widget_tag($title){
	global $CACHE;
	$tag_cache = $CACHE->readCache('tags');?>
	<div id="biaoqian">
	<div id="biaoqian_biaoti"><span><?php echo $title; ?></span></div>
	<div id="biaoqian_biankuang">
	<ul id="blogtags"><li>
	<?php 
		shuffle ($tag_cache);
		 $tag_cache = array_slice($tag_cache,0,36);
		foreach($tag_cache as $value): ?>
		
		<a href="<?php echo Url::tag($value['tagurl']); ?>" pjax="<?php echo $value['tagname'];?>" title="<?php echo $value['usenum']; ?>篇文章">
		<?php if(empty($value['tagname'])){ echo "无标签";}else{echo $value['tagname'];}?>
		</a>
	<?php endforeach; ?>
	</li></ul></div></div>
<?php }?>
<?php
//blog：文章作者
function blog_author($uid){
	global $CACHE;
	$user_cache = $CACHE->readCache('user');
	$author = $user_cache[$uid]['name'];
	$mail = $user_cache[$uid]['mail'];
	$des = $user_cache[$uid]['des'];
	$title = !empty($mail) || !empty($des) ? "title=\"$des $mail\"" : '';
	echo '<a href="'.Url::author($uid)."\" $title>$author</a>";
}
?>
<?php
//blog：相邻文章
function neighbor_log($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	<div id="sxpbk1">
<div id="wzlj1"><a href="<?php echo Url::log($prevLog['gid']) ?>"><i class="fa fa-arrow-circle-left"></i>&ensp;<?php echo $prevLog['title'];?></a></div></div>
    <?php else:?>
    <div id="sxpbk1">
<div id="wzlj1"><a rel="prev" class="shake shake-opacity"><i class="fa fa-arrow-circle-left"></i>&ensp;没有上一篇咯，看看别的吧！？</a></div></div>
    <?php endif;?>
	<?php if($nextLog):?>
	<div id="sxpbk2"><div id="wzlj1"><a href="<?php echo Url::log($nextLog['gid']) ?>"></i><?php echo $nextLog['title'];?>&ensp;<i class="fa fa-arrow-circle-right"></i></a></div>
		</div>
	<?php else:?>
    <div id="sxpbk2"><div id="wzlj1"><a rel="next" class="shake shake-opacity">没有下一篇咯，看看别的吧！？&ensp;<i class="fa fa-arrow-circle-right"></i></a></div>
	</div>
	<?php endif;?>
<?php }?>
<?php
//blog：相邻文章2 手机低分辨率下才显示
function neighbor_log2($neighborLog){
	extract($neighborLog);?>
	<?php if($prevLog):?>
	<div id="shangxiapian3">
	<a href="<?php echo Url::log($prevLog['gid']) ?>">
	<img src="<?php echo TEMPLATE_URL; ?>images/shang2.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/shang1.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/shang2.png'"></a></div>
	<?php else:?>
    <div id="shangxiapian3"><a rel="prev" class="shake shake-opacity">上一篇没咯！</a></div>
    <?php endif;?>
	<?php if($nextLog):?>
	<div id="shangxiapian4"><a href="<?php echo Url::log($nextLog['gid']) ?>"><img src="<?php echo TEMPLATE_URL; ?>images/xia2.png" onmouseover="this.src='<?php echo TEMPLATE_URL; ?>images/xia1.png'" onmouseout="this.src='<?php echo TEMPLATE_URL; ?>images/xia2.png'"></a></div>
	<?php else:?>
    <div id="shangxiapian4"><a rel="next" class="shake shake-opacity">下一篇没咯！</a></div>
	<?php endif;?>
<?php }?>
<?php
//blog：评论列表
function blog_comments($comments){
    extract($comments);
    if($commentStacks): ?>
	<a name="comments"></a>
	<div id="comments" class="comment-header"></div>
	<?php endif; ?>
	<?php
	$isGravatar = Option::get('isgravatar');
	foreach($commentStacks as $cid):
    $comment = $comments[$cid];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment" id="comment-<?php echo $comment['cid']; ?>">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar"><img src="<?php echo getGravatar($comment['mail']); ?>" /></div>
		<div id="mzsj"><span class="juli1"><?php echo $comment['poster']; ?></span><span class="comment-time chaffle" data-lang="en"><?php echo $comment['date']; ?></span></div><?php endif; ?>
		<div class="comment-info">
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div>
		</div>
		<?php blog_comments_children($comments, $comment['children']); ?>
	</div>
	<?php endforeach; ?>
    <div id="pagemenui">
	    <?php echo $commentPageUrl;?>
    </div>
<?php }?>
<?php
//blog：子评论列表
function blog_comments_children($comments, $children){
	$isGravatar = Option::get('isgravatar');
	foreach($children as $child):
	$comment = $comments[$child];
	$comment['poster'] = $comment['url'] ? '<a href="'.$comment['url'].'" target="_blank">'.$comment['poster'].'</a>' : $comment['poster'];
	?>
	<div class="comment comment-children" id="comment-<?php echo $comment['cid']; ?>">
		<a name="<?php echo $comment['cid']; ?>"></a>
		<?php if($isGravatar == 'y'): ?><div class="avatar"><img src="<?php echo getGravatar($comment['mail']); ?>" /></div>
		<div id="mzsj_2"><span class="juli2"><?php echo $comment['poster']; ?></span><span class="comment-time chaffle" data-lang="zh"><?php echo $comment['date']; ?></span></div>
		<?php endif; ?>
		<div class="comment-info">
			<div class="comment-content"><?php echo $comment['content']; ?></div>
			<?php if($comment['level'] < 4): ?><div class="comment-reply"><a href="#comment-<?php echo $comment['cid']; ?>" onclick="commentReply(<?php echo $comment['cid']; ?>,this)">回复</a></div><?php endif; ?>
		</div>
		<?php blog_comments_children($comments, $comment['children']);?>
	</div>
	<?php endforeach; ?>
<?php }?>
<?php
//blog：发表评论表单
function blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark){
	if($allow_remark == 'y'): ?>
	<div id="comment-place">
	<div class="comment-post" id="comment-post">
		<div class="cancel-reply" id="cancel-reply" style="display:none"><a href="javascript:void(0);" onclick="cancelReply()">取消回复</a></div>
		<div class="comment-header">
						<a name="respond"></a></div>
		<form method="post" name="commentform" action="<?php echo BLOG_URL; ?>index.php?action=addcom" id="commentform">
			<input type="hidden" name="gid" value="<?php echo $logid; ?>" />
			<?php if(ROLE == ROLE_VISITOR): ?>
			<p>
				<input type="text" name="comname" maxlength="49" value="<?php echo $ckname; ?>" size="22" tabindex="1">
				<label for="author"><small>昵称</small></label>
			</p>
			<p>
				<input type="text" name="commail"  maxlength="128"  value="<?php echo $ckmail; ?>" size="22" tabindex="2">
				<label for="email"><small>邮件地址 (选填)</small></label>
			</p>
			<p>
				<input type="text" name="comurl" maxlength="128"  value="<?php echo $ckurl; ?>" size="22" tabindex="3">
				<label for="url"><small>个人主页 (选填)</small></label>
			</p>
			<?php endif; ?>
			<p><textarea name="comment" id="comment" rows="12" tabindex="4"></textarea></p>
			<div class="fbpl"><?php echo $verifyCode; ?> <input type="submit" id="comment_submit" value="发表评论" tabindex="6"><span id="top2"><a href="javascript:void(0);" onclick="goTop();" class="hint--left hint--bounce" data-hint="返回顶部"><img src="<?php echo TEMPLATE_URL; ?>images/top2.png"></a></span><div id="gaodu1"></div></div>
			<input type="hidden" name="pid" id="comment-pid" value="0" size="22" tabindex="1"/>
		</form>
	</div>
	</div>
	<?php endif; ?>
<?php }?>
<?php
//blog-tool:判断是否是首页
function blog_tool_ishome(){
    if (BLOG_URL . trim(Dispatcher::setPath(), '/') == BLOG_URL){
        return true;
    } else {
        return FALSE;
    }
}
?>
<?php
//试试手气代码
function rand_log() {
    $db = Database::getInstance();
    $sql =         "SELECT gid,title,content FROM ".DB_PREFIX."blog WHERE type='blog' ORDER BY rand() LIMIT 0,1";
    $list = $db->query($sql);
    while($row = $db->fetch_array($list)){
        echo Url::log($row['gid']);
    }
}
?>
<?php
//格式化内容工具
function blog_tool_purecontent($content, $strlen = null){
        $content = str_replace('继续阅读', '', strip_tags($content));
        if ($strlen) {
            $content = subString($content, 0, $strlen);
        }
        return $content;
}
?>
<?php
//友情链接
function index_link(){
	global $CACHE; 
	$link_cache = $CACHE->readCache('link');
    if (!blog_tool_ishome()) return;
	?>
	友情链接：<?php foreach($link_cache as $value): ?>
	<a href="<?php echo $value['url']; ?>" title="<?php echo $value['des']; ?>" target="_blank"><?php echo $value['link']; ?></a>&nbsp;&nbsp;┆
	<?php endforeach; ?>
<?php }?>
<?php
//首页微语调用
function index_t($num){
	$t = Database::getInstance();
	if (!blog_tool_ishome()) return;
	?>
	<?php
	$sql = "SELECT id,content,img,author,date,replynum FROM ".DB_PREFIX."twitter ORDER BY `date` DESC LIMIT $num";
	$list = $t->query($sql);
	while($row = $t->fetch_array($list)){
	?>
	<div id="gonggao">
     <div id="ggwz"><a href="/t"><?php echo $row['content'];?></a></div>
     <div id="gonggao_img"><img src="<?php echo TEMPLATE_URL; ?>images/gonggao.png"></div>
    </div>
	<div id="gonggao_bk">
     <div class="ggwz2"><img src="<?php echo TEMPLATE_URL; ?>images/gonggao_xlb.gif"> <b>公告：</b><a href="/t"><?php echo $row['content'];?></a></div>
	 </div>
	<?php }?>
<?php } ?>


<?php
function iitboy_zwimg($str){
preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $str, $match);
if(!empty($match[1])){echo $match[1][0];}else{
echo TEMPLATE_URL . 'images/rand/'.rand(1,15).'.jpg';
}}
?>

<?php
function iitboy_weiyu($str){
preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $str, $match);
if(!empty($match[1])){echo $match[1][0];}else{
echo TEMPLATE_URL . 'images/iitboycn/'.rand(1,14).'.jpg'; 
	}}
?>

 <?php 
 function baidu($url){ 
     $url='http://www.baidu.com/s?wd='.$url; 
     $curl=curl_init(); 
     curl_setopt($curl,CURLOPT_URL,$url); 
     curl_setopt($curl,CURLOPT_RETURNTRANSFER,1); 
     $rs=curl_exec($curl); 
     curl_close($curl); 
     if(!strpos($rs,'没有找到')){ 
         return 1; 
             } 
     else{ 
         return 0; 
         }    
                     } 
         function checkbaidu($id){ 
         $url=Url::log($id); 
         if(baidu($url)==1){ 
             echo "百度已收录"; 
         } else { 
             if (ROLE == 'admin' || ROLE == 'writer') { 
                 $urls = array( 
             $url, 
         ); 
         $api = 'http://data.zz.baidu.com/urls?site=www.iitboy.cn&token=mGK65USq2yMVwZEe'; 
         $ch = curl_init(); 
         $options =  array( 
         CURLOPT_URL => $api, 
         CURLOPT_POST => true, 
         CURLOPT_RETURNTRANSFER => true, 
         CURLOPT_POSTFIELDS => implode("\n", $urls), 
         CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),); 
         curl_setopt_array($ch, $options); 
         $result = curl_exec($ch); 
         echo ''; 
                   
             } 
            echo "<a style=\"color:red;\" rel=\"external nofollow\" title=\"点击提交收录！\" target=\"_blank\" href=\"http://zhanzhang.baidu.com/sitesubmit/index?sitename=$url\">已自动提交收录</a>"; 
         } 
     } 
 ?> 