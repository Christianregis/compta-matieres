<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories — Comptabilité-Matières</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>
<body>

    @php
        $activeMenu = 'categories';
        $pageTitle = 'Catégories';
        $pageSubtitle = 'Classification du parc matériel';
    @endphp

    @include('User/Layouts/Sidebar')

    <div class="main-content">

        @include('User\Layouts\Navbar')

        <div class="page-body">

            {{-- ================= TOOLBAR ================= --}}
            <div class="list-toolbar">
                <button type="button" class="btn btn-navy" data-bs-toggle="modal" data-bs-target="#modalAjouterCategorie">
                    <i class="fa-solid fa-plus me-2"></i>Ajouter une catégorie
                </button>

                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Rechercher une catégorie…">
                </div>
            </div>

            {{-- ================= TABLE ================= --}}
            <div class="list-panel">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Catégorie</th>
                                <th>Matériels associés</th>
                                <th>Créée le</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel informatique</td>
                                <td>142</td>
                                <td>03/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel scientifique de laboratoire</td>
                                <td>118</td>
                                <td>03/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Mobilier</td>
                                <td>96</td>
                                <td>03/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel électrique</td>
                                <td>84</td>
                                <td>04/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel électronique</td>
                                <td>77</td>
                                <td>04/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel de mesure et de précision</td>
                                <td>61</td>
                                <td>05/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Matériel audiovisuel</td>
                                <td>54</td>
                                <td>05/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="category-swatch"></span>Outillage technique</td>
                                <td>48</td>
                                <td>06/02/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{-- ================= MODAL AJOUTER UNE CATÉGORIE ================= --}}
    <div class="modal fade" id="modalAjouterCategorie" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une catégorie</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <form method="POST" action="#">
                    @csrf
                    <div class="modal-body">
                        <label for="name" class="form-label">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Matériel de reprographie" required>
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
        btnToggleSidebar.addEventListener('click', function () {
            sidebar.classList.toggle('show');
        });
    </script>
</body>
</html>