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

    @include('User.Layouts.Sidebar')
    <div class="main-content">

        {{-- ================= TOPBAR ================= --}}

        @include('User.Layouts.Navbar')
        <div class="page-body">

            {{-- ================= MESSAGES (succès / erreurs) ================= --}}
            @if (session('success'))
                <div class="alert-registre alert-registre-success" role="alert">
                    <i class="fa-solid fa-circle-check"></i>
                    <div class="alert-registre-content">
                        <span class="alert-registre-title">Succès</span>
                        {{ session('success') }}
                    </div>
                    <button type="button" class="alert-registre-close" aria-label="Fermer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-registre alert-registre-error" role="alert">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <div class="alert-registre-content">
                        <span class="alert-registre-title">
                            {{ $errors->count() > 1 ? 'Veuillez corriger les erreurs suivantes' : 'Une erreur est survenue' }}
                        </span>
                        @if ($errors->count() > 1)
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @else
                            {{ $errors->first() }}
                        @endif
                    </div>
                    <button type="button" class="alert-registre-close" aria-label="Fermer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            @endif

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
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td><span
                                                    class="badge-mouvement badge-entree">{{ $item->stockmovements->first()->movementType->name }}</span>
                                            </td>
                                            <td>{{ $item->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ================= MATÉRIELS SOUS SEUIL D'ALERTE ================= --}}
            <div class="row g-3 mt-1">
                <div class="col-12">
                    <div class="panel">
                        <div class="d-flex flex-wrap justify-content-between align-items-start gap-2 mb-1">
                            <div>
                                <p class="panel-title mb-0">Matériels sous seuil d'alerte</p>
                                <p class="panel-subtitle mb-0">Fiches dont la quantité est inférieure ou égale au seuil
                                    paramétré</p>
                            </div>
                        </div>

                        @if (($lowStockItems ?? collect())->isNotEmpty())
                            <div class="table-responsive">
                                <table class="table table-registre mb-0">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Matériel</th>
                                            <th>Catégorie</th>
                                            <th>Quantité</th>
                                            <th>Seuil d'alerte</th>
                                            <th>Localisation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lowStockItems as $lowStockItem)
                                            <tr class="alert-stock-row">
                                                <td class="item-code">{{ $lowStockItem->code }}</td>
                                                <td class="item-name">{{ $lowStockItem->name }}</td>
                                                <td>{{ $lowStockItem->category->name ?? '—' }}</td>
                                                <td class="alert-stock-qty">{{ $lowStockItem->quantity }}</td>
                                                <td>{{ $lowStockItem->alert_threshold }}</td>
                                                <td>{{ $lowStockItem->location ?? '—' }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert-stock-empty">
                                <i class="fa-solid fa-circle-check"></i>
                                Aucun matériel sous le seuil d'alerte pour le moment.
                            </div>
                        @endif
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

        // Fermeture des bandeaux de messages (succès / erreurs)
        document.querySelectorAll('.alert-registre-close').forEach(function(bouton) {
            bouton.addEventListener('click', function() {
                bouton.closest('.alert-registre').remove();
            });
        });

        // Graphique : répartition des matériels par catégorie
        const donneesCategories = @json($categoriesChartData);

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
