<div class="modal fade" id="updateActivity" tabindex="-1" aria-labelledby="updateActivityLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 text-dark" id="updateActivityLabel">Update Activity</h1>
            </div>
            <form>
                <div class="modal-body">
                    <input type="hidden" name="updateActivityId" id="updateActivityId">
                    <div class="form-group mb-3">
                        <label for="activity" class="form-label">Activity</label>
                        <input type="text" class="form-control" name="activity" id="updateActivityInput" placeholder="Your activity...">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="updateActivityDescription" id="updateActivityDescription" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>