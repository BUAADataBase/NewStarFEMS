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
    getuserinfo_success=function(data){
        var datalength=data.length;
        var grandparentnode=document.getElementById("table");
        for(var i=0;i<datalength;i++){
            var parentnode=document.createElement("tr");
            var childnode1=document.createElement("td");
            childnode1.innerHTML=data[i].uid;
            childnode1.setAttribute("style","text-align:center");
            var childnode2=document.createElement("td");
            childnode2.innerHTML=data[i].uname;
            childnode2.setAttribute("style","text-align:center");
            var childnode3=document.createElement("td");
            childnode3.innerHTML=data[i].money;
            childnode3.setAttribute("style","text-align:center");
            var childnode4=document.createElement("td");
            childnode4.innerHTML=data[i].phonenumber;
            childnode4.setAttribute("style","text-align:center");
            var childnode5=document.createElement("td");
            childnode5.innerHTML=data[i].identify==0?"学生":"老师";
            childnode5.setAttribute("style","text-align:center");
            var childnode6=document.createElement("td");
            var childnode7=document.createElement("center");
            var childnode8=document.createElement("a");
            childnode8.setAttribute("href","#");
            childnode8.setAttribute("onclick","deleteUser("+data[i].uid+")");
            childnode8.setAttribute("style","text-align:center");
            childnode8.innerHTML="删除";
            childnode7.appendChild(childnode8);
            childnode6.appendChild(childnode7);
            parentnode.appendChild(childnode1);
            parentnode.appendChild(childnode2);
            parentnode.appendChild(childnode3);
            parentnode.appendChild(childnode4);
            parentnode.appendChild(childnode5);
            parentnode.appendChild(childnode6);
            grandparentnode.appendChild(parentnode);

        }
    }
    function get_userInfo(){
        get_uname();
        var url="http://localhost:8080/index.php?c=Root&a=getUserInfo";
        ajax_send(url,0,getuserinfo_success,load_error);
    }
    delete_success=function(data){
        if(data.status=="success")
            alert("删除成功！");
        else
            alert(data.reason);
        window.location.href="http://localhost:8080/index.php?c=Root&a=jump";
    }
    function deleteUser(par){
        var url="http://localhost:8080/index.php?c=Root&a=deleteUser";
        var json="{\"uid\":"+par+"}";
        json=JSON.parse(json);
        ajax_send(url,json,delete_success,load_error);
    }
</script>
<!--/script-->
</head>
    <body  onload="get_userInfo()">
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
                                <li><a href="http://localhost:8080/index.php?c=Statistics&a=jump"><span data-hover="choose_course">统计报表</span></a></li>
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
            <div class="col-lg-6 in-gp-tb">
                <div class="input-group">
                    <input class="form-control" id="search" placeholder="Search for..." type="text" style="position:absolute;left:300px;width:500px;">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" style="position:absolute;left:800px;" onclick="get_teachers()">Go!</button>
                    </span>
                </div>
            </div>
            <br />
            <br />
            <br />
            <div class="testimonial-grids">
                <div class="testimonial-grid">
                    <p><span>"</span> 一对一家教平台，致力于打造更高质量的一对一的在线教育平台，只有你想不到，没有我们做不到。梦想的天空分外蓝，世上无难事，只要肯攀登。<span> "</span></p>
                </div>
            </div>
    </div>
</div>
<div>
    <table class="table table-bordered" style="width=1000px;">
      <caption style="text-align: center">用户信息</caption>
      <colgroup>
          <col style="width:12%">
          <col style="width:23%">
          <col style="width:23%">
          <col style="width:20%">
          <col style="width:10%">
          <col style="width:12%">
        </colgroup>
      <thead>
        <tr>
          <th style="text-align:center">用户编号</th>
          <th style="text-align:center">用户名</th>
          <th style="text-align:center">收入或支付</th>
          <th style="text-align:center">电话</th>
          <th style="text-align:center">身份</th>
          <th style="text-align:center">操作</th>
        </tr>
      </thead>
      <tbody id="table">
      </tbody>
    </table>
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
