<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Assembly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140330

--><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title><meta name="keywords" content=""><meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"><meta name="description" content=""><link href="//fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet"><link href="/default.css" rel="stylesheet" type="text/css" media="all"><link href="fonts.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]--></head><body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">Articles</a></h1>
		</div>
		<div id="menu">
			<ul><li class="active"><a href="{{route("index")}}" accesskey="1" title="">Homepage</a></li>
				
			</ul></div>
	</div>
	<div id="banner" class="container">
		<div class="title">
			<h2 style="color:white">Articles</h2>
			<span class="byline">CRUD Application</span>
		</div>
		<ul class="actions"><li><a href="{{ route("create")}}" class="button">Add New Article</a></li>
		</ul></div>
</div>
<div id="wrapper">

	@yield("content")
	</div>

<div id="copyright" class="container">
	<p>Site made with: <a href="https://templated.co/">Templated.co</a></p>
</div>
</body></html>
