<?php
ob_start();
ob_implicit_flush(false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="color-scheme" content="light dark">
	<title>David Hirtz</title>
	<meta name="description" content="Freelance software engineer and technical consultant based in Munich, Germany">
	<style>
		:root{--fg:#000;--muted:#666;--bg:#fff}
		@media (prefers-color-scheme:dark){:root{--fg:#eee;--muted:#999;--bg:#111}}
		html{background:var(--bg)}
		body{margin:0;padding:10vh 5vw;max-width:32rem;color:var(--fg)}
		h1,h2,p{margin:0 0 1.5rem;font:1em/1.6 monospace;letter-spacing:0.1em;color:inherit}
		h1{font-weight:bold}
		h2{color:var(--muted)}
		.in{opacity:0;transform:translateY(0.5rem);animation:in 0.9s cubic-bezier(.2,.7,.2,1) forwards;animation-delay:calc(var(--i) * 0.35s + 0.15s)}
		@keyframes in{to{opacity:1;transform:none}}
		@media (prefers-reduced-motion:reduce){.in{opacity:1;transform:none;animation:none}}
		nav{display:flex;gap:1.25rem;margin-top:2.5rem}
		nav a{display:block;color:var(--fg);opacity:0.6;transition:opacity 0.2s,transform 0.2s}
		nav a:hover,nav a:focus-visible{opacity:1;transform:translateY(-2px)}
		nav svg{display:block;width:1.5rem;height:1.5rem;fill:currentColor}
		nav svg.s{fill:none;stroke:currentColor;stroke-width:1.75;stroke-linejoin:round;stroke-linecap:round}
	</style>
</head>
<body>
<h1 class="in" style="--i:0">David Hirtz</h1>
<h2 class="in" style="--i:1">Freelance software engineer and technical consultant based in Munich, Germany.</h2>
<p class="in" style="--i:2">For more than two decades, I have been turning complex requirements into custom web software for international agencies, brands and universities, from architecture to deployment. More than 80 websites and applications currently run on systems I have built.</p>
<p class="in" style="--i:3">Today, I also help teams integrate AI into their development workflows and products.</p>
<nav class="in" style="--i:4">
	<a href="https://github.com/davidhirtz" title="GitHub" aria-label="GitHub" rel="me noopener" target="_blank">
		<svg viewBox="0 0 16 16" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
	</a>
	<a href="#" id="m" title="Email" aria-label="Email">
		<svg class="s" viewBox="0 0 24 24" aria-hidden="true"><rect x="2.75" y="4.75" width="18.5" height="14.5" rx="1.5"/><path d="m3.5 6.5 8.5 6.5 8.5-6.5"/></svg>
	</a>
</nav>
<script>
	(()=>{const m=document.getElementById('m'),r=()=>{m.href='mailto:'+[...'moc.ztrihdivad@olleh'].reverse().join('')};['pointerover','focus','touchstart'].forEach(e=>m.addEventListener(e,r,{once:true,passive:true}));m.addEventListener('click',r)})();
</script>
</body>
</html>
<?= trim(preg_replace('/>\s+</', '><', ob_get_clean())); ?>
