<!doctype html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<?php include ("common_js.php") ?>
<script type="text/javascript">
getteacher_success=function(data){

}
	function get_all_teachers(){
		var url = "http://localhost:8080/index.php?c=Main&a=getAllTeacherList";
		ajax_send(url,0,getteacher_success,load_error);
	}
</script>
</head>
    <body onload="get_all_teachers()">
<?php include ("head.php") ?>
<!-- Top Navigation -->
<div class="banner">
	<div class="container">
	<script src="http://localhost:8080/application/views/home/js/responsiveslides.min.js"></script>
	<script src="http://localhost:8080/application/views/home/js/md5.js"></script>
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
				 	<h3>小学启蒙</h3>
					 <p>小学是人生中很重要的起点，所以没有人可以在这个阶段特别放松。如果你刚刚接触学习，对未来的学习生活充满了期待，欢迎你来到这里，这里是启蒙的地点，是梦开始的地方。如果你常常对学习感到没兴趣，也欢迎你来到这里，这里遍布着年轻有活力的哥哥姐姐，可以让所有人做到轻松愉快的学习。</p>
					<div class="readmore">
				 	<a href="http://localhost:8080/index.php">了解更多<i class="glyphicon glyphicon-menu-right"> </i></a>
				 	</div>
				 </li>
				 <li>
				 	<h3>初中培训</h3>
					 <p>即将迎来中考的你是不是内心有一些焦虑呢？面对着人生第一次重要的考试，是不是有一些小激动呢？无论你基础好或是坏，无论你在学校是否认真完成学业，只要你还有一颗上进的心，就欢迎你来到这里，我们会提供最好的服务，用真心送给你一个金黄色的九月。</p>
				 <div class="readmore">
				 <a href="http://localhost:8080/index.php">了解更多<i class="glyphicon glyphicon-menu-right"> </i></a>
				 </div>
				 </li>
				 <li>
				 	<h3>高中培优</h3>
					 <p>高中学习的难度加大？时不时有一些迷茫？不要怕，快来到“未来之星”一对一家教平台，在这里没有老师，没有家长，只有比你年长几岁的学长学姐，有他们的经验与鼓励，学习会变得非常轻松。语数外物化生，每一门课都有很厉害的学长学姐为你们面对面的答疑解惑，还在等什么？赶快行动起来吧！</p>
				<div class="readmore">
				 <a href="http://localhost:8080/index.php">了解更多<i class="glyphicon glyphicon-menu-right"> </i></a>
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
		<h2>欢迎来到“未来之星”一对一家教平台</h2>
		<p>在这里，你可以找到你的良师益友，你可以放下学校的束缚，找到自己的不足，改进自己的弱点，发扬自己的强项，相信自己，方能大有可为。</p>
	</div>
</div>
<!--/welcome-->
<div class="welcome-grids">
	<div class="container">
		<div class="welcome-gridsinfo">
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-pencil"> </i>
			<h3>高效学习</h3>
			<p>学生之间学习的差距大多数就在于学习效率之间的差异。学习好的学生学习效率普遍较高，所以我们要努力提高学习效率，在尽可能短的时间内完成更多，更充实的内容，提高自觉性，锻炼自己的自制力。</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-font"> </i>
			<h3>全方位</h3>
			<p>“未来之星”一对一家教平台提供最全面的一对一家教，不仅涵盖了从小学到高中几乎所有的科目，并且老师都是来自全国各地，可以轻松适应各种版本的教材。“未来之星”不仅为学生们提供上课的平台，也为学生们提供了广阔的交友机遇，学生可以在网站上沟通交流，互相学习，从而变得更加优秀。</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-blackboard"> </i>
			<h3>寓教于乐</h3>
			<p>“未来之星”致力于提供高质量的教学品质和更好的教学体验，我们的老师在讲课时都会以较为生动有趣的口吻讲述一些复杂的概念和题目，争取让学生能够轻松地接受所学的内容。除此之外，我们还会定期举办一些大规模的教学开放活动邀请老师和学生参加，届时可以增进师生之间互相交流的机会，也能帮助学生找到更多的学习乐趣。</p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-education"> </i>
			<h3>勤能补拙</h3>
			<p>我们知道世界上的天才可能都没有万分之一，所以基本上没有什么人是可以不付出努力就获得成就的。即使我们不是最聪明的，但是勤能补拙，只要用心，没有什么办不成的事，也没有解不出的难题。希望各位学子都能在“未来之星”的平台下努力学习，取得更好的成绩。</p>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--effect-grid-->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >“未来之星”一对一家教平台</a></div>
<div class="effect-grid">
	<div class="container">
		<ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a1.jpg" alt="img03">
						<figcaption>
					    <h3>Technology</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a2.jpg" alt="img04">
						<figcaption>
					    <h3>Preparing</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a3.jpg" alt="img01">
						<figcaption>
					    <h3>Pencils</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a4.jpg" alt="img02">
						<figcaption>
					    <h3>Home Work</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a5.jpg" alt="img06">
						<figcaption>
					    <h3>Waiting</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://localhost:8080/application/views/home/images/a6.jpg" alt="img05">
						<figcaption>
					    <h3>Mistake</h3>
							<span>Jacob Cummings</span>
							<a href="http://localhost:8080/application/views/home/about.php">Read More</a>
						</figcaption>
					</figure>
				</li>
			</ul>
	</div>
