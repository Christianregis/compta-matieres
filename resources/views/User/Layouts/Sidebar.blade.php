    <aside class="sidebar" id="sidebar">
        <div class="sidebar-brand">
            <span class="sidebar-brand-mark">CM</span>
            <span class="sidebar-brand-text">
                Comptabilité-Matières
                <small>Faculté des Sciences</small>
            </span>
        </div>

        <nav class="sidebar-nav">
            <p class="sidebar-section-title">Gestion des stocks</p>
            <a href="{{ route('user.dashboard') }}" class="sidebar-link active">
                <i class="fa-solid fa-gauge"></i> Dashboard
            </a>
            <a href="{{ route('user.items.show') }}" class="sidebar-link">
                <i class="fa-solid fa-boxes-stacked"></i> Matériels
            </a>
            <a href="{{ route('user.category.show') }}" class="sidebar-link">
                <i class="fa-solid fa-tags"></i> Catégories
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-circle-check"></i> Statuts
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-right-left"></i> Mouvements
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-chart-column"></i> Rapports
            </a>

            <p class="sidebar-section-title">Administration</p>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-user-shield"></i> Utilisateurs
            </a>
            <a href="#" class="sidebar-link">
                <i class="fa-solid fa-sliders"></i> Paramètres
            </a>
        </nav>

        <div class="sidebar-footer">
            © {{ date('Y') }} GID - Université de Douala
        </div>
    </aside>
