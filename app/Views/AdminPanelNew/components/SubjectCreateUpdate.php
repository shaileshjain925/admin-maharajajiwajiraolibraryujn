<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($subject_id) && !empty($subject_id)) ? "Update" : "Add" ?> Subject</h5>
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
        <input type="hidden" name="subject_id" id="subject_id" value="<?= @$subject_id ?>">
        <div class="mb-3">
            <label class="form-label">Subject Code</label>
            <input type="text" id="subject_code" name="subject_code" class="form-control" placeholder="Subject Code" value="<?= @$subject_code ?>">
            <span class="error-message" id="error-subject_code"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Subject Name</label>
            <input type="text" name="subject_name" id="subject_name" class="form-control" placeholder="Subject Name" value="<?= @$subject_name ?>" />
            <span class="error-message" id="error-subject_name"></span>
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