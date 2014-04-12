<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>IsOften Advertisement Manage System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link href="css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
		html, body {
  			height: 100%;
		}
	 	
	  	.sidebar-nav {
			padding: 9px 0;
	  	}

	  	#main {
		  	overflow:auto;
		  	padding-bottom:200px; /* this needs to be bigger than footer height*/
		}
		
	  	.footer {
		  	position: relative;
		  	margin-top: -30px; /* negative value of footer height */
		  	height: 30px;
		  	clear:both;
		  	padding-top:20px;
		} 
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/fullcalendar.css' rel='stylesheet'>
	<link href='css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<link href='css/elfinder.min.css' rel='stylesheet'>
	<link href='css/elfinder.theme.css' rel='stylesheet'>
	<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='css/opa-icons.css' rel='stylesheet'>
	<link href='css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	
	<!-- jQuery -->
	<script src="js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='js/jquery.dataTables.min.js'></script>
	
	<!-- chart libraries start -->
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->
	
	<!-- select or dropdown enhancer -->
	<script src="js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="js/charisma.js"></script>
</head>

<body>
	<div id="wrap">
		<div id="main" class="clear-top">
			<!-- topbar starts -->
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>IsOften</span></a>
						
						<!-- user dropdown starts -->
						<div class="btn-group pull-right" >
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user"></i><span class="hidden-phone"> admin</span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="servlet/CheckoutServlet">Logout</a></li>
							</ul>
						</div>
						<!-- user dropdown ends -->
						
					</div>
				</div>
			</div>
			<!-- topbar ends -->
	
			<div class="container-fluid">
				<div class="row-fluid">
					<!-- left menu starts -->
					<div class="span2 main-menu-span">
						<div class="well nav-collapse sidebar-nav">
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li class="nav-header hidden-tablet">动态管理</li>
								<li><a class="ajax-link" href="add_trend.jsp"><i class="icon-upload"></i><span class="hidden-tablet"> 添加新动态</span></a></li>
								<li><a class="ajax-link" href="trend_list.jsp"><i class="icon-upload"></i><span class="hidden-tablet"> 已添加的动态</span></a></li>
							</ul>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li class="nav-header hidden-tablet">广告管理</li>
								<li><a class="ajax-link" href="add_adv.jsp"><i class="icon-upload"></i><span class="hidden-tablet"> 上传新广告</span></a></li>
								<li><a class="ajax-link" href="adv_list.jsp"><i class="icon-list-alt"></i><span class="hidden-tablet"> 已上传的广告</span></a></li>
								<li><a class="ajax-link" href="adv_search.jsp"><i class="icon-search"></i><span class="hidden-tablet"> 广告搜索测试</span></a></li>
							</ul>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li class="nav-header hidden-tablet">推荐应用管理</li>
								<li><a class="ajax-link" href="add_app.jsp"><i class="icon-upload"></i><span class="hidden-tablet"> 添加新的推荐应用</span></a></li>
								<li><a class="ajax-link" href="app_list.jsp"><i class="icon-list-alt"></i><span class="hidden-tablet"> 已添加的推荐应用</span></a></li>
							</ul>
							<ul class="nav nav-tabs nav-stacked main-menu">
								<li class="nav-header hidden-tablet">其他</li>
								<li><a class="ajax-link" href="update_account.jsp"><i class="icon-user"></i><span class="hidden-tablet"> 账户管理</span></a></li>
								<li><a class="ajax-link" href="update_search_params.jsp"><i class="icon-user"></i><span class="hidden-tablet"> 搜索参数设置</span></a></li>
							</ul>
						</div><!--/.well -->
					</div><!--/span-->
					<!-- left menu ends -->
					
					<noscript>
						<div class="alert alert-block span10">
							<h4 class="alert-heading">Warning!</h4>
							<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
						</div>
					</noscript>
					
					<div id="content" class="span10">
					<!-- content starts -->
