<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statuts — Comptabilité-Matières</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
</head>

<body>
    @include('User\Layouts\Sidebar')

    <div class="main-content">

        @include('User/Layouts/Navbar')

        <div class="page-body">

            {{-- ================= TOOLBAR ================= --}}
            <div class="list-toolbar">
                <button type="button" class="btn btn-navy" data-bs-toggle="modal" data-bs-target="#modalAjouterStatut">
                    <i class="fa-solid fa-plus me-2"></i>Ajouter un statut
                </button>

                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Rechercher un statut…">
                </div>
            </div>

            {{-- ================= TABLE ================= --}}
            <div class="list-panel">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Statut</th>
                                <th>Aperçu</th>
                                <th>Matériels associés</th>
                                <th>Créé le</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($statuses as $status)
                                <tr>
                                    <td class="item-name">{{ $status->name }}</td>
                                    <td><span class="badge-status status-neuf">{{ $status->name }}</span></td>
                                    <td>{{ $status->items->count() }}</td>
                                    <td>{{ $status->created_at }}</td>
                                    <td>
                                        <div class="row-actions">
                                            <button type="button" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#modalModifierStatut{{ $status->id }}"
                                                aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                            <button type="button" class="btn-action btn-action-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalSupprimerStatut{{ $status->id }}"
                                                aria-label="Supprimer"><i class="fa-solid fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                {{-- ================= MODALES MODIFIER / SUPPRIMER ================= --}}
                                <div class="modal fade" id="modalModifierStatut{{ $status->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-content-registre">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modifier le statut</h5>
                                                <button type="button" class="btn-close-registre"
                                                    data-bs-dismiss="modal" aria-label="Fermer"><i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <form method="POST" action="#">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <label for="nom_statut_1" class="form-label">Nom du statut</label>
                                                    <input type="text" class="form-control"
                                                        id="nom_statut_{{ $status->name }}" name="name"
                                                        value="{{ $status->name }}" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-navy"
                                                        data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-navy"><i
                                                            class="fa-solid fa-check me-2"></i>Mettre à
                                                        jour</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modalSupprimerStatut{{ $status->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content modal-content-registre">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Supprimer le statut</h5>
                                                <button type="button" class="btn-close-registre"
                                                    data-bs-dismiss="modal" aria-label="Fermer"><i
                                                        class="fa-solid fa-xmark"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2"
                                                        style="color:var(--red-700);"></i>Voulez-vous vraiment supprimer
                                                    le statut <strong>« {{ $status->name }}
                                                        »</strong> ? Cette action est irréversible.</p>
                                            </div>
                                            <form method="POST" action="#">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-navy"
                                                        data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-navy"
                                                        style="background:var(--red-700); border-color:var(--red-700);"><i
                                                            class="fa-solid fa-trash me-2"></i>Supprimer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{-- ================= MODAL AJOUTER ================= --}}
    <div class="modal fade" id="modalAjouterStatut" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un statut</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="#">
                    @csrf
                    <div class="modal-body">
                        <label for="nom_statut_ajout" class="form-label">Nom du statut</label>
                        <input type="text" class="form-control" id="nom_statut_ajout" name="name"
                            placeholder="Ex. En attente de contrôle" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-navy" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-navy"><i
                                class="fa-solid fa-check me-2"></i>Enregistrer</button>
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
