    <nav class="<?= $data['url'] == 'home' ? 'bg-transparent position-fixed navbar-wrapper' : 'bg-dark position-fixed navbar-wrapper' ?>">
        <div class="container-fluid container-md d-flex justify-content-between align-items-center">
            <div class="navbar-brand">
                <a href="http://localhost/todo_list" class="text-decoration-none d-flex align-items-center gap-3">
                    <img src="<?= BASEURL ?>/icons/todolist.png" alt="todo-list" class="navbar_todo-icon">
                    <span class="text-white navbar_todo-title fw-semibold">Todo List App</span>
                </a>
            </div>
            <ul class="navbar-nav d-flex align-items-center flex-row gap-4">
                <?php if ($data['url'] == 'home') : ?>
                    <li class="nav-item text-white fw-semibold mobile_view" id="homeLink">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item text-white fw-semibold mobile_view">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item text-white fw-semibold mobile_view">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item navbar_sperator mobile_view"></li>
                <?php endif; ?>
                <li class="nav-item text-white fw-semibold">
                    <a href="<?= PATH ?>/signin" class="nav-link">Sign In</a>
                </li>
                <li class="nav-item text-white fw-semibold">
                    <a href="" class="btn btn-danger">
                        <?php if ($data['url'] == 'home') : ?>
                            Start for free
                        <?php else : ?>
                            Sign Up
                        <?php endif; ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>