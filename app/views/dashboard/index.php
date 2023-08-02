<div class="dashboard_wrapper">
    <div class="container">
        <h1 class="fw-bold fs-1 mb-4">Activity</h1>
        <button type="button" data-bs-toggle="modal" data-bs-target="#createActivity" class="btn btn-primary">Add new activity</button>
        <div class="row mt-4">
            <?php if ($data['activity']) : ?>
                <?php foreach ($data['activity'] as $activity) : ?>
                    <div class="col-sm-12 col-md-6  col-lg-6 col-xl-4 mb-4">
                        <div class="card">
                            <h5 class="card-header bg-primary text-white"><?= $activity['name'] ?></h5>
                            <div class="card-body">

                                <p class="card-text mb-4">
                                    <?= $activity['description'] ?>
                                </p>

                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <small class="text-muted d-flex flex-column">
                                        <span>Create at</span>
                                        <?= $activity['created_at'] ?>
                                    </small>

                                    <small class="text-muted d-flex flex-column">
                                        <span>Update at</span>
                                        <?= $activity['update_at'] ?>
                                    </small>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <a href="<?= PATH ?>/taks/<?= $activity['id'] ?>" class="btn btn-primary">Taks</a>

                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateActivity" id="updateActivityBtn" data-id="<?= $activity['id'] ?>">Edit</button>

                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteActivity" data-id="<?= $activity['id'] ?>
                                " data-name="<?= $activity['name'] ?>">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="text-muted vh-100">
                    <h1>No Activity</h1>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>