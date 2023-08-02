<div class="taks_wrapper">
    <div class="container">
        <div class="d-flex align-items-center gap-3 mb-4">
            <a href="<?= PATH ?>/dashboard" class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Back">
                <i class="bi bi-chevron-left"></i>
            </a>
            <h1 class="fw-bold fs-1"><?= $data['activityName']['name'] ?></h1>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTaks">Create new taks</button>

        <div class="row mt-4">
            <?php if ($data['taks']) : ?>
                <?php foreach ($data['taks'] as $taks) : ?>
                    <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                        <div class="card">
                            <h5 class="card-header bg-primary text-white"><?= $taks['name'] ?></h5>
                            <form action="">
                                <div class="card-body">
                                    <p class="card-text">
                                        <?= $taks['description'] ?>
                                    </p>
                                    <div class="d-flex justify-content-end gap-2">
                                        <?php if ($taks['is_finished'] == 1) : ?>
                                            <button class="btn btn-success" type="button" id="finishedTaksBtn" data-bs-toggle="modal" data-bs-target="#finishedTaks" data-id="<?= $taks['id'] ?>">Finished</button>
                                        <?php else : ?>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateTaks" data-id="<?= $taks['id'] ?>">
                                                Edit
                                            </button>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTaks" data-id="<?= $taks['id'] ?>">Delete</button>

                                            <button class="btn btn-success" type="button" id="finishedTaksBtn" data-bs-toggle="modal" data-bs-target="#finishedTaks" data-id="<?= $taks['id'] ?>">Finish</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="text-muted">
                    <h1>No Record Found</h1>
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>