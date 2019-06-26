<?php 
/**
 * 自定义404页面 
 */
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head lang="zh-CN">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>抱歉 此页面被键盘大侠拿去指点江山了【寒光博客-www.dxoca.cn】</title>
  <style>
    html {
      display: table;
      height: 100%;
      width: 100%;
    }

    body {
      display: table-cell;
      vertical-align: middle;
    }
    
    .error {
      width: 582px;
      height: 363px;
      margin: 0 auto;
      text-align: center;
    }

    .keyboard {
      display: block;
      width: 582px;
    }

    .keyboard-button {
      width: 180px;
      margin-top: 16px;
    }
    
    @media (max-width: 582px) {
      .error {
        width: 80%;
      }
      .keyboard {
        width: 100%;
      }
      .keyboard-button {
        width: 30%;
      }
    }

  </style>
</head>
<body>
<div class="error">
 <img class="keyboard" src="<?php echo TEMPLATE_URL; ?>images/baoqian.png" alt="404"/>
  <a href="http://www.dxoca.cn">
    <img class="keyboard-button" src="<?php echo TEMPLATE_URL; ?>images/fanhui.png"alt="home"/>
  </a>
</div>
</body>
</html>
