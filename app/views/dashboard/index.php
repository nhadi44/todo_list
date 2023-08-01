<div class="dashboard_wrapper">
    <div class="container">
        <button id="testGetData">Get Data</button>
        <h1 class="fw-bold fs-1 mb-4">Activity</h1>
        <button type="button" data-bs-toggle="modal" data-bs-target="#createActivity" class="btn btn-primary">Add new activity</button>
        <div class="row mt-4">
            <div class="col-sm-12 col-md-2 col-lg-3 mb-4">
                <div class="card">
                    <h5 class="card-header bg-primary text-white">Activity Name</h5>
                    <div class="card-body">
                        <p class="card-text">Activity Description</p>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="<?= PATH ?>/taks" class="btn btn-primary">Taks</a>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateActivity">Edit</button>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>