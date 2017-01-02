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
<!--script-->
<script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
            });
</script>
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
                    <a href="http://localhost:8080/application/views/home/about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                    </div>
                 </li>
                 <li>
                    <h3>Self-directed learning</h3>
                     <p>Learning Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through storytelling.</p>
                 <div class="readmore">
                 <a href="http://localhost:8080/application/views/home/about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                 </div>
                 </li>
                 <li>
                    <h3>Learning modalities</h3>
                     <p>Storytelling Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through.</p>
                <div class="readmore">
                 <a href="http://localhost:8080/application/views/home/about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
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
    <center><form id="registerForm" method="post" action="window.open("index.php")">
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
                <input type="text" id="email" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">此项将作为登录名，请牢记</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label for="password">密 码:</label>
                <input type="password" id="password" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">此项将作为登录密码，请牢记</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label for="password">确 认:</label>
                <input type="password" id="password" style="position:absolute;left:330px">
                <label style="position:absolute;left:550px"><font color="red">请再次输入密码确认</font></label>
            </fieldset>
            <br />
            <fieldset>
                <label>年 级:</label>
                <select style="position:absolute;left:330px">
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
            <input input type="submit" id="register" value="确认" style="position:absolute;left:700px">
        </fieldset>
    </form></center>
</div>
<!--footer-->
<div class="footer">
        <!-- container -->
        <div class="container">
            <div class="col-md-6 footer-left">
                <ul>
                    <li><a href="http://localhost:8080/application/views/home/index.php">Home</a></li>
                    <li><a href="http://localhost:8080/application/views/home/about.php">About</a></li>
                    <li><a href="http://localhost:8080/application/views/home/typography.php">Shortcodes</a></li>
                    <li><a href="http://localhost:8080/application/views/home/gallery.php">Gallery</a></li>
                    <li><a href="http://localhost:8080/application/views/home/contact.php">Contact</a></li>
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
