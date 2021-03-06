<!doctype html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="http://localhost:8080/application/views/home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="http://localhost:8080/application/views/home/css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="http://localhost:8080/application/views/home/js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="http://localhost:8080/application/views/home/js/bootstrap.js"></script>
<script src="http://localhost:8080/application/views/home/js/md5.js"></script>
<!-- /js -->
<!--fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="http://localhost:8080/application/views/home/css/default.css" />
<link rel="stylesheet" type="text/css" href="http://localhost:8080/application/views/home/css/component.css" />
<script src="http://localhost:8080/application/views/home/js/modernizr.custom.js"></script>
<!--/hover-grids-->
<script type="text/javascript" src="http://localhost:8080/application/views/home/js/move-top.js"></script>
<script type="text/javascript" src="http://localhost:8080/application/views/home/js/easing.js"></script>
<script type="text/javascript" src="http://localhost:8080/application/views/home/js/common.js"></script>
<!--script-->
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>
<script type="text/javascript">
getname_success=function(data){
    var user_name=document.getElementById("welcome_user").innerHTML="<font color=\"white\">欢迎，"+data.name+"</font>";
}
    function get_uname(){
        var url="http://localhost:8080/index.php?c=Main&a=getname";
        ajax_send(url,0,getname_success,load_error);
    }
</script>
<!--/script-->
</head>
    <body  onload="get_uname()">
<!--header-->
        <div class="header" id="home">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                        <span class="icon-bar"> </span>
                    </button>
                    <h1><a class="navbar-brand" href="http://localhost:8080/index.php">Education<br /><span>Tutorial</span></a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                                <li><p id="welcome_user" style="position:absolute;left:-150px;top:23px"><font color="white">欢迎，xxx</font></p></li>
                                <li><a href="http://localhost:8080/index.php"><span data-hover="first_page">首页</span></a></li>
                                <li><a href="http://localhost:8080/index.php?c=Browse&a=jumptobrowse"><span data-hover="choose_course">查看学生</span></a></li>
                                <li><a href="http://localhost:8080/index.php?c=Browse&a=jumptoselected"><span data-hover="course">已选学生</span></a></li>
                                <li><a href="http://localhost:8080/index.php?c=Blog&a=jump"><span data-hover="blog">博客</span></a></li>
                                <li><a href="http://localhost:8080/index.php?c=Profile&a=jump"><span data-hover="information">个人信息</span></a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div><!-- /.navbar-collapse -->
                <!-- /.container-fluid -->
                <div class="login-pop">
                        <div id="loginpop"><a href="#" id="logoutButton" onclick="Logout()"><span>&nbsp &nbsp Logout</span></a>
                        </div>
                        </div><script src="http://localhost:8080/application/views/home/js/menu_jquery.js"></script>
                        </div>
            </nav>
<!--/script-->
           <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->
<div class="background_img">
    <div class="container">
    <script src="http://localhost:8080/application/views/home/js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</div>
    </div>
<!--header-->
<!--testmonials-->
<div class="user_background">
    <div class="container">
            <div class="testimonial-nfo">
                <h3>“未来之星”</h3>
                <h5>每一个人都是未来的主人，我们的生活我做主。 </span></h5>
            </div>
            <div class="testimonial-grids">
                <div class="testimonial-grid">
                    <p><span>"</span> 一对一家教平台，致力于打造更高质量的一对一的在线教育平台，只有你想不到，没有我们做不到。梦想的天空分外蓝，世上无难事，只要肯攀登。<span> "</span></p>
                </div>
            </div>
    </div>
