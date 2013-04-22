<?php
//打分入口
$title = '打分入口';
$index = 4;
include "./header.php";
?>
    <div class="wrapper">
        <!--侧栏开始-->
        <div class="sidebar mtop10">
            <!--会员中心开始-->
            <div class="user">
                <h3>评委登录</h3>
                <div class="user_info area_content">
                    <div class="user_login">
                        <p><label>用户名：</label></p>
                        <p><input type="text" maxlength="20" name="username" id="username"></p>
                        <p>密&nbsp;&nbsp;码：</p>
                        <p><input type="password"  name="userpass"></p>
                        <input type="submit" class="" value="登录" id="login2">

                    </div>
                </div>
            </div>
            <div class="user" style="margin-top: 10px;">
                <h3>组织机构</h3>
                <div class="area_content">
                    <div class="zuzhidanwei" style="text-align: center; font-size: 18px;">
                        信息化建设领导小组<br> 信息化建设办公室<br> 宣传部<br> 信息技术中心
                    </div>
                </div>
            </div>


            <!--会员中心结束-->
        </div>
        <!--侧栏结束-->
        <!--内容块开始-->
        <div class="content">
            <!--模块一开始-->
            <div class="area">
                <div class="article_title">
                    <h2>打分入口</h2>
                </div>
                <div class="area_content">
                    <p class="first-pragraph">暂未开放</p>
                </div>
            </div>
        </div>
        <!--内容块结束-->
        <div class="clear">
        </div>

    </div>
<?php
include 'footer.php';
?>