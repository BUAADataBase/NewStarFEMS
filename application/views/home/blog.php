<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Education Tutorial</title>
<!--
Classic Template
http://www.cssmoban.com/tm-488-classic
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="http://localhost:8080/application/views/home/css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="http://localhost:8080/application/views/home/css/templatemo-style.css">                                   <!-- Templatemo style -->
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
    getblog_success=function(data){
        var blog=document.getElementById("blog");
        var blog1=document.getElementById("blog1");
        var blog2=document.getElementById("blog2");
        var blog3=document.getElementById("blog3");
        var str_blog="<h3 class=\"tm-gold-text\">"+data[0].headline+"</h3>";
        str_blog+="<p>作者："+data[0].uname+"</p>";
        str_blog+="<img src=\"http://localhost:8080/application/views/home/images/tm-img-1010x336-1.jpg\" alt=\"Image\" class=\"img-fluid tm-img-post\">";
        str_blog+=data[0].blogmessage;
        var str_blog1="<img src=\"http://localhost:8080/application/views/home/images/tm-img-310x180-1.jpg\" alt=\"Image\" class=\"tm-margin-b-30 img-fluid\">";
        str_blog1+="<h4 class=\"tm-margin-b-20 tm-gold-text\">"+data[1].headline+"</h4>";
        str_blog1+="<p class=\"tm-margin-b-20\">作者："+data[1].uname+"</p>";
        str_blog1+="<a href=\"#\" class=\"tm-btn text-uppercase\">Detail</a>";
        var str_blog2="<img src=\"http://localhost:8080/application/views/home/images/tm-img-310x180-2.jpg\" alt=\"Image\" class=\"tm-margin-b-30 img-fluid\">";
        str_blog2+="<h4 class=\"tm-margin-b-20 tm-gold-text\">"+data[2].headline+"</h4>";
        str_blog2+="<p class=\"tm-margin-b-20\">作者："+data[2].uname+"</p>";
        str_blog2+="<a href=\"#\" class=\"tm-btn text-uppercase\">Detail</a>";
        var str_blog3="<img src=\"http://localhost:8080/application/views/home/images/tm-img-310x180-3.jpg\" alt=\"Image\" class=\"tm-margin-b-30 img-fluid\">";
        str_blog3+="<h4 class=\"tm-margin-b-20 tm-gold-text\">"+data[3].headline+"</h4>";
        str_blog3+="<p class=\"tm-margin-b-20\">作者："+data[3].uname+"</p>";
        str_blog3+="<a href=\"#\" class=\"tm-btn text-uppercase\">Detail</a>";
        blog.innerHTML=str_blog;
        blog1.innerHTML=str_blog1;
        blog2.innerHTML=str_blog2;
        blog3.innerHTML=str_blog3;
    }
    function get_blog(){
        get_uname();
        var url="http://localhost:8080/index.php?c=Blog&a=getBlog";
        ajax_send(url,0,getblog_success,load_error);
    }
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body onload="get_blog()">

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
                                <li><a href="http://localhost:8080/index.php?c=SC&a=jump"><span data-hover="choose_course">选课</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/typography.php"><span data-hover="course">已选课程</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/gallery.php"><span data-hover="blog">博客</span></a></li>
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

        <div class="tm-blog-img-container">

        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                        <div id="blog" class="tm-blog-post">
                            <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                            <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                            <img src="http://localhost:8080/application/views/home/images/tm-img-1010x336-1.jpg" alt="Image" class="img-fluid tm-img-post">

                            <p>You can help templatemo by telling your friends about our HTML CSS templates. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                            <p>Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.</p>

                            <p>Quisque vel sem eu turpis ullamcorper euismod. Praesent quis nisi ac augue luctus viverra. Sed et dui nisi. Fusce vitae dapibus justo. Pellentesque accumsan est ac posuere imperdiet. Curabitur eros mi, lacinia at euismod quis, dapibus vel ligula. Ut sodales erat vitae nunc tempor mollis. Donec tempor lobortis tortor, in feugiat massa facilisis sed. Ut dignissim viverra pretium. In eu justo maximus turpis feugiat finibus scelerisque nec eros. Cras nec lectus tempor nibh vestibulum eleifend et ac elit.</p>

                            <p>Sed vitae luctus libero. Nam sem neque, finibus id sem pharetra, cursus porttitor ligula. Praesent aliquam fermentum dui, vitae venenatis libero vulputate ac. Fusce bibendum scelerisque magna eget iaculis. Phasellus non arcu eu sem convallis semper. Duis vulputate dignissim rhoncus.</p>
                        </div>

                        <div class="row tm-margin-t-big">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div id="blog1" class="tm-content-box">
                                    <img src="http://localhost:8080/application/views/home/images/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div id="blog2" class="tm-content-box">
                                    <img src="http://localhost:8080/application/views/home/images/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Read More</a>
                                </div>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div id="blog3" class="tm-content-box">
                                    <img src="http://localhost:8080/application/views/home/images/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                                    <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                                    consequat mauris dapibus id. Donec
                                    scelerisque porttitor pharetra</p>
                                    <a href="#" class="tm-btn text-uppercase">Detail</a>
                                </div>

                            </div>
                        </div>

                    </div>


                </div>

            </div>
        </section>

        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">
                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Proin eu posuere felis</h3>
                            <div class="tm-gray-bg">
                                <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                <p>Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                                <p><strong>Danny Egg (Executive)</strong></p>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-footer-content-box tm-footer-links-container">

                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Nulla tortor dolor</h3>
                            <nav>
                                <ul class="nav">
                                    <li><a href="#" class="tm-footer-link">Tincidunt non faucibus</a></li>
                                    <li><a href="#" class="tm-footer-link">Vestibulum tempor</a></li>
                                    <li><a href="#" class="tm-footer-link">Fusce non turpis euismod</a></li>
                                    <li><a href="#" class="tm-footer-link">Lorem ipsum dolor sit</a></li>
                                    <li><a href="#" class="tm-footer-link">Nam in augue consectetur</a></li>
                                    <li><a href="#" class="tm-footer-link">Text Link Color #CCCC66</a></li>
                                </ul>
                            </nav>

                        </div>

                    </div>

                    <!-- Add the extra clearfix for only the required viewport
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->
                    <div class="clearfix hidden-lg-up"></div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">

                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Etiam mollis ornare</h3>
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p><hr class="tm-margin-b-30">
                            <p class="tm-margin-b-30">Aenean cursus tellus mauris, quis consequat mauris dapibus id. Donec scelerisque porttitor pharetra.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Read More</a>

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-footer-content-box">

                            <h3 class="tm-gold-text tm-title tm-footer-content-box-title">Fusce non turpis</h3>
                            <div class="tm-margin-b-30">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-1.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-2.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-3.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-4.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-5.jpg" alt="Image" class="tm-footer-thumbnail">
                                <img src="http://localhost:8080/application/views/home/images/tm-img-100x100-6.jpg" alt="Image" class="tm-footer-thumbnail">
                            </div>
                            <p class="tm-margin-b-20">Curabitur dui massa, aliquam quis mi sed, tempor vulputate tellus. Sed vestibulum non neque.</p>
                            <a href="#" class="tm-btn tm-btn-gray text-uppercase">Browse</a>

                        </div>

                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text">Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
logout_success = function(data) {
    var url = "http://localhost:8080/index.php";
    window.location.href = url;
}
function Logout() {
    var url = "http://localhost:8080/index.php?c=Logout&a=logout";
    ajax_send(url, 0, logout_success, load_error);
};
</script>               <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

</body>
</html>