</div>
<br />
<div class="profile">
    <center><form id="profileForm">
        <fieldset id="body">
            <fieldset>
                <label for="name">姓 名:</label>
                <input type="text" id="name" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">请填写真实姓名</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label for="age">年 龄:</label>
                <input type="text" id="age" style="position:absolute;left:330px">
            </fieldset>
            <br />
            <fieldset>
                <label for="password">旧 密 码:</label>
                <input type="password" id="u_old_password" style="position:absolute;left:330px" placeholder="请输入旧密码">
            </fieldset>
            <br />
            <fieldset>
                <label for="password">新 密 码:</label>
                <input type="password" id="u_new_password" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">此项将作为登录密码，请牢记</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label for="password">确 认:</label>
                <input type="password" id="confirm" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">请再次输入密码确认</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label>年 级:</label>
                <select id="grade" style="position:absolute;left:330px">
                    <option value=""></option>
                    <option value="大学一年级">大学一年级</option>
                    <option value="大学二年级">大学二年级</option>
                    <option value="大学三年级">大学三年级</option>
                    <option value="大学四年级">大学四年级</option>
                </select>
            </fieldset>
            <br />
            <fieldset>
                <label for="school">学 校:</label>
                <input type="text" id="school" style="position:absolute;left:330px">
            </fieldset>
            <br />
            <fieldset>
                <label for="tel">电 话:</label>
                <input type="text" id="tel" style="position:absolute;left:330px">
            </fieldset>
            <br />
            <fieldset>
                <label for="person_profile">简 介:</label>
                <textarea id="person_profile" style="position:absolute;left:330px;height:100px;width:300px"></textarea>
            </fieldset>
            <br />
            <br />
            <br />
            <fieldset>
                <label>擅长科目:</label>
                <label for="good_chinese" style="position:absolute;left:350px"><input type="checkbox" id="good_chinese" style="position:absolute;left:-15px;">语文</label>
                <label for="good_math" style="position:absolute;left:400px"><input type="checkbox" id="good_math" style="position:absolute;left:-15px;">数学</label>
                <label for="good_english" style="position:absolute;left:450px"><input type="checkbox" id="good_english" style="position:absolute;left:-15px;">英语</label>
                <label for="good_physics" style="position:absolute;left:500px"><input type="checkbox" id="good_physics" style="position:absolute;left:-15px;">物理</label>
                <label for="good_chemistry" style="position:absolute;left:550px"><input type="checkbox" id="good_chemistry" style="position:absolute;left:-15px;">化学</label>
                <label for="good_biology" style="position:absolute;left:600px"><input type="checkbox" id="good_biology" style="position:absolute;left:-15px;">生物</label>
                <label for="good_noedit" style="position:absolute;left:650px"><input type="checkbox" id="good_noedit" style="position:absolute;left:-15px;">不修改</label>
            </fieldset>
            <br />
            <fieldset>
                <label>教学科目:</label>
                <label for="week_chinese" style="position:absolute;left:350px"><input type="checkbox" id="week_chinese" style="position:absolute;left:-15px;">语文</label>
                <label for="week_math" style="position:absolute;left:400px"><input type="checkbox" id="week_math" style="position:absolute;left:-15px;">数学</label>
                <label for="week_english" style="position:absolute;left:450px"><input type="checkbox" id="week_english" style="position:absolute;left:-15px;">英语</label>
                <label for="week_physics" style="position:absolute;left:500px"><input type="checkbox" id="week_physics" style="position:absolute;left:-15px;">物理</label>
                <label for="week_chemistry" style="position:absolute;left:550px"><input type="checkbox" id="week_chemistry" style="position:absolute;left:-15px;">化学</label>
                <label for="week_biology" style="position:absolute;left:600px"><input type="checkbox" id="week_biology" style="position:absolute;left:-15px;">生物</label>
                <label for="week_noedit" style="position:absolute;left:650px"><input type="checkbox" id="week_noedit" style="position:absolute;left:-15px;">不修改</label>

            </fieldset>
            <br />
            <input type="button" id="profile" value="修改" style="position:absolute;" onclick="Profile_check_teacher()">
            <script type="text/javascript">
                logout_success=function(data){
                    if(data.status=="success"){
                        window.location.href="http://localhost:8080/index.php";
                    }
                }
                Profile_success=function(data){
                    if(data.status=="success"){
                        alert("修改成功！");
                        if(data.passwordmodify=="yes"){
                            var url="http://localhost:8080/index.php?c=Logout&a=logout";
                            ajax_send(url,0,logout_success,load_error);
                        }
                        else{
                            var url="http://localhost:8080/index.php?c=Main&a=jump";
                            window.location.href=url;
                        }
                    }
                    else{
                        alert(data.reason);
                    }
                }
                function Profile_check_teacher(){
                    var user_name=document.getElementById("name");
                    var user_age=document.getElementById("age");
                    var old_password=document.getElementById("u_old_password");
                    var new_password=document.getElementById("u_new_password");
                    var user_confirm=document.getElementById("confirm");
                    var user_grade=document.getElementById("grade");
                    var user_school=document.getElementById("school");
                    var user_tel=document.getElementById("tel");
                    var user_profile=document.getElementById("person_profile");

                    var good_chinese=document.getElementById("good_chinese");
                    var good_math=document.getElementById("good_math");
                    var good_english=document.getElementById("good_english");
                    var good_physics=document.getElementById("good_physics");
                    var good_chemistry=document.getElementById("good_chemistry");
                    var good_biology=document.getElementById("good_biology");
                    var good_noedit=document.getElementById("good_noedit");

                    var week_chinese=document.getElementById("week_chinese");
                    var week_chinese_check=week_chinese.checked?1:0;
                    var week_math=document.getElementById("week_math");
                    var week_math_check=week_math.checked?1:0;
                    var week_english=document.getElementById("week_english");
                    var week_english_check=week_english.checked?1:0;
                    var week_physics=document.getElementById("week_physics");
                    var week_physics_check=week_physics.checked?1:0;
                    var week_chemistry=document.getElementById("week_chemistry");
                    var week_chemistry_check=week_chemistry.checked?1:0;
                    var week_biology=document.getElementById("week_biology");
                    var week_biology_check=week_biology.checked?1:0;
                    var week_noedit=document.getElementById("week_noedit");
                    var ident_pw;
                    var ident_course;
                    var ident_goodcourse;
                    var course_str="";
                    if(!(old_password.value==""&&new_password.value==""&&user_confirm.value=="")){
                        if(old_password.value!=""&&new_password.value!=""&&user_confirm.value!=""){
                            ident_pw=1;
                        }
                        else{
                            ident_pw=2;
                        }
                    }
                    else
                        ident_pw=0;
                    if(user_name.value.length>12){
                        alert("姓名太长！");
                    }
                    else if(user_age.value!=""&&(isNaN(parseInt(user_age.value))||parseInt(user_age.value)<1||parseInt(user_age.value)>100)){
                        alert("年龄格式不正确！");
                    }
                    else if(ident_pw==2){
                        alert("请输入完整的密码修改信息！");
                    }
                    else if(old_password.value.length>16){
                        alert("旧密码过长！");
                    }
                    else if(new_password.value.length>16){
                        alert("新密码过长！");
                    }
                    else if(new_password.value!=user_confirm.value){
                        alert("两次输入的密码不匹配！");
                    }
                    else if(user_tel.value!=""&&isNaN(parseInt(user_tel.value))){
                        alert("电话不能为非数字！");
                    }
                    else if(user_tel.value!=""&&user_tel.value.length!=11){
                        alert("必须为11位手机号码！");
                    }
                    else if(user_profile.value.length>100){
                        alert("简介太长！");
                    }
                    else if(!good_chinese.checked&&!good_math.checked&&!good_english.checked&&!good_physics.checked&&!good_chemistry.checked&&!good_biology.checked&&!good_noedit.checked){
                        alert("擅长科目至少选择一项！");
                    }
                    else if(good_noedit.checked&&(good_chinese.checked||good_math.checked||good_english.checked||good_physics.checked||good_chemistry.checked||good_biology.checked)){
                        alert("擅长科目选项有冲突！");
                    }
                    else if(!week_chinese.checked&&!week_math.checked&&!week_english.checked&&!week_physics.checked&&!week_chemistry.checked&&!week_biology.checked&&!week_noedit.checked){
                        alert("教学科目至少选择一项！");
                    }
                    else if(week_noedit.checked&&(week_chinese.checked||week_math.checked||week_english.checked||week_physics.checked||week_chemistry.checked||week_biology.checked)){
                        alert("教学科目选项有冲突！");
                    }
                    else{
                        if(week_noedit.checked)
                            ident_course=0;
                        else{
                            ident_course=1;
                        }
                        if(good_noedit.checked)
                            ident_goodcourse=0;
                        else{
                            if(good_chinese.checked)
                                course_str+="语文 ";
                            if(good_math.checked)
                                course_str+="数学 ";
                            if(good_english.checked)
                                course_str+="英语 ";
                            if(good_physics.checked)
                                course_str+="物理 ";
                            if(good_chemistry.checked)
                                course_str+="化学 ";
                            if(good_biology.checked)
                                course_str+="生物 ";
                            ident_goodcourse=1;
                        }
                        var json="{"+"\"uname\":\""+user_name.value+"\",\"age\":\""+user_age.value+"\",\"old_password\":\""+hex_md5(old_password.value)+"\",\"new_password\":\""+hex_md5(new_password.value)+"\",\"grade\":\""+user_grade.value+"\",\"school\":\""+user_school.value+"\",\"tel\":\""+user_tel.value+"\",\"pw_identify\":"+ident_pw+",\"chinese\":"+week_chinese_check+",\"math\":"+week_math_check+",\"english\":"+week_english_check+",\"physics\":"+week_physics_check+",\"chemistry\":"+week_chemistry_check+",\"biology\":"+week_biology_check+",\"teachcourse_identify\":"+ident_course+",\"goodcourse\":\""+course_str+"\",\"course_identify\":"+ident_goodcourse+",\"profile\":\""+user_profile.value+"\"}";
                        json = JSON.parse(json);
                        var post_url="http://localhost:8080/index.php?c=Profile&a=editTeacherProfile";
                        ajax_send(post_url,json,Profile_success,load_error);
                    }
                }
            </script>
        </fieldset>
    </form></center>
</div>

<script type="text/javascript">
logout_success = function(data) {
    var url = "http://localhost:8080/index.php";
    window.location.href = url;
}
function Logout() {
    var url = "http://localhost:8080/index.php?c=Logout&a=logout";
    ajax_send(url, 0, logout_success, load_error);
};
</script>
<!--\testmonials-->
<!--specfication-->
<?php include ("foot.php") ?>
<!--/copy-rights-->
    </body>
</html>
