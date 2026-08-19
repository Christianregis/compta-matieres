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

    <link rel="stylesheet" href="{{ asset('css/public/home.css') }}">
</head>
<body>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar navbar-expand-lg navbar-registre py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
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
                        <a href="{{ route('connexion') }}" class="btn btn-navy">
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
                        <a href="{{ route('connexion') }}" class="btn btn-navy btn-lg">
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
                                <p class="fiche-titre mb-0">Projecteur GID 2 — Fac Science UDO</p>
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
                    <div class="stat-num">{{ $items_count }}</div>
                    <div class="stat-label">FICHES ENREGISTRÉES</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">{{ $stock_movements_count }}</div>
                    <div class="stat-label">MOUVEMENTS CE MOIS</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">{{ $categories_count }}</div>
                    <div class="stat-label">CATÉGORIES SUIVIES</div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="stat-num">100%</div>
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
            <a href="{{ route('connexion') }}" class="btn btn-light btn-lg fw-semibold">
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
                    <a href="{{ route('connexion') }}" class="d-block mb-1" style="color:var(--ink-600); text-decoration:none;">Se connecter</a>
                </div>
            </div>
            <hr style="border-color:var(--paper-line); margin:2rem 0 1rem;">
            <p class="mb-0 text-center" style="font-size:.78rem;">© {{ date('Y') }} Service de la Comptabilité-Matières — Université de Douala.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
