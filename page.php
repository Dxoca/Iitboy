<?php 
/**
 * 自建页面模板
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleftt">
	<h2 class="biaoti" id="masked"><?php echo $log_title; ?></h2>
	<div class="xiantiao2"><img src="<?php echo TEMPLATE_URL; ?>images/xiantiao2.png"></div>
	<?php echo $log_content; ?>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>	
	<div style="clear:both;"></div>
</div><!--end #contentleftt-->
	
<?php
 include View::getView('side');
 include View::getView('footer');
?>