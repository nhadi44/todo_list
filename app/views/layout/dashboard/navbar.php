<nav class="dashbaoard_navbar position-fixed bg-dark w-100 py-4 z-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= PATH ?>/dashboard" class="text-white d-flex align-items-center gap-3 text-decoration-none">
                <img src="<?= BASEURL ?>/icons/todolist.png" alt="todo-list-dashboard" class="navbar_dashboard-icon">
                <span>Todo List Dashboard</span>
            </a>
            <ul class="navbar-nav text-white">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if (isset($_SESSION['user'])) : ?>
                            <?= $_SESSION['user']['email'] ?>
                        <?php else : ?>
                            User
                        <?php endif; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Change Password</a></li>
                        <li><a class="dropdown-item" href="<?= PATH ?>/signin/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>