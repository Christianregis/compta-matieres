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
                        <option>Matériel informatique</option>
                        <option>Matériel scientifique de laboratoire</option>
                        <option>Mobilier</option>
                        <option>Matériel électrique</option>
                    </select>
                    <select class="filter-select">
                        <option selected>Tous les statuts</option>
                        <option>Neuf</option>
                        <option>Bon état</option>
                        <option>En réparation</option>
                        <option>En panne</option>
                        <option>Obsolète</option>
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
                            <tr>
                                <td class="item-code">SM-2026-0184</td>
                                <td class="item-name">Microscope binoculaire</td>
                                <td>Matériel scientifique de laboratoire</td>
                                <td><span class="badge-status status-bon">Bon état</span></td>
                                <td>07</td>
                                <td>02</td>
                                <td>Magasin central</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0175</td>
                                <td class="item-name">Ordinateur de bureau HP</td>
                                <td>Matériel informatique</td>
                                <td><span class="badge-status status-neuf">Neuf</span></td>
                                <td>15</td>
                                <td>05</td>
                                <td>Salle informatique 1</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0162</td>
                                <td class="item-name">Chaises de bureau</td>
                                <td>Mobilier</td>
                                <td><span class="badge-status status-bon">Bon état</span></td>
                                <td>32</td>
                                <td>10</td>
                                <td>Magasin central</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0148</td>
                                <td class="item-name">Onduleur 1000VA</td>
                                <td>Matériel électrique</td>
                                <td><span class="badge-status status-reparation">En réparation</span></td>
                                <td>02</td>
                                <td>03</td>
                                <td>Atelier technique</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0139</td>
                                <td class="item-name">Vidéoprojecteur Epson</td>
                                <td>Matériel audiovisuel</td>
                                <td><span class="badge-status status-panne">En panne</span></td>
                                <td>01</td>
                                <td>01</td>
                                <td>Amphi 200</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0121</td>
                                <td class="item-name">Climatiseur split 2CV</td>
                                <td>Matériel de climatisation</td>
                                <td><span class="badge-status status-bon">Bon état</span></td>
                                <td>04</td>
                                <td>02</td>
                                <td>Bloc administratif</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0098</td>
                                <td class="item-name">Armoire métallique</td>
                                <td>Mobilier</td>
                                <td><span class="badge-status status-obsolete">Obsolète</span></td>
                                <td>06</td>
                                <td>02</td>
                                <td>Magasin central</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-code">SM-2026-0076</td>
                                <td class="item-name">Multimètre numérique</td>
                                <td>Matériel de mesure et de précision</td>
                                <td><span class="badge-status status-reforme">À réformer</span></td>
                                <td>03</td>
                                <td>02</td>
                                <td>Atelier technique</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i
                                                class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger"
                                            aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
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
                <form method="POST" action="#">
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
                                    <option value="1">Matériel informatique</option>
                                    <option value="2">Matériel scientifique de laboratoire</option>
                                    <option value="3">Mobilier</option>
                                    <option value="4">Matériel électrique</option>
                                    <option value="5">Matériel audiovisuel</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="status_id" class="form-label">Statut</label>
                                <select class="form-select" id="status_id" name="status_id" required>
                                    <option value="" selected disabled>Sélectionner un statut</option>
                                    <option value="1">Neuf</option>
                                    <option value="2">Bon état</option>
                                    <option value="3">En réparation</option>
                                    <option value="4">En panne</option>
                                    <option value="5">Obsolète</option>
                                    <option value="6">Hors d'usage</option>
                                    <option value="7">À réformer</option>
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
