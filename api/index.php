<?php
/**
 * Portfolio — page unique en PHP
 * Contenu piloté par tableaux PHP (facile à remplacer par vos propres données
 * ou par une base de données plus tard).
 */

// ---------------------------------------------------------------------
// 1. DONNÉES — à personnaliser
// ---------------------------------------------------------------------
$profile = [
    'name'     => 'Sami Nasri',
    'role'     => 'Développeur & designer créatif',
    'tagline'  => 'Je conçois des expériences web où le code rencontre le dessin.',
    'location' => 'Rabat, Maroc',
    'email'    => 'contact@sami-nasri.dev',
    'years'    => 6,
];

$projects = [
    [
        'num'      => '01',
        'title'    => 'Atlas Studio',
        'year'     => '2025',
        'category' => 'Identité & site vitrine',
        'desc'     => "Refonte complète de l'identité visuelle et du site d'un studio d'architecture, avec des illustrations SVG tracées à la main.",
        'link'     => '#',
    ],
    [
        'num'      => '02',
        'title'    => 'Ravel — Carnet de voyage',
        'year'     => '2024',
        'category' => 'Application web',
        'desc'     => 'Carnet de voyage collaboratif : cartes interactives et tracés animés au fil du scroll.',
        'link'     => '#',
    ],
    [
        'num'      => '03',
        'title'    => 'Kanaria',
        'year'     => '2023',
        'category' => 'E-commerce',
        'desc'     => 'Boutique en ligne pour une marque de céramique artisanale, micro-interactions et transitions fluides.',
        'link'     => '#',
    ],
    [
        'num'      => '04',
        'title'    => 'Lumen',
        'year'     => '2022',
        'category' => 'Portfolio interactif',
        'desc'     => "Portfolio expérimental pour un photographe, construit autour de la lumière et du contraste.",
        'link'     => '#',
    ],
];

$skills = [
    'Langages' => ['PHP', 'JavaScript', 'TypeScript', 'Python'],
    'Frontend' => ['HTML / CSS', 'SVG & Canvas', 'React', 'GSAP'],
    'Backend'  => ['Laravel', 'Node.js', 'MySQL', 'REST / GraphQL'],
    'Design'   => ['Figma', 'Illustration vectorielle', 'Typographie', 'Animation'],
];

// ---------------------------------------------------------------------
// 2. TRAITEMENT DU FORMULAIRE DE CONTACT
// ---------------------------------------------------------------------
$formStatus  = null; // 'success' | 'error' | null
$formErrors  = [];
$old         = ['name' => '', 'email' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $old['name']    = trim($_POST['name'] ?? '');
    $old['email']   = trim($_POST['email'] ?? '');
    $old['message'] = trim($_POST['message'] ?? '');
    $honeypot       = trim($_POST['website'] ?? ''); // champ piège anti-spam

    if ($honeypot !== '') {
        // Un bot a rempli le champ caché : on ignore silencieusement.
        $formStatus = 'success';
    } else {
        if ($old['name'] === '')                                   $formErrors[] = 'Le nom est requis.';
        if (!filter_var($old['email'], FILTER_VALIDATE_EMAIL))      $formErrors[] = 'Adresse email invalide.';
        if ($old['message'] === '')                                 $formErrors[] = 'Le message ne peut pas être vide.';

        if (empty($formErrors)) {
            // Décommentez et configurez pour un envoi réel :
            // mail($profile['email'], 'Nouveau message — portfolio', $old['message'],
            //      'From: ' . $old['email']);
            $formStatus = 'success';
            $old = ['name' => '', 'email' => '', 'message' => ''];
        } else {
            $formStatus = 'error';
        }
    }
}

