<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte — Comptabilité-Matières | Faculté des Sciences</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/public/register.css') }}">
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0 split-screen">

            {{-- ================= PANNEAU IDENTITÉ ================= --}}
            <div class="col-lg-5 panel-identite">
                <div>
                    <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none text-white">
                        <span class="brand-mark-light">CM</span>
                        <span class="brand-text-light">
                            Comptabilité-Matières
                            <small>Faculté des Sciences — Université de Douala</small>
                        </span>
                    </a>

                    <h1>Un accès nominatif,<br>pour un registre fiable.</h1>
                    <p class="intro">
                        La création de compte est réservée au personnel autorisé du Service de la
                        Comptabilité-Matières. Chaque compte est ensuite validé par un administrateur
                        avant activation.
                    </p>

                    <div class="etape">
                        <span class="etape-num">1</span>
                        <span>Renseignez vos informations et votre matricule de service</span>
                    </div>
                    <div class="etape">
                        <span class="etape-num">2</span>
                        <span>Votre demande est transmise à l'administrateur du système</span>
                    </div>
                    <div class="etape">
                        <span class="etape-num">3</span>
                        <span>Vous recevez la confirmation et accédez à votre espace</span>
                    </div>
                </div>

                <div class="cachet-mini">
                    <div class="cachet-mini-text">COMPTABILITÉ<br>MATIÈRES<br>★ ACCÈS ★</div>
                </div>
            </div>

            {{-- ================= PANNEAU FORMULAIRE ================= --}}
            <div class="col-lg-7 panel-formulaire">
                <div class="carte-inscription">
                    <p class="eyebrow mb-2">Nouveau compte</p>
                    <h2 class="mb-2">Créer un compte</h2>
                    <p class="souscription mb-3">Ouvrez un accès personnel à la plateforme de gestion des stocks.</p>

                    <div class="alert-info-acces mb-4">
                        <i class="fa-solid fa-circle-info me-1"></i>
                        Votre compte sera activé après validation par un administrateur du Service.
                    </div>

                    @if ($errors->any())
                        <div class="alert-erreur mb-4">
                            <i class="fa-solid fa-triangle-exclamation me-2"></i>
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row g-3 mb-3">
                            <div class="col-sm-6">
                                <label for="nom" class="form-label">Nom</label>
                                <div class="input-group input-group-registre">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input
                                        type="text"
                                        class="form-control py-2 @error('name') is-invalid @enderror"
                                        id="nom"
                                        name="name"
                                        value="{{ old('name') }}"
                                        placeholder="Ex. Mballa"
                                        autocomplete="family-name"
                                        required
                                        autofocus
                                    >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="prenom" class="form-label">Prénom</label>
                                <div class="input-group input-group-registre">
                                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                                    <input
                                        type="text"
                                        class="form-control py-2 @error('surname') is-invalid @enderror"
                                        id="prenom"
                                        name="surname"
                                        value="{{ old('surname') }}"
                                        placeholder="Ex. Christian"
                                        autocomplete="given-name"
                                        required
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule de service</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-solid fa-id-badge"></i></span>
                                <input
                                    type="text"
                                    class="form-control py-2 font-mono @error('matricule') is-invalid @enderror"
                                    id="matricule"
                                    name="matricule"
                                    value="{{ old('matricule') }}"
                                    placeholder="Ex. FS-CM-0042"
                                    required
                                >
                            </div>
                            <div class="form-text-aide mt-1">Attribué par le Service de la Comptabilité-Matières.</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail professionnelle</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-regular fa-envelope"></i></span>
                                <input
                                    type="email"
                                    class="form-control py-2 @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="prenom.nom@univ-douala.cm"
                                    autocomplete="email"
                                    required
                                >
                            </div>
                        </div>

                        <div class="mb-1">
                            <label for="mot_de_passe" class="form-label">Mot de passe</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input
                                    type="password"
                                    class="form-control py-2 @error('password') is-invalid @enderror"
                                    id="mot_de_passe"
                                    name="password"
                                    placeholder="8 caractères minimum"
                                    autocomplete="new-password"
                                    minlength="8"
                                    required
                                >
                                <button class="btn btn-toggle-pass" type="button" id="basculerMotDePasse" aria-label="Afficher le mot de passe">
                                    <i class="fa-regular fa-eye" id="iconeOeil"></i>
                                </button>
                            </div>
                            <div class="robustesse" id="robustesse">
                                <span></span><span></span><span></span>
                            </div>
                            <div class="robustesse-label" id="robustesseLabel">Utilisez majuscules, chiffres et symboles.</div>
                        </div>

                        <div class="mb-4 mt-3">
                            <label for="mot_de_passe_confirmation" class="form-label">Confirmer le mot de passe</label>
                            <div class="input-group input-group-registre">
                                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                                <input
                                    type="password"
                                    class="form-control py-2 @error('mot_de_passe_confirmation') is-invalid @enderror"
                                    id="mot_de_passe_confirmation"
                                    name="mot_de_passe_confirmation"
                                    placeholder="Ressaisissez le mot de passe"
                                    autocomplete="new-password"
                                    required
                                >
                            </div>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input @error('acceptation') is-invalid @enderror" type="checkbox" id="acceptation" name="acceptation" required>
                            <label class="form-check-label" for="acceptation" style="font-size:.85rem; color:var(--ink-600);">
                                Je m'engage à utiliser cet accès conformément aux règles internes du Service de la Comptabilité-Matières.
                            </label>
                        </div>

                        <button type="submit" class="btn btn-inscription w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="fa-solid fa-user-plus"></i> Créer mon compte
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <span class="lien-retour">Déjà un compte ?</span>
                        <a href="{{ route('connexion') }}" class="lien-navy">Se connecter</a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ route('home') }}" class="lien-retour">
                            <i class="fa-solid fa-arrow-left-long me-1"></i> Retour à l'accueil
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Affichage / masquage du mot de passe
        const boutonOeil = document.getElementById('basculerMotDePasse');
        const champMotDePasse = document.getElementById('mot_de_passe');
        const iconeOeil = document.getElementById('iconeOeil');

        boutonOeil.addEventListener('click', function () {
            const estVisible = champMotDePasse.type === 'text';
            champMotDePasse.type = estVisible ? 'password' : 'text';
            iconeOeil.classList.toggle('fa-eye');
            iconeOeil.classList.toggle('fa-eye-slash');
        });

        // Indicateur simple de robustesse du mot de passe
        const barreRobustesse = document.getElementById('robustesse');
        const labelRobustesse = document.getElementById('robustesseLabel');

        champMotDePasse.addEventListener('input', function () {
            const valeur = champMotDePasse.value;
            let score = 0;
            if (valeur.length >= 8) score++;
            if (/[A-Z]/.test(valeur) && /[0-9]/.test(valeur)) score++;
            if (/[^A-Za-z0-9]/.test(valeur) && valeur.length >= 10) score++;

            barreRobustesse.classList.remove('niveau-1', 'niveau-2', 'niveau-3');

            if (valeur.length === 0) {
                labelRobustesse.textContent = 'Utilisez majuscules, chiffres et symboles.';
            } else if (score <= 1) {
                barreRobustesse.classList.add('niveau-1');
                labelRobustesse.textContent = 'Mot de passe faible.';
            } else if (score === 2) {
                barreRobustesse.classList.add('niveau-2');
                labelRobustesse.textContent = 'Mot de passe correct.';
            } else {
                barreRobustesse.classList.add('niveau-3');
                labelRobustesse.textContent = 'Mot de passe robuste.';
            }
        });
    </script>
</body>
</html>
