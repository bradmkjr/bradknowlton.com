<?php
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' ||
   $_SERVER['HTTPS'] == 1) ||
   isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
   $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Bradford M. Knowlton Jr. &mdash; Web Programmer &mdash; Missoula, Montana</title>
<meta name="description" content="Profile of Bradford M. Knowlton Jr. Missoula, Montana"/>

<!-- Twitter Card data -->
<meta name="twitter:card" value="summary">

<!-- Open Graph data -->
<meta property="og:title" content="Bradford Moses Knowlton Jr. Missoula, Montana"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://www.bradknowlton.com/"/>
<meta property="og:image" content="https://www.bradknowlton.com/images/bradknowlton.jpg"/>
<meta property="og:description" content="Profile of Bradford M. Knowlton Jr. currently available for web programming in Missoula, Montana"/>

<meta name="webstatsdomain.org_meta" content="bradknowlton.com"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link href="/tools/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="/tools/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, user-scalable=no">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-494375-77"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-494375-77');
</script>


</head>
<body>
	<div class="icon-wrapper">
		<ul class="icons">
			<li class="bitcoin">
				<a href="bitcoin:195jHGYxZyYxxHAYgLVGY2H9DEoGMHGQTx" target="_blank">
					<i class="fa fa-btc fa-fw"></i>
				</a>
			</li>
			<li class="twitter">
				<a href="https://twitter.com/bradmkjr" target="_blank">
					<i class="fa fa-twitter fa-fw"></i>
				</a>
			</li>
			<li class="wordpress">
				<a href="https://profiles.wordpress.org/bradmkjr/" target="_blank">
					<i class="fa fa-wordpress fa-fw"></i>
				</a>
			</li>
			<li class="github">
				<a href="https://github.com/bradmkjr" target="_blank">
					<i class="fab fa-github"></i>
				</a>
			</li>
			<li class="bitbucket">
				<a href="https://bitbucket.org/bradmkjr/" target="_blank">
					<i class="fab fa-bitbucket"></i>
				</a>
			</li>
			<li class="npm">
				<a href="https://www.npmjs.com/~bradmkjr" target="_blank">
					<i class="fab fa-npm"></i>
				</a>
			</li>
			<li class="packagist">
				<a href="https://packagist.org/packages/bradmkjr/" target="_blank">
					<i class="fab fa-php"></i>
				</a>
			</li>
			<li class="ubuntu">
				<a href="https://ubuntuforums.org/member.php?u=508951&amp;tab=aboutme#aboutme" target="_blank">
					<i class="fab fa-ubuntu fa-fw"></i>
				</a>
			</li>
			<li class="downloads">
				<a href="/images/wallpaper-original.jpg" target="_blank" title="Download The Best Super Beetle Wallpaper">
					<i class="fa fa-download fa-fw"></i>
				</a>
			</li>
			<!-- <li><a href="https://plus.google.com/u/0/112285836444683382716/?rel=author"><i class="fa fa-google-plus fa-fw"></i></a></li> -->
			<!-- <li><a href="http://nsfwpassword.com/"><i class="fa fa-lock fa-fw"></i></a></li> -->
			<li><a href="http://php75n2hzj4ucyq4.onion/"><i class="fa fa-code fa-fw"></i></a></li>
		</ul>
	</div>
<div id="content_wrapper">

	<div class="content">
		<div class="clear"></div>
		<p class="made_in">Bradford M. Knowlton Jr.</p>
		<h1><a href="http://php75n2hzj4ucyq4.onion/" target="_blank" title="Tor HTTP Service is hosted on Raspberry Pi, please be patience while loading.">http://php75n2hzj4ucyq4.onion/</a></h1>
		<h3 class="quote">You were the highest paid, least reliable employee I've ever had.<div style="text-align: right; font-size: .75em;">&mdash; Gabriel Silverman</div></h3>
	</div>
</div>
<div id="downloads">
<div class="downloads-inner">
	<a href="/images/wallpaper-original.jpg" target="_blank"><img id="macbook" src="/images/macbook.png" alt="macbook with sample vw super beetle wallpaper"/></a>
	<a href="/images/wallpaper-ipad.jpg" target="_blank"><img id="ipad" src="/images/ipad.png" alt="ipad with sample vw super beetle wallpaper"/></a>
	<a href="/images/wallpaper-iphone-vertical.jpg" target="_blank"><img id="iphone-vertical" src="/images/iphone-vertical.png" alt="iphone vertical with sample vw super beetle wallpaper"/></a>
	<a href="/images/wallpaper-iphone-horizontal.jpg" target="_blank"><img id="iphone-horizontal" src="/images/iphone-horizontal.png" alt="iphone horizontal with sample vw super beetle wallpaper"/></a>
</div>
</div>
<script>
    $(document).ready(function() {
        $('.downloads a').click(function(){ $('#downloads').slideToggle(); return false; });
    });
</script>
</body>
</html>
<!--
     FILE ARCHIVED ON 06:34:50 Mar 09, 2016 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 05:26:12 Dec 15, 2019.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->