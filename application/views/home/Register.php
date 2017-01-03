<!doctype html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<?php include ("common_js.php") ?>
<!--/script-->
</head>
    <body>
<!--header-->
<?php include ("head.php") ?>
<!-- Top Navigation -->
<div class="banner">
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
<div class="slider">
           <div class="callbacks_container">
              <ul class="rslides" id="slider">
                 <li>
                    <h3>Formal education</h3>
                     <p>Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through storytelling.</p>
                    <div class="readmore">
                    <a href="http://localhost:8080/application/views/home/about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                    </div>
                 </li>
                 <li>
                    <h3>Self-directed learning</h3>
                     <p>Learning Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through storytelling.</p>
                 <div class="readmore">
                 <a href="http://localhost:8080/application/views/home/about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                 </div>
                 </li>
                 <li>
                    <h3>Learning modalities</h3>
                     <p>Storytelling Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through.</p>
                <div class="readmore">
                 <a href="http://localhost:8080/application/views/home/about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                 </div>
                 </li>
              </ul>
          </div>
      </div>
</div>
    </div>
<!--header-->
<!--weelcome-->
<div class="welcome">
    <div class="container">
        <h2>Welcome To Education Tutorial</h2>
        <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills deemed necessary in their society. In pre-literate societies this was achieved orally and through imitation. Story-telling passed knowledge,</p>
    </div>
</div>
<div class="register">
    <center><form id="registerForm">
        <fieldset id="body">
            <fieldset>
                <label for="name">姓 名:</label>
                <input type="text" id="name" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">请填写真实姓名</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label>性 别:</label>
                <label for="male" style="position:absolute;left:400px">男</label>
                <input type="radio" name="sex" id="female" style="position:absolute;left:330px">
                <label for="female">女</label>
                <input type="radio" name="sex" id="male" style="position:absolute;left:420px">
            </fieldset>
            <br />
            <fieldset>
                <label for="age">年 龄:</label>
                <input type="text" id="age" style="position:absolute;left:330px">
            </fieldset>
            <br />
            <fieldset>
                <label for="email">邮 箱:</label>
                <input type="text" id="user_email" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">此项将作为登录名，请牢记</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label for="password">密 码:</label>
                <input type="password" id="u_password" style="position:absolute;left:330px">
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
                    <option value="小学一年级">小学一年级</option>
                    <option value="小学二年级">小学二年级</option>
                    <option value="小学三年级">小学三年级</option>
                    <option value="小学四年级">小学四年级</option>
                    <option value="小学五年级">小学五年级</option>
                    <option value="小学六年级">小学六年级</option>
                    <option value="初中一年级">初中一年级</option>
                    <option value="初中二年级">初中二年级</option>
                    <option value="初中三年级">初中三年级</option>
                    <option value="高中一年级">高中一年级</option>
                    <option value="高中二年级">高中二年级</option>
                    <option value="高中三年级">高中三年级</option>
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
            <input input type="button" id="register" value="学生注册" style="position:absolute;left:500px" onclick="register_check(0)">
            <input input type="button" id="register" value="老师注册" style="position:absolute;left:800px" onclick="register_check(1)">
            <script type="text/javascript">
                sucess=function(data){
                    if(data.status=="sucess"){
                        alert("成功！");
                        url="";
                    }
                    else{
                        alert(data.reason);
                    }
                }
                function register_check(par){
                    var user_name=document.getElementById("name");
                    var radios=document.getElementsByName("sex");
                    var user_age=document.getElementById("age");
                    var user_email=document.getElementById("user_email");
                    var user_password=document.getElementById("u_password");
                    var user_confirm=document.getElementById("confirm");
                    var user_grade=document.getElementById("grade");
                    var user_school=document.getElementById("school");
                    var user_tel=document.getElementById("tel");
                    var user_identify=par;
                    var sex;
                    var i=0;
                    for(i=0;i<radios.length;i++){
                        if(radios[i].checked==true){
                            sex=(radios[i].value=="male")?0:1;
                            break;
                        }
                    }
                    if(i==radios.length){
                        alert("请选择性别！");
                    }
                    else if(user_name.value==""){
                        alert("姓名不能为空！");
                    }
                    else if(user_name.value.length>12){
                        alert("姓名太长！");
                    }
                    else if(isNaN(parseInt(user_age.value))||parseInt(user_age.value)<1||parseInt(user_age.value)>100){
                        alert("年龄格式不正确！");
                    }
                    else if(user_email.value.match(/\w+@[0-9a-zA-Z]+\.[0-9a-zA-Z]+/)==""){
                        alert("邮箱格式不正确！");
                    }
                    else if(user_password.value==""){
                        alert("密码不能为空！");
                    }
                    else if(user_password.value.length>16){
                        alert("密码过长！");
                    }
                    else if(user_password.value!=user_confirm.value){
                        alert("两次输入的密码不匹配！");
                    }
                    else if(isNaN(parseInt(user_tel.value))){
                        alert("电话不能为非数字！");
                    }
                    else if(parseInt(user_tel.value).length!=11){
                        alert("必须为11位手机号码！");
                    }
                    else{
                        var json="{"+"\"name\":\""+user_name.value+"\",\"sex\":"+sex+",\"age\":"+user_age.value+",\"email\":\""+user_email.value+"\",\"password\":\""+user_password.value+"\",\"grade\":\""+user_grade.value+"\",\"school\":\""+user_school.value+"\",\"tel\":\""+user_tel.value+"\",\"identify\":"+user_identify+"}";
                        var post_url="http://localhost:8080/index.php?c=Register&a=register";
                        ajax_send(post_url,json,success,load_error);
                    }
                }
            </script>
        </fieldset>
    </form></center>
</div>
<!--footer-->
<div class="footer">
        <!-- container -->
        <div class="container">
            <div class="col-md-6 footer-left">
                <ul>
                    <li><a href="http://localhost:8080/application/views/home/index.html">Home</a></li>
                    <li><a href="http://localhost:8080/application/views/home/about.html">About</a></li>
                    <li><a href="http://localhost:8080/application/views/home/typography.html">Shortcodes</a></li>
                    <li><a href="http://localhost:8080/application/views/home/gallery.html">Gallery</a></li>
                    <li><a href="http://localhost:8080/application/views/home/contact.html">Contact</a></li>
                </ul>
                <form>
                    <input type="text" placeholder="Email" required="">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-3 footer-middle">
                <h3>Address</h3>
                <div class="address">
                    <p>756 gt globel Place,
                        <span>CD-Road,M 07 435.</span>
                    </p>
                </div>
                <div class="phone">
                    <p>+1(100)2345-6789</p>
                </div>
            </div>
            <div class="col-md-3 footer-right">
                <h3>Book Info</h3>
                <p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //container -->
    </div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
        <!-- container -->
        <div class="container">
            <div class="copyright-left">
            <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>
            <div class="copyright-right">
                <ul>
                    <li><a href="#" class="twitter"> </a></li>
                    <li><a href="#" class="twitter facebook"> </a></li>
                    <li><a href="#" class="twitter chrome"> </a></li>
                    <li><a href="#" class="twitter pinterest"> </a></li>
                    <li><a href="#" class="twitter linkedin"> </a></li>
                    <li><a href="#" class="twitter dribbble"> </a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>

        </div>
        <!-- //container -->
        <!---->
<script type="text/javascript">
        $(document).ready(function() {
                /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
                };
                */
        $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
    </div>
<!--/copy-rights-->
    </body>
</html>
