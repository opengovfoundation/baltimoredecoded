<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="ie ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>{{browser_title}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{meta_tags}}
	<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/master.css" type="text/css" media="screen">
	<link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
	<link rel="stylesheet" href="/css/jquery.qtip.css" type="text/css" media="screen">
	<link rel="home" title="Home" href="/" />
	{{link_rel}}
	{{css}}
	{{inline_css}}
	<!-- CSS: Generic print styles -->
	<!--<link rel="stylesheet" media="print" href="/css/print.css"/>-->

	<!-- For the less-enabled mobile browsers like Opera Mini -->
	<!--<link rel="stylesheet" media="handheld" href="/css/handheld.css"/>-->

	<!-- Make MSIE play nice with HTML5 & Media Queries -->
	<script src="/js/modernizr.custom.23612.js"></script>
	<script src="/js/respond.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->

	<script src="https://www.google.com/jsapi?key=YOURKEY"></script>
	<script>
		google.load("jquery", "1.4.3");
		google.load("jqueryui", "1.8.11");
	</script>
</head>
<body>
	<div id="content">
		<div id="corner-banner">
			<span><a href="{{home_site_url}}about/">Beta</a></span>
		</div>
		<header id="masthead">
			<hgroup>
				<h1><a href="/">Baltimore Charter Decoded</a></h1>
				<h2>Accessible Law for All People</h2>
			</hgroup>
			<nav id="main_navigation">
				<ul>
					<li><a href="/" class="nav-item" id="home">Home</a></li>
					<li><a href="{{home_site_url}}about/" class="nav-item" id="about">About</a></li>
					<li><a href="{{home_site_url}}" target="_blank" class="nav-item">Municipal Code</a></li>
					<li class="search">
						<form id="search-form" action="/search/">
							<input type="search" size="20" id="search-input" name="q" placeholder="Search Baltimore Charter"/>
							<input type="submit" value="Search"/>
						</form>
					</li>
				</ul>
			</nav> <!-- // #main_navigation -->
		</header> <!-- // #masthead -->
		<section id="page">
			<nav id="breadcrumbs">
				{{breadcrumbs}}
			</nav>

			<nav id="intercode">
				{{intercode}}
			</nav> <!-- // #intercode -->

			<h1>{{page_title}}</h1>

			<section id="sidebar">
			{{sidebar}}
				<section>
					<h1>Stay Updated</h1>
					<label for="email">Email:</label>
					<input id="signup-email" name="email" type="search" placeholder="Email"/>
					<br />
					<input id="stay-updated" type="button" value="Submit"/>
					<div id="submit_response"></div>
				</section>
				<section>
					<p style="margin-top:15px;">Want to open your city or state?  Click <a href="mailto:sayhello@opengovfoundation.org?Subject=Help%20Open%20My%20City%20or%20State">here!</a></p>
				</section>
			</section>

			{{body}}

		</section> <!-- // #page -->

		<footer id="page_footer">
			<p><a href="/downloads/">Bulk Downloads</a> | Copyright 2013 the <a href="http://opengovfoundation.org">OpenGov Foundation</a>. Design by <a href="http://www.boboroshi.com/">John Athayde</a>. Powered by <a href="http://www.statedecoded.com/">The State Decoded</a>. All user-contributed content is, of course, owned by its authors. The state code is owned by the citizens of Maryland and, consequently, it is not governed by copyright—so do whatever you want with it! The information on this website does not constitute legal advice—nobody here is acting as your attorney, and nothing that you read here is a substitute for a competent attorney. OpenGov makes no guarantee that this information is accurate or up-to-date, although we try our best. Seriously, OpenGov is not your attorney. Heck, we’re not attorneys at all.</p>
		</footer>
	</div>
	{{javascript_files}}
	<script>
		{{javascript}}
	</script>
	<script src="/js/jquery.qtip.min.js"></script>
	<script src="/js/jquery.color-2.1.1.min.js"></script>
	<script src="/js/master.js"></script>
	<script src="/js/ga.js"></script>
	<script src="/js/uservoice.js"></script>
</body>
</html>
