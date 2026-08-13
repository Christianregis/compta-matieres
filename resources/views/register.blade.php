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

    <style>
        :root{
            --navy-900:#12283F;
            --navy-700:#1E4066;
            --gold-600:#A9782C;
            --gold-500:#C79A47;
            --paper:#F2F1EC;
            --paper-line:#E2DFD3;
            --ink-900:#1C2530;
            --ink-600:#4B5665;
            --green-700:#3B6E4E;
            --red-700:#B23A2E;
        }

        html, body{ height:100%; }
        body{
            font-family:'Inter', sans-serif;
            color:var(--ink-900);
        }
        .font-display{ font-family:'Fraunces', serif; }
        .font-mono{ font-family:'IBM Plex Mono', monospace; letter-spacing:.02em; }

        .split-screen{ min-height:100vh; }

        /* ---------- Left panel : identité institutionnelle ---------- */
        .panel-identite{
            background:var(--navy-900);
            color:#fff;
            padding:3.5rem 3rem;
            position:relative;
            overflow:hidden;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
        }
        .panel-identite::after{
            content:"";
            position:absolute;
            right:-120px; top:-120px;
            width:340px; height:340px;
            border:1px solid rgba(255,255,255,.08);
            border-radius:50%;
        }
        .panel-identite::before{
            content:"";
            position:absolute;
            right:-40px; bottom:-160px;
            width:260px; height:260px;
            border:1px solid rgba(255,255,255,.06);
            border-radius:50%;
        }
        .brand-mark-light{
            width:42px;height:42px;
            border:1.5px solid #fff;
            display:flex;align-items:center;justify-content:center;
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1.05rem;
            flex-shrink:0;
        }
        .brand-text-light{
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:1rem;
            line-height:1.2;
        }
        .brand-text-light small{
            display:block;
            font-family:'Inter', sans-serif;
            font-weight:500;
            font-size:.7rem;
            color:#9FB3C8;
        }

        .panel-identite h1{
            font-family:'Fraunces', serif;
            font-weight:600;
            font-size:2rem;
            line-height:1.2;
            margin-top:2.5rem;
            position:relative;
            z-index:1;
        }
        .panel-identite p.intro{
            color:#B9C7D6;
            font-size:.95rem;
            max-width:24rem;
            position:relative;
            z-index:1;
        }

        /* Étapes du processus d'accès — ordre réel, donc numérotées */
        .etape{
            display:flex;
            align-items:flex-start;
            gap:.85rem;
            padding:.7rem 0;
            border-top:1px solid rgba(255,255,255,.12);
            position:relative;
            z-index:1;
        }
        .etape:first-of-type{ margin-top:2rem; }
        .etape-num{
            font-family:'IBM Plex Mono', monospace;
            font-size:.75rem;
            font-weight:600;
            color:var(--gold-500);
            border:1px solid var(--gold-500);
            width:24px; height:24px;
            border-radius:50%;
            display:flex;align-items:center;justify-content:center;
            flex-shrink:0;
        }
        .etape span{ font-size:.86rem; color:#D9E2EA; padding-top:.2rem; }

        .panel-identite .cachet-mini{
            width:78px;height:78px;
            border-radius:50%;
            border:1.5px solid var(--gold-500);
            display:flex;align-items:center;justify-content:center;
            text-align:center;
            transform:rotate(-8deg);
            position:relative;
            z-index:1;
        }
        .cachet-mini-text{
            font-family:'IBM Plex Mono', monospace;
            font-size:.44rem;
            letter-spacing:.05em;
            color:var(--gold-500);
            font-weight:600;
            line-height:1.3;
        }

        /* ---------- Right panel : formulaire ---------- */
        .panel-formulaire{
            background:var(--paper);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:3rem 1.5rem;
        }
        .carte-inscription{
            width:100%;
            max-width:460px;
        }
        .carte-inscription .eyebrow{
            font-family:'IBM Plex Mono', monospace;
            font-size:.7rem;
            letter-spacing:.12em;
            text-transform:uppercase;
            color:var(--gold-600);
            font-weight:600;
        }
        .carte-inscription h2{
            font-family:'Fraunces', serif;
            font-weight:600;
            color:var(--navy-900);
            font-size:1.6rem;
        }
        .carte-inscription p.souscription{
            color:var(--ink-600);
            font-size:.9rem;
        }

        .form-label{
            font-size:.82rem;
            font-weight:600;
            color:var(--ink-900);
        }
        .form-label .optionnel{
            font-weight:500;
            color:var(--ink-600);
            font-size:.74rem;
            text-transform:none;
        }
        .input-group-registre{
            background:#fff;
            border:1px solid var(--paper-line);
        }
        .input-group-registre .input-group-text{
            background:#fff;
            border:none;
            color:var(--ink-600);
        }
        .input-group-registre .form-control,
        .input-group-registre .form-select{
            border:none;
            box-shadow:none;
            padding-left:0;
        }
        .input-group-registre .form-control:focus,
        .input-group-registre .form-select:focus{
            box-shadow:none;
        }
        .input-group:focus-within{ border-color: var(--navy-700) !important; }

        .btn-toggle-pass{
            background:#fff;
            border:none;
            color:var(--ink-600);
        }

        .form-text-aide{
            font-size:.76rem;
            color:var(--ink-600);
        }

        /* Indicateur de robustesse du mot de passe */
        .robustesse{
            height:4px;
            background:var(--paper-line);
            margin-top:.5rem;
            overflow:hidden;
            display:flex;
            gap:3px;
        }
        .robustesse span{
            flex:1;
            background:var(--paper-line);
            transition:background .2s ease;
        }
        .robustesse.niveau-1 span:nth-child(1){ background:var(--red-700); }
        .robustesse.niveau-2 span:nth-child(1),
        .robustesse.niveau-2 span:nth-child(2){ background:var(--gold-600); }
        .robustesse.niveau-3 span{ background:var(--green-700); }
        .robustesse-label{
            font-size:.72rem;
            color:var(--ink-600);
            margin-top:.3rem;
        }

        .btn-inscription{
            background:var(--navy-900);
            color:#fff;
            font-weight:600;
            padding:.7rem 1rem;
            border:1px solid var(--navy-900);
        }
        .btn-inscription:hover{ background:var(--navy-700); color:#fff; }

        .lien-retour{
            color:var(--ink-600);
            font-size:.85rem;
            text-decoration:none;
        }
        .lien-retour:hover{ color:var(--navy-900); }

        .lien-navy{
            color:var(--navy-900);
            font-weight:600;
            text-decoration:none;
        }
        .lien-navy:hover{ color:var(--gold-600); }

        .alert-erreur{
            background:#FBEAE8;
            border:1px solid var(--red-700);
            color:var(--red-700);
            font-size:.85rem;
            padding:.75rem 1rem;
        }

        .alert-info-acces{
            background:#EFF3F7;
            border:1px solid var(--navy-700);
            color:var(--navy-900);
            font-size:.8rem;
            padding:.65rem .9rem;
        }
    </style>
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
