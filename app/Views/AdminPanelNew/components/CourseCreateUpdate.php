<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($course_id) && !empty($course_id)) ? "Update" : "Add" ?> Course</h5>
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
        <input type="hidden" name="course_id" id="course_id" value="<?= @$course_id ?>">
        <div class="mb-3">
            <label class="form-label">Course Code</label>
            <input type="text" id="course_code" name="course_code" class="form-control" placeholder="Course Code" value="<?= @$course_code ?>">
            <span class="error-message" id="error-course_code"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Course Name</label>
            <input type="text" name="course_name" id="course_name" class="form-control" placeholder="Course Name" value="<?= @$course_name ?>" />
            <span class="error-message" id="error-course_name"></span>
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