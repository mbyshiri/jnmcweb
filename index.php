<?php
//首页
$title = '首页';
$index = 0;
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
    <div class="area" style="border-top: 5px solid #990000;">
        <div class="area_content">
            <a href="#"><img src="images/20130418161307419.png" style="height: 350px; width: 660px;"></a>
        </div>
    </div>
    <!--模块一开始-->
    <div class="area">
        <div class="tag_img" style="border: 1px solid #990000; border-bottom: none; position: relative; height: 50px;"><img src="images/index_tag_1.gif" style="left: -10px; position: absolute;"></div>
        <div class="area_content">
            <p class="first-pragraph">
                通过本次活动，以评促建，以评促改，促使学校各二级网站达到高校教育信息化评价指标体系要求，进一步提升网站品质以及为教学、科研、管理服务的能力，鼓励构建信息丰富、内容准确、规划完整的网站并促进互相观摩交流，打造多元化互动沟通的平台。            </p>
        </div>
    </div>
    <!--模块一结束-->
    <!--模块二开始-->
    <div class="area">
        <div class="tag_img" style="border: 1px solid #990000; border-bottom: none; position: relative; height: 50px;"><img src="images/index_tag_2.gif" style="left: -10px; position: absolute;"></div>
        <div class="area_content">
            <p class="first-pragraph">
                2013年4月下旬至6月下旬：其中4月下旬对活动方案、评分标准的草案进行讨论、定稿，5月至6月中旬由各部门、单位根据指标体系对各自的网站重新规划、建设和完善，6月下旬进行评比打分。
            </p>
        </div>
    </div>
    <!--模块二结束-->
    <div class="area">
        <div class="tag_img" style="border: 1px solid #990000; border-bottom: none; position: relative; height: 50px;"><img src="images/index_tag_3.gif" style="left: -10px; position: absolute;"></div>
        <div class="area_content">
            <p class="first-pragraph">
                4月30日前作为征求意见稿，广泛征求各部门、单位的意见和建议。
            </p>
            <p class="first-pragraph">5月1日定稿后即作为本次评比活动的正式评分标准。</p>
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
