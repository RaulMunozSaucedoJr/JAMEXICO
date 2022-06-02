<nav class="navbar navbar-expand-lg px-4 sticky-top">
    <div class="d-flex align-items-center">
        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
        <h2 class="text-white fs-2 m-0">Panel de Administración</h2>
    </div>

    <button class="navbar-toggler" type="button" id="colapsar_mostrar_menu" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php echo htmlspecialchars($_SESSION["username"]); ?>
                    <i class="fas fa-user me-2"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" id="profile_dropdown" href="/src/layout/components/pages/profiles/applicants_profile.php">Perfil</a></li>
                    <li><a class="dropdown-item" id="profile_logout" href="/src/backend/controller/logout.php">Salir</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>