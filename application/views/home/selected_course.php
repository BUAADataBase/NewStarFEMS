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

    SC_success = function(data) {
        if (data.status == "failed") {
            alert(data.reason);
        }
        else {
            alert("退课成功");
            var url = "http://localhost:8080/index.php?c=Selected&a=jump";
            window.location.href = url;
        }
    }
    function inputperiod(no) {
        var str="course"+no;
        var course=document.getElementById(str);
        if(course.innerHTML=="空"){
            alert("退课有误，请确认是否选课！");
        }
        else{
            var currentpage = document.getElementById("a11");
            var teacherid = list.selectedcourselist[6*(currentpage.innerHTML - 1) + no - 1].uid;
            var course_number = list.selectedcourselist[6*(currentpage.innerHTML - 1) + no - 1].cid;
            var url = "http://localhost:8080/index.php?c=Selected&a=CancelCourse";
            var json = "{\"teacherid\":"+teacherid+",\"courseid\":"+course_number+"}";
            json = JSON.parse(json);
            ajax_send(url, json, SC_success, load_error);
        }
    }
</script>
<script type="text/javascript">
pages=0;
lastpage=0;
list = [];
getname_success=function(data){
    var user_name=document.getElementById("welcome_user").innerHTML="<font color=\"white\">欢迎，"+data.name+"</font>";
}
getteachersbycourse_success=function(data){
    list = data;
    pages=parseInt(data.listlength/6)+1;
    var teacherslist=data.selectedcourselist;
    var teacherlegth=(teacherslist.length>6)?6:teacherslist.length;
    if(lastpage==0&&pages<5){
        lastpage=pages;
        for(var i=5;i!=pages;i--){
            var str="a"+i;
            document.getElementById(str).parentNode.removeChild(document.getElementById(str));
        }
    }
    else if(lastpage<pages&&pages<=5){
        for(lastpage=lastpage+1;lastpage!=pages+1;lastpage++){
            var temp=lastpage-1;
            var str="a"+temp;
            var linode=document.getElementById(str);
            linode.insertAdjacentHTML("afterEnd", "<li id=\"a"+Number.toString(lastpage)+"\"><a href=\"#\">"+lastpage+"</a></li>");
        }
    }
    else if(pages<lastpage&&lastpage<=5){
        for(;lastpage!=pages;lastpage--){
            var str="a"+lastpage;
            document.getElementById(str).parentNode.removeChild(document.getElementById(str));
        }
    }
    else{

    }
    for(var i=0;i<teacherlegth;i++){
        var temp=i+1;
        var str_course="course"+temp;
        var str_period="period"+temp;
        var str_teacher="teacher"+temp;
        var str_price="price"+temp;
        var str_confirm="confirm"+temp;
        var str_img="img"+temp;

        document.getElementById(str_course).innerHTML=teacherslist[i].cname;
        document.getElementById(str_teacher).innerHTML=teacherslist[i].uname;
        document.getElementById(str_period).innerHTML=teacherslist[i].period;
        document.getElementById(str_price).innerHTML=teacherslist[i].price;
        document.getElementById(str_confirm).innerHTML=(teacherslist[i].confirm==1)?"已确认":"未确认";
        //document.getElementById(str).src="http://localhost:8080/application/views/home/images/"+Number.toString(teacherslist[i].uid)+".jpg";
    }
    for(var i=teacherlegth;i<6;i++){
        var temp=i+1;
        var str_course="course"+temp;
        var str_period="period"+temp;
        var str_teacher="teacher"+temp;
        var str_price="price"+temp;
        var str_confirm="confirm"+temp;
        var str_img="img"+temp;

        document.getElementById(str_course).innerHTML="空";
        document.getElementById(str_teacher).innerHTML="空";
        document.getElementById(str_period).innerHTML="空";
        document.getElementById(str_price).innerHTML="空";
        document.getElementById(str_confirm).innerHTML="未确认";
        //document.getElementById(str).src="http://localhost:8080/application/views/home/images/"+Number.toString(teacherslist[i].uid)+".jpg";
    }

}
    function get_teachers(){
            get_uname();
            var json="{\"number\":1"+",\"max\":6"+"}";
            url="http://localhost:8080/index.php?c=Selected&a=SelectedCourse";
            json=JSON.parse(json);
            ajax_send(url,json,getteachersbycourse_success,load_error);
    }