function e($str) { return htmlspecialchars($str, ENT_QUOTES, 'UTF-8'); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($profile['name']) ?> — <?= e($profile['role']) ?></title>
<meta name="description" content="<?= e($profile['tagline']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,500&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#17160f;
    --paper:#f3ede0;
    --paper-dim:#e9e0cd;
    --brass:#b8834a;
    --teal:#3f5d54;
    --line:#17160f;
    --max:1180px;
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    background:var(--paper);
    color:var(--ink);
    font-family:'Inter',system-ui,sans-serif;
    font-size:16px;
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  h1,h2,h3,.serif{
    font-family:'Fraunces',serif;
    font-weight:500;
    line-height:1.05;
    margin:0;
  }
  a{color:inherit;text-decoration:none;}
  ul{list-style:none;margin:0;padding:0;}
  img,svg{display:block;max-width:100%;}
  ::selection{background:var(--brass);color:var(--paper);}

  .wrap{max-width:var(--max);margin:0 auto;padding:0 32px;}

  /* Curseur personnalisé */
  .cursor-dot{
    position:fixed;top:0;left:0;width:10px;height:10px;border-radius:50%;
    background:var(--ink);pointer-events:none;z-index:999;
    transform:translate(-50%,-50%);
    transition:width .25s ease, height .25s ease, background .25s ease;
    mix-blend-mode:difference;
  }
  .cursor-dot.hovering{width:44px;height:44px;background:var(--brass);}
  @media (hover:none), (pointer:coarse){ .cursor-dot{display:none;} }

  /* Header */
  header{
    position:fixed;top:0;left:0;right:0;z-index:100;
    background:rgba(243,237,224,.82);backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(23,22,15,.08);
  }
  header .wrap{display:flex;align-items:center;justify-content:space-between;height:76px;}
  .logo{font-family:'Fraunces',serif;font-size:1.25rem;font-weight:600;}
  nav ul{display:flex;gap:36px;}
  nav a{font-size:.95rem;position:relative;padding:4px 0;}
  nav a::after{
    content:'';position:absolute;left:0;bottom:0;width:100%;height:1px;
    background:var(--ink);transform:scaleX(0);transform-origin:left;
    transition:transform .35s ease;
  }
  nav a:hover::after{transform:scaleX(1);}
  @media (max-width:720px){ nav ul{gap:18px;} .logo{font-size:1.05rem;} }

  /* Hero */
  .hero{
    min-height:100vh;
    display:flex;align-items:center;
    padding-top:76px;
  }
  .hero .wrap{
    display:grid;grid-template-columns:1.1fr 1fr;gap:40px;align-items:center;
  }
  .hero-eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    font-size:.85rem;color:var(--teal);margin-bottom:22px;
  }
  .hero-eyebrow .dot{width:6px;height:6px;border-radius:50%;background:var(--teal);}
  .hero h1{font-size:clamp(2.6rem,5.6vw,4.4rem);letter-spacing:-.01em;}
  .hero h1 em{font-style:italic;color:var(--brass);}
  .hero p.tagline{
    max-width:46ch;font-size:1.15rem;margin-top:22px;color:#3a382c;
  }
  .hero-meta{display:flex;gap:28px;margin-top:34px;flex-wrap:wrap;}
  .hero-meta div{font-size:.85rem;color:#5b5847;}
  .hero-meta strong{display:block;font-family:'Fraunces',serif;font-size:1.05rem;color:var(--ink);font-weight:500;}
  .btn{
    display:inline-flex;align-items:center;gap:10px;margin-top:38px;
    padding:14px 26px;border:1px solid var(--ink);border-radius:999px;
    font-size:.95rem;font-weight:500;position:relative;overflow:hidden;
  }
  .btn span{position:relative;z-index:1;}
  .btn::before{
    content:'';position:absolute;inset:0;background:var(--ink);
    transform:translateY(101%);transition:transform .35s ease;
  }
  .btn:hover{color:var(--paper);}
  .btn:hover::before{transform:translateY(0);}

  .hero-art{width:100%;}
  .draw-line{
    fill:none;stroke:var(--line);stroke-width:2;
    stroke-linecap:round;stroke-linejoin:round;
    stroke-dasharray:1;stroke-dashoffset:1;
    animation:draw 2.6s cubic-bezier(.6,.05,.28,1) forwards;
  }
  .draw-fill{
    fill:var(--brass);opacity:0;
    animation:fadein .8s ease forwards;
  }
  @keyframes draw{to{stroke-dashoffset:0;}}
  @keyframes fadein{to{opacity:1;}}
  @media (prefers-reduced-motion:reduce){
    .draw-line{animation:none;stroke-dashoffset:0;}
    .draw-fill{animation:none;opacity:1;}
    html{scroll-behavior:auto;}
  }

  section{padding:120px 0;}
  .section-head{
    display:flex;justify-content:space-between;align-items:flex-end;
    margin-bottom:64px;gap:24px;flex-wrap:wrap;
    opacity:0;transform:translateY(24px);
    transition:opacity .8s ease, transform .8s ease;
  }
  .section-head.in-view{opacity:1;transform:translateY(0);}
  .section-head h2{font-size:clamp(2rem,4vw,2.9rem);}
  .section-head p{max-width:36ch;color:#5b5847;font-size:.98rem;}

  /* Projets */
  .project{
    display:grid;grid-template-columns:80px 1.3fr 1fr auto;
    align-items:center;gap:28px;
    padding:34px 0;border-top:1px solid rgba(23,22,15,.14);
    transition:padding-left .35s ease, background .35s ease;
  }
  .project:last-child{border-bottom:1px solid rgba(23,22,15,.14);}
  .project:hover{padding-left:14px;background:rgba(184,131,74,.08);}
  .project .num{font-family:'Fraunces',serif;color:var(--brass);font-size:1.1rem;}
  .project .title{font-family:'Fraunces',serif;font-size:1.55rem;font-weight:500;}
  .project .category{font-size:.85rem;color:var(--teal);margin-top:4px;}
  .project .desc{font-size:.92rem;color:#5b5847;max-width:44ch;}
  .project .year{font-size:.85rem;color:#8a866f;white-space:nowrap;}
  .project .arrow{
    width:34px;height:34px;border-radius:50%;border:1px solid var(--ink);
    display:flex;align-items:center;justify-content:center;
    transition:transform .35s ease, background .35s ease;
  }
  .project:hover .arrow{transform:rotate(45deg);background:var(--ink);}
  .project:hover .arrow svg{stroke:var(--paper);}
  @media (max-width:820px){
    .project{grid-template-columns:1fr;gap:8px;}
    .project .year{order:-1;}
  }

  /* Compétences */
  .skills-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:48px 64px;}
  .skill-group h3{font-size:1.05rem;color:var(--teal);margin-bottom:16px;font-family:'Inter';font-weight:600;}
  .skill-group ul{display:flex;flex-wrap:wrap;gap:10px;}
  .skill-group li{
    font-size:.9rem;padding:8px 16px;border:1px solid rgba(23,22,15,.2);
    border-radius:999px;transition:border-color .3s ease, transform .3s ease;
  }
  .skill-group li:hover{border-color:var(--brass);transform:translateY(-2px);}
  @media (max-width:720px){.skills-grid{grid-template-columns:1fr;}}

  /* À propos */
  .about{display:grid;grid-template-columns:1fr 1fr;gap:60px;align-items:center;}
  .about p{font-size:1.05rem;color:#3a382c;max-width:52ch;}
  .about-stats{display:flex;gap:48px;margin-top:32px;}
  .about-stats strong{display:block;font-family:'Fraunces',serif;font-size:2.2rem;color:var(--brass);font-weight:500;}
  .about-stats span{font-size:.85rem;color:#5b5847;}
  @media (max-width:820px){.about{grid-template-columns:1fr;}}

  /* Contact */
  footer{background:var(--ink);color:var(--paper);padding:110px 0 50px;}
  footer h2{font-size:clamp(2rem,5vw,3.4rem);}
  .contact-top{display:grid;grid-template-columns:1fr 1fr;gap:60px;}
  .big-email{
    font-family:'Fraunces',serif;font-size:clamp(1.3rem,2.6vw,1.9rem);
    display:inline-block;margin-top:26px;border-bottom:1px solid rgba(243,237,224,.4);
    padding-bottom:6px;
  }
  .socials{display:flex;gap:20px;margin-top:40px;font-size:.9rem;}
  .socials a{opacity:.75;transition:opacity .3s ease;}
  .socials a:hover{opacity:1;}

  form{display:flex;flex-direction:column;gap:16px;}
  .field{display:flex;flex-direction:column;gap:6px;}
  label{font-size:.8rem;color:rgba(243,237,224,.6);}
  input,textarea{
    background:transparent;border:none;border-bottom:1px solid rgba(243,237,224,.3);
    color:var(--paper);font-family:'Inter';font-size:1rem;padding:8px 0;
    transition:border-color .3s ease;
  }
  input:focus,textarea:focus{outline:none;border-color:var(--brass);}
  textarea{resize:vertical;min-height:90px;}
  .hp{position:absolute;left:-9999px;}
  .submit-btn{
    align-self:flex-start;margin-top:8px;padding:13px 28px;border-radius:999px;
    border:1px solid var(--paper);background:transparent;color:var(--paper);
    font-family:'Inter';font-size:.95rem;cursor:pointer;
    transition:background .3s ease, color .3s ease;
  }
  .submit-btn:hover{background:var(--paper);color:var(--ink);}
  .form-msg{font-size:.88rem;padding:10px 0;}
  .form-msg.success{color:#9fd6b0;}
  .form-msg.error{color:#e3a3a3;}

  .bottom-row{
    display:flex;justify-content:space-between;align-items:center;
    margin-top:90px;padding-top:26px;border-top:1px solid rgba(243,237,224,.15);
    font-size:.8rem;color:rgba(243,237,224,.5);flex-wrap:wrap;gap:12px;
  }
  @media (max-width:820px){.contact-top{grid-template-columns:1fr;}}
</style>
</head>
<body>

<div class="cursor-dot" id="cursorDot"></div>

<header>
  <div class="wrap">
    <a class="logo" href="#top"><?= e($profile['name']) ?></a>
    <nav>
      <ul>
        <li><a href="#travaux">Travaux</a></li>
        <li><a href="#a-propos">À propos</a></li>
        <li><a href="#competences">Compétences</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>

<main id="top">

  <!-- ================= HERO ================= -->
  <section class="hero">
    <div class="wrap">
      <div>
        <div class="hero-eyebrow"><span class="dot"></span><?= e($profile['location']) ?></div>
        <h1><?= e($profile['role']) ?> <em>&amp;</em> conteur visuel</h1>
        <p class="tagline"><?= e($profile['tagline']) ?></p>

        <div class="hero-meta">
          <div><strong><?= e($profile['years']) ?>+ ans</strong>d'expérience</div>
          <div><strong><?= count($projects) ?> projets</strong>sélectionnés</div>
          <div><strong>Disponible</strong>pour nouvelles missions</div>
        </div>

        <a href="#contact" class="btn"><span>Discutons d'un projet</span></a>
      </div>

      <!-- Illustration dessinée au chargement (stroke-dashoffset, pathLength=1) -->
      <svg class="hero-art" viewBox="0 0 600 480" xmlns="http://www.w3.org/2000/svg">
        <circle class="draw-line" cx="462" cy="96" r="46" pathLength="1"
                style="animation-delay:.1s"></circle>

        <path class="draw-line" pathLength="1" style="animation-delay:.5s"
              d="M20,336 L118,182 L196,276 L296,138 L392,292 L474,214 L580,330" />

        <path class="draw-line" pathLength="1" style="animation-delay:1.1s"
              d="M0,420 C100,378 190,452 310,404 C410,364 500,420 600,392" />

        <path class="draw-line" pathLength="1" style="animation-delay:1.5s"
              d="M232,150 Q250,130 268,150 Q286,130 304,150" />

        <path class="draw-fill" style="animation-delay:2.1s"
              d="M462,96 m-4,0 a4,4 0 1,0 8,0 a4,4 0 1,0 -8,0" />
      </svg>
    </div>
  </section>

  <!-- ================= TRAVAUX ================= -->
  <section id="travaux">
    <div class="wrap">
      <div class="section-head reveal">
        <h2>Travaux sélectionnés</h2>
        <p>Une sélection de projets récents, du branding au produit numérique complet.</p>
      </div>

      <div class="projects-list">
        <?php foreach ($projects as $p): ?>
        <a class="project" href="<?= e($p['link']) ?>">
          <span class="num"><?= e($p['num']) ?></span>
          <span>
            <span class="title"><?= e($p['title']) ?></span>
            <span class="category"><?= e($p['category']) ?></span>
          </span>
          <span class="desc"><?= e($p['desc']) ?></span>
          <span class="year"><?= e($p['year']) ?></span>
          <span class="arrow">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
              <path d="M5 19L19 5M19 5H8M19 5V16" stroke="#17160f" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ================= À PROPOS ================= -->
  <section id="a-propos">
    <div class="wrap about">
      <div>
        <div class="section-head reveal" style="margin-bottom:26px;">
          <h2>À propos</h2>
        </div>
        <p>
          Je m'appelle <?= e($profile['name']) ?>. Je conçois et développe des sites et
          applications qui prennent le temps de raconter une histoire visuelle — un mélange
          de code propre, de typographie soignée et d'animations dessinées à la main plutôt
          qu'appliquées par défaut.
        </p>
        <p>Basé à <?= e($profile['location']) ?>, je travaille avec des studios, des marques
          et des fondateurs qui veulent une identité numérique qui ne ressemble à aucune autre.</p>

        <div class="about-stats">
          <div><strong><?= e($profile['years']) ?>+</strong><span>années d'expérience</span></div>
          <div><strong><?= count($projects) ?></strong><span>projets livrés</span></div>
          <div><strong>100%</strong><span>fait sur-mesure</span></div>
        </div>
      </div>

      <svg viewBox="0 0 400 400" width="100%">
        <path class="draw-line" pathLength="1" style="animation-duration:2s"
              d="M60,320 C60,220 140,180 200,180 C260,180 340,220 340,320" />
        <circle class="draw-line" cx="200" cy="140" r="60" pathLength="1"
                style="animation-duration:1.6s;animation-delay:.3s"></circle>
      </svg>
    </div>
  </section>

  <!-- ================= COMPÉTENCES ================= -->
  <section id="competences">
    <div class="wrap">
      <div class="section-head reveal">
        <h2>Compétences</h2>
        <p>Les outils et langages que j'utilise au quotidien.</p>
      </div>

      <div class="skills-grid">
        <?php foreach ($skills as $group => $items): ?>
        <div class="skill-group">
          <h3><?= e($group) ?></h3>
          <ul>
            <?php foreach ($items as $item): ?>
            <li><?= e($item) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<!-- ================= CONTACT / FOOTER ================= -->
<footer id="contact">
  <div class="wrap">
    <div class="contact-top">
      <div>
        <h2>Parlons de votre<br>prochain projet.</h2>
        <a class="big-email" href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a>
        <div class="socials">
          <a href="#">LinkedIn</a>
          <a href="#">GitHub</a>
          <a href="#">Instagram</a>
        </div>
      </div>

      <form method="post" action="#contact" novalidate>
        <?php if ($formStatus === 'success'): ?>
          <p class="form-msg success">Merci, votre message a bien été envoyé.</p>
        <?php elseif ($formStatus === 'error'): ?>
          <p class="form-msg error"><?= e(implode(' ', $formErrors)) ?></p>
        <?php endif; ?>

        <input class="hp" type="text" name="website" tabindex="-1" autocomplete="off">

        <div class="field">
          <label for="name">Nom</label>
          <input id="name" name="name" type="text" value="<?= e($old['name']) ?>" required>
        </div>
        <div class="field">
          <label for="email">Email</label>
          <input id="email" name="email" type="email" value="<?= e($old['email']) ?>" required>
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" required><?= e($old['message']) ?></textarea>
        </div>
        <button class="submit-btn" type="submit" name="contact_submit" value="1">Envoyer le message</button>
      </form>
    </div>

    <div class="bottom-row">
      <span>© <?= date('Y') ?> <?= e($profile['name']) ?></span>
      <span>Conçu &amp; codé à la main.</span>
    </div>
  </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // --- Curseur personnalisé avec lissage (lerp) ---
  const dot = document.getElementById('cursorDot');
  if (!reduceMotion && matchMedia('(hover:hover)').matches) {
    let mx = 0, my = 0, dx = 0, dy = 0;
    window.addEventListener('mousemove', e => { mx = e.clientX; my = e.clientY; });
    (function loop(){
      dx += (mx - dx) * 0.18;
      dy += (my - dy) * 0.18;
      dot.style.transform = `translate(${dx}px, ${dy}px) translate(-50%,-50%)`;
      requestAnimationFrame(loop);
    })();
    document.querySelectorAll('a, button, .project').forEach(el => {
      el.addEventListener('mouseenter', () => dot.classList.add('hovering'));
      el.addEventListener('mouseleave', () => dot.classList.remove('hovering'));
    });
  } else if (dot) {
    dot.remove();
  }

  // --- Effet magnétique sur le bouton principal ---
  if (!reduceMotion) {
    document.querySelectorAll('.btn').forEach(btn => {
      btn.addEventListener('mousemove', e => {
        const r = btn.getBoundingClientRect();
        const relX = e.clientX - r.left - r.width / 2;
        const relY = e.clientY - r.top - r.height / 2;
        btn.style.transform = `translate(${relX * 0.25}px, ${relY * 0.4}px)`;
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = 'translate(0,0)'; });
    });
  }

  // --- Révélation des titres de section au scroll (un seul effet, sobre) ---
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
});
</script>

</body>
</html>