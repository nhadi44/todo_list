<div class="modal fade" id="deleteTaks" tabindex="-1" aria-labelledby="deleteTaksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="deleteTaksLabel">Delete Taks</h1>
            </div>
            <form id="deleteTaksForm">
                <div class="modal-body">
                    <input type="hidden" name="deleteTaksId" id="deleteTaksId">
                    <input type="hidden" name="deleteTaksActivityId" id="deleteTaksActivityId">
                    <p>Are you sure want to delete this taks <strong id="deleteTaksname"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" id="deleteTaksBtn">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>