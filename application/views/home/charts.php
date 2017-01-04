<!DOCTYPE html>
<head>
<title>Charts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
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
<!-- //agile-grid-right -->
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="index.html">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Dashboard
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-cogs" aria-hidden="true"></i>
				<span class="nav-text">
					UI Components
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
					<a class="subnav-text" href="buttons.html">
					Buttons
					</a>
					</li>
					<li>
					<a class="subnav-text" href="grids.html">
					Grids
					</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
				<i class="fa fa-check-square-o nav_icon"></i>
				<span class="nav-text">
				Forms
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="inputs.html">Inputs</a>
					</li>
					<li>
						<a class="subnav-text" href="validation.html">Form Validation</a>
					</li>
				</ul>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-file-text-o nav_icon"></i>
						<span class="nav-text">Pages</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="gallery.html">
							Image Gallery
						</a>
					</li>
					<li>
						<a class="subnav-text" href="calendar.html">
							Calendar
						</a>
					</li>
					<li>
						<a class="subnav-text" href="signup.html">
							Sign Up Page
						</a>
					</li>
					<li>
						<a class="subnav-text" href="login.html">
							Login Page
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="charts.html">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
						Charts
					</span>
				</a>
			</li>
			<li>
				<a href="typography.html">
					<i class="icon-font nav-icon"></i>
					<span class="nav-text">
					Typography
					</span>
				</a>
			</li>
			<li>
				<a href="tables.html">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Tables
					</span>
				</a>
			</li>
			<li>
				<a href="maps.html">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<span class="nav-text">
					Maps
					</span>
				</a>
			</li>
			<li>
				<a href="error.html">
					<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					<span class="nav-text">
					Error Page
					</span>
				</a>
			</li>
			<li class="has-subnav">
				<a href="javascript:;">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span class="nav-text">Extras</span>
					<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<li>
						<a class="subnav-text" href="faq.html">FAQ</a>
					</li>
					<li>
						<a class="subnav-text" href="blank.html">Blank Page</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="login.html">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>			</a>		</nav>
		<section class="title-bar">
			<div class="logo">
				<h1><a href="index.html"><img src="images/logo.png" alt="" />Colored</a></h1>
			</div>
			<div class="full-screen">
				<section class="full-top">
					<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>
				</section>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="search" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" required="">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
					<div class="header-right-left">
						<!--notifications of menu start -->
						<ul class="nofitications-dropdown">
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu w3l-msg">
									<li>
										<div class="notification_header">
											<h3>You have 3 new messages</h3>
										</div>
									</li>
									<li><a href="#">
									   <div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
									</div>
									   <div class="clearfix"></div>
									</a></li>
									<li class="odd"><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
									</div>
									  <div class="clearfix"></div>
									</a></li>
									<li><a href="#">
									   <div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
									</div>
									   <div class="clearfix"></div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all messages</a>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-notification">
									<li>
										<div class="notification_header">
											<h3>You have 3 new notifications</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="user_img"><img src="images/2.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet</p>
										<p><span>1 hour ago</span></p>
									</div>
									  <div class="clearfix"></div>
									 </a></li>
									 <li class="odd"><a href="#">
										<div class="user_img"><img src="images/1.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
									 </div>
									   <div class="clearfix"></div>
									 </a></li>
									 <li><a href="#">
										<div class="user_img"><img src="images/3.png" alt=""></div>
									   <div class="notification_desc">
										<p>Lorem ipsum dolor amet </p>
										<p><span>1 hour ago</span></p>
									 </div>
									   <div class="clearfix"></div>
									 </a></li>
									 <li>
										<div class="notification_bottom">
											<a href="#">See all notifications</a>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown head-dpdn">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">15</span></a>
								<ul class="dropdown-menu anti-dropdown-menu agile-task">
									<li>
										<div class="notification_header">
											<h3>You have 8 pending tasks</h3>
										</div>
									</li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Database update</span><span class="percentage">40%</span>
											<div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											<div class="bar yellow" style="width:40%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
										   <div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											 <div class="bar green" style="width:90%;"></div>
										</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
											<div class="clearfix"></div>
										</div>
									   <div class="progress progress-striped active">
											 <div class="bar red" style="width: 33%;"></div>
									</div>
									</a></li>
									<li><a href="#">
										<div class="task-info">
											<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
										   <div class="clearfix"></div>
										</div>
										<div class="progress progress-striped active">
											 <div class="bar  blue" style="width: 80%;"></div>
										</div>
									</a></li>
									<li>
										<div class="notification_bottom">
											<a href="#">See all pending tasks</a>
										</div>
									</li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">
										<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
									<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">

				<div class="chart-heading">
					<h2>Charts</h2>
				</div>

				<!-- agile-grid-left -->
				<div class="col-md-6 agile-grid-left">
					<div class="main">
						<h3 id="area">AreaChart</h3>
						<table id='myTable1'>
							<caption>Game players count</caption>
							<thead>
								<tr>
									<th></th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>May</th>
									<th>Jun</th>
									<th>Jul</th>
									<th>Aug</th>
									<th>Sep</th>
									<th>Oct</th>
									<th>Nov</th>
									<th>Dec</th>
								</tr>
							</thead>
								<tbody>
								<tr>
									<th>2010</th>
									<td>125</td>
									<td>185</td>
									<td>327</td>
									<td>359</td>
									<td>376</td>
									<td>398</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<th>2009</th>
									<td>1167</td>
									<td>1110</td>
									<td>691</td>
									<td>165</td>
									<td>135</td>
									<td>157</td>
									<td>139</td>
									<td>136</td>
									<td>938</td>
									<td>1120</td>
									<td>55</td>
									<td>55</td>
								</tr>
							</tbody>
						</table>

						<h3 id="line">LineChart</h3>

						<table id='myTable2'>
							<caption>Game players count</caption>
							<thead>
								<tr>
									<th></th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>May</th>
									<th>Jun</th>
									<th>Jul</th>
									<th>Aug</th>
									<th>Sep</th>
									<th>Oct</th>
									<th>Nov</th>
									<th>Dec</th>
								</tr>
							</thead>
								<tbody>
								<tr>
									<th>2010</th>
									<td>125</td>
									<td>185</td>
									<td>327</td>
									<td>359</td>
									<td>376</td>
									<td>398</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<th>2009</th>
									<td>1167</td>
									<td>1110</td>
									<td>691</td>
									<td>165</td>
									<td>135</td>
									<td>157</td>
									<td>139</td>
									<td>136</td>
									<td>938</td>
									<td>1120</td>
									<td>55</td>
									<td>55</td>
								</tr>
							</tbody>
						</table>

						<h3 id="bar">BarChart</h3>

						<table id='myTable3'>
							<caption>Game players count</caption>
							<thead>
								<tr>
									<th></th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>May</th>
									<th>Jun</th>
									<th>Jul</th>
									<th>Aug</th>
									<th>Sep</th>
									<th>Oct</th>
									<th>Nov</th>
									<th>Dec</th>
								</tr>
							</thead>
								<tbody>
								<tr>
									<th>2010</th>
									<td>125</td>
									<td>185</td>
									<td>327</td>
									<td>359</td>
									<td>376</td>
									<td>398</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<th>2009</th>
									<td>1167</td>
									<td>1110</td>
									<td>691</td>
									<td>165</td>
									<td>135</td>
									<td>157</td>
									<td>139</td>
									<td>136</td>
									<td>938</td>
									<td>1120</td>
									<td>55</td>
									<td>55</td>
								</tr>
							</tbody>
						</table>

						<h3 id="column">ColumnChart</h3>

						<table id='myTable4'>
							<caption>Game players count</caption>
							<thead>
								<tr>
									<th></th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>May</th>
									<th>Jun</th>
									<th>Jul</th>
									<th>Aug</th>
									<th>Sep</th>
									<th>Oct</th>
									<th>Nov</th>
									<th>Dec</th>
								</tr>
							</thead>
								<tbody>
								<tr>
									<th>2010</th>
									<td>125</td>
									<td>185</td>
									<td>327</td>
									<td>359</td>
									<td>376</td>
									<td>398</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
								<tr>
									<th>2009</th>
									<td>1167</td>
									<td>1110</td>
									<td>691</td>
									<td>165</td>
									<td>135</td>
									<td>157</td>
									<td>139</td>
									<td>136</td>
									<td>938</td>
									<td>1120</td>
									<td>55</td>
									<td>55</td>
								</tr>
							</tbody>
						</table>

						<h3 id="pie">PieChart</h3>

						<table id='myTable5'>
							<caption>Game players count</caption>
							<thead>
								<tr>
									<th></th>
									<th>Jan</th>
									<th>Feb</th>
									<th>Mar</th>
									<th>Apr</th>
									<th>May</th>
									<th>Jun</th>
									<th>Jul</th>
									<th>Aug</th>
									<th>Sep</th>
									<th>Oct</th>
									<th>Nov</th>
									<th>Dec</th>
								</tr>
							</thead>
								<tbody>
								<tr>
									<th>2010</th>
									<td>125</td>
									<td>185</td>
									<td>327</td>
									<td>359</td>
									<td>376</td>
									<td>398</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
									<td>0</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- //agile-grid-left -->
				<!-- agile-grid-right -->
				<div class="col-md-6 agile-grid-right">
					<div class="w3l-chart">
						<h3>Multiple Data Sets</h3>
						<div id="graph"></div>
					</div>
					<div class="w3l-chart1">
						<h3>Single Data Set</h3>
						<div id="graph2"></div>
					</div>
					<div class="w3l-chart2">
						<h3>Without plugin and different options:</h3>
						<div id="graph3"></div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<!-- //agile-grid-right -->
			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.mycodes.net/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
		<!-- //footer -->
	</section>
	<!-- gv-chart -->
	<script type="text/javascript" src="js/jquery.gvChart.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				googleLoaded.done( function(){
					$('#myTable1').gvChart({
						chartType: 'AreaChart',
						gvSettings: {
							vAxis: {title: 'No of players'},
							hAxis: {title: 'Month'},
							height: 300
							}
					});


					$('#myTable2').gvChart({
						chartType: 'LineChart',
						gvSettings: {
							vAxis: {title: 'No of players'},
							hAxis: {title: 'Month'},
							height: 300
							}
					});

					$('#myTable3').gvChart({
						chartType: 'BarChart',
						gvSettings: {
							vAxis: {title: 'No of players'},
							hAxis: {title: 'Month'},
							height: 300
							}
					});


					$('#myTable4').gvChart({
						chartType: 'ColumnChart',
						gvSettings: {
							vAxis: {title: 'No of players'},
							hAxis: {title: 'Month'},
							height: 300
							}
					});

					$('#myTable5').gvChart({
						chartType: 'PieChart',
						gvSettings: {
							vAxis: {title: 'No of players'},
							hAxis: {title: 'Month'},
							height: 300
							}
					});
				});
			});
		</script>
		<!-- //gv-chart -->
		<!-- agile-grid-right -->
		<script>
			$(function(){
				$('#graph').graphify({
					//options: true,
					start: 'combo',
					obj: {
						id: 'ggg',
						width: 620,
						height: 375,
						xGrid: false,
						legend: true,
						title: 'Linux vs Mac',
						points: [
							[7, 26, 33, 74, 12, 49, 33],
							[32, 46, 75, 38, 62, 20, 52]
						],
						pointRadius: 3,
						colors: ['blue', 'red'],
						xDist: 70,
						dataNames: ['Linux', 'Mac'],
						xName: 'Day',
						tooltipWidth: 15,
						animations: true,
						pointAnimation: true,
						averagePointRadius: 10,
						design: {
							tooltipColor: '#fff',
							gridColor: 'grey',
							tooltipBoxColor: 'green',
							averageLineColor: 'green',
							pointColor: 'green',
							lineStrokeColor: 'grey',
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
						x: [2000, 2001, 2002, 2003, 2004, 2005, 2006],
						points: [17, 33, 64, 22, 87, 45, 38],
						xDist: 90,
						scale: 12,
						yDist: 35,
						grid: false,
						xName: 'Year',
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
				var bar = new GraphBar({
					attachTo: '#graph3',
					special: 'combo',
					height: 600,
					width: 620,
					yDist: 50,
					xDist: 70,
					showPoints: false,
					xGrid: false,
						legend: true,
						points: [
							[17, 21, 51, 74, 12, 49, 33],
							[32, 15, 75, 20, 45, 90, 52]
						],
						colors: ['red', 'orange'],
						dataNames: ['Hot', 'Warm'],
						xName: 'Day',
						tooltipWidth: 15,
						design: {
							tooltipColor: '#fff',
							gridColor: 'black',
							tooltipBoxColor: 'green',
							averageLineColor: 'blue',
						}
				});
				bar.init();
			});
		</script>
		<!-- //agile-grid-right -->
	<script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>

</body>
</html>
