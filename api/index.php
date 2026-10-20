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
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Preloader / Welcome splash -->
<div id="loader">
    <div class="intro-shell">
        <div class="intro-left">
            <div class="intro-badges">
                <span class="intro-badge"><span class="dot"></span>Système prêt</span>
                <span class="intro-badge">Portfolio 2026</span>
                <span class="intro-badge">Interface en chargement</span>
            </div>
            <h1 class="intro-title">Bienvenue sur mon<br><span>portfolio</span></h1>
            <p class="intro-text">Je suis Yasmina Aouladhaj, étudiante en Développement Digital Full Stack. Découvrez mon parcours, mes modules de formation et mes projets.</p>
            <div class="intro-live-label">● Statut en direct</div>
            <div class="intro-pills">
                <span class="intro-pill">💻 Front-End</span>
                <span class="intro-pill">🗄️ Back-End</span>
                <span class="intro-pill">☁️ Cloud</span>
                <span class="intro-pill">🎨 UI/UX</span>
            </div>
            <button id="intro-enter" type="button" class="btn btn-primary"><span>Entrer sur le site</span></button>
        </div>
        <div class="intro-panel">
            <div class="intro-panel-top"><span>Profil</span><span class="online">● En ligne</span></div>
            <div class="intro-orb-wrap"><div class="intro-orb">YASMINA</div></div>
            <div class="intro-panel-bottom">
                <div class="intro-stat"><strong>07</strong><span>Modules</span></div>
                <div class="intro-stat"><strong>2026</strong><span>Promotion</span></div>
            </div>
        </div>
    </div>
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
                <img src="/images/me2.png" alt="Yasmina Aouladhaj">
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
        <div class="about-photo reveal">
            <div class="about-photo-wrapper">
                <img src="/images/me4.jpeg" alt="Yasmina Aouladhaj">
            </div>
        </div>
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
                    <span class="atelier-pill">UML</span>
                    <span class="atelier-titre">Analyse des besoins et cahier des charges</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="Untitled.mdj">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="diagramme.mdj">Voir exercice 2</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="les 5 diagrammes.pdf">Voir exercice 3</a>
                        
                    </div>
                    
                    
                </div>
            </div>
            <div class="atelier-block">
                <div class="atelier-head">
                    <span class="atelier-pill">FIGMA</span>
                    <span class="atelier-titre">Maquettage et wireframes</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="https://www.figma.com/design/eiKXZOcHahiGXCbwnF3Lkg/Untitled?node-id=0-1&p=f&m=draw">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 2</h4>
                        <a href="https://www.figma.com/design/mjI3Qbk04FZco0US6LhViG/Untitled?node-id=0-1&p=f&m=draw">Voir exercice 2</a>
                        
                    </div>
                     <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="https://www.figma.com/design/Cpfx6ZxTT3m3TyJHB6fF5U/Untitled?node-id=0-1&p=f&t=mPR31LV2vIbfvexV-0">Voir exercice 3</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance creativ de moi</h4>
                        <a href="https://www.figma.com/design/i6u5fa17ClAUn64O4nzBtD/Untitled?node-id=0-1&p=f&t=aJYYezUcLiRIBsZ1-0">Voir le design</a>
                        
                    </div>
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
                    <span class="atelier-titre">Bases de données NoSQL</span>
                </div>
                <div class="seances-row">
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="/images/exercice1.jpeg">Voir exercice 1</a>
                        <a href="/images/exercice1logicial.jpeg">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="/images/Exercice2.jpeg">Voir exercice 2</a>
                        <a href="/images/exercice2logicial.jpeg">Voir exercice 2</a>
                        
                    </div>
                     <div class="seance-card">
                        <h4>Séance atelier 1</h4>
                        <a href="/images/WhatsApp Image 2026-09-30 at 10.51.24 (1).jpeg">Voir exercice 3</a>
                        <a href="/images/exercice3logicial.png">Voir exercice 3</a>
                        
                        
                    </div>
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
                        <a href="Atwlier2agile.pdf">Voir exercice 1</a>
                        
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
                        <a href="Acheto_Etapes.pdf">Voir exercice 1</a>
                        
                    </div>
                    <div class="seance-card">
                        <h4>Séance atelier 3</h4>
                        <a href="https://achito.vercel.app/">Voir exercice 2</a>
                        
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
            <div class="service-card-head">
                <div class="service-icon">&lt;/&gt;</div>
                <span class="service-index">01</span>
            </div>
            <h3>Développement Web</h3>
            <p>Je crée des sites web modernes et responsives en utilisant les dernières technologies et les meilleures pratiques.</p>
            <div class="service-features">
                <span>Design Responsive</span>
                <span>Performance Optimisée</span>
                <span>Optimisé SEO</span>
            </div>
            <button type="button" class="service-link" data-service="web">Voir Les Détails →</button>
        </div>
        <div class="service-card reveal">
            <div class="service-card-head">
                <div class="service-icon">📱</div>
                <span class="service-index">02</span>
            </div>
            <h3>Développement Mobile</h3>
            <p>Création d'applications mobiles multiplateformes fonctionnant aussi bien sur iOS que sur Android.</p>
            <div class="service-features">
                <span>Multiplateforme</span>
                <span>Performance Native</span>
                <span>Convivial</span>
            </div>
            <button type="button" class="service-link" data-service="mobile">Voir Les Détails →</button>
        </div>
        <div class="service-card reveal">
            <div class="service-card-head">
                <div class="service-icon">🎨</div>
                <span class="service-index">03</span>
            </div>
            <h3>UI/UX Design</h3>
            <p>Conception d'interfaces intuitives et esthétiques offrant une expérience utilisateur exceptionnelle.</p>
            <div class="service-features">
                <span>Centré Utilisateur</span>
                <span>Design Moderne</span>
                <span>Accessibilité</span>
            </div>
            <button type="button" class="service-link" data-service="design">Voir Les Détails →</button>
        </div>
    </div>
