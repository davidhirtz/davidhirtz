<?php
ob_start();
ob_implicit_flush(false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>David Hirtz</title>
	<meta name="description" content="Freelance media consultant based in Munich, Germany">
	<style>body{padding:10vh 5vw;max-width: 36rem;}h1,h2,p,address{margin:0 0 1.5rem;font:1em monospace;color:#000;letter-spacing:0.1em}h1{font-weight:bold}address{cursor:pointer}</style>
</head>
<body>
<h1>David Hirtz</h1>
<h2>Freelance software engineer and technical consultant based in Munich, Germany.</h2>
<p>For more than two decades, I have been turning complex requirements into custom web software for international agencies, brands and universities, from architecture to deployment. More than 80 websites and applications currently run on systems I have built.</p>
<p>Today, I also help teams integrate AI into their development workflows and products.</p>
<address>Get in touch!</address>
<script type="text/javascript">setTimeout(()=>{if(!/bot|google|baidu|bing|msn|duckduckgo|teoma|slurp|yandex/i.test(navigator.userAgent)){const a=document.getElementsByTagName('address')[0];a.innerHTML="hello [@] "+location.hostname.replace('www.','').replace('.', ' [.] ');a.onclick=()=>location.replace('mailto:'+a.innerHTML.replace(/\s\[(.)]\s/g, "$1"))}}, 3000)</script>
</body>
</html>
<?= trim(preg_replace('/>\s+</', '><', ob_get_clean())); ?>