<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mouvements — Comptabilité-Matières</title>

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
        $activeMenu = 'mouvements';
        $pageTitle = 'Mouvements';
        $pageSubtitle = 'Entrées, sorties, retours et transferts de matériel';
    @endphp

    @include('User\Layouts\Sidebar')

    <div class="main-content">

        @include('User/Layouts/Navbar')

        <div class="page-body">

            {{-- ================= TOOLBAR ================= --}}
            <div class="list-toolbar">
                <button type="button" class="btn btn-navy" data-bs-toggle="modal"
                    data-bs-target="#modalAjouterMouvement">
                    <i class="fa-solid fa-plus me-2"></i>Ajouter un mouvement
                </button>

                <div class="d-flex flex-wrap gap-2">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Rechercher un matériel…">
                    </div>
                    <select class="filter-select">
                        <option selected>Tous les types</option>
                        @foreach ($movementTypes as $type)
                            <option name={{ $type->id }}>{{ $type->name }}</option>
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
                                <th>Matériel</th>
                                <th>Type</th>
                                <th>Quantité</th>
                                <th>Date</th>
                                <th>Effectué par</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($movements as $movement)
                                <tr>
                                    <td class="item-name">{{ $movement->item->name }}</td>
                                    <td><span
                                            class="badge-mouvement badge-entree">{{ $movement->movementType->name }}</span>
                                    </td>
                                    <td>{{ $movement->quantity }}</td>
                                    <td>{{ $movement->created_at }}</td>
                                    <td>{{ $movement->user->id }}</td>
                                    <td>
                                        <div class="row-actions">
                                            <button type="button" class="btn-action" data-bs-toggle="modal"
                                                data-bs-target="#modalModifierMouvement{{ $movement->id }}"
                                                aria-label="Modifier"><i class="fa-solid fa-pen"></i></button>
                                            <button type="button" class="btn-action btn-action-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalSupprimerMouvement{{ $movement->id }}"
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

    {{-- ================= MODAL AJOUTER ================= --}}
    <div class="modal fade" id="modalAjouterMouvement" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content modal-content-registre">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un mouvement</h5>
                    <button type="button" class="btn-close-registre" data-bs-dismiss="modal" aria-label="Fermer"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <form method="POST" action="#">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="item_id_ajout" class="form-label">Matériel</label>
                                <select class="form-select" id="item_id_ajout" name="item_id" required>
                                    <option value="" selected disabled>Sélectionner un matériel</option>
                                    @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="movement_type_id_ajout" class="form-label">Type de mouvement</label>
                                <select class="form-select" id="movement_type_id_ajout" name="movement_type_id"
                                    required>
                                    <option value="" selected disabled>Sélectionner un type</option>
                                    @foreach ($movementTypes as $movementType)
                                        <option value="{{ $movementType->id }}">{{ $movementType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="quantity_ajout" class="form-label">Quantité</label>
                                <input type="number" min="1" class="form-control" id="quantity_ajout"
                                    name="quantity" placeholder="0" required>
                            </div>
                            <div class="col-md-4">
                                <label for="movement_date_ajout" class="form-label">Date</label>
                                <input type="date" class="form-control" id="movement_date_ajout" name="movement_date"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="user_id_ajout" class="form-label">Effectué par</label>
                                <select class="form-select" id="user_id_ajout" name="user_id">
                                    <option value="" selected disabled>Sélectionner un agent</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="note_ajout" class="form-label">Note <span
                                        class="text-muted fw-normal">(optionnel)</span></label>
                                <input type="text" class="form-control" id="note_ajout" name="note"
                                    placeholder="Précision sur le mouvement">
                            </div>
                        </div>
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

    {{-- ================= MODALES MODIFIER / SUPPRIMER PAR MOUVEMENT ================= --}}
    @foreach ($movements as $movement)
        <div class="modal fade" id="modalModifierMouvement{{ $movement->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content modal-content-registre">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier le mouvement</h5>
                        <button type="button" class="btn-close-registre" data-bs-dismiss="modal"
                            aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <form method="POST" action="#">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="item_id_{{ $movement->item->id }}"
                                        class="form-label">Matériel</label>
                                    <select class="form-select" id="item_id_{{ $movement->item->id }}"
                                        name="item_id" required>
                                        <option value="{{ $movement->id }}" selected>
                                            {{ $movement->item->name }}
                                        </option>
                                        @foreach ($items as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="movement_type_id_{{ $movement->movementType->id }}"
                                        class="form-label">Type de
                                        mouvement</label>
                                    <select class="form-select"
                                        id="movement_type_id_{{ $movement->movementType->id }}"
                                        name="movement_type_id" required>
                                        <option value="{{ $movement->movementType->id }}" selected>
                                            {{ $movement->movementType->name }}
                                        </option>
                                        @foreach ($movementTypes as $movementType)
                                            @if ($movementType->id != $movement->movementType->id)
                                                <option value="{{ $movementType->id }}">
                                                    {{ $movementType->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="quantity_{{ $movement->id }}" class="form-label">Quantité</label>
                                    <input type="number" min="1" class="form-control"
                                        id="quantity_{{ $movement->id }}" name="quantity"
                                        value="{{ $movement->quantity }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="movement_date_{{ $movement->id }}" class="form-label">Date</label>
                                    <input type="date" class="form-control"
                                        id="movement_date_{{ $movement->id }}" name="movement_date"
                                        value="{{ $movement->movement_date }}" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="user_id_{{ $movement->user->id }}" class="form-label">Effectué
                                        par</label>
                                    <select class="form-select" id="user_id_{{ $movement->user->id }}"
                                        name="user_id">
                                        <option value="{{ $movement->user->id }}" selected>
                                            {{ $movement->user->name }}
                                        </option>
                                        @foreach ($users as $user)
                                            @if ($movement->user->id != $user->id)
                                                <option value="{{ $user->id }}">
                                                    {{ $user->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="note_{{ $movement->id }}" class="form-label">Note <span
                                            class="text-muted fw-normal">(optionnel)</span></label>
                                    <input type="text" class="form-control" id="note_{{ $movement->id }}"
                                        name="note" value="{{ $movement->note ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-navy"
                                data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-navy"><i class="fa-solid fa-check me-2"></i>Mettre
                                à
                                jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSupprimerMouvement{{ $movement->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-content-registre">
                    <div class="modal-header">
                        <h5 class="modal-title">Supprimer le mouvement</h5>
                        <button type="button" class="btn-close-registre" data-bs-dismiss="modal"
                            aria-label="Fermer"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0"><i class="fa-solid fa-triangle-exclamation me-2"
                                style="color:var(--red-700);"></i>Voulez-vous vraiment
                            supprimer ce mouvement
                            (<strong>{{ $movement->item->name }} — {{ $movement->name }}
                                du {{ $movement->movement_date }}</strong>)
                            ?
                            Cette action est
                            irréversible.</p>
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
