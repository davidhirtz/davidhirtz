<?php
ob_start();
ob_implicit_flush(false);

// Encodes text as HTML entities with a hidden decoy, keeping it out of plain-text scrapers
$obfuscate = static function (string $text): string {
	$html = '';
	foreach (mb_str_split($text) as $i => $char) {
		$html .= ($i === 2 ? '<i hidden>qx</i>' : '') . '&#' . mb_ord($char) . ';';
	}
	return $html;
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="color-scheme" content="light dark">
	<title>David Hirtz</title>
	<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ctext y='.9em' font-size='90'%3E%E2%9C%8C%EF%B8%8F%3C/text%3E%3C/svg%3E">
	<meta name="description" content="Freelance software engineer and technical consultant in Munich, Germany, building custom web software and helping teams integrate AI into their workflows.">
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
		details{margin-top:4rem;font:0.75em/1.6 monospace;letter-spacing:0.1em;color:var(--muted)}
		summary{display:inline-block;cursor:pointer;list-style:none;transition:color 0.2s}
		summary::-webkit-details-marker{display:none}
		summary:hover,summary:focus-visible,details[open] summary{color:var(--fg)}
		details p{margin:1rem 0 0;font:inherit;letter-spacing:inherit}
		details a{color:inherit}
		details strong{display:block;margin-top:2rem;color:var(--fg);font-weight:normal}
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
<details id="impressum" class="in" style="--i:5" lang="de">
	<summary>Impressum</summary>
	<p>Angaben gemäß § 5 DDG</p>
	<p>David Hirtz<br><?= implode('<br>', array_map($obfuscate, explode("\n", base64_decode('QXJjaXNzdHJhw59lIDQ3CjgwNzk5IE3DvG5jaGVu')))) ?><br>Deutschland</p>
	<p>E-Mail: <span id="e">hello (at) davidhirtz (dot) com</span></p>
	<p>USt-IdNr.: DE239154165</p>
	<p><strong>Datenschutz</strong></p>
	<p>Verantwortlich für die Datenverarbeitung ist David Hirtz (Anschrift und E-Mail siehe oben).</p>
	<p>Beim Aufruf dieser Seite verarbeitet der Webserver technisch notwendige Daten (IP-Adresse, Datum und Uhrzeit, aufgerufene Adresse, Referrer, Browser und Betriebssystem), um die Seite auszuliefern und ihre Sicherheit zu gewährleisten. Rechtsgrundlage ist Art. 6 Abs. 1 lit. f DSGVO. Diese Server-Logdaten werden nur so lange gespeichert, wie es für diese Zwecke erforderlich ist.</p>
	<p>Diese Seite setzt keine Cookies, verwendet kein Tracking und lädt keine Inhalte von Drittanbietern.</p>
	<p>Wenn Sie mich per E-Mail kontaktieren, verarbeite ich Ihre Angaben ausschließlich zur Bearbeitung Ihrer Anfrage (Art. 6 Abs. 1 lit. b bzw. f DSGVO).</p>
	<p>Sie haben das Recht auf Auskunft, Berichtigung, Löschung und Einschränkung der Verarbeitung, auf Datenübertragbarkeit sowie auf Widerspruch gegen die Verarbeitung. Zudem können Sie sich bei einer Datenschutz-Aufsichtsbehörde beschweren, etwa beim Bayerischen Landesamt für Datenschutzaufsicht.</p>
</details>
<script>
	(()=>{const a=[...'moc.ztrihdivad@olleh'].reverse().join(''),m=document.getElementById('m'),d=document.getElementById('impressum'),r=()=>{m.href='mailto:'+a};['pointerover','focus','touchstart'].forEach(e=>m.addEventListener(e,r,{once:true,passive:true}));m.addEventListener('click',r);d.addEventListener('toggle',()=>{const e=document.getElementById('e');e.innerHTML='<a href="mailto:'+a+'">'+a+'</a>'},{once:true});if(location.hash==='#impressum')d.open=true})();
</script>
</body>
</html>
<?= trim(preg_replace('/>\s+</', '><', ob_get_clean())); ?>
