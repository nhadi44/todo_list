<div class="modal fade" id="createActivity" tabindex="-1" aria-labelledby="createActivityLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="createActivityLabel">Add Activity</h1>
            </div>
            <form id="createActivityForm">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="activity" class="form-label">Activity</label>
                        <input type="text" class="form-control" name="activity" id="activity" placeholder="Your activity...">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Your description..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btnCreateActivity">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>