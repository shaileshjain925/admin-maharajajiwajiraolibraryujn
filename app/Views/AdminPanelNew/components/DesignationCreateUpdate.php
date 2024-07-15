<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($designation_id) && !empty($designation_id)) ? "Update" : "Add" ?> Designation</h5>
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
        <input type="hidden" name="designation_id" id="designation_id" value="<?= @$designation_id ?>">
        <div class="mb-3">
            <label class="form-label">Designation Name</label>
            <input type="text" name="designation_name" id="designation_name" class="form-control" placeholder="Designation Name" value="<?= @$designation_name ?>" />
            <span class="error-message" id="error-designation_name"></span>
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