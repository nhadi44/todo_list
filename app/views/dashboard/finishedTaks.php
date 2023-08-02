<div class="modal fade" id="finishedTaks" tabindex="-1" aria-labelledby="finishedTaksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h1 class="modal-title fs-5 text-white" id="finishedTaksLabel">Finish Taks</h1>
            </div>
            <form id="finishedTaksForm">
                <div class="modal-body">
                    <input type="hidden" name="finishedTaksId" id="finishedTaksId">
                    <input type="hidden" name="finishedTaksActivityId" id="finishedTaksActivityId">
                    <p>Are you sure want to end this taks <strong id="finishedTaksname"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-success" id="finishedTaksBtn">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>