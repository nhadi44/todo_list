<div class="taks_wrapper">
    <div class="container">
        <div class="d-flex align-items-center gap-3 mb-4">
            <a href="<?= PATH ?>/dashboard" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Back">
                <i class="bi bi-chevron-left"></i>
            </a>
            <h1 class="fw-bold fs-1">Activity Name</h1>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTaks">Create new taks</button>

        <div class="row mt-4">
            <div class="col-sm-12 col-md-2 col-lg-3 mb-4">
                <div class="card">
                    <h5 class="card-header bg-primary text-white">Taks Name</h5>
                    <form action="">
                        <div class="card-body">
                            <p class="card-text">
                                Taks Description
                            </p>
                            <div class="d-flex justify-content-end gap-2">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateTaks">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-success">Finished</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>