</div>
<!--\effect-grid-->
<!--testmonials-->
<div class="testimonials">
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
<!--\testmonials-->
<!--specfication-->
<div class="news">
		<div class="container">
			<div class="news-text">
				<h3>明星教师</h3>
				<p>我们有来自全国各地的许多非常优秀的老师，每一个人都掌握十八般武艺，也都有自己独特的风格。幽默风趣，大概这就是所有老师共同的特点，寓教于乐，也是我们所希望达到的目的。 </span></p>
			</div>
			<div class="news-grids">
				<div class="col-md-3 news-grid">
					<a href="#"><h4>朱天晨</h4></a>
					<span>8.00 - 10.00 | DEC 09,2016</span>
					<a href="#" class="mask"><img src="http://localhost:8080/application/views/home/images/img1.jpg" alt="image" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p>也许你现在还在迷茫，那是因为你没有遇见我们。赶快来“未来之星”一对一家教平台，找到自己的钥匙，打开成功的大门。</p>
					</div>
				</div>
				<div class="col-md-3 news-grid">
					<a href="#"><h4>康嘉玮</h4></a>
					<span>10.00 - 12.00 | DEC 12,2016</span>
					<a href="#" class="mask"><img src="http://localhost:8080/application/views/home/images/img2.jpg" alt="image" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p>每一天都能开始新的生活，每一天都会遇见不同的题目，解决它，是我们最重要的目的。拿起镜子，看看镜中的我们，努力奋斗吧。</p>
					</div>
				</div>
				<div class="col-md-3 news-grid">
					<a href="#"><h4>冯岩</h4></a>
					<span>9.00 - 10.00 | DEC 15,2016</span>
					<a href="#" class="mask"><img src="http://localhost:8080/application/views/home/images/img3.jpg" alt="image" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p>我是“未来之星”家教平台最厉害的老师了，我能在三小时内刷完一整套吉米多维奇，也能在三分钟内教任何人学会吹牛。</p>
					</div>
				</div>
				<div class="col-md-3 news-grid">
					<a href="#"><h4>曹亚斌</h4></a>
					<span>11.00 - 10.00 | DEC 20,2016</span>
					<a href="#" class="mask"><img src="http://localhost:8080/application/views/home/images/img4.jpg" alt="image" class="img-responsive zoom-img"></a>
					<div class="news-info">
						<p>希望每个人都能在这里找到最适合自己的老师，比如我，百搭。希望大家都能取得进步，找到更加自信的自己。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
				<ul class="pagination">
					<li><a href="#">&laquo;</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
<!--/specfication-->
<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
					<li><a href="http://localhost:8080/index.php">主页</a></li>
					<li><a href="http://localhost:8080/index.php">我的主页</a></li>
					<li><a href="http://localhost:8080/index.php">关于我们</a></li>
					<li><a href="http://localhost:8080/index.php">精彩瞬间</a></li>
					<li><a href="http://localhost:8080/index.php">联系我们</a></li>
				</ul>
				<form>
					<input type="text" placeholder="Email" required=""/>
					<input type="button" value="1097980407@qq.com"/>
				</form>
			</div>
			<div class="col-md-3 footer-middle">
				<h3>地址</h3>
				<div class="address">
					<p>北京航空航天大学
						<span>计算机学院</span>
					</p>
				</div>
				<div class="phone">
					<p>17801000979</p>
				</div>
			</div>
			<div class="col-md-3 footer-right">
				<h3>关于我们</h3>
				<p>“未来之星”一对一家教平台由来自北京航空航天大学计算机学院的zhutc、kangjw两人开发，致力于打造更好的一对一家教平台，帮助更多的学生提高自己的成绩，完成自己的梦想，同时也为更多的大学生提供一些兼职的机会。感兴趣的老师或者学生如果想了解更多情况，都可以通过电话或者邮件联系我们，我们一定会为您耐心解答。</p>
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
<script type="text/javascript">
	login_success=function(data){
		if(data.status=="success"){
			alert("登录成功！");
			var url="http://localhost:8080/index.php?c=Login&a=jump";
			window.location.href = url;
		}
		else{
			alert(data.reason);
		}
	}
	function login_check(){
		var account=document.getElementById("email");
		var pw=document.getElementById("password");
		if(account.value==""||pw.value=="")
			alert("用户名或密码不能为空！");
		else if(account.value.match(/\w+@[0-9a-zA-Z]+\.[0-9a-zA-Z]+/)==""){
            alert("邮箱格式不正确！");
        }
        else if(pw.value.length>16){
            alert("密码过长！");
        }
        else{
        	var json="{\"email\":\""+account.value+"\",\"password\":\""+hex_md5(pw.value)+"\"}";
        	json=JSON.parse(json);
        	var url="http://localhost:8080/index.php?c=Login&a=login";
        	ajax_send(url,json,login_success,load_error);
        }
	}
</script>
<script type="text/javascript">

success = function(data) {
	if (data.status == "success") {
		url = "http://localhost:8080/index.php?c=Register&a=jump";
		window.location.href = url;
	}
	else {
		alert(data.reason);
	}
}

function PostRegister() {
	url = "http://localhost:8080/index.php?c=Register&a=judge";
	ajax_send(url, 0, success, load_error);
};



</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
	</div>
<!--/copy-rights-->
	</body>


</html>
