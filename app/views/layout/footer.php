<footer class="footer_wrapper">
    <div class="container">
        <div class="row border-bottom border-light pb-4">
            <div class="footer_left-content col-md-9 col-sm-12">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="<?= BASEURL ?>/icons/todolist.png" alt="footer-todo-list" class="footer_icon">
                    <span class="footer_title fw-semibold">
                        Todo List App
                    </span>
                </div>
                <p class="footer_description">Join Millions of people who organize work and life with Todo List.</p>
            </div>

            <!-- create condition if url taks/* then add class d-none -->
            <div class="<?php echo $data['class'] ?>">
                <div class="footer_wrapper-menu">
                    <div>
                        <h6 class="footer_menu-title">Menu</h6>
                        <ul class="footer_menu">
                            <?php if ($data['url'] == 'home') : ?>
                                <li class="footer_menu-item" id="home-footer">
                                    <a>Home</a>
                                </li>
                            <?php else : ?>
                                <li class="footer_menu-item">
                                    <a href="<?= PATH ?>/">Home</a>
                                </li>
                            <?php endif; ?>

                            <?php if ($data['url'] == 'home') : ?>
                                <li class="footer_menu-item" id="about-footer">
                                    <a href="#about">About</a>
                                </li>
                                <li class="footer_menu-item" id="features-footer">
                                    <a href="#features">Features</a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <div>
                        <h6 class="footer_menu-title">Join Us</h6>
                        <ul class="footer_menu">
                            <li class="footer_menu-item">
                                <a href="<?= PATH ?>/signin">Sign in</a>
                            </li>
                            <li class="footer_menu-item">
                                <a href="<?= PATH ?>/signup">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center fw-bold">
                <span>&copy; <?php echo $data['year'] ?> Todo List App. All rights reserved </span>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="<?= BASEURL ?>/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<script src="<?= BASEURL ?>/js/custom/navbar.js"></script>
<script src="<?= BASEURL ?>/js/custom/footer.js"></script>
<script src="<?= BASEURL ?>/js/custom/tooltip.js"></script>
<script src="<?= BASEURL ?>/js/custom/modal.js"></script>
<script src="<?= BASEURL ?>/js/custom/dashboard/get-data.js"></script>

</body>

</html>