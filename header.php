<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $title ?></title>
    <link href="styles/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div class="wrapper">
        <div class="top">
            <div id="logo">
                <a href="./"><img alt="动易网络" src="images/logo.gif"></a>
            </div>
            <div id="title">
                <img alt="动易网络" src="images/title.gif">
            </div>
        </div>
        <div class="menu">
            <div class="main_menu" id="menubox">
                <ul>
                    <li <?php if ($index ==0) {echo 'class="current"';};?>><a target="_self" href="./index.php"><span><em>首页</em></span></a></li>
                    <li <?php if ($index ==1) {echo 'class="current"';};?>><a target="_self" href="./scheme.php"><span><em>活动方案</em></span></a></li>
                    <li <?php if ($index ==2) {echo 'class="current"';};?>><a target="_self" href="./measure.php"><span><em>评分标准</em></span></a></li>
                    <li <?php if ($index ==3) {echo 'class="current"';};?>><a target="_self" href="./flow.php"><span><em>评比流程</em></span></a></li>
                    <li <?php if ($index ==4) {echo 'class="current"';};?>><a target="_self" href="./mesurein.php"><span><em>打分入口</em></span></a></li>
                    <li <?php if ($index ==5) {echo 'class="current"';};?>><a target="_self" href="./result.php"><span><em>评比结果</em></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>