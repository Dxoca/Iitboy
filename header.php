<?php
/*
Template Name:寒光唯美式V2.4.2
Description:二次元，小清新 唯美~~~ 
Version:<span style="color:#E60026;">响应式模版，自适应手机 电脑 平板等。完美兼容多说。<<br>修改embed.js的多说ID（多说以已经失效）<br>必装插件：主题编辑 多说 <br>QQ:987284242 请支持正版模版</span>
Author:寒光
Author Url:http://www.Dxoca.cn/
Sidebar Amount:1
*/

if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?><!--
//
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//  
//
//
//
//
//
//
//
//                            _ooOoo_  
//                           o8888888o  
//                           88" . "88  
//                           (| -_- |)  
//                            O\ = /O  
//                        ____/`---'\____  
//                      .   ' \\| |// `.  
//                       / \\||| : |||// \  
//                     / _||||| -:- |||||- \  
//                       | | \\\ - /// | |  
//                     | \_| ''\---/'' | |  
//                      \ .-\__ `-` ___/-. /  
//                   ___`. .' /--.--\ `. . __  
//                ."" '< `.___\_<|>_/___.' >'"".  
//               | | : `- \`.;`\ _ /`;.`/ - ` : | |  
//                 \ \ `-. \_ __\ /__ _/ .-` / /  
//         ======`-.____`-.___\_____/___.-`____.-'======  
//                            `=---='  
//                 拦截插件累计拦截逗比攻击"2333"次！
//         .............................................  
//                  佛祖保佑             永无BUG 
//          佛曰:  
//                  写字楼里写字间，写字间里程序员；  
//                  程序人员写程序，又拿程序换酒钱。  
//                  酒醒只在网上坐，酒醉还来网下眠；  
//                  酒醉酒醒日复日，网上网下年复年。  
//                  但愿老死电脑间，不愿鞠躬老板前；  
//                  奔驰宝马贵者趣，公交自行程序员。  
//                  别人笑我忒疯癫，我笑自己命太贱；  
//                  不见满街漂亮妹，哪个归得程序员？

<!-- <?php echo $site_title; ?>欢迎您！ <?php echo BLOG_URL; ?>
 -->
<!doctype html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>
      <?php echo $site_title; ?></title>
    <meta name="keywords" content="<?php echo $site_key; ?>">
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="generator" content="emlog iitboy2.3.4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="bookmark" href="/favicon.ico" />
    <link href="<?php echo TEMPLATE_URL; ?>main.css?" rel="stylesheet" type="text/css">
    <link href="<?php echo TEMPLATE_URL; ?>js/csshake.min.css" rel="stylesheet">
    <link href="<?php echo TEMPLATE_URL; ?>js/animate.min.css" rel="stylesheet">
    <link href="http://libs.baidu.com/fontawesome/4.2.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo BLOG_URL; ?>xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo BLOG_URL; ?>wlwmanifest.xml">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo BLOG_URL; ?>rss.php">
    <script src="<?php echo BLOG_URL; ?>include/lib/js/common_tpl.js" type="text/javascript"></script>
    <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
	  <script language="javascript" src="/content/plugins/Fw_player/js/player.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/pjax.js"></script>
    <script>$(document).pjax('a[target!=_blank]', '#contentleftt', {fragment: '#contentleftt',timeout: 8000});
      $(document).on('pjax:send',function() {
        $(".loading,.loading2").css("display", "block");
        $(".donghua").removeClass("animated bounceInDown");
      });
      $(document).on('pjax:complete',function() {
        $(".loading,.loading2").css("display", "none");
        $(".donghua").addClass("animated bounceInDown").show();
		pajx_loadDuodsuo();
        jQuery.getScript('<?php echo TEMPLATE_URL; ?>js/iitboy.js');
      });</script>
	  
  </head>
	
  <body>
    <div class="bg-fixed"></div>
    <div class="donghua">
      <div id="iitboy_logo">
        <a href="/" title="寒光博客">
          <img src="<?php echo TEMPLATE_URL; ?>images/logo.png" class="animated tada"></a>
        <br>
        <div id="tock" style="top:-3px">
          <div class="hibox">
            <div class="hi container">
              <a href="javascript:;" onclick="getkoto();" title="换一条">
                <span class="hitokoto" id="hitokoto">Loading...（欢迎来到寒光博客~我是会动的哟！）</span></a>
            </div>
          </div>
        </div>
      </div>
      <div id="hjsbox"></div>
      <div id="sousuo2" title="在搜索框中输入关键字后，按“回车”即可搜到结果。">
        <form name="keyform" method="get" action="<?php echo BLOG_URL; ?>index.php">
          <input name="keyword" type="search" placeholder="框中输文字，回车索结果。"></form>
      </div>
      <div id="linkk">
        <div id="menu" style="background-color: rgba(0,0,0,0.6);">
          <?php blog_navi();?></div>
        <div id="menu2">
          <?php blog_navi2();?></div>
        <?php echo index_t(1); ?>
		
		
		
		