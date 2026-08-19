<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord — Comptabilité-Matières</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>

<body>

    {{-- ================= SIDEBAR ================= --}}
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <span class="sidebar-brand-mark">CM</span>
            <span class="sidebar-brand-text">
                Comptabilité-Matières
                <small>Faculté des Sciences</small>
            </span>
        </div>

        <nav class="sidebar-nav">
            <p class="sidebar-section-title">Gestion des stocks</p>
            <a href="#" class="sidebar-link active">
                <i class="fa-solid fa-gauge"></i> Dashboard
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-boxes-stacked"></i> Matériels
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-tags"></i> Catégories
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-circle-check"></i> Statuts
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-right-left"></i> Mouvements
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-chart-column"></i> Rapports
            </a>

            <p class="sidebar-section-title">Administration</p>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-user-shield"></i> Utilisateurs
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-sliders"></i> Paramètres
            </a>
        </nav>

        <div class="sidebar-footer">
            © {{ date('Y') }} Université de Douala
        </div>
    </aside>

    <div class="main-content">

        {{-- ================= TOPBAR ================= --}}
        <header class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn-toggle-sidebar" id="btnToggleSidebar" aria-label="Ouvrir le menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div>
                    <p class="topbar-title">Tableau de bord</p>
                    <p class="topbar-subtitle">Vue d'ensemble du parc matériel</p>
                </div>
            </div>

            <div class="dropdown">
                <button class="profile-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="profile-icon"><i class="fa-solid fa-user"></i></span>
                    <span class="profile-name-block text-start">
                        <span class="profile-name d-block">{{ auth()->user()->name ?? 'Utilisateur' }}</span>
                        <span class="profile-role">{{ auth()->user()->role ?? 'Agent' }}</span>
                    </span>
                    <i class="fa-solid fa-chevron-down" style="font-size:.7rem; color:var(--ink-600);"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile">
                    <li>
                        <a class="dropdown-item" href="{{ route('profil') }}">
                            <i class="fa-regular fa-user"></i> Mon profil
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="/logout">
                            <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="page-body">

            {{-- ================= ACTIONS ================= --}}
            <div class="d-flex flex-wrap justify-content-end gap-2 mb-4">
                <button type="button" class="btn btn-outline-navy">
                    <i class="fa-solid fa-file-export me-2"></i>Exporter les données (.XLS/CSV)
                </button>
                <button type="button" class="btn btn-navy">
                    <i class="fa-solid fa-plus me-2"></i>Nouvelle fiche
                </button>
            </div>

            {{-- ================= KPI ================= --}}
            <div class="row g-3 mb-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card" style="--accent:var(--gold-600);">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="kpi-icon"><i class="fa-solid fa-boxes-stacked"></i></span>
                        </div>
                        <p class="kpi-label mb-1">Fiches enregistrées</p>
                        <p class="kpi-value mb-0">{{ $totalItems ?? '1 284' }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card" style="--accent:var(--navy-700);">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="kpi-icon"><i class="fa-solid fa-right-left"></i></span>
                        </div>
                        <p class="kpi-label mb-1">Mouvements ce mois</p>
                        <p class="kpi-value mb-0">{{ $movementsThisMonth ?? '96' }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card" style="--accent:var(--green-700);">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="kpi-icon"><i class="fa-solid fa-tags"></i></span>
                        </div>
                        <p class="kpi-label mb-1">Catégories suivies</p>
                        <p class="kpi-value mb-0">{{ $totalCategories ?? '20' }}</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="kpi-card" style="--accent:var(--red-700);">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <span class="kpi-icon"><i class="fa-solid fa-triangle-exclamation"></i></span>
                        </div>
                        <p class="kpi-label mb-1">Matériels sous seuil d'alerte</p>
                        <p class="kpi-value mb-0">{{ $itemsUnderThreshold ?? '7' }}</p>
                    </div>
                </div>
            </div>

            {{-- ================= GRAPHIQUE + MOUVEMENTS ================= --}}
            <div class="row g-3">
                <div class="col-xl-7">
                    <div class="panel">
                        <p class="panel-title">Répartition des matériels par catégorie</p>
                        <p class="panel-subtitle">Nombre de fiches enregistrées par catégorie</p>
                        <div class="chart-wrap">
                            <canvas id="graphiqueCategories"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="panel">
                        <p class="panel-title">Derniers mouvements</p>
                        <p class="panel-subtitle">Entrées, sorties et retours récents</p>
                        <div class="table-responsive">
                            <table class="table table-registre mb-0">
                                <thead>
                                    <tr>
                                        <th>Matériel</th>
                                        <th>Type</th>
                                        <th>Qté</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Microscope binoculaire</td>
                                        <td><span class="badge-mouvement badge-entree">Entrée</span></td>
                                        <td>07</td>
                                    </tr>
                                    <tr>
                                        <td>Chaises de bureau</td>
                                        <td><span class="badge-mouvement badge-sortie">Sortie</span></td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>Onduleur 1000VA</td>
                                        <td><span class="badge-mouvement badge-retour">Retour</span></td>
                                        <td>02</td>
                                    </tr>
                                    <tr>
                                        <td>Vidéoprojecteur</td>
                                        <td><span class="badge-mouvement badge-transfert">Transfert</span></td>
                                        <td>01</td>
                                    </tr>
                                    <tr>
                                        <td>Climatiseur split</td>
                                        <td><span class="badge-mouvement badge-sortie">Sortie</span></td>
                                        <td>03</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
    <script>
        // Ouverture / fermeture du sidebar en version mobile
        const sidebar = document.getElementById('sidebar');
        const btnToggleSidebar = document.getElementById('btnToggleSidebar');

        btnToggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });

        // Graphique : répartition des matériels par catégorie
        const donneesCategories = @json(
            $categoriesChartData ?? [
                ['label' => 'Matériel informatique', 'total' => 142],
                ['label' => 'Matériel scientifique de laboratoire', 'total' => 118],
                ['label' => 'Mobilier', 'total' => 96],
                ['label' => 'Matériel électrique', 'total' => 84],
                ['label' => 'Matériel électronique', 'total' => 77],
                ['label' => 'Matériel de mesure et de précision', 'total' => 61],
                ['label' => 'Matériel audiovisuel', 'total' => 54],
                ['label' => 'Outillage technique', 'total' => 48],
            ]
        );

        const ctxCategories = document.getElementById('graphiqueCategories');

        new Chart(ctxCategories, {
            type: 'bar',
            data: {
                labels: donneesCategories.map(c => c.label),
                datasets: [{
                    label: 'Nombre de fiches',
                    data: donneesCategories.map(c => c.total),
                    backgroundColor: '#12283F',
                    hoverBackgroundColor: '#A9782C',
                    borderRadius: 2,
                    barThickness: 16,
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: '#12283F',
                        padding: 10,
                        titleFont: {
                            family: 'Inter'
                        },
                        bodyFont: {
                            family: 'Inter'
                        },
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            color: '#E2DFD3'
                        },
                        ticks: {
                            font: {
                                family: 'Inter',
                                size: 11
                            },
                            color: '#4B5665'
                        }
                    },
                    y: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Inter',
                                size: 11
                            },
                            color: '#1C2530'
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
