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
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='http://fonts.useso.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script>
        (function () {
          var js;
          if (typeof JSON !== 'undefined' && 'querySelector' in document && 'addEventListener' in window) {
            js = 'js/jquery.2.0.3.min.js';
          } else {
            js = 'js/jquery.1.10.2.min.js';
          }
          document.write('<script src="' + js + '"><\/script>');
        }());
 </script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
        <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
        </script>

<!-- agile-grid-right -->
<script src="js/graph.js"></script>
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
                                <li><a href="http://localhost:8080/index.php?c=SC&a=jump"><span data-hover="choose_course">统计报表</span></a></li>
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
                <h3>Testimonials</h3>
                <h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros <span>ut convallis felis consectetur ut </span></h5>
            </div>
            <div class="testimonial-grids">
                <div class="testimonial-grid">
                    <p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>
                </div>
            </div>
    </div>
</div>
<div>
    <div class="main-grid">
            <div class="agile-grids">
                <div class="col-md-6 agile-grid-left">
                    <div class="w3l-chart1">
                        <h3>Teachers</h3>
                        <div id="graph1"></div>
                    </div>
                </div>

                <div class="col-md-6 agile-grid-right">
                    <div class="w3l-chart1">
                        <h3>Students</h3>
                        <div id="graph2"></div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

    <!-- gv-chart -->
    <div>
    <table class="table table-bordered" style="width=1000px;">
      <caption style="text-align: center">
            <font size = "5" style = "font-weight:bold">
                <br/><br/>统计信息<br/><br/>
            </font>
        </caption>
      <colgroup>
          <col style="width:12%">
          <col style="width:12%">
          <col style="width:12%">
          <col style="width:12%">
          <col style="width:14%">
          <col style="width:14%">
          <col style="width:12%">
          <col style="width:12%">
        </colgroup>
      <thead>
        <tr>
          <th style="text-align:center">注册人数</th>
          <th style="text-align:center">学生人数</th>
          <th style="text-align:center">老师人数</th>
          <th style="text-align:center">选课总数</th>
          <th style="text-align:center">平均选课数</th>
          <th style="text-align:center">平均代课数</th>
          <th style="text-align:center">选课比例</th>
          <th style="text-align:center">代课比例</th>
        </tr>
      </thead>
      <tbody id="table">
      </tbody>
    </table>
</div>
    <script type="text/javascript" src="js/jquery.gvChart.min.js"></script>
        <script>
            getchart_success=function(data){
                var temp=33;
                $('#graph1').graphify({
                    start: 'linear',
                    obj: {
                        id: 'ggg',
                        legend: false,
                        showPoints: true,
                        width: 775,
                        legendX: 450,
                        pieSize: 200,
                        shadow: true,
                        height: 400,
                        animations: true,
                        x: [0, 1, 2, 3, 4, 5, 6],
                        points: [data.teacher.no1, data.teacher.no2, data.teacher.no3, data.teacher.no4, data.teacher.no5, data.teacher.no6, data.teacher.no7],
                        xDist: 90,
                        scale: 12,
                        yDist: 35,
                        grid: false,
                        xName: '代课种数',
                        dataNames: ['Amount'],
                        design: {
                            lineColor: 'red',
                            tooltipFontSize: '20px',
                            pointColor: 'red',
                            barColor: 'blue',
                            areaColor: 'orange'
                        }
                    }
                });
                $('#graph2').graphify({
                    start: 'donut',
                    obj: {
                        id: 'lol',
                        legend: false,
                        showPoints: true,
                        width: 775,
                        legendX: 450,
                        pieSize: 200,
                        shadow: true,
                        height: 400,
                        animations: true,
                        x: [0, 1, 2, 3, 4, 5, 6],
                        points: [data.student.no1, data.student.no2, data.student.no3, data.student.no4, data.student.no5, data.student.no6, data.student.no7],
                        xDist: 90,
                        scale: 12,
                        yDist: 35,
                        grid: false,
                        xName: '选课种数',
                        dataNames: ['Amount'],
                        design: {
                            lineColor: 'red',
                            tooltipFontSize: '20px',
                            pointColor: 'red',
                            barColor: 'blue',
                            areaColor: 'orange'
                        }
                    }
                });
            }
            function get_chart(){
                get_uname();
                var url="http://localhost:8080/index.php?c=Statistics&a=Chart";
                //getchart_success();
                ajax_send(url,0,getchart_success,load_error);
            }
            getuserinfo_success=function(data){
                var datalength=data.length;
                var grandparentnode=document.getElementById("table");
                for(var i=0;i<datalength;i++){
                    var parentnode=document.createElement("tr");
                    var childnode1=document.createElement("td");
                    childnode1.innerHTML=data[i].PersonAmount;
                    childnode1.setAttribute("style","text-align:center");
                    var childnode2=document.createElement("td");
                    childnode2.innerHTML=data[i].StudentAmount;
                    childnode2.setAttribute("style","text-align:center");
                    var childnode3=document.createElement("td");
                    childnode3.innerHTML=data[i].TeacherAmount;
                    childnode3.setAttribute("style","text-align:center");
                    var childnode4=document.createElement("td");
                    childnode4.innerHTML=data[i].SCAmount;
                    childnode4.setAttribute("style","text-align:center");
                    var childnode5=document.createElement("td");
                    childnode5.innerHTML=data[i].AVGofStudentSC;
                    childnode5.setAttribute("style","text-align:center");
                    var childnode6=document.createElement("td");
                    childnode6.innerHTML=data[i].AVGofTeacherSC;
                    childnode6.setAttribute("style","text-align:center");
                    var childnode7=document.createElement("td");
                    childnode7.innerHTML=data[i].PercentofSCStudent;
                    childnode7.setAttribute("style","text-align:center");
                    var childnode8=document.createElement("td");
                    childnode8.innerHTML=data[i].PercentofSCTeacher;
                    childnode8.setAttribute("style","text-align:center");
                    parentnode.appendChild(childnode1);
                    parentnode.appendChild(childnode2);
                    parentnode.appendChild(childnode3);
                    parentnode.appendChild(childnode4);
                    parentnode.appendChild(childnode5);
                    parentnode.appendChild(childnode6);
                    parentnode.appendChild(childnode7);
                    parentnode.appendChild(childnode8);
                    grandparentnode.appendChild(parentnode);

                }
            }
    function get_userInfo(){
        get_uname();
        get_chart();
        var url="http://localhost:8080/index.php?c=Statistics&a=Table";
        ajax_send(url,0,getuserinfo_success,load_error);
    }
        </script>
        <!-- //gv-chart -->
        <!-- //agile-grid-right -->
    <script src="js/bootstrap.js"></script>
    <script src="js/proton.js"></script>

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
