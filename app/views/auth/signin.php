<div class="signin_wrapper">
    <div class="d-flex align-items-center mb-5 gap-3">
        <img src="<?= BASEURL ?>/icons/todolist.png" alt="todo-signin" class="signin_icon">
        <h1 class="signin_title">Sign in</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form id="signinForm">
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Your email</label>
                    <input type="email" class="form-control py-2" name="email" id="email" placeholder="Enter your email...">
            </div>
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Your password</label>
                    <input type="password" class="form-control py-2" name="password" id="password" placeholder="Enter your password...">
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 mb-4" id="btnSignin">Sign In</button>
                <a href="<?= PATH ?>/signup" class="text-decoration-none">
                    Don't have an account?
                </a>
            </form>
        </div>
    </div>
</div>