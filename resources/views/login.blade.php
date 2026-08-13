<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Comptabilité-Matières | Faculté des Sciences</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/public/login.css') }}">
</head>

<body>

    <div class="container-fluid p-0">
        <div class="row g-0 split-screen">

            {{-- ================= PANNEAU IDENTITÉ ================= --}}
            <div class="col-lg-5 panel-identite">
                <div>
                    <a href="{{ route('home') }}"
                        class="d-flex align-items-center gap-2 text-decoration-none text-white">
                        <span class="brand-mark-light">CM</span>
                        <span class="brand-text-light">
                            Comptabilité-Matières
                            <small>Faculté des Sciences — Université de Douala</small>
                        </span>
                    </a>

                    <h1>Le registre du matériel,<br>toujours à jour.</h1>
                    <p class="intro">
                        Cet espace est réservé au personnel autorisé du Service de la Comptabilité-Matières
                        pour la gestion des stocks et le suivi des mouvements de matériel.
                    </p>

                    <div class="acces-item">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span>Consulter et mettre à jour les fiches de stock</span>
                    </div>
                    <div class="acces-item">
                        <i class="fa-solid fa-right-left"></i>
                        <span>Enregistrer les entrées, sorties et retours de matériel</span>
                    </div>
                    <div class="acces-item">
                        <i class="fa-solid fa-chart-column"></i>
                        <span>Suivre les indicateurs depuis le tableau de bord</span>
                    </div>
                </div>

                <div class="cachet-mini">
                    <div class="cachet-mini-text">COMPTABILITÉ<br>MATIÈRES<br>★ ACCÈS ★</div>
                </div>
            </div>

            {{-- ================= PANNEAU FORMULAIRE ================= --}}
            <div class="col-lg-7 panel-formulaire">
                <div class="carte-connexion">
                    <p class="eyebrow mb-2">Espace personnel</p>
                    <h2 class="mb-2">Connexion</h2>
                    <p class="souscription mb-4">Saisissez vos identifiants pour accéder à votre espace de gestion.</p>

                    @if (session('success'))
                        <div class="alert-erreur mb-4" style="border-left-color: #198754; background: rgba(25, 135, 84, 0.08); color: #0f5132;">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            {{ session('success') }}
                        </div>
                    @elseif ($errors->any())
                        <div class="alert-erreur mb-4">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i>
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="#">
                        @csrf

                        <div class="mb-3">
                            <label for="identifiant" class="form-label">Identifiant</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                <input type="text"
                                    class="form-control py-2 @error('identifiant') is-invalid @enderror"
                                    id="identifiant" name="identifiant" value="{{ old('identifiant') }}"
                                    placeholder="Matricule ou adresse e-mail" autocomplete="username" required
                                    autofocus>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="mot_de_passe" class="form-label">Mot de passe</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input type="password"
                                    class="form-control py-2 @error('mot_de_passe') is-invalid @enderror"
                                    id="mot_de_passe" name="mot_de_passe" placeholder="••••••••"
                                    autocomplete="current-password" required>
                                <button class="btn btn-toggle-pass" type="button" id="basculerMotDePasse"
                                    aria-label="Afficher le mot de passe">
                                    <i class="fa-regular fa-eye" id="iconeOeil"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="se_souvenir" name="se_souvenir">
                                <label class="form-check-label" for="se_souvenir"
                                    style="font-size:.85rem; color:var(--ink-600);">
                                    Se souvenir de moi
                                </label>
                            </div>
                            <a href="#" class="lien-retour">Mot de passe oublié ?</a>
                        </div>

                        <button type="submit"
                            class="btn btn-connexion w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="fa-solid fa-right-to-bracket"></i> Se connecter
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <a href="{{ route('home') }}" class="lien-retour">
                            <i class="fa-solid fa-arrow-left-long me-1"></i> Retour à l'accueil
                        </a>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('inscription') }}" class="lien-retour">
                            <i class="fa-solid fa-arrow-left-long me-1"></i> Vous n'avez pas encore de compte ?
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const boutonOeil = document.getElementById('basculerMotDePasse');
        const champMotDePasse = document.getElementById('mot_de_passe');
        const iconeOeil = document.getElementById('iconeOeil');

        boutonOeil.addEventListener('click', function() {
            const estVisible = champMotDePasse.type === 'text';
            champMotDePasse.type = estVisible ? 'password' : 'text';
            iconeOeil.classList.toggle('fa-eye');
            iconeOeil.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
