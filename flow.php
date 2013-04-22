<?php
//评比流程
$title = '评比流程';
$index = 3;
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
            <!--<div class="area" style="border-top: 5px solid #990000;">
                <div class="area_content">
                    <a href="#"><img src="images/20120914031537358.jpg"></a>
                </div>

            </div>-->
            <div class="area">
                <div class="article_title">
                    <h2>评比流程</h2>
                </div>
                <div class="area_content">
                    <p class="first-pragraph">
                        评委打分包括现场展示打分和网上打分两部分，分值各占50%。
                    </p>
                    <p class="first-pragraph">
                        其中现场展示打分，是由各部门、单位信息化建设负责人对本部门、单位的网站进行现场展示，介绍网站的建设思路、概况以及特色，评委现场打分。
                    </p>
                    <p class="first-pragraph">
                        网上打分是评委在评选期间通过活动专题网站进行打分。主要是针对该网站的思路落实情况和实际运行情况，并对照评分标准的细则进行逐项打分，评委在打分时需针对每个二级指标打出相应分数，同时填写评语，特别是该二级指标未达到满分时，评委应尽可能地在相应文本框内填写评语并标注扣分原因。
                    </p>
                    <p class="first-pragraph">
                        评选结束后，系统会自动计算各二级网站的平均分数并进行排序，同时在后台综合所有评委的评语和建议，为每个网站生成一份详细的反馈报告，转发给该部门、单位信息化建设负责人，为该网站下一步的建设提供参考，起到以评促建的效果。
                    </p>
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