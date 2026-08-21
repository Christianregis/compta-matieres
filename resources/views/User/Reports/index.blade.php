<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapports — Comptabilité-Matières</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

    @php
        $activeMenu = 'rapports';
        $pageTitle = 'Rapports';
        $pageSubtitle = 'Rapports personnalisables et exports';
    @endphp

    @include('User\Layouts\Sidebar')

    <div class="main-content">

        @include('User/Layouts/Navbar')

        <div class="page-body">

            {{-- ================= TOOLBAR ================= --}}
            <div class="list-toolbar">
                <button type="button" class="btn btn-navy" data-bs-toggle="modal" data-bs-target="#modalAjouterRapport">
                    <i class="fa-solid fa-plus me-2"></i>Générer un rapport
                </button>

                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Rechercher un rapport…">
                </div>
            </div>

            {{-- ================= TABLE ================= --}}
            <div class="list-panel">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Rapport</th>
                                <th>Type</th>
                                <th>Période</th>
                                <th>Format</th>
                                <th>Généré par</th>
                                <th>Généré le</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="item-name">État du stock — Août 2026</td>
                                <td>État du stock</td>
                                <td>01/08/2026 — 19/08/2026</td>
                                <td><span class="item-code">XLSX</span></td>
                                <td>Christian Ngono</td>
                                <td>19/08/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Télécharger"><i class="fa-solid fa-download"></i></button>
                                        <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#modalModifierRapport1" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" data-bs-toggle="modal" data-bs-target="#modalSupprimerRapport1" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">Historique des mouvements — Juillet 2026</td>
                                <td>Historique des mouvements</td>
                                <td>01/07/2026 — 31/07/2026</td>
                                <td><span class="item-code">XLSX</span></td>
                                <td>Aïcha Belinga</td>
                                <td>01/08/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Télécharger"><i class="fa-solid fa-download"></i></button>
                                        <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#modalModifierRapport2" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" data-bs-toggle="modal" data-bs-target="#modalSupprimerRapport2" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">Matériels sous seuil d'alerte</td>
                                <td>Seuils d'alerte</td>
                                <td>Au 19/08/2026</td>
                                <td><span class="item-code">CSV</span></td>
                                <td>Paul Etoga</td>
                                <td>19/08/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Télécharger"><i class="fa-solid fa-download"></i></button>
                                        <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#modalModifierRapport3" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" data-bs-toggle="modal" data-bs-target="#modalSupprimerRapport3" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">État du stock — 2ᵉ trimestre 2026</td>
                                <td>État du stock</td>
                                <td>01/04/2026 — 30/06/2026</td>
                                <td><span class="item-code">XLSX</span></td>
                                <td>Christian Ngono</td>
                                <td>02/07/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Télécharger"><i class="fa-solid fa-download"></i></button>
                                        <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#modalModifierRapport4" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" data-bs-toggle="modal" data-bs-target="#modalSupprimerRapport4" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="item-name">Historique des mouvements — Catégorie Informatique</td>
                                <td>Historique des mouvements</td>
                                <td>01/01/2026 — 19/08/2026</td>
                                <td><span class="item-code">CSV</span></td>
                                <td>Aïcha Belinga</td>
                                <td>15/08/2026</td>
                                <td>
                                    <div class="row-actions">
                                        <button type="button" class="btn-action" aria-label="Télécharger"><i class="fa-solid fa-download"></i></button>
                                        <button type="button" class="btn-action" data-bs-toggle="modal" data-bs-target="#modalModifierRapport5" aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                        <button type="button" class="btn-action btn-action-danger" data-bs-toggle="modal" data-bs-target="#modalSupprimerRapport5" aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{-- ================= MODAL AJOUTER (GÉNÉRER) ================= --}}
    <div class="modal fade" id="modalAjouterRapport" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Générer un rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.add') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_ajout" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_ajout" name="name" placeholder="Ex. État du stock — Septembre 2026" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_ajout" class="form-label">Format</label>
                                <select class="form-select" id="format_ajout" name="format" required>
                                    <option value="xlsx" selected>XLSX</option>
                                    <option value="csv">CSV</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_ajout" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_ajout" name="report_type" required>
                                    <option value="" selected disabled>Sélectionner un type</option>
                                    <option value="etat_stock">État du stock</option>
                                    <option value="historique_mouvements">Historique des mouvements</option>
                                    <option value="seuils_alerte">Seuils d'alerte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_ajout" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_ajout" name="start_date" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_ajout" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_ajout" name="end_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-file-export me-2"></i>Générer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= MODALES MODIFIER / SUPPRIMER — Rapport 1 ================= --}}
    <div class="modal fade" id="modalModifierRapport1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.update', 1) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_1" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_1" name="name" value="État du stock — Août 2026" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_1" class="form-label">Format</label>
                                <select class="form-select" id="format_1" name="format" required>
                                    <option value="xlsx" selected>XLSX</option>
                                    <option value="csv">CSV</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_1" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_1" name="report_type" required>
                                    <option value="etat_stock" selected>État du stock</option>
                                    <option value="historique_mouvements">Historique des mouvements</option>
                                    <option value="seuils_alerte">Seuils d'alerte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_1" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_1" name="start_date" value="2026-08-01" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_1" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_1" name="end_date" value="2026-08-19" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSupprimerRapport1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer le rapport <strong>« État du stock — Août 2026 »</strong> ? Cette action est irréversible.</p>
                </div>
                <form method="POST" action="{{ route('user.rapport.delete', 1) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy" style="background:var(--red-700); border-color:var(--red-700);"><i class="fa-solid fa-trash me-2"></i>Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= MODALES MODIFIER / SUPPRIMER — Rapport 2 ================= --}}
    <div class="modal fade" id="modalModifierRapport2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.update', 2) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_2" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_2" name="name" value="Historique des mouvements — Juillet 2026" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_2" class="form-label">Format</label>
                                <select class="form-select" id="format_2" name="format" required>
                                    <option value="xlsx" selected>XLSX</option>
                                    <option value="csv">CSV</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_2" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_2" name="report_type" required>
                                    <option value="historique_mouvements" selected>Historique des mouvements</option>
                                    <option value="etat_stock">État du stock</option>
                                    <option value="seuils_alerte">Seuils d'alerte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_2" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_2" name="start_date" value="2026-07-01" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_2" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_2" name="end_date" value="2026-07-31" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSupprimerRapport2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer le rapport <strong>« Historique des mouvements — Juillet 2026 »</strong> ? Cette action est irréversible.</p>
                </div>
                <form method="POST" action="{{ route('user.rapport.delete', 2) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy" style="background:var(--red-700); border-color:var(--red-700);"><i class="fa-solid fa-trash me-2"></i>Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= MODALES MODIFIER / SUPPRIMER — Rapport 3 ================= --}}
    <div class="modal fade" id="modalModifierRapport3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.update', 3) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_3" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_3" name="name" value="Matériels sous seuil d'alerte" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_3" class="form-label">Format</label>
                                <select class="form-select" id="format_3" name="format" required>
                                    <option value="csv" selected>CSV</option>
                                    <option value="xlsx">XLSX</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_3" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_3" name="report_type" required>
                                    <option value="seuils_alerte" selected>Seuils d'alerte</option>
                                    <option value="etat_stock">État du stock</option>
                                    <option value="historique_mouvements">Historique des mouvements</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_3" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_3" name="start_date" value="2026-08-19" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_3" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_3" name="end_date" value="2026-08-19" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSupprimerRapport3" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer le rapport <strong>« Matériels sous seuil d'alerte »</strong> ? Cette action est irréversible.</p>
                </div>
                <form method="POST" action="{{ route('user.rapport.delete', 3) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy" style="background:var(--red-700); border-color:var(--red-700);"><i class="fa-solid fa-trash me-2"></i>Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= MODALES MODIFIER / SUPPRIMER — Rapport 4 ================= --}}
    <div class="modal fade" id="modalModifierRapport4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.update', 4) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_4" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_4" name="name" value="État du stock — 2ᵉ trimestre 2026" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_4" class="form-label">Format</label>
                                <select class="form-select" id="format_4" name="format" required>
                                    <option value="xlsx" selected>XLSX</option>
                                    <option value="csv">CSV</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_4" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_4" name="report_type" required>
                                    <option value="etat_stock" selected>État du stock</option>
                                    <option value="historique_mouvements">Historique des mouvements</option>
                                    <option value="seuils_alerte">Seuils d'alerte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_4" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_4" name="start_date" value="2026-04-01" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_4" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_4" name="end_date" value="2026-06-30" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSupprimerRapport4" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer le rapport <strong>« État du stock — 2ᵉ trimestre 2026 »</strong> ? Cette action est irréversible.</p>
                </div>
                <form method="POST" action="{{ route('user.rapport.delete', 4) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy" style="background:var(--red-700); border-color:var(--red-700);"><i class="fa-solid fa-trash me-2"></i>Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ================= MODALES MODIFIER / SUPPRIMER — Rapport 5 ================= --}}
    <div class="modal fade" id="modalModifierRapport5" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="{{ route('user.rapport.update', 5) }}">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-8">
                                <label for="nom_rapport_5" class="form-label">Nom du rapport</label>
                                <input type="text" class="form-control" id="nom_rapport_5" name="name" value="Historique des mouvements — Catégorie Informatique" required>
                            </div>
                            <div class="col-md-4">
                                <label for="format_5" class="form-label">Format</label>
                                <select class="form-select" id="format_5" name="format" required>
                                    <option value="csv" selected>CSV</option>
                                    <option value="xlsx">XLSX</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="type_rapport_5" class="form-label">Type de rapport</label>
                                <select class="form-select" id="type_rapport_5" name="report_type" required>
                                    <option value="historique_mouvements" selected>Historique des mouvements</option>
                                    <option value="etat_stock">État du stock</option>
                                    <option value="seuils_alerte">Seuils d'alerte</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="date_debut_5" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut_5" name="start_date" value="2026-01-01" required>
                            </div>
                            <div class="col-md-3">
                                <label for="date_fin_5" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin_5" name="end_date" value="2026-08-19" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalSupprimerRapport5" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer le rapport</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2" style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer le rapport <strong>« Historique des mouvements — Catégorie Informatique »</strong> ? Cette action est irréversible.</p>
                </div>
                <form method="POST" action="{{ route('user.rapport.delete', 5) }}">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy" style="background:var(--red-700); border-color:var(--red-700);"><i class="fa-solid fa-trash me-2"></i>Supprimer</button>
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
