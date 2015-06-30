<!DOCTYPE HTML>
<html>

	<head>
		<title>WP-training</title>

		<!-- CSS -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

		<!-- Initiate viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Google hosted jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!-- Own JS -->
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	</head>

	<body>

	<!-- FULL PAGE NAV: 
		The following code is for the navigation menu that is opened/closed
		by svg buttons. When opened it covers the whole page with nav items centered
	-->
		<div class="full-overlay hide">
		  	<ul id="nav">
		   		<li><a href=".">Home</a></li>
				<li><a href="<?php bloginfo('template_url'); ?>/archive.php">Archive</a></li>
		    	<li><a href="categories.php">Categories</a></li>
		    	<li><a href="#">About</a></li>
		  	</ul>
		</div>

		<!-- Close button -->
		<div class="nav-toggle-close hide">
			<svg width="85.04px" height="85.04px" viewBox="0 0 85.04 85.04"
			enable-background="new 0 0 85.04 85.04" xml:space="preserve">

			<line fill="#FFFFFF" stroke="#fff" stroke-width="15" 
			stroke-miterlimit="10" x1="9.6" y1="8.828" x2="75.788" y2="77.167"/>

			<line fill="#FFFFFF" stroke="#fff" stroke-width="15" 
			stroke-miterlimit="10" x1="75.788" y1="8.828" x2="9.6" y2="77.167"/>
		  	</svg>
		</div>


		<!-- * not actually part of the full page nav but I want the 
		"open" button to appear in the header so I put theese here * -->
		<div id="wrapper">
			<div id="header">
		<!-- ***   *** -->

				<!-- Open button -->
				<div class="nav-toggle-open show">
					
					<svg width="4em" height="4em" viewBox="0 0 85.04 85.04"
					 enable-background="new 0 0 85.04 85.04" xml:space="preserve">

					<line fill="none" stroke="#333" stroke-width="15"
					 stroke-miterlimit="10" x1="8.404" y1="15.516" x2="77.461" y2="15.516"/>

					<line fill="none" stroke="#333" stroke-width="15"
					 stroke-miterlimit="10" x1="7.992" y1="68.802" x2="77.049" y2="68.802"/>

					<line fill="none" stroke="#333" stroke-width="15"
					 stroke-miterlimit="10" x1="8.404" y1="42.52" x2="77.461" y2="42.52"/>
					</svg>

				</div>
	<!-- END OF FULL PAGE NAV -->

				<!-- '.' to go to root folder, i.e first page -->
				<h1 class="header-title"><a href="."><?php echo(get_bloginfo('name')); ?></a></h1>
				<p class="slogan-top"><?php echo(get_bloginfo('description')); ?> </p>
				<div id="delimiter">
				</div>
			</div>

			






