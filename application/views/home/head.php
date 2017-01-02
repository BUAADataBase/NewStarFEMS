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
                    <h1><a class="navbar-brand" href="http://localhost:8080/application/views/home/index.php">Education<br /><span>Tutorial</span></a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                                <li><a href="http://localhost:8080/application/views/home/index.php"><span data-hover="Home">Home</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/about.php"><span data-hover="About">About</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/typography.php"><span data-hover="Shortcodes">Shortcodes</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
                                <li><a href="http://localhost:8080/application/views/home/contact.php"><span data-hover="Contact">Contact</span></a></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div><!-- /.navbar-collapse -->
                <!-- /.container-fluid -->
                <div class="login-pop">
                        <div id="loginpop"><a href="#" id="loginButton"><span>Login</span></a>
                                <div id="loginBox">
                                    <form id="loginForm">
                                            <fieldset id="body" style="height:240px">
                                                <fieldset>
                                                      <label for="email">Email Address</label>
                                                      <input type="text" id="email">
                                                </fieldset>
                                                <fieldset>
                                                        <label for="password">Password</label>
                                                        <input type="password" id="password">
                                                 </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <input type="button" id="login" value="register"
                                                onclick = "PostRegister()">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                        <span><a href="#">Forgot your password?</a></span>
                                 </form>
                            </div>
                        </div>
                        </div><script src="http://localhost:8080/application/views/home/js/menu_jquery.js"></script>
                        </div>
            </nav>
<!--/script-->
           <div class="clearfix"> </div>
</div>