<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matériels — Comptabilité-Matières</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>

<body>

    @php
        $activeMenu = 'materiels';
        $pageTitle = 'Matériels';
        $pageSubtitle = 'Fiches de stock du parc matériel';
    @endphp

    @include('User/Layouts/Sidebar')

    <div class="main-content">

        @include('User/Layouts/Navbar')

        <div class="page-body">

            {{-- ================= TOOLBAR ================= --}}
            <div class="list-toolbar">
                <button type="button" class="btn btn-navy" data-bs-toggle="modal"
                    data-bs-target="#modalAjouterMateriel">
                    <i class="fa-solid fa-plus me-2"></i>Ajouter un matériel
                </button>

                <div class="d-flex flex-wrap gap-2">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Rechercher un code ou une désignation…">
                    </div>
                    <select class="filter-select">
                        <option selected>Toutes les catégories</option>
                        @foreach ($categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach

                    </select>
                    <select class="filter-select">
                        <option selected>Tous les statuts</option>
                        @foreach ($statuses as $status)
                            <option>{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- ================= TABLE ================= --}}
            <div class="list-panel">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Désignation</th>
                                <th>Catégorie</th>
                                <th>Statut</th>
                                <th>Quantité</th>
                                <th>Seuil d'alerte</th>
                                <th>Localisation</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="item-code">{{ $item->code }}</td>
                                    <td class="item-name">{{ $item->name }}</td>
                                    <td>Matériel scientifique de laboratoire</td>
                                    <td><span class="badge-status status-bon">{{ $item->status->name }}</span></td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->alert_threshold }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>
                                        <div class="row-actions">
                                            <button type="button" class="btn-action" aria-label="Modifier"><i
                                                    class="fa-solid fa-pen"></i></button>
                                            <button type="button" class="btn-action btn-action-danger"
                                                aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{-- ================= MODAL AJOUTER UN MATÉRIEL ================= --}}
    <div class="modal fade" id="modalAjouterMateriel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un matériel</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" action="{{ route('user.items.save') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="code" class="form-label">Code</label>
                                <input type="text" class="form-control" id="code" name="code"
                                    placeholder="Ex. SM-2026-0201" required>
                            </div>
                            <div class="col-md-8">
                                <label for="name" class="form-label">Désignation</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ex. Microscope binoculaire" required>
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label">Description <span
                                        class="text-muted fw-normal">(optionnel)</span></label>
                                <input type="text" class="form-control" id="description" name="description"
                                    placeholder="Précisions utiles sur le matériel">
                            </div>

                            <div class="col-md-6">
                                <label for="category_id" class="form-label">Catégorie</label>
                                <select class="form-select" id="category_id" name="category_id" required>
                                    <option value="" selected disabled>Sélectionner une catégorie</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="status_id" class="form-label">Statut</label>
                                <select class="form-select" id="status_id" name="status_id" required>
                                    <option value="" selected disabled>Sélectionner un statut</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="quantity" class="form-label">Quantité</label>
                                <input type="number" min="0" class="form-control" id="quantity"
                                    name="quantity" placeholder="0" required>
                            </div>
                            <div class="col-md-4">
                                <label for="alert_threshold" class="form-label">Seuil d'alerte</label>
                                <input type="number" min="0" class="form-control" id="alert_threshold"
                                    name="alert_threshold" placeholder="0" required>
                            </div>
                            <div class="col-md-4">
                                <label for="location" class="form-label">Localisation</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Ex. Magasin central">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy">
                            <i class="fa-solid fa-check me-2"></i>Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const btnToggleSidebar = document.getElementById('btnToggleSidebar');
        btnToggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
    </script>
</body>

</html>
