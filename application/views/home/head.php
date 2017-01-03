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
                                <li><a href="http://localhost:8080/index.php"><span data-hover="Home">Home</span></a></li>
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
                                                <input type="button" id="login" value="Sign in" onclick="login_check()">
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