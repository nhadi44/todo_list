<div class="modal fade" id="createTaks" tabindex="-1" aria-labelledby="createTaksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h1 class="modal-title fs-5 text-white" id="createTaksLabel">Add Taks</h1>
            </div>
            <form id="createFormTaks">
                <div class="modal-body">
                    <input type="hidden" name="activityId" id="activityId" value="<?= $data['activityName']['id'] ?>">
                    <div class="form-group mb-3">
                        <label for="taks" class="form-label">Taks</label>
                        <input type="text" class="form-control" name="taks" id="taks" placeholder="Your taks...">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="priority" class="form-label">Priority</label>
                        <select name="priority" id="priority" class="form-select">
                            <option selected disabled> Select taks priority</option>
                            <option value="1">Very High</option>
                            <option value="2">High</option>
                            <option value="3">Medium</option>
                            <option value="4">Low</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="createTaksBtn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>