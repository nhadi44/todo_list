<div class="sinup_wrapper">
    <div class="d-flex align-items-center mb-5 gap-3">
        <img src="<?= BASEURL ?>/icons/todolist.png" alt="todo-signin" class="sinup_icon">
        <h1 class="sinup_title">Sign Up</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Your email</label>
                    <input type="email" class="form-control py-2" name="email" id="email" placeholder="Enter your email...">
                </div>
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Your password</label>
                    <input type="email" class="form-control py-2" name="email" id="password" placeholder="Enter your password...">
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 mb-4">Sign In</button>
                <a href="<?= PATH ?>/signin" class="text-decoration-none">
                    Already have an account?
                </a>
            </form>
        </div>
    </div>
</div>