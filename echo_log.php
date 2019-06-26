<?php 
/**
 * 阅读文章页面 
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleftt" style="background-color: rgba(255, 255, 255, 0.6);">

<div class="biaoti" id="masked"><?php topflg($top); ?><?php echo $log_title; ?></div>
	<div class="date2">
	<span class="home"></span><a href="/" title="返回网站首页">首页</a> <b>></b>
    <?php 
		$db = Database::getInstance();
		$ery = $db->query("SELECT * FROM ".DB_PREFIX."sort WHERE sid ='$sortid'"); 
		$rest = $db->fetch_array($ery); 
		if($rest['pid'] == "0")
		{
			echo '<a href="'.Url::sort($rest['sid']).'">'.$rest['sortname'].'</a>'; 
		}
		else
		{
			$ery1 = $db->query("SELECT * FROM ".DB_PREFIX."sort WHERE sid ='".$rest['pid']."'"); 
			$rest1 = $db->fetch_array($ery1); 
			echo '<a href="'.Url::sort($rest1['sid']).'">'.$rest1['sortname'].'</a>'; 
			echo ' <b>></b> <a href="'.Url::sort($rest['sid']).'">'.$rest['sortname'].'</a>';
		}
    ?>
	<!--分类原代码 <?php blog_sort($logid); ?> -->&nbsp;&nbsp;
	<span class="pauthor"></span>作者：<?php blog_author($author); ?>&nbsp;&nbsp;
	<span class="ptime"></span> <?php $weekarray=array("日","一","二","三","四","五","六"); 
echo gmdate('Y年n月j日 G:i', $date);echo " 星期".$weekarray[gmdate('w', $date)];?>&nbsp;&nbsp;
	<span class="pview"></span>热度：<?php echo $views; ?>°&nbsp;&nbsp;
	<?php echo checkbaidu($logid); ?>
	<!-- 以下是原评论代码，如果你没用多说社会化评论，那么请把下面的“注释”取消就行了。 -->
	<!--  <?php echo $comnum; ?>条评论&nbsp;&nbsp;&nbsp;&nbsp;  -->
	<!-- 以下是调用多说社会化评论数据，如果你没用多说，请删除下面这条代码。-->

	<a id= "comments" href="<?php echo $value['log_url']; ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $logid; ?>"></span></a>&nbsp;
	<?php editflg($logid,$author); ?>
	</div>
	

    <div class="date4">
	时间：<?php echo gmdate('Y-n-j G:i', $date); ?>&nbsp;&nbsp;
	热度：<?php echo $views; ?>°&nbsp; 
	<!-- 以下是调用多说社会化评论数据，如果你没用多说，请删除下面这条代码。 -->
	<a href="<?php echo $value['log_url']; ?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $logid; ?>"></span></a>
	</div>
	<div class="xiantiao"><img src="<?php echo TEMPLATE_URL; ?>images/xiantiao1.png"></div>
	<div id="zoom"><?php echo $log_content; ?></div>
	<div class="post-tags"><?php blog_tag($logid); ?></div> 
	<div id="banquan">
	<div class="tupian hint--right hint--rounded" title="这篇文章太棒了，我要分享给我的小伙伴们！
	1、用手机扫二维码。2、点右上角分享就可以到朋友圈啦。">
	<img src="http://qr.liantu.com/api.php?&bg=ffffff&w=100&m=6&fg=000000&text=<?php $url_this =  "http://".$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $url_this; ?>" alt="二维码加载中..."></div>
<div class="xinxi">
<span class="zuozhe">本文作者：</span><?php blog_author($author); ?> &nbsp;&nbsp;&nbsp;&nbsp;
<span class="biaoti2">文章标题：</span> <a href="<?php echo Url::log($logid); ?>"><?php echo $log_title; ?></a><br>
<span class="blog_url">本文地址：</span><a href="<?php echo Url::log($logid); ?>"><?php echo Url::log($logid); ?></a><br>
<b>版权声明：</b>若无注明，本文皆为“<span class="blog_name"><?php echo $blogname; ?></span>”原创，转载请保留文章出处。
	</div><div id="gaodu1"></div></div>
	<div class="cutline"><span><a href="http://www.dxoca.cn" target="_blank">正文到此结束</a></span></div>
	
	<div class="rkdic"><a href="http://www.rkidc.net/?refcode=je4ybuw2m" target="_blank"><img src="http://cdn.rkidc.loveml.com/700x100.gif" alt="" /></a>
	</div>
	<div id="shangxiapian_2"><?php neighbor_log2($neighborLog); ?><div id="gaodu1"></div></div>
	<div id="shangxiapian"><?php neighbor_log($neighborLog); ?><div id="gaodu1"></div></div> 
   <div class="gxq"><div class="bti"><i class="fa fa-folder-open"></i> <span class="chaffle" data-lang="zh">相关文章</span></div>
    <?php $Log_Model = new Log_Model();
          $randlogs = $Log_Model->getLogsForHome("AND sortid = {$sortid} ORDER BY rand() DESC,date DESC", 1, 10);?>
        <ul>
        <?php foreach($randlogs as $value): ?>
            <li><i class="fa fa-dot-circle-o">
            <a href="<?php echo $value['log_url']; ?>" title="查看文章:<?php echo $value['log_title']; ?>" class="shake shake-little"><?php echo $value['log_title']; ?></a>
            </i></li>
        <?php endforeach; ?>
        </ul>
	
    <div id="gaodu1"></div></div>
    <?php doAction('log_related', $logData); ?> 
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div><!--end #contentleftt-->
		
<?php
 include View::getView('side');
 include View::getView('footer');
?>