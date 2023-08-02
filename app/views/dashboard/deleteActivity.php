<div class="modal fade" id="deleteActivity" tabindex="-1" aria-labelledby="deleteActivityLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="deleteActivityLabel">Delete Activity</h1>
            </div>
            <form>
                <div class="modal-body">
                    <input type="hidden" name="deleteActivityId" id="deleteActivityId">
                    <p>
                        Are you sure want to delete <strong id="deleteActivityName"></strong> ?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>