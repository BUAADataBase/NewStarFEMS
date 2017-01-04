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
                                <li><p id="welcome_user" style="display:block;width:1000px;position:absolute;left:-150px;top:23px"><font color="white">欢迎，xxx</font></p></li>
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
                        <div id="loginpop"><a href="#" id="logoutButton" onclick="Logout()"><span>Login out</span></a>
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
