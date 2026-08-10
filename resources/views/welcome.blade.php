<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Gestion Matériels</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f4f7fb; color: #333; }
        header { background: #0066cc; color: #fff; padding: 20px 0; text-align: center; }
        .container { max-width: 960px; margin: 0 auto; padding: 30px 20px; }
        .hero { background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .hero h1 { margin-top: 0; }
        .features { display: grid; gap: 20px; margin-top: 20px; }
        .feature { background: #fff; border-radius: 8px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
        .feature h2 { margin-top: 0; font-size: 1.2rem; }
        footer { text-align: center; padding: 20px 0; color: #666; }
        a.button { display: inline-block; margin-top: 20px; padding: 12px 20px; background: #0066cc; color: white; text-decoration: none; border-radius: 6px; }
        a.button:hover { background: #0052a3; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Gestion Matériels</h1>
            <p>Suivi simple et efficace de votre parc matériel</p>
        </div>
    </header>

    <main class="container">
        <section class="hero">
            <h1>Bienvenue sur la page d'accueil</h1>
            <p>Cette application vous permet de gérer les matériels, les stocks et les demandes facilement. Accédez rapidement aux sections principales et suivez l'état de vos ressources en temps réel.</p>
            <a href="#services" class="button">Découvrir</a>
        </section>

        <section id="services" class="features">
            <div class="feature">
                <h2>Gestion des matériels</h2>
                <p>Ajoutez, modifiez et supprimez des matériels pour garder votre parc à jour.</p>
            </div>
            <div class="feature">
                <h2>Suivi des stocks</h2>
                <p>Visualisez les quantités disponibles et recevez des alertes lorsque le stock est bas.</p>
            </div>
            <div class="feature">
                <h2>Demandes et retours</h2>
                <p>Traitez rapidement les demandes de matériel et suivez les retours.</p>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>© 2026 Gestion Matériels. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
