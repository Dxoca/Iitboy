<?php 
/**
 * 站点首页模板 多说建议本地化
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleftt"style="background-color: rgba(255, 255, 255, 0.6);">
<?php doAction('index_loglist_top'); ?>

<?php 
if (!empty($logs)):
foreach($logs as $value): 
?><article class="post-list" role="article">
	<h2>	
		
<!-- 说明：判断浏览量 -->
<?php 
if ($value['views'] >= 500) echo '<span class="hot-label">热门</span><i class="hot-arrow"></i> ';
?>	
<!-- 说明：判断时间 -->

<?php 
$t=time() - 1*24*60*60;
$log_t=gmdate('Y-m-d',$value['date']);
$diy_t=date("Y-m-d",$t);
if($log_t > $diy_t) echo '<span class="new-label">近期更新</span><i class="new-arrow"></i>';
?>

<a href="<?php echo $value['log_url']; ?>" title="<?php echo $value['log_title']; ?>"class="shake shake-little"><?php echo $value['log_title']; ?></a></h2>
	<div class="date1"><span class="ptime"></span>时间：<?php echo gmdate('Y-n-j', $value['date']); ?>&nbsp;&nbsp;
	<span class="pauthor"></span>作者：<?php blog_author($value['author']); ?>&nbsp;&nbsp;
	<span class="pcata"></span>分类：<?php blog_sort($value['logid']); ?>&nbsp;
	<span class="pview"></span>热度：<a href="<?php echo $value['log_url']; ?>"><?php echo $value['views']; ?></a>°&nbsp;
	<!--原评论代码 <a href="<?php echo $value['log_url']; ?>#comments">评论：<?php echo $value['comnum']; ?></a> -->
	<!-- 多说评论代码 -->
	<a href="<?php echo $value['log_url']; ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $value['logid']; ?>" data-count-type="comments"></span></a>
	&nbsp;&nbsp; <?php editflg($value['logid'],$value['author']); ?>
	</div>
	<div class="date3">
    时间：<?php echo gmdate('Y-n-j', $value['date']); ?>&nbsp;&nbsp;
	分类：<?php blog_sort($value['logid']); ?>&nbsp;&nbsp;
	热度：<a href="<?php echo $value['log_url']; ?>"><?php echo $value['views']; ?></a>&nbsp;&nbsp;

	</div>
	<div class="fl thumbnail_box">
	        <div class="thumbnail1">
  <a href="<?php echo $value['log_url']; ?>" title="<?php echo $value['log_title']; ?>">
	<div class="boder_round"><img src="<?php iitboy_zwimg($value['content']); ?>"width="180px" height="120px"class="shake shake-little hint--top hint--error"alt="<?php echo $value['log_title']; ?>"</img></div></a>
 </div>
        </div>
	<?php echo $value['log_description']; ?> 
	<div style="clear:both;"></div>
	<div class="r">
	<a href="<?php echo $value['log_url']; ?>">
	<i class="fa fa-list"></i> 阅读全文»</a></div>
	<div id="gaodu1"></div><div class="line"></div>
	
	</article>
<?php 
endforeach;
else:
?>
	<h2>未找到</h2>
	<p>抱歉，没有符合您查询条件的结果。</p>
<?php endif;?>
<div id="pagemenui">
	<?php echo $page_url;?>
</div>
</div><!-- end #contentleftt-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>