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
getteachers_success=function(data){

}
    function get_teachers(){
        var url="http://localhost:8080/index.php?c=Main&a=getname";
        ajax_send(url,0,getname_success,load_error);
        url="http://localhost:8080/index.php?c=Main&a=getAllTeacherList";
        ajax_send(url,0,gettachers_success,load_error);
        alert("get!");
    }
</script>
<!--/script-->
</head>
    <body  onload="get_teachers()">
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
                                <li><a href="http://localhost:8080/application/views/home/about.php"><span data-hover="choose_course">选课</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/typography.php"><span data-hover="course">已选课程</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/gallery.php"><span data-hover="blog">博客</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/contact.php"><span data-hover="information">个人信息</span></a></li>
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
            <div class="col-lg-6 in-gp-tb">
                <div class="input-group">
                    <input class="form-control" placeholder="Search for..." type="text" style="position:absolute;left:300px;width:500px;">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" style="position:absolute;left:800px;">Go!</button>
                    </span>
                </div>
            </div>
            <br />
            <br />
            <br />
            <div class="testimonial-grids">
                <div class="testimonial-grid">
                    <p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>
                </div>
            </div>
    </div>
</div>
<div class="effect-grid">
    <div class="container">
        <ul class="grid cs-style-5">
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a1.jpg" alt="img03">
                        <figcaption>
                        <h3 id="course1">course</h3>
                            <span id="teacher1">teacher1</span>
                            <input type="button" id="choose1" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a2.jpg" alt="img04">
                        <figcaption>
                        <h3 id="course2">course2</h3>
                            <span id="teacher2">teacher2</span>
                            <input type="button" id="choose2" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a3.jpg" alt="img01">
                        <figcaption>
                        <h3 id="course3">course3</h3>
                            <span id="teacher3">teacher3</span>
                            <input type="button" id="choose3" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a4.jpg" alt="img02">
                        <figcaption>
                        <h3 id="course4">cours4</h3>
                            <span id="teacher1">teacher4</span>
                            <input type="button" id="choose1" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a5.jpg" alt="img06">
                        <figcaption>
                        <h3 id="course5">cours5</h3>
                            <span id="teacher5">teacher5</span>
                            <input type="button" id="choose5" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="http://localhost:8080/application/views/home/images/a6.jpg" alt="img05">
                        <figcaption>
                        <h3 id="course6">course6</h3>
                            <span id="teacher6">teacher6</span>
                            <input type="button" id="choose6" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="选课">
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <ul class="pagination pagination-lg">
                <li><a href="#" onclick="edithtml()">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
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