</script>
<!--/script-->
</head>
    <?php
    $course = array (
        "math" => 1,
        "chinese" => 2,
        "english" => 3,
        "physics" => 4,
        "chemisty" => 5,
        "biology" =>6);
    ?>
    <body onload="get_teachers()">
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
<div class="effect-grid">
    <div class="container">
        <ul class="grid cs-style-5">
                <li>
                    <figure>
                        <img id="img1" src="http://localhost:8080/application/views/home/images/a1.jpg" alt="img03">
                        <figcaption>
                            <center><h3 id="course1">空</h3></center>
                            <label>学时：</label>
                            <label id="period1" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price1" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm1" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher1" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose1" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(1)">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img id="img2" src="http://localhost:8080/application/views/home/images/a2.jpg" alt="img04">
                        <figcaption>
                        <center><h3 id="course2">空</h3></center>
                            <label>学时：</label>
                            <label id="period2" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price2" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm2" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher2" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose2" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(2)">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img id="img3" src="http://localhost:8080/application/views/home/images/a3.jpg" alt="img01">
                        <figcaption>
                        <center><h3 id="course3">空</h3></center>
                            <label>学时：</label>
                            <label id="period3" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price3" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm3" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher3" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose3" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(3)">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img id="img4" src="http://localhost:8080/application/views/home/images/a4.jpg" alt="img02">
                        <figcaption>
                        <center><h3 id="course4">空</h3></center>
                            <label>学时：</label>
                            <label id="period4" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price4" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm4" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher4" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose1" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(4)">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img id="img5" src="http://localhost:8080/application/views/home/images/a5.jpg" alt="img06">
                        <figcaption>
                        <center><h3 id="course5">空</h3></center>
                            <label>学时：</label>
                            <label id="period5" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price5" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm5" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher5" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose5" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(5)">
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img id="img6" src="http://localhost:8080/application/views/home/images/a6.jpg" alt="img05">
                        <figcaption>
                        <center><h3 id="course6">空</h3></center>
                            <label>学时：</label>
                            <label id="period6" style="position:absolute;left:20px;top:70px;">空</label>
                            <label style="position:absolute;left:280px;">价格：</label>
                            <label id="price6" style="position:absolute;left:280px;top:70px;">空</label>
                            <label id="confirm6" style="color:#00ec00;position:absolute;left:30px;top:220px;">未确认</label>
                            <span id="teacher6" style="position:absolute;left:140px;top:230px;">空</span>
                            <input type="button" id="choose6" style="width: auto; background:#232428;color: #fff;font-size: 0.8725em;padding: 7px 20px;border: none;margin: 0 12px 0 0;cursor: pointer;transition: all .5s;-webkit-transition: all .5s;-moz-transition: all .5s;-o-transition: all .5s;outline:none;text-transform: uppercase;position:absolute;left:250px;top:225px;" value="退课" onclick="inputperiod(6)">
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <ul class="pagination pagination-lg" id="u1">
                <li><a href="#" onclick="left_move()">&laquo;</a></li>
                <script type="text/javascript">
                    left_move_success=function(data){
                        var first_page=document.getElementById("a1");
                        var des_page=first_page.innerHTML-1;
                        if(pages-des_page<5){
                        //更改标签和教师信息append
                        }
                        else{
                            //更改不需要append
                        }
                    }
                    function left_move(){
                        var first_page=document.getElementById("a1");
                        if(first_page.innerHTML==1){

                        }
                        else{
                            var des_page=first_page.innerHTML-1;
                            var url="http://localhost:8080/index.php?c=Main&a=getTeacherListbyCourseInten";
                            var json="{\"courseid\":"+course_number+",\"number\":"+des_page+",\"max\":"+"6}";
                            json=JSON.parse(json);
                            ajax_send(url,json,left_move_success,load_error);
                        }
                    }
                </script>
                <li id="a1"><a id = "a11" href="#">1</a></li>
                <li id="a2"><a id = "a12" href="#">2</a></li>
                <li id="a3"><a id = "a13" href="#">3</a></li>
                <li id="a4"><a id = "a14" href="#">4</a></li>
                <li id="a5"><a id = "a15" href="#">5</a></li>
                <li id="right"><a href="#" onclick="right_move()">&raquo;</a></li>
                <script type="text/javascript">
                    function right_move(){

                    }
                </script>
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
