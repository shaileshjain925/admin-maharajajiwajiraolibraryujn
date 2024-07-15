<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($department_id) && !empty($department_id)) ? "Update" : "Add" ?> Department</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <div class="error-message-box d-none">
        <p id="error-message"></p>
    </div>
    <div class="success-message-box d-none">
        <p id="success-message"></p>
    </div>
    <form id="form" method="POST" enctype="multipart/form-data" action="<?= @$ApiUrl ?>">
        <input type="hidden" name="department_id" id="department_id" value="<?= @$department_id ?>">
        <div class="mb-3">
            <label class="form-label">Department Code</label>
            <input type="text" id="department_code" name="department_code" class="form-control" placeholder="Department Code" value="<?= @$department_code ?>">
            <span class="error-message" id="error-department_code"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Department Name</label>
            <input type="text" name="department_name" id="department_name" class="form-control" placeholder="Department Name" value="<?= @$department_name ?>" />
            <span class="error-message" id="error-department_name"></span>
        </div>
        <div>
            <div>
                <button type="button" onclick="submitFormWithAjax('form',true,false,successCallback,errorCallback)" class="btn btn-primary waves-effect waves-light me-1">
                    Submit
                </button>
                <button type="reset" class="btn btn-secondary waves-effect">
                    Cancel
                </button>
            </div>
        </div>
    </form>
</div>