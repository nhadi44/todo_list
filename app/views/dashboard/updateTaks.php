<div class="modal fade" id="updateTaks" tabindex="-1" aria-labelledby="updateTaksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 text-dark" id="updateTaksLabel">Update Taks</h1>
            </div>
            <form id="updateTaksForm">
                <div class="modal-body">
                    <input type="hidden" name="updateTaksId" id="updateTaksId">
                    <input type="hidden" name="updateTaksActivityId" id="updateTaksActivityId">
                    <div class="form-group mb-3">
                        <label for="taks" class="form-label">Taks</label>
                        <input type="text" class="form-control" name="taks" id="updateTaksInput" placeholder="Your taks...">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="updateTaksDescription" id="updateTaksDescription" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select name="updateTaksPriority" id="updateTaksPriority" class="form-select">
                            <option value="1">Very High</option>
                            <option value="2">High</option>
                            <option value="3">Medium</option>
                            <option value="4">Low</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning" id="updateTaksButton">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>