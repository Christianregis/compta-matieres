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

    <style>
        :root {
            --navy-900: #12283F;
            --navy-700: #1E4066;
            --gold-600: #A9782C;
            --gold-500: #C79A47;
            --paper: #F2F1EC;
            --paper-line: #E2DFD3;
            --ink-900: #1C2530;
            --ink-600: #4B5665;
            --red-700: #B23A2E;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--ink-900);
        }

        .font-display {
            font-family: 'Fraunces', serif;
        }

        .font-mono {
            font-family: 'IBM Plex Mono', monospace;
            letter-spacing: .02em;
        }

        .split-screen {
            min-height: 100vh;
        }

        /* ---------- Left panel : identité institutionnelle ---------- */
        .panel-identite {
            background: var(--navy-900);
            color: #fff;
            padding: 3.5rem 3rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .panel-identite::after {
            content: "";
            position: absolute;
            right: -120px;
            top: -120px;
            width: 340px;
            height: 340px;
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 50%;
        }

        .panel-identite::before {
            content: "";
            position: absolute;
            right: -40px;
            bottom: -160px;
            width: 260px;
            height: 260px;
            border: 1px solid rgba(255, 255, 255, .06);
            border-radius: 50%;
        }

        .brand-mark-light {
            width: 42px;
            height: 42px;
            border: 1.5px solid #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 1.05rem;
            flex-shrink: 0;
        }

        .brand-text-light {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.2;
        }

        .brand-text-light small {
            display: block;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: .7rem;
            color: #9FB3C8;
        }

        .panel-identite h1 {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            font-size: 2rem;
            line-height: 1.2;
            margin-top: 2.5rem;
            position: relative;
            z-index: 1;
        }

        .panel-identite p.intro {
            color: #B9C7D6;
            font-size: .95rem;
            max-width: 24rem;
            position: relative;
            z-index: 1;
        }

        .acces-item {
            display: flex;
            align-items: flex-start;
            gap: .75rem;
            padding: .7rem 0;
            border-top: 1px solid rgba(255, 255, 255, .12);
            position: relative;
            z-index: 1;
        }

        .acces-item:first-of-type {
            border-top: 1px solid rgba(255, 255, 255, .12);
            margin-top: 2rem;
        }

        .acces-item i {
            color: var(--gold-500);
            width: 20px;
            margin-top: .15rem;
        }

        .acces-item span {
            font-size: .86rem;
            color: #D9E2EA;
        }

        .panel-identite .cachet-mini {
            width: 78px;
            height: 78px;
            border-radius: 50%;
            border: 1.5px solid var(--gold-500);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transform: rotate(-8deg);
            position: relative;
            z-index: 1;
        }

        .cachet-mini-text {
            font-family: 'IBM Plex Mono', monospace;
            font-size: .44rem;
            letter-spacing: .05em;
            color: var(--gold-500);
            font-weight: 600;
            line-height: 1.3;
        }

        /* ---------- Right panel : formulaire ---------- */
        .panel-formulaire {
            background: var(--paper);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 1.5rem;
        }

        .carte-connexion {
            width: 100%;
            max-width: 390px;
        }

        .carte-connexion .eyebrow {
            font-family: 'IBM Plex Mono', monospace;
            font-size: .7rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--gold-600);
            font-weight: 600;
        }

        .carte-connexion h2 {
            font-family: 'Fraunces', serif;
            font-weight: 600;
            color: var(--navy-900);
            font-size: 1.6rem;
        }

        .carte-connexion p.souscription {
            color: var(--ink-600);
            font-size: .9rem;
        }

        .form-label {
            font-size: .82rem;
            font-weight: 600;
            color: var(--ink-900);
        }

        .input-group-registre {
            background: #fff;
            border: 1px solid var(--paper-line);
        }

        .input-group-registre .input-group-text {
            background: #fff;
            border: none;
            color: var(--ink-600);
        }

        .input-group-registre .form-control {
            border: none;
            box-shadow: none;
            padding-left: 0;
        }

        .input-group-registre .form-control:focus {
            box-shadow: none;
        }

        .input-group-registre.focus-within {
            border-color: var(--navy-700);
        }

        .form-control:focus {
            box-shadow: none;
        }

        .input-group:focus-within {
            border-color: var(--navy-700) !important;
        }

        .btn-toggle-pass {
            background: #fff;
            border: none;
            color: var(--ink-600);
        }

        .btn-connexion {
            background: var(--navy-900);
            color: #fff;
            font-weight: 600;
            padding: .7rem 1rem;
            border: 1px solid var(--navy-900);
        }

        .btn-connexion:hover {
            background: var(--navy-700);
            color: #fff;
        }

        .lien-retour {
            color: var(--ink-600);
            font-size: .85rem;
            text-decoration: none;
        }

        .lien-retour:hover {
            color: var(--navy-900);
        }

        .alert-erreur {
            background: #FBEAE8;
            border: 1px solid var(--red-700);
            color: var(--red-700);
            font-size: .85rem;
            padding: .75rem 1rem;
        }
    </style>
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

                    @if ($errors->any())
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
