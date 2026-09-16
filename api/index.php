<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Yasmina Aouladhaj — Étudiante Full Stack Developpement Digital</title>
<meta name="description" content="Future développeuse full stack, je construis des applications web complètes — de la base de données à l’interface — avec rigueur et curiosité.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
:root {
    /* Palettes modifiées : Fond maron khfif w krimi */
    --bg-main: #7d4c02c9;
    --bg-card: rgba(45, 43, 18, 0.45);
    --bg-card-hover: rgba(65, 54, 25, 0.65);
    --crimson: #be8212;
    --crimson-glow: rgba(190, 158, 18, 0.3);
    --crimson-light: #fde5a4;
    --maron-khfif: #5e5023;
    --text-main: #f9fafb;
    --text-muted: #dbd7d1;
    --border-color: rgba(190, 173, 18, 0.25);
    --border-hover: rgba(190, 127, 18, 0.6);
    --max-width: 1200px;
}

* { box-sizing: border-box; margin: 0; padding: 0; scroll-behavior: smooth; }

body {
    background-color: var(--bg-main);
    color: var(--text-main);
    font-family: 'Plus Jakarta Sans', sans-serif;
    overflow-x: hidden;
    background-image: 
        radial-gradient(circle at 10% 20%, rgba(94, 68, 35, 0.25) 0%, transparent 40%),
        radial-gradient(circle at 90% 80%, rgba(190, 136, 18, 0.12) 0%, transparent 40%);
}

a { text-decoration: none; color: inherit; }
ul { list-style: none; }
button { font-family: inherit; }

.container { max-width: var(--max-width); margin: 0 auto; padding: 0 24px; }

/* Navigation bar */
header {
    position: fixed; top: 20px; left: 0; right: 0; z-index: 1000;
    display: flex; justify-content: center; padding: 0 20px;
}
.nav-container {
    background: rgba(30, 10, 18, 0.8);
    backdrop-filter: blur(16px);
    border: 1px solid var(--border-color);
    padding: 12px 28px;
    border-radius: 999px;
    display: flex; align-items: center; gap: 40px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 0 0 20px var(--crimson-glow);
}
.nav-logo { font-weight: 700; font-size: 1.1rem; color: var(--crimson-light); }
.nav-links { display: flex; gap: 22px; }
.nav-links a {
    font-size: 0.9rem; color: var(--text-muted); transition: color 0.3s ease;
    display: flex; align-items: center; gap: 6px;
}
.nav-links a:hover, .nav-links a.active { color: var(--crimson-light); }

@media(max-width: 768px) {
    .nav-container { gap: 15px; padding: 10px 18px; }
    .nav-links span { display: none; }
}

/* Hero Section */
.hero {
    min-height: 100vh; display: flex; align-items: center; padding-top: 100px;
}
.hero-grid {
    display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 50px; align-items: center; width: 100%;
}
.badge {
    display: inline-flex; align-items: center; gap: 8px;
    background: rgba(94, 35, 53, 0.4); border: 1px solid var(--border-color);
    padding: 6px 14px; border-radius: 20px; font-size: 0.85rem; color: var(--crimson-light);
    margin-bottom: 20px; animation: pulseGlow 3s infinite alternate;
}
.hero h1 { font-size: clamp(2.5rem, 5vw, 4.2rem); font-weight: 700; line-height: 1.1; margin-bottom: 20px; }
.hero h1 span { color: var(--crimson-light); text-shadow: 0 0 20px var(--crimson-glow); }
.hero p { color: var(--text-muted); font-size: 1.05rem; line-height: 1.6; margin-bottom: 30px; max-width: 500px; }

.hero-buttons { display: flex; gap: 15px; }
.btn {
    padding: 12px 28px; border-radius: 30px; font-weight: 600; font-size: 0.95rem;
    cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 8px;
    border: none;
}
.btn-primary {
    background: linear-gradient(135deg, var(--crimson), var(--maron-khfif));
    color: white; border: 1px solid rgba(253, 247, 164, 0.2);
    box-shadow: 0 4px 20px var(--crimson-glow);
}
.btn-primary:hover { transform: translateY(-3px); box-shadow: 0 6px 25px rgba(190, 124, 18, 0.5); }
.btn-outline {
    background: transparent; color: var(--text-main);
    border: 1px solid var(--border-color);
}
.btn-outline:hover { border-color: var(--crimson); background: rgba(159, 141, 102, 0.3); }

