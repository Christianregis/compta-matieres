<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptabilité-Matières — Faculté des Sciences | Université de Douala</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        :root{
            --navy-900:#12283F;
            --navy-700:#1E4066;
            --navy-600:#2A537F;
            --gold-600:#A9782C;
            --gold-500:#C79A47;
            --paper:#F2F1EC;
            --paper-line:#E2DFD3;
            --ink-900:#1C2530;
            --ink-600:#4B5665;
            --green-700:#3B6E4E;
            --red-700:#B23A2E;
        }

        body{
            background:var(--paper);
            color:var(--ink-900);
            font-family:'Inter', sans-serif;
        }

        .font-display{
            font-family:'Fraunces', serif;
            font-optical-sizing:auto;
        }

        .font-mono{
            font-family:'IBM Plex Mono', monospace;
            letter-spacing:.02em;
        }

        .eyebrow{
            font-family:'IBM Plex Mono', monospace;
            font-size:.72rem;
            letter-spacing:.14em;
            text-transform:uppercase;
            color:var(--gold-600);
            font-weight:600;
        }

        /* ---------- Navbar ---------- */
        .navbar-registre{
            background:var(--paper);
            border-bottom:1px solid var(--paper-line);
        }
        .brand-mark{
            width:40px;height:40px;
            border:1.5px solid var(--navy-900);
            display:flex;align-items:center;justify-content:center;
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1.05rem;
            color:var(--navy-900);
            flex-shrink:0;
        }
        .brand-text{
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1.02rem;
            color:var(--ink-900);
            line-height:1.15;
        }
        .brand-text small{
            display:block;
            font-family:'Inter', sans-serif;
            font-weight:500;
            font-size:.7rem;
            color:var(--ink-600);
            letter-spacing:.03em;
        }
        .nav-registre .nav-link{
            color:var(--ink-900);
            font-weight:500;
            font-size:.92rem;
            margin:0 .6rem;
        }
        .nav-registre .nav-link:hover{ color:var(--navy-700); }
        .btn-navy{
            background:var(--navy-900);
            color:#fff;
            border:1px solid var(--navy-900);
            font-weight:600;
            font-size:.9rem;
            padding:.55rem 1.3rem;
        }
        .btn-navy:hover{ background:var(--navy-700); color:#fff; }
        .btn-outline-navy{
            border:1px solid var(--navy-900);
            color:var(--navy-900);
            font-weight:600;
            font-size:.9rem;
            padding:.55rem 1.3rem;
        }
        .btn-outline-navy:hover{ background:var(--navy-900); color:#fff; }

        /* ---------- Hero ---------- */
        .hero{
            padding:5.5rem 0 4rem;
            border-bottom:1px solid var(--paper-line);
        }
        .hero h1{
            font-size:2.7rem;
            line-height:1.12;
            color:var(--navy-900);
            font-weight:600;
        }
        .hero p.lead-text{
            color:var(--ink-600);
            font-size:1.05rem;
            max-width:34rem;
        }

        /* Fiche card — the signature element */
        .fiche-card{
            background:#fff;
            border:1px solid var(--paper-line);
            box-shadow:0 18px 40px -22px rgba(18,40,63,.35);
            position:relative;
            padding:1.75rem 1.75rem 1.5rem;
        }
        .fiche-card::before{
            content:"";
            position:absolute;
            left:0; top:0; bottom:0;
            width:5px;
            background:var(--gold-600);
        }
        .fiche-head{
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            border-bottom:1px dashed var(--paper-line);
            padding-bottom:.85rem;
            margin-bottom:.85rem;
        }
        .fiche-code{
            font-family:'IBM Plex Mono', monospace;
            font-size:.78rem;
            color:var(--ink-600);
        }
        .fiche-titre{
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1.15rem;
            color:var(--navy-900);
        }
        .badge-etat{
            font-family:'IBM Plex Mono', monospace;
            font-size:.7rem;
            font-weight:600;
            letter-spacing:.03em;
            padding:.28rem .6rem;
            border-radius:2px;
        }
        .badge-etat.bon{ background:#E6F0EA; color:var(--green-700); }
        .fiche-row{
            display:flex;
            justify-content:space-between;
            font-size:.86rem;
            padding:.4rem 0;
            border-bottom:1px solid #F0EEE7;
        }
        .fiche-row span:first-child{ color:var(--ink-600); }
        .fiche-row span:last-child{ font-weight:600; color:var(--ink-900); }

        /* Seal / cachet */
        .cachet{
            width:92px;height:92px;
            border-radius:50%;
            border:2px solid var(--gold-600);
            display:flex;align-items:center;justify-content:center;
            text-align:center;
            position:absolute;
            right:-18px; bottom:-22px;
            background:var(--paper);
            transform:rotate(-9deg);
        }
        .cachet::before{
            content:"";
            position:absolute;
            inset:6px;
            border:1px solid var(--gold-600);
            border-radius:50%;
        }
        .cachet-text{
            font-family:'IBM Plex Mono', monospace;
            font-size:.5rem;
            letter-spacing:.06em;
            color:var(--gold-600);
            font-weight:600;
            line-height:1.25;
        }

        /* ---------- Stats ---------- */
        .stats-band{
            background:var(--navy-900);
            padding:2.4rem 0;
        }
        .stat-num{
            font-family:'IBM Plex Mono', monospace;
            font-size:2.1rem;
            font-weight:600;
            color:#fff;
        }
        .stat-label{
            font-size:.78rem;
            color:#9FB3C8;
            letter-spacing:.03em;
        }

        /* ---------- Modules ---------- */
        .section{ padding:4.5rem 0; }
        .section-title{
            font-family:'Fraunces', serif;
            font-weight:600;
            color:var(--navy-900);
            font-size:1.9rem;
        }
        .module-card{
            background:#fff;
            border:1px solid var(--paper-line);
            padding:1.6rem;
            height:100%;
            transition:border-color .15s ease;
        }
        .module-card:hover{ border-color:var(--gold-600); }
        .module-icon{
            width:44px;height:44px;
            border:1px solid var(--navy-900);
            display:flex;align-items:center;justify-content:center;
            color:var(--navy-900);
            margin-bottom:1rem;
            font-size:1.05rem;
        }
        .module-card h3{
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1.08rem;
            color:var(--ink-900);
        }
        .module-card p{
            font-size:.88rem;
            color:var(--ink-600);
            margin-bottom:0;
        }
        .module-num{
            font-family:'IBM Plex Mono', monospace;
            font-size:.72rem;
            color:var(--gold-600);
        }

        /* ---------- Objectifs ---------- */
        .objectif{
            display:flex;
            gap:1rem;
            padding:1.1rem 0;
            border-bottom:1px solid var(--paper-line);
        }
        .objectif:last-child{ border-bottom:none; }
        .objectif i{
            color:var(--gold-600);
            font-size:1.1rem;
            width:28px;
            padding-top:.15rem;
        }
        .objectif strong{ color:var(--navy-900); }
        .objectif span{ color:var(--ink-600); font-size:.92rem; }

        /* ---------- CTA ---------- */
        .cta-band{
            background:var(--navy-900);
            padding:3.5rem 0;
        }
        .cta-band h2{
            font-family:'Fraunces', serif;
            color:#fff;
            font-weight:600;
        }
        .cta-band p{ color:#B9C7D6; }

        /* ---------- Footer ---------- */
        footer{
            background:var(--paper);
            border-top:1px solid var(--paper-line);
            padding:2.5rem 0 1.5rem;
            font-size:.85rem;
            color:var(--ink-600);
        }
    </style>
</head>
<body>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar navbar-expand-lg navbar-registre py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
                <span class="brand-mark">CM</span>
                <span class="brand-text">
                    Comptabilité-Matières
                    <small>Faculté des Sciences — Université de Douala</small>
                </span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navRegistre">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navRegistre">
                <ul class="navbar-nav nav-registre ms-auto align-items-lg-center gap-lg-1">
                    <li class="nav-item"><a class="nav-link" href="#modules">Modules</a></li>
                    <li class="nav-item"><a class="nav-link" href="#objectifs">Objectifs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#apropos">À propos</a></li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="#" class="btn btn-navy">
                            <i class="fa-solid fa-right-to-bracket me-1"></i> Se connecter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ================= HERO ================= --}}
    <header class="hero">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <p class="eyebrow mb-3">Service de la Comptabilité-Matières</p>
                    <h1 class="font-display mb-3">Chaque matériel a sa fiche.<br>Chaque mouvement, sa trace.</h1>
                    <p class="lead-text mb-4">
                        Une plateforme unique pour centraliser l'état du parc matériel de la Faculté des Sciences,
                        enregistrer les entrées et sorties, et produire des rapports fiables — exportables en un clic.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#" class="btn btn-navy btn-lg">
                            <i class="fa-solid fa-right-to-bracket me-2"></i>Accéder à la plateforme
                        </a>
                        <a href="#modules" class="btn btn-outline-navy btn-lg">
                            Explorer les modules
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fiche-card">
                        <div class="fiche-head">
                            <div>
                                <p class="fiche-code mb-1">FICHE N° SM-2026-0184</p>
                                <p class="fiche-titre mb-0">Microscope binoculaire — Labo Physique</p>
                            </div>
                            <span class="badge-etat bon">BON ÉTAT</span>
                        </div>
                        <div class="fiche-row"><span>Catégorie</span><span>Matériel scientifique</span></div>
                        <div class="fiche-row"><span>Quantité en stock</span><span>07</span></div>
                        <div class="fiche-row"><span>Dernier mouvement</span><span>Entrée — 03/08/2026</span></div>
                        <div class="fiche-row" style="border-bottom:none;"><span>Localisation</span><span>Magasin central</span></div>
                        <div class="cachet">
                            <div class="cachet-text">COMPTABILITÉ<br>MATIÈRES<br>★ VÉRIFIÉ ★</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- ================= STATS ================= --}}
    <div class="stats-band">
        <div class="container">
            <div class="row text-center gy-4">
                <div class="col-6 col-lg-3">
                    <div class="stat-num">1&nbsp;284</div>
                    <div class="stat-label">FICHES ENREGISTRÉES</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">96</div>
                    <div class="stat-label">MOUVEMENTS CE MOIS</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">14</div>
                    <div class="stat-label">CATÉGORIES SUIVIES</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">92%</div>
                    <div class="stat-label">TAUX DE DISPONIBILITÉ</div>
                </div>
            </div>
        </div>
    </div>

    {{-- ================= MODULES ================= --}}
    <section class="section" id="modules">
        <div class="container">
            <p class="eyebrow mb-2">Périmètre fonctionnel</p>
            <h2 class="section-title mb-5">Cinq modules, un seul registre</h2>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                        <p class="module-num mb-1">Module 01</p>
                        <h3 class="mb-2">Gestion des stocks</h3>
                        <p>Créer, modifier et rechercher les fiches de matériel par catégorie, statut ou localisation.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-right-left"></i></div>
                        <p class="module-num mb-1">Module 02</p>
                        <h3 class="mb-2">Entrées, sorties &amp; retours</h3>
                        <p>Traçabilité complète des mouvements : réceptions, sorties pour réparation ou réforme, retours.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-chart-column"></i></div>
                        <p class="module-num mb-1">Module 03</p>
                        <h3 class="mb-2">Tableau de bord</h3>
                        <p>Indicateurs de performance et rapports personnalisables sur l'état et l'historique du stock.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-file-excel"></i></div>
                        <p class="module-num mb-1">Module 04</p>
                        <h3 class="mb-2">Export des données</h3>
                        <p>Génération de tous les rapports au format Excel (XLSX), prêts à être partagés ou archivés.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-user-shield"></i></div>
                        <p class="module-num mb-1">Module 05</p>
                        <h3 class="mb-2">Administration</h3>
                        <p>Gestion des utilisateurs, des droits d'accès et paramétrage des catégories, statuts et seuils d'alerte.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="module-card">
                        <div class="module-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <p class="module-num mb-1">Sécurité</p>
                        <h3 class="mb-2">Accès contrôlé</h3>
                        <p>Authentification par identifiants, sauvegardes automatiques de la base de données.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= OBJECTIFS ================= --}}
    <section class="section" id="objectifs" style="background:#fff; border-top:1px solid var(--paper-line); border-bottom:1px solid var(--paper-line);">
        <div class="container">
            <div class="row gy-5 align-items-start">
                <div class="col-lg-5">
                    <p class="eyebrow mb-2">Pourquoi cette plateforme</p>
                    <h2 class="section-title mb-3">Un problème connu, une réponse structurée</h2>
                    <p style="color:var(--ink-600); font-size:.95rem;">
                        La gestion des stocks du magasin et le suivi de l'état du matériel — neuf, en bon état,
                        en panne, obsolète, à réformer — reposent aujourd'hui sur des méthodes dispersées.
                        La plateforme centralise cette information au même endroit.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="objectif">
                        <i class="fa-solid fa-layer-group"></i>
                        <div><strong>Centraliser</strong><br><span>Toutes les informations sur les matériels réunies dans un registre unique.</span></div>
                    </div>
                    <div class="objectif">
                        <i class="fa-solid fa-gears"></i>
                        <div><strong>Automatiser</strong><br><span>Le suivi des mouvements de stock, sans ressaisie manuelle.</span></div>
                    </div>
                    <div class="objectif">
                        <i class="fa-solid fa-table-columns"></i>
                        <div><strong>Fournir</strong><br><span>Des tableaux de bord et rapports pour une meilleure visibilité sur le parc matériel.</span></div>
                    </div>
                    <div class="objectif">
                        <i class="fa-solid fa-file-export"></i>
                        <div><strong>Permettre</strong><br><span>L'export de toutes les données vers Excel, à tout moment.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= CTA ================= --}}
    <div class="cta-band">
        <div class="container text-center">
            <h2 class="mb-2">Prêt à ouvrir le registre ?</h2>
            <p class="mb-4">Connectez-vous pour accéder à votre espace de gestion des stocks.</p>
            <a href="#" class="btn btn-light btn-lg fw-semibold">
                <i class="fa-solid fa-right-to-bracket me-2"></i>Se connecter
            </a>
        </div>
    </div>

    {{-- ================= FOOTER ================= --}}
    <footer id="apropos">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-5">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="brand-mark" style="width:32px;height:32px;font-size:.85rem;">CM</span>
                        <span class="brand-text" style="font-size:.92rem;">Comptabilité-Matières</span>
                    </div>
                    <p class="mb-0">Faculté des Sciences — Université de Douala.<br>Gestion et suivi du parc matériel.</p>
                </div>
                <div class="col-md-4">
                    <p class="fw-semibold text-uppercase mb-2" style="font-size:.75rem; letter-spacing:.06em; color:var(--navy-900);">Contact</p>
                    <p class="mb-1"><i class="fa-solid fa-location-dot me-2"></i>Faculté des Sciences, Douala</p>
                    <p class="mb-0"><i class="fa-solid fa-envelope me-2"></i>comptabilite-matieres@univ-douala.cm</p>
                </div>
                <div class="col-md-3">
                    <p class="fw-semibold text-uppercase mb-2" style="font-size:.75rem; letter-spacing:.06em; color:var(--navy-900);">Accès</p>
                    <a href="#" class="d-block mb-1" style="color:var(--ink-600); text-decoration:none;">Se connecter</a>
                </div>
            </div>
            <hr style="border-color:var(--paper-line); margin:2rem 0 1rem;">
            <p class="mb-0 text-center" style="font-size:.78rem;">© {{ date('Y') }} Service de la Comptabilité-Matières — Université de Douala.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
