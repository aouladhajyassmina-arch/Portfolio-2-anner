<?php $cfg = require __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ciel — Météo en temps réel</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css?v=<?= filemtime(__DIR__ . '/style.css') ?>">
</head>
<body>
<svg width="0" height="0" style="position:absolute" aria-hidden="true"><defs>
<linearGradient id="gC" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#cfd9e6"/></linearGradient>
<linearGradient id="gD" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#b4c0ce"/><stop offset="1" stop-color="#7d8b9f"/></linearGradient>
<radialGradient id="gS"><stop offset="0" stop-color="#ffe27a"/><stop offset="1" stop-color="#ff9a2e"/></radialGradient>
<radialGradient id="gM"><stop offset="0" stop-color="#fff"/><stop offset="1" stop-color="#cdd6f4"/></radialGradient>
<filter id="cl1" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency=".0028 .008" numOctaves="5" seed="7"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 2.4 -.8"/></filter>
<filter id="cl2" x="0" y="0" width="100%" height="100%"><feTurbulence type="fractalNoise" baseFrequency=".004 .012" numOctaves="5" seed="23"/><feColorMatrix values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 2.2 -.72"/></filter>
</defs></svg>
<div id="sky"><div id="orb" class="orb"></div><div class="cl"></div><div class="cl c2"></div><div class="tint"></div><div id="fl"></div></div>
<canvas id="fx" aria-hidden="true"></canvas>
<div class="app">
  <header>
    <div class="brand">Ciel</div>
    <div class="search">
      <input id="q" type="search" placeholder="Rechercher une ville…" autocomplete="off" aria-label="Rechercher une ville">
      <ul class="sug" id="sug" hidden></ul>
    </div>
    <button class="btn" id="auto" aria-pressed="true">Auto ⏸</button>
    <button class="btn" id="geo" aria-label="Ma position">📍</button>
    <button class="btn" id="unit" aria-label="Changer d'unité">°C</button>
  </header>
  <div id="err" role="alert"></div>
  <main id="main"><div class="state">Chargement du ciel…</div></main>
  <footer>Données Open-Meteo · © <?= date('Y') ?> Ciel</footer>
</div>
<script>window.CFG = <?= json_encode($cfg, JSON_UNESCAPED_UNICODE) ?>;</script>
<script src="app.js?v=<?= filemtime(__DIR__ . '/app.js') ?>" defer></script>
</body>
</html>