/* Hero Card */
.hero-card {
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 24px; padding: 30px; text-align: center;
    backdrop-filter: blur(12px); box-shadow: 0 20px 40px rgba(203, 165, 112, 0.4);
    position: relative; overflow: hidden;
}
.hero-card::before {
    content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
    background: radial-gradient(circle, var(--crimson-glow) 0%, transparent 70%);
    opacity: 0.3; z-index: -1; animation: rotateBg 10s linear infinite;
}
.avatar-wrapper {
    width: 180px; height: 180px; margin: 0 auto 20px; border-radius: 20px;
    overflow: hidden; border: 2px solid var(--crimson);
    box-shadow: 0 0 25px var(--crimson-glow);
}
.avatar-wrapper img { width: 100%; height: 100%; object-fit: cover; }

@media(max-width: 968px) {
    .hero-grid { grid-template-columns: 1fr; text-align: center; justify-items: center; }
    .hero p { margin: 0 auto 30px; }
    .hero-buttons { justify-content: center; }
}

/* Sections General */
section { padding: 100px 0; }
.section-title { text-align: center; margin-bottom: 60px; }
.section-title h2 { font-size: 2.5rem; font-weight: 700; margin-bottom: 10px; }
.section-title p { color: var(--text-muted); font-size: 0.95rem; max-width: 560px; margin: 0 auto; }

/* Services Grid */
.services-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;
}
.service-card {
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 20px; padding: 40px 30px; transition: all 0.4s ease;
    backdrop-filter: blur(12px); position: relative; overflow: hidden;
}
.service-card:hover {
    transform: translateY(-8px); border-color: var(--border-hover);
    background: var(--bg-card-hover); box-shadow: 0 15px 35px rgba(155, 132, 78, 0.3);
}
.service-icon {
    font-size: 2rem; width: 60px; height: 60px; border-radius: 16px;
    background: rgba(94, 72, 35, 0.5); border: 1px solid var(--border-color);
    display: flex; align-items: center; justify-content: center; margin-bottom: 24px;
    color: var(--crimson-light);
}
.service-card h3 { font-size: 1.3rem; margin-bottom: 15px; font-weight: 600; }
.service-card p { color: var(--text-muted); font-size: 0.95rem; margin-bottom: 20px; line-height: 1.5; }
.service-features { display: flex; flex-wrap: wrap; gap: 8px; }
.service-features span {
    background: rgba(228, 220, 148, 0.33); border: 1px solid rgba(200, 183, 132, 0.36);
    padding: 4px 12px; border-radius: 20px; font-size: 0.75rem; color: var(--text-muted);
}

