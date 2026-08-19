        <header class="topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="btn-toggle-sidebar" id="btnToggleSidebar" aria-label="Ouvrir le menu">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div>
                    <p class="topbar-title">Tableau de bord</p>
                    <p class="topbar-subtitle">Vue d'ensemble du parc matériel</p>
                </div>
            </div>

            <div class="dropdown">
                <button class="profile-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="profile-icon"><i class="fa-solid fa-user"></i></span>
                    <span class="profile-name-block text-start">
                        <span class="profile-name d-block">{{ auth()->user()->name ?? 'Utilisateur' }}</span>
                        <span
                            class="profile-role">{{ auth()->user()->role == 'user' ? 'Utilisateur' : 'Adminstrateur' }}</span>
                    </span>
                    <i class="fa-solid fa-chevron-down" style="font-size:.7rem; color:var(--ink-600);"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-profile">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fa-regular fa-user"></i> Mon profil
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                            <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
                        </a>
                    </li>
                </ul>
            </div>
        </header>
