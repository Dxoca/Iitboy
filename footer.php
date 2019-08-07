<?php 
/**
 * 页面底部信息 dxoca.cn
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<!--end #content-->
</div><div></div>
<div id="footerbar-out" style="/*clear:both; width: 1200px;margin: 0 auto;padding: 0;*/">
<div id="footerbar">
	<a onclick="goTop();" href="javascript:void(0);">返回顶部</a> &nbsp;&nbsp;
	<a href="/">首页</a> &nbsp;&nbsp;
<a href="<?php echo BLOG_URL; ?>m/" title="手机版本" target="_blank">手机版本</a> &nbsp;&nbsp;
<a href="<?php echo BLOG_URL; ?>admin" class="hint--left hint--error" title="站长的后花园，闲人止步！ ^_^" >后花园</a>&nbsp;&nbsp;
<a href="https://dxoca.cn/?plugin=yls_reg" title="会员注册" target="_blank">会员注册</a> &nbsp;&nbsp;
	<br>版权所有：<a href="<?php echo BLOG_URL; ?>" class="chaffle" data-lang="zh"><?php echo $blogname; ?></a>&nbsp;&nbsp;&nbsp;
站长：<span class="chaffle" data-lang="zh">
<?php
if (!empty($tws)):
    echo $author; //微语;
elseif (isset($logid)):
    blog_author($author); //日志＋自建页面;
else:
    blog_author($value['author']); //列表页
endif;
?>
</span>&nbsp;&nbsp;&nbsp;
<a href="https://dxoca.cn" target="_blank" class="hint--top hint--rounded" title="看看作者还有什么新鲜的“主题”勒？">主题</a>：<a href="http://www.iitboy.cn" class="hint--top hint--bounce" title="寒光唯美式V2.4.1" target="_blank">寒光唯美式V2.4.1</a><!--www.iitboy.cn-->&nbsp;
<a href="http://www.emlog.net" class="hint--left hint--info" title="大名鼎鼎的emlog博客系统，地球人都在用。" target="_blank" class="shake">程序：emlog</a>&nbsp;&nbsp;
<a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a>&nbsp;&nbsp;<?php echo $footer_info; ?>&nbsp;&nbsp;
	<?php doAction('index_footer'); ?>
</div>
<div id="dening">
<div id="shangxia" class="animated bounceInUp">
<div id="shang" title0="回到顶部"></div>
<div id="comt"><a id="ds-reset" title0="随便看看评论喽~"><img src="<?php echo TEMPLATE_URL; ?>images/kongbai.png"></a></div>
<div id="xia" title0="直下底部"></div>
</div>
<script>function fuckyou(){window.close(),window.location="about:blank"}function ck(){return console.profile(),console.profileEnd(),console.clear&&console.clear(),"object"==typeof console.profiles?console.profiles.length>0:void 0}function hehe(){(window.console&&(console.firebug||console.table&&/firebug/i.test(console.table()))||"object"==typeof opera&&"function"==typeof opera.postError&&console.profile.length>0)&&fuckyou(),"object"==typeof console.profiles&&console.profiles.length>0&&fuckyou()}hehe(),window.onresize=function(){window.outerHeight-window.innerHeight>200&&fuckyou()};</script>
<script data-no-instant="">function stop(){return false}document.oncontextmenu=stop;InstantClick.on('change',function(isInitialLoad){if(isInitialLoad===false){if(typeof Prism!=='undefined')Prism.highlightAll(true,null)}});InstantClick.init();</script>
<script>window['console']['log']( '\u5bd2\u5149\u552f\u7f8e\u5f0f\x56\x32\x2e\x34\x2e\x31 \u535a\u5ba2\u5730\u5740\uff1a\x77\x77\x77\x2e\x69\x69\x74\x62\x6f\x79\x2e\x63\x6e \u6a21\u7248\uff08\u9001\u64ad\u653e\u5668\uff09\u4ef7\u683c\uff1a\x35\x30\x52\x4d\x42 \u4f5c\u8005\x51\x51\uff1a\x39\x38\x37\x32\x38\x34\x32\x34\x32');document.body.oncopy=function(){alert("嘿嘿，复制成功咯！若要转载请务必保留原文链接，一定要注明来源哟~，谢谢合作！");};jQuery(document).ready(function($){var sweetTitles={x:10,y:20,tipElements:"a,span,img,div ",noTitle:false,init:function(){var noTitle=this.noTitle;$(this.tipElements).each(function(){$(this).mouseover(function(e){if(noTitle){isTitle=true}else{isTitle=$.trim(this.title)!=''}if(isTitle){this.myTitle=this.title;this.title="";var tooltip="<div class='tooltip'><div class='tipsy-arrow tipsy-arrow-n'></div><div class='tipsy-inner'>"+this.myTitle+"</div></div>";$('body').append(tooltip);$('.tooltip').css({"top":(e.pageY+20)+"px","left":(e.pageX-20)+"px"}).show('fast')}}).mouseout(function(){if(this.myTitle!=null){this.title=this.myTitle;$('.tooltip').remove()}}).mousemove(function(e){$('.tooltip').css({"top":(e.pageY+20)+"px","left":(e.pageX-20)+"px"})})})}};$(function(){sweetTitles.init()})});eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('g(0).h(e(){e d(){0.9=0[b]?" (｡･ω･｡) 你好，小伙伴！-寒光博客":a}f b,c,a=0.9;"2"!=4 0.8?(b="8",c="k"):"2"!=4 0.5?(b="5",c="j"):"2"!=4 0.6&&(b="6",c="l"),("2"!=4 0.7||"2"!=4 0[b])&&0.7(c,d,!1)});',22,22,'document||undefined||typeof|mozHidden|webkitHidden|addEventListener|hidden|title|||||function|var|jQuery|ready|Hi|mozvisibilitychange|visibilitychange|webkitvisibilitychange'.split('|'),0,{}));$(document).ready(function(){$('.chaffle').chaffle()});window.onload=function(){Gifffer()};window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"1","bdPos":"right","bdTop":"192"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script src="<?php echo TEMPLATE_URL; ?>js/iitboy.js" type="text/javascript"></script>
<script src="<?php echo TEMPLATE_URL; ?>js/swfobject_modified.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo BLOG_URL;?>content/plugins/Fw_player/style/player.css">
<script type="text/javascript" src="http://api.hitokoto.us/rand?encode=js&charset=utf-8"></script>
<script>
		//初始化 
        setTimeout("getkoto()",1000);
        //加载
        var t;
        function getkoto(){
            var hjs = document.createElement('script');
            hjs.setAttribute('id', 'hjs');
            hjs.setAttribute('src', 'http://api.hitokoto.us/rand?encode=jsc&fun=echokoto');
			   document.getElementById("hjsbox").appendChild(hjs);
            t=setTimeout("getkoto()",5000);
        }
        //输出 代码来源 http://www.iitboy.cn/wzjs/53.html<!--dxoca-->
        function echokoto(result){
            var hc = eval(result);
            //$("#hitokoto").fadeTo(300,0);
            document.getElementById("hitokoto").innerHTML = hc.hitokoto;
            //$("#hitokoto").fadeTo(300,0.75);
        }
	
		</script>
</div></div>
<div class="loading">
  <div class="loading2">
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
    <div class="block"></div>
  </div>
</div>
<script type="text/javascript">
geci="";welcome="open";
tips="欢迎光临寒光博客";
setTimeout(function(){$player.toggleClass("show")},6000);</script>

<?php doAction('Fw_iitboy'); ?>
</body>
</html>