</section>

<!-- Service Details Modal -->
<div id="service-modal" class="service-modal" aria-hidden="true">
    <div class="service-modal-overlay" data-close-modal></div>
    <div class="service-modal-panel" role="dialog" aria-modal="true">
        <button type="button" class="service-modal-back" data-close-modal>&larr; Retour au Portfolio</button>
        <button type="button" class="service-modal-close" data-close-modal aria-label="Fermer">&times;</button>
        <div class="service-modal-label" id="service-modal-label">Service</div>
        <h2 id="service-modal-title">Titre du service</h2>
        <div class="service-modal-grid" id="service-modal-grid"></div>
    </div>
</div>

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

    /* ---------- Service details modal ---------- */
    const servicesData = {
        web: {
            label: 'Service 01',
            title: 'Développement Web',
            items: [
                { icon: '</>', title: 'Site E-Commerce', desc: "Boutique en ligne avec filtrage des produits, panier et paiement.", github: '#', demo: '#' },
                { icon: '📝', title: 'Site de Blog', desc: "Plateforme de blog épurée avec support du markdown.", github: '#', demo: '#' },
                { icon: '✅', title: 'Gestionnaire de Tâches', desc: "Application CRUD de suivi de tâches, interface épurée.", github: '#', demo: '#' }
            ]
        },
        mobile: {
            label: 'Service 02',
            title: 'Développement Mobile',
            items: [
                { icon: '🌦️', title: 'Application Météo', desc: "App responsive affichant la météo en temps réel via une API.", github: '#', demo: '#' },
                { icon: '📋', title: 'App de Suivi', desc: "Prototype mobile pour la gestion de tâches au quotidien.", github: '#', demo: '#' },
                { icon: '🔔', title: 'App de Notifications', desc: "Interface mobile légère, pensée pour iOS et Android.", github: '#', demo: '#' }
            ]
        },
        design: {
            label: 'Service 03',
            title: 'UI/UX Design',
            items: [
                { icon: '🖼️', title: 'Site Portfolio', desc: "Portfolio personnel pour présenter mes projets de design.", github: '#', demo: '#' },
                { icon: '🎮', title: 'Landing Page Gaming', desc: "Page d'accueil avec animations et effets de parallaxe.", github: '#', demo: '#' },
                { icon: '🧩', title: 'Wireframes & Maquettes', desc: "Maquettage et prototypes interactifs réalisés sous Figma.", github: '#', demo: '#' }
            ]
        }
    };

    const serviceModal = document.getElementById('service-modal');
    const serviceModalLabel = document.getElementById('service-modal-label');
    const serviceModalTitle = document.getElementById('service-modal-title');
    const serviceModalGrid = document.getElementById('service-modal-grid');

    const openServiceModal = (key) => {
        const data = servicesData[key];
        if (!data || !serviceModal) return;
        serviceModalLabel.textContent = data.label;
        serviceModalTitle.textContent = data.title;
        serviceModalGrid.innerHTML = data.items.map((item, i) => `
            <div class="service-detail-card">
                <div class="service-detail-head">
                    <div class="service-detail-icon">${item.icon}</div>
                    <span class="service-detail-index">${String(i + 1).padStart(2, '0')}</span>
                </div>
                <h4>${item.title}</h4>
                <p>${item.desc}</p>
                <div class="service-detail-links">
                    <a href="${item.github}">GitHub</a>
                    <a href="${item.demo}" class="primary">Démo</a>
                </div>
            </div>
        `).join('');
        serviceModal.classList.add('open');
        serviceModal.scrollTop = 0;
        serviceModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    };

    const closeServiceModal = () => {
        if (!serviceModal) return;
        serviceModal.classList.remove('open');
        serviceModal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    };

    document.querySelectorAll('.service-link[data-service]').forEach(btn => {
        btn.addEventListener('click', () => openServiceModal(btn.dataset.service));
    });
    document.querySelectorAll('[data-close-modal]').forEach(el => {
        el.addEventListener('click', closeServiceModal);
    });
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeServiceModal();
    });

    /* ---------- Preloader / Welcome splash ---------- */
    const loader = document.getElementById('loader');
    const introEnterBtn = document.getElementById('intro-enter');
    const hideLoader = () => { loader && loader.classList.add('hidden'); };
    if (introEnterBtn) introEnterBtn.addEventListener('click', hideLoader);
    // auto-dismiss fallback if the user doesn't click (gives time to read the splash)
    setTimeout(hideLoader, 5000);

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