/* Projects Grid */
.projects-grid {
    display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;
}
.project-card {
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 20px; overflow: hidden; transition: all 0.4s ease;
    backdrop-filter: blur(12px); display: flex; flex-direction: column;
}
.project-card:hover {
    transform: translateY(-8px); border-color: var(--border-hover);
    box-shadow: 0 20px 40px rgba(94, 35, 53, 0.35);
}
.project-img { height: 220px; overflow: hidden; position: relative; }
.project-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
.project-card:hover .project-img img { transform: scale(1.05); }
.project-content { padding: 25px; display: flex; flex-direction: column; flex-grow: 1; }
.project-cat { font-size: 0.8rem; color: var(--crimson-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px; font-weight: 600; }
.project-content h3 { font-size: 1.25rem; margin-bottom: 10px; font-weight: 600; }
.project-content p { color: var(--text-muted); font-size: 0.9rem; margin-bottom: 20px; flex-grow: 1; line-height: 1.5; }
.project-links { display: flex; gap: 12px; }
.project-btn {
    padding: 8px 16px; border-radius: 20px; font-size: 0.85rem; font-weight: 500;
    background: rgba(94, 35, 53, 0.4); border: 1px solid var(--border-color);
    color: var(--text-main); transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 6px;
}
.project-btn:hover { background: var(--crimson); border-color: var(--crimson); color: white; }

/* About Section */
.about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
.about-text p { color: var(--text-muted); font-size: 1rem; line-height: 1.7; margin-bottom: 20px; }
.formation-card {
    display: flex; flex-wrap: wrap; gap: 10px 28px; align-items: baseline;
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 14px; padding: 18px 22px; margin-bottom: 24px;
}
.formation-card div { font-size: 0.85rem; color: var(--text-muted); }
.formation-card strong { display: block; color: var(--crimson-light); font-size: 0.95rem; margin-bottom: 2px; font-weight: 600; }
.about-stats { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; }
.stat-box {
    background: var(--bg-card); border: 1px solid var(--border-color);
    padding: 20px; border-radius: 16px; text-align: center;
    backdrop-filter: blur(12px);
}
.stat-box h4 { font-size: 2rem; color: var(--crimson-light); font-weight: 700; margin-bottom: 5px; }
.stat-box p { font-size: 0.8rem; color: var(--text-muted); margin: 0; }

@media(max-width: 900px) {
    .about-grid { grid-template-columns: 1fr; }
}

/* Modules & Ateliers */
.modules-list { display: flex; flex-direction: column; gap: 20px; }
.module-block {
    background: var(--bg-card); border: 1px solid var(--border-color);
    border-radius: 22px; padding: 32px; backdrop-filter: blur(12px);
    transition: border-color 0.3s ease;
}
.module-block:hover { border-color: var(--border-hover); }
.module-block-head { display: flex; flex-wrap: wrap; align-items: baseline; gap: 10px 16px; margin-bottom: 6px; }
.module-block-head .module-index {
    font-size: 0.8rem; color: var(--crimson-light); font-weight: 700; letter-spacing: 0.5px;
    background: rgba(94, 72, 35, 0.5); border: 1px solid var(--border-color);
    padding: 4px 12px; border-radius: 20px;
}
.module-block-head h3 { font-size: 1.3rem; font-weight: 700; }
.module-block-head .module-duration {
    font-size: 0.75rem; color: var(--text-muted); border: 1px solid var(--border-color);
    padding: 3px 10px; border-radius: 20px; white-space: nowrap; margin-left: auto;
}
.module-block .module-sub { font-size: 0.85rem; color: var(--crimson-light); margin-bottom: 10px; }
.module-block p.module-desc { color: var(--text-muted); font-size: 0.92rem; line-height: 1.55; margin-bottom: 22px; max-width: 720px; }

.atelier-block { margin-bottom: 22px; }
.atelier-block:last-child { margin-bottom: 0; }
.atelier-head { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; }
.atelier-pill {
    display: inline-flex; align-items: center; flex-shrink: 0;
    background: linear-gradient(135deg, var(--maron-khfif), var(--crimson));
    color: #fff; font-weight: 700; font-size: 0.82rem;
    padding: 8px 18px; border-radius: 999px; box-shadow: 0 4px 14px var(--crimson-glow);
}
.atelier-titre { font-size: 0.85rem; color: var(--text-muted); }
.seances-row {
    display: flex; gap: 16px; overflow-x: auto; padding-bottom: 6px; scroll-snap-type: x proximity;
}
.seances-row::-webkit-scrollbar { height: 6px; }
.seances-row::-webkit-scrollbar-thumb { background: var(--border-hover); border-radius: 6px; }
.seance-card {
    scroll-snap-align: start; flex: 0 0 220px;
    background: linear-gradient(160deg, rgba(253, 229, 164, 0.18), rgba(94, 80, 35, 0.28));
    border: 1px solid var(--border-color); border-radius: 16px;
    padding: 18px 16px; text-align: center; transition: transform 0.3s ease, border-color 0.3s ease;
}
.seance-card:hover { transform: translateY(-4px); border-color: var(--border-hover); }
.seance-card h4 { font-size: 0.95rem; font-weight: 700; color: var(--text-main); margin-bottom: 10px; }
.seance-card a {
    display: block; font-size: 0.82rem; font-weight: 600; color: var(--crimson-light);
    padding: 4px 0; transition: color 0.25s ease;
}
.seance-card a:hover { color: #fff; text-decoration: underline; }

@media(max-width: 640px) {
    .module-block { padding: 22px; }
    .seance-card { flex-basis: 180px; }
}

/* Contact Section */
.contact-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 50px; }
.contact-info h3 { font-size: 1.8rem; margin-bottom: 15px; }
.contact-info p { color: var(--text-muted); margin-bottom: 30px; line-height: 1.6; }
.contact-details { display: flex; flex-direction: column; gap: 15px; margin-bottom: 30px; }
.contact-item { display: flex; align-items: center; gap: 12px; color: var(--text-muted); font-size: 0.95rem; }
.contact-item span { color: var(--crimson-light); }

.contact-form {
    background: var(--bg-card); border: 1px solid var(--border-color);
    padding: 40px; border-radius: 24px; backdrop-filter: blur(12px);
}
.form-group { margin-bottom: 20px; }
.form-group label { display: block; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 8px; }
.form-control {
    width: 100%; background: rgb(188, 178, 145); border: 1px solid var(--border-color);
    padding: 14px 18px; border-radius: 12px; color: var(--text-main); font-family: inherit;
    font-size: 0.95rem; transition: all 0.3s ease;
}
.form-control:focus { outline: none; border-color: var(--crimson); box-shadow: 0 0 10px var(--crimson-glow); }
textarea.form-control { resize: vertical; min-height: 120px; }
.hp { display: none; }

.form-msg { padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 0.9rem; }
.form-msg.success { background: rgba(16, 185, 129, 0.1); border: 1px solid rgba(16, 185, 129, 0.3); color: #34d399; }
.form-msg.error { background: rgba(190, 18, 60, 0.1); border: 1px solid rgba(190, 18, 60, 0.3); color: #fda4af; }

@media(max-width: 768px) {
    .contact-grid { grid-template-columns: 1fr; }
    .contact-form { padding: 25px; }
}

/* Footer */
footer {
    border-top: 1px solid var(--border-color); padding: 40px 0; text-align: center; color: var(--text-muted); font-size: 0.85rem;
}

/* Animations */
@keyframes pulseGlow {
    0% { box-shadow: 0 0 5px var(--crimson-glow); }
    100% { box-shadow: 0 0 20px var(--crimson-glow); }
}
@keyframes rotateBg {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.reveal {
    opacity: 0; transform: translateY(30px); transition: opacity 0.7s cubic-bezier(.16,.84,.44,1), transform 0.7s cubic-bezier(.16,.84,.44,1);
}
.reveal.active { opacity: 1; transform: translateY(0); }

/* ===== Preloader ===== */
#loader {
    position: fixed; inset: 0; z-index: 9999; background: var(--bg-main);
    display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 16px;
    transition: opacity 0.6s ease, visibility 0.6s ease;
}
#loader.hidden { opacity: 0; visibility: hidden; pointer-events: none; }
.loader-mark {
    font-size: 1.4rem; font-weight: 700; color: var(--crimson-light); letter-spacing: 2px;
    opacity: 0; animation: loaderPulse 1.4s ease-in-out infinite;
}
.loader-bar { width: 160px; height: 2px; background: var(--border-color); border-radius: 2px; overflow: hidden; }
.loader-bar::after {
    content: ''; display: block; height: 100%; width: 40%; background: var(--crimson);
    animation: loaderSlide 1.1s ease-in-out infinite;
}
@keyframes loaderPulse { 0%,100% { opacity: 0.4; } 50% { opacity: 1; } }
@keyframes loaderSlide { 0% { transform: translateX(-100%); } 100% { transform: translateX(350%); } }

/* ===== Scroll progress bar ===== */
#scroll-progress {
    position: fixed; top: 0; left: 0; height: 3px; width: 0%; z-index: 1001;
    background: linear-gradient(90deg, var(--maron-khfif), var(--crimson), var(--crimson-light));
    box-shadow: 0 0 10px var(--crimson-glow); transition: width 0.08s linear;
}

/* ===== Cursor glow ===== */
#cursor-glow {
    position: fixed; top: 0; left: 0; width: 420px; height: 420px; border-radius: 50%;
    background: radial-gradient(circle, var(--crimson-glow) 0%, transparent 70%);
    pointer-events: none; z-index: 2; transform: translate(-50%, -50%); opacity: 0;
    transition: opacity 0.4s ease; filter: blur(10px);
}

/* ===== Typewriter ===== */
.typewriter-cursor {
    display: inline-block; width: 2px; margin-left: 2px; background: var(--crimson-light);
    animation: blinkCursor 0.9s steps(1) infinite;
}
@keyframes blinkCursor { 0%,49% { opacity: 1; } 50%,100% { opacity: 0; } }

/* ===== Floating avatar ===== */
.avatar-wrapper { animation: floatY 4.5s ease-in-out infinite; }
@keyframes floatY { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

/* ===== Badge shimmer ===== */
.badge { position: relative; overflow: hidden; }
.badge::after {
    content: ''; position: absolute; top: 0; left: -60%; width: 40%; height: 100%;
    background: linear-gradient(120deg, transparent, rgba(255,255,255,0.25), transparent);
    animation: shimmer 3.2s ease-in-out infinite;
}
@keyframes shimmer { 0% { left: -60%; } 60%,100% { left: 130%; } }

/* ===== Stagger for grids ===== */
.services-grid .reveal:nth-child(1), .projects-grid .reveal:nth-child(1) { transition-delay: 0s; }
.services-grid .reveal:nth-child(2), .projects-grid .reveal:nth-child(2) { transition-delay: 0.08s; }
.services-grid .reveal:nth-child(3), .projects-grid .reveal:nth-child(3) { transition-delay: 0.16s; }
.projects-grid .reveal:nth-child(4) { transition-delay: 0.24s; }
.projects-grid .reveal:nth-child(5) { transition-delay: 0.32s; }
.projects-grid .reveal:nth-child(6) { transition-delay: 0.4s; }
.modules-list .reveal:nth-child(1) { transition-delay: 0s; }
.modules-list .reveal:nth-child(2) { transition-delay: 0.06s; }
.modules-list .reveal:nth-child(3) { transition-delay: 0.12s; }
.modules-list .reveal:nth-child(4) { transition-delay: 0.18s; }
.modules-list .reveal:nth-child(5) { transition-delay: 0.24s; }
.modules-list .reveal:nth-child(6) { transition-delay: 0.3s; }
.modules-list .reveal:nth-child(7) { transition-delay: 0.36s; }

/* ===== Card tilt ===== */
.module-block, .project-card, .service-card {
    transform-style: preserve-3d; will-change: transform;
}

/* ===== Ripple on buttons ===== */
.btn, .project-btn { position: relative; overflow: hidden; }
.ripple {
    position: absolute; border-radius: 50%; transform: scale(0);
    background: rgba(255,255,255,0.45); animation: rippleAnim 0.65s ease-out;
    pointer-events: none;
}
@keyframes rippleAnim { to { transform: scale(3); opacity: 0; } }

/* ===== Animated counters ===== */
.stat-box h4 { font-variant-numeric: tabular-nums; }

/* ===== Nav active link underline ===== */
.nav-links a { position: relative; }
.nav-links a::after {
    content: ''; position: absolute; left: 0; bottom: -6px; width: 0; height: 2px;
    background: var(--crimson-light); transition: width 0.3s ease;
}
.nav-links a.active::after { width: 100%; }

/* ===== Section headings subtle entrance ===== */
.section-title h2 { position: relative; display: inline-block; }

@media (prefers-reduced-motion: reduce) {
    *, *::before, *::after { animation-duration: 0.001ms !important; animation-iteration-count: 1 !important; transition-duration: 0.001ms !important; }
    #cursor-glow { display: none; }
}
@media (max-width: 900px), (hover: none) {
    #cursor-glow { display: none; }
}

</style>
</head>
<body>

<!-- Preloader -->
<div id="loader">
    <div class="loader-mark">Yasmina Aouladhaj</div>
    <div class="loader-bar"></div>
</div>

<!-- Scroll progress -->
<div id="scroll-progress"></div>

<!-- Cursor glow -->
<div id="cursor-glow"></div>

<!-- Header Navigation -->
<header>
    <div class="nav-container">
        <a href="#home" class="nav-logo">Yasmina Aouladhaj</a>
        <nav class="nav-links">
            <a href="#home"><span>Accueil</span></a>
            <a href="#about"><span>À propos</span></a>
            <a href="#modules"><span>Modules</span></a>
            <a href="#projects"><span>Projets</span></a>
            <a href="#contact"><span>Contact</span></a>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section id="home" class="hero container">
    <div class="hero-grid">
        <div class="reveal">
            <div class="badge">
                <span>Formation Full Stack Développement Digital</span>
            </div>
            <h1>Bonjour, je suis <span>Yasmina Aouladhaj</span></h1>
            <h2 id="role-heading" style="font-size: 1.5rem; font-weight: 500; color: var(--crimson-light); margin-bottom: 20px;"><span id="role-text">Étudiante Full Stack Developpement Digital</span><span class="typewriter-cursor">&nbsp;</span></h2>
            <p>Future développeuse full stack, je construis des applications web complètes — de la base de données à l’interface — avec rigueur et curiosité.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary"><span>Me contacter</span></a>
                <a href="#modules" class="btn btn-outline"><span>Voir les modules</span></a>
                <a href="CV_Yasmina_Aouladhaj_Digital_Development.pdf_20260609_194220_0000.pdf" download class="btn btn-outline"><span>📄 Télécharger mon CV</span></a>
            </div>
        </div>
        <div class="hero-card reveal">
            <div class="avatar-wrapper">
                <img src="/images/me3.jpeg" alt="Yasmina Aouladhaj">
            </div>
            <h3 style="margin-bottom: 8px;">Yasmina Aouladhaj</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 0;">Maroc</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="container">
    <div class="section-title reveal">
        <h2>À propos de moi</h2>
        <p>Faisons connaissance</p>
    </div>
    <div class="about-grid">
        <div class="about-text reveal">
            <div class="formation-card">
                <div><strong>Full Stack Développement Digital</strong>2ème année</div>
                <div><strong>Formateur</strong>Azeggouar Mohamed Karim</div>
                <div><strong>Module 1</strong>45h</div>
            </div>
            <p>Bonjour ! Je suis Yasmina Aouladhaj, étudiante en Full Stack Développement Digital (2ème année), passionnée par la création d'applications web complètes.</p>
            <p>Ma formation couvre l'ensemble du cycle de développement — de la conception d'un projet jusqu'à son déploiement dans le cloud — encadrée par mon formateur Azeggouar Mohamed Karim.</p>
            <p>Je m'intéresse particulièrement au développement front-end avec React, au back-end avec Laravel, et à la gestion de données avec MongoDB.</p>
        </div>
        <div class="about-stats reveal">
            <div class="stat-box">
                <h4 class="stat-num" data-target="7">0</h4>
                <p>Modules de formation</p>
            </div>
            <div class="stat-box">
                <h4 class="stat-num" data-target="28">0</h4>
                <p>Ateliers pratiques</p>
            </div>
            <div class="stat-box">
                <h4 class="stat-num" data-target="2">0</h4>
                <p>Année de formation</p>
            </div>
        </div>
    </div>
</section>

<!-- Modules & Ateliers Section -->
<section id="modules" class="container">
    <div class="section-title reveal">
        <h2>Modules & Ateliers</h2>
        <p>Les 7 modules de ma formation, avec le détail des ateliers et séances réalisés</p>
    </div>
    <div class="modules-list">
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 1</span>
                <h3>Préparer un projet web</h3>
                <span class="module-duration">45h</span>
            </div>
            <div class="module-sub">Conception = Plan</div>
            <p class="module-desc">Poser les bases d’un projet web avant d’écrire la moindre ligne de code : analyser le besoin, cadrer le périmètre et choisir la bonne stack.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Analyse des besoins et cahier des charges</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="Untitled.mdj">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="Untitled1.mdj">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="Untitled2.mdj">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Maquettage et wireframes</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="Untitled3.mdj">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="Untitled4.mdj">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Choix de la stack technique</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Planification du projet</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 2</span>
                <h3>Gestion de projet</h3>
                <span class="module-duration">12h</span>
            </div>
            <div class="module-sub">Méthodologie Agile</div>
            <p class="module-desc">Organiser le travail d’équipe avec les méthodes Agile : découper le projet en tâches claires et suivre son avancement sprint après sprint.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Fondamentaux de Scrum</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Rédaction des User Stories</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Sprint Planning</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Suivi avec un tableau Kanban</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 3</span>
                <h3>Gestion des données</h3>
                <span class="module-duration">18h</span>
            </div>
            <div class="module-sub">MongoDB (NoSQL)</div>
            <p class="module-desc">Concevoir et interroger une base de données NoSQL pour stocker les informations d’une application de façon flexible et performante.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Bases de données NoSQL</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Modélisation de schémas</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Requêtes et agrégations avancées</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">CRUD avec Mongoose</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 4</span>
                <h3>Développement Front-End</h3>
                <span class="module-duration">24h</span>
            </div>
            <div class="module-sub">React.js</div>
            <p class="module-desc">Construire des interfaces modernes, réactives et modulaires avec React, en connectant les composants aux données de l’application.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Composants, props et state</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Hooks (useState, useEffect)</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Routing avec React Router</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Consommation d’API REST</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 5</span>
                <h3>Développement Back-End</h3>
                <span class="module-duration">24h</span>
            </div>
            <div class="module-sub">Laravel</div>
            <p class="module-desc">Développer la logique serveur, la base de données et les API d’une application avec Laravel, du modèle jusqu’à la route.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Introduction à Laravel (MVC)</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Authentification et middleware</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Routing, contrôleurs et Eloquent</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Construction d’une API RESTful</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 6</span>
                <h3>Application Cloud</h3>
                <span class="module-duration">15h</span>
            </div>
            <div class="module-sub">Déploiement &amp; Cloud</div>
            <p class="module-desc">Déployer une application dans le cloud : conteneurisation, hébergement et automatisation de la mise en production.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Conteneurisation avec Docker</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Déploiement sur un service cloud</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Intégration et déploiement continus</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Sécurité des applications</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="module-block reveal">
            <div class="module-block-head">
                <span class="module-index">Module 7</span>
                <h3>Projet de fin de formation</h3>
                <span class="module-duration">—</span>
            </div>
            <div class="module-sub">Mise en pratique</div>
            <p class="module-desc">Mobiliser l’ensemble des compétences acquises pour concevoir, développer et présenter une application complète, du cahier des charges à la soutenance.</p>

            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 1</span>
                    <span class="atelier-titre">Rédaction du cahier des charges final</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 2</span>
                    <span class="atelier-titre">Développement de l’application</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="#">Voir exercice 3</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 3</span>
                    <span class="atelier-titre">Tests et recette</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="#">Voir exercice 2</a>
                        
                    </div>
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">Atelier 4</span>
                    <span class="atelier-titre">Soutenance devant jury</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 4</h4>
                        <a href="#">Voir exercice 1</a>
                        
                    </div>
                </div>
            </div>
        </div>    </div>
</section>


<!-- Projects Section -->
<section id="projects" class="container">
    <div class="section-title reveal">
        <h2>Projets Réalisés</h2>
        <p>Une sélection de mes projets récents illustrant mes compétences en développement full-stack et en résolution créative de problèmes.</p>
    </div>
    <div class="projects-grid">
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1557821552-1710517667bc?auto=format&fit=crop&w=600&q=80" alt="Site E-Commerce">
            </div>
            <div class="project-content">
                <span class="project-cat">E-Commerce / UI & Code</span>
                <h3>Site E-Commerce</h3>
                <p>Boutique en ligne moderne avec filtrage des produits, panier et système de paiement.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=600&q=80" alt="Site Portfolio">
            </div>
            <div class="project-content">
                <span class="project-cat">UI Personnelle</span>
                <h3>Site Portfolio</h3>
                <p>Portfolio personnel pour présenter mes projets de design et de développement.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1592210454359-9043f067919b?auto=format&fit=crop&w=600&q=80" alt="Application Météo">
            </div>
            <div class="project-content">
                <span class="project-cat">Application Web</span>
                <h3>Application Météo</h3>
                <p>Application responsive affichant la météo en temps réel via une API.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=600&q=80" alt="Site de Blog">
            </div>
            <div class="project-content">
                <span class="project-cat">Plateforme de Contenu</span>
                <h3>Site de Blog</h3>
                <p>Plateforme de blog simple et épurée avec support du markdown.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=600&q=80" alt="Landing Page Gaming">
            </div>
            <div class="project-content">
                <span class="project-cat">UI/UX Design</span>
                <h3>Landing Page Gaming</h3>
                <p>Page d'accueil pour un jeu vidéo avec animations et effets de parallaxe.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
        <div class="project-card reveal">
            <div class="project-img">
                <img src="https://images.unsplash.com/photo-1540350394557-8d14678e7f91?auto=format&fit=crop&w=600&q=80" alt="Gestionnaire de Tâches">
            </div>
            <div class="project-content">
                <span class="project-cat">Application de Productivité</span>
                <h3>Gestionnaire de Tâches</h3>
                <p>Application de suivi de tâches avec fonctionnalités CRUD et interface épurée.</p>
                <div class="project-links">
                    <a href="#" class="project-btn">GitHub</a>
                    <a href="#" class="project-btn" style="background:var(--crimson); color:white; border-color:var(--crimson);">Démo en ligne</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="container">
    <div class="section-title reveal">
        <h2>Mes Services</h2>
        <p>Ce que je peux apporter pour faire avancer votre projet</p>
    </div>
    <div class="services-grid">
        <div class="service-card reveal">
            <div class="service-icon">&lt;/&gt;</div>
            <h3>Développement Web</h3>
            <p>Je crée des sites web modernes et responsives en utilisant les dernières technologies et les meilleures pratiques.</p>
            <div class="service-features">
                <span>Design Responsive</span>
                <span>Performance Optimisée</span>
                <span>Optimisé SEO</span>
            </div>
        </div>
        <div class="service-card reveal">
            <div class="service-icon">📱</div>
            <h3>Développement Mobile</h3>
            <p>Création d'applications mobiles multiplateformes fonctionnant aussi bien sur iOS que sur Android.</p>
            <div class="service-features">
                <span>Multiplateforme</span>
                <span>Performance Native</span>
                <span>Convivial</span>
            </div>
        </div>
        <div class="service-card reveal">
            <div class="service-icon">🎨</div>
            <h3>UI/UX Design</h3>
            <p>Conception d'interfaces intuitives et esthétiques offrant une expérience utilisateur exceptionnelle.</p>
            <div class="service-features">
                <span>Centré Utilisateur</span>
                <span>Design Moderne</span>
                <span>Accessibilité</span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container">
    <div class="section-title reveal">
        <h2>Me Contacter</h2>
        <p>Discutons de votre prochain projet</p>
    </div>
    <div class="contact-grid">
        <div class="contact-info reveal">
            <h3>Construisons ensemble quelque chose d'exceptionnel.</h3>
            <p>Je suis toujours ouverte à discuter de nouveaux projets, d'idées créatives ou d'opportunités de collaboration.</p>
            <div class="contact-details">
                <div class="contact-item"><span>📧</span> contact@yasmina-aouladhaj.dev</div>
                <div class="contact-item"><span>📍</span> Maroc</div>
            </div>
        </div>

        <div class="contact-form reveal">
            <div id="form-msg-slot"></div>
            <form action="contact.php" method="post" novalidate>
                <input class="hp" type="text" name="website" tabindex="-1" autocomplete="off">

                <div class="form-group">
                    <label for="name">Votre nom</label>
                    <input class="form-control" id="name" name="name" type="text" required>
                </div>

                <div class="form-group">
                    <label for="email">Votre email</label>
                    <input class="form-control" id="email" name="email" type="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Votre message</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>

                <button type="submit" name="contact_submit" value="1" class="btn btn-primary" style="width: 100%; justify-content: center;">Envoyer le message</button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <p>© 2026 Yasmina Aouladhaj. Tous droits réservés.</p>
    </div>
</footer>

<script>
const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const fineHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

document.addEventListener('DOMContentLoaded', () => {

    /* ---------- Contact form status (returned from contact.php) ---------- */
    (() => {
        const params = new URLSearchParams(window.location.search);
        const status = params.get('status');
        const slot = document.getElementById('form-msg-slot');
        if (status && slot) {
            const msg = params.get('msg');
            const div = document.createElement('div');
            div.className = 'form-msg ' + (status === 'success' ? 'success' : 'error');
            div.textContent = status === 'success'
                ? 'Merci ! Votre message a bien été envoyé.'
                : (msg || 'Une erreur est survenue. Merci de réessayer.');
            slot.appendChild(div);
        }
    })();

    /* ---------- Preloader ---------- */
    const loader = document.getElementById('loader');
    window.addEventListener('load', () => {
        setTimeout(() => loader && loader.classList.add('hidden'), 350);
    });
    // safety fallback in case 'load' fires oddly
    setTimeout(() => loader && loader.classList.add('hidden'), 2500);

    /* ---------- Reveal on scroll + counters + stagger ---------- */
    const counterEls = document.querySelectorAll('.stat-num');
    const animateCounter = (el) => {
        const target = parseInt(el.dataset.target, 10) || 0;
        const duration = 900;
        const start = performance.now();
        const step = (now) => {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target);
            if (progress < 1) requestAnimationFrame(step);
        };
        requestAnimationFrame(step);
    };

    const observerOptions = { threshold: 0.15 };
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                if (entry.target.classList.contains('about-stats')) {
                    counterEls.forEach(animateCounter);
                }
                obs.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    /* ---------- Typewriter for role heading ---------- */
    const roleTextEl = document.getElementById('role-text');
    if (roleTextEl && !reduceMotion) {
        const fullText = roleTextEl.textContent.trim();
        roleTextEl.textContent = '';
        let i = 0;
        const typeStep = () => {
            if (i <= fullText.length) {
                roleTextEl.textContent = fullText.slice(0, i);
                i++;
                setTimeout(typeStep, 38);
            }
        };
        setTimeout(typeStep, 700);
    }

    /* ---------- Scroll progress bar ---------- */
    const progressBar = document.getElementById('scroll-progress');
    const updateProgress = () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
        if (progressBar) progressBar.style.width = pct + '%';
    };

    /* ---------- Nav active link tracking ---------- */
    const navLinks = document.querySelectorAll('.nav-links a');
    const sections = Array.from(navLinks)
        .map(a => document.querySelector(a.getAttribute('href')))
        .filter(Boolean);
    const setActiveNav = () => {
        let currentId = sections[0] ? sections[0].id : '';
        const scrollPos = window.scrollY + window.innerHeight * 0.35;
        sections.forEach(sec => {
            if (sec.offsetTop <= scrollPos) currentId = sec.id;
        });
        navLinks.forEach(a => {
            a.classList.toggle('active', a.getAttribute('href') === '#' + currentId);
        });
    };

    /* ---------- Roadmap fill on scroll ---------- */
    const roadmapLine = document.querySelector('.roadmap-line');
    const updateRoadmapFill = () => {
        if (!roadmapLine) return;
        const rect = roadmapLine.getBoundingClientRect();
        const viewportCenter = window.innerHeight * 0.75;
        const total = rect.height;
        let filled = viewportCenter - rect.top;
        let pct = total > 0 ? Math.max(0, Math.min(1, filled / total)) : 0;
        roadmapLine.style.setProperty('--fill', pct.toFixed(3));
    };

    const onScroll = () => {
        updateProgress();
        setActiveNav();
        updateRoadmapFill();
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ---------- Cursor glow (desktop, fine pointer only) ---------- */
    const glow = document.getElementById('cursor-glow');
    if (glow && fineHover && !reduceMotion) {
        window.addEventListener('mousemove', (e) => {
            glow.style.opacity = '1';
            glow.style.left = e.clientX + 'px';
            glow.style.top = e.clientY + 'px';
        });
        document.addEventListener('mouseleave', () => { glow.style.opacity = '0'; });
    }

    /* ---------- Tilt effect on cards ---------- */
    if (fineHover && !reduceMotion) {
        document.querySelectorAll('.module-card, .project-card, .service-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const r = card.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                card.style.transform = `perspective(700px) rotateX(${(-y * 6).toFixed(2)}deg) rotateY(${(x * 6).toFixed(2)}deg) translateY(-4px)`;
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
            });
        });

        /* Magnetic buttons */
        document.querySelectorAll('.btn-primary, .btn-outline').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const r = btn.getBoundingClientRect();
                const x = (e.clientX - r.left - r.width / 2) * 0.25;
                const y = (e.clientY - r.top - r.height / 2) * 0.25;
                btn.style.transform = `translate(${x}px, ${y}px)`;
            });
            btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
        });
    }

    /* ---------- Ripple on click ---------- */
    document.querySelectorAll('.btn, .project-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
            const r = this.getBoundingClientRect();
            const ripple = document.createElement('span');
            const size = Math.max(r.width, r.height);
            ripple.className = 'ripple';
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = (e.clientX - r.left - size / 2) + 'px';
            ripple.style.top = (e.clientY - r.top - size / 2) + 'px';
            this.appendChild(ripple);
            setTimeout(() => ripple.remove(), 650);
        });
    });
});

</script>

</body>
</html>
