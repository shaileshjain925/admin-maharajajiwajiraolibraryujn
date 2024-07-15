<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($faculty_id) && !empty($faculty_id)) ? "Update" : "Add" ?> Faculty</h5>
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
        <input type="hidden" name="faculty_id" id="faculty_id" value="<?= @$faculty_id ?>">
        <div class="mb-3">
            <label class="form-label">Faculty Name</label>
            <input type="text" name="faculty_name" id="faculty_name" class="form-control" placeholder="Enter Faculty Name" value="<?= @$faculty_name ?>" />
            <span class="error-message" id="error-faculty_name"></span>
        </div>
        <div class="mb-3">
            <img class="image-fluid" style="height:auto; width:100px" id="faculty_image_display" src="<?= base_url() ?>/<?= @$faculty_image ?>">
            <label class="form-label">Upload Faculty Image</label>
            <input type="hidden" id="faculty_image" name="faculty_image" value="<?= @$faculty_image ?>">
            <input type="file" id="file" name="file" placeholder="Upload Faculty Image" onchange="uploadImage('file', 'faculty', 'faculty_image', 'faculty_image_display')">
            <span class="error-message" id="error-faculty_image"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="faculty_gender" id="faculty_gender" placeholder="Select Gender">
                <option value="M" <?= (isset($faculty) && $faculty == 'M') ? "selected" : "" ?>>Male</option>
                <option value="F" <?= (isset($faculty) && $faculty == 'F') ? "selected" : "" ?>>Female</option>
                <option value="O" <?= (isset($faculty) && $faculty == 'O') ? "selected" : "" ?>>Third Gender</option>
            </select>
            <span class="error-message" id="error-faculty_gender"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Blood Group</label>
            <select name="faculty_blood_group" id="faculty_blood_group" placeholder="Select Blood Group">
                <option value='A+' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'A+') ? "selected" : "" ?>>A+</option>
                <option value='A-' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'A-') ? "selected" : "" ?>>A-</option>
                <option value='B+' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'B+') ? "selected" : "" ?>>B+</option>
                <option value='B-' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'B-') ? "selected" : "" ?>>B-</option>
                <option value='AB+' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'AB+') ? "selected" : "" ?>>AB+</option>
                <option value='AB-' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'AB-') ? "selected" : "" ?>>AB-</option>
                <option value='O+' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'O+') ? "selected" : "" ?>>O+</option>
                <option value='O-' <?= (isset($faculty_blood_group) && $faculty_blood_group == 'O-') ? "selected" : "" ?>>O-</option>
            </select>
            <span class="error-message" id="error-faculty_blood_group"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">University ID Number</label>
            <input type="text" name="university_id" id="university_id" class="form-control" placeholder="Enter University ID Number" value="<?= @$university_id ?>" />
            <span class="error-message" id="error-university_id"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input type="text" name="faculty_mobile" id="faculty_mobile" class="form-control" placeholder="Enter Mobile Number" value="<?= @$faculty_mobile ?>" />
            <span class="error-message" id="error-faculty_mobile"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="faculty_email" id="faculty_email" class="form-control" placeholder="Enter Email" value="<?= @$faculty_email ?>" />
            <span class="error-message" id="error-faculty_email"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Department</label>
            <select name="department_id" id="department_id" placeholder="Select Department">
            </select>
            <span class="error-message" id="error-department_id"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Department</label>
            <select name="designation_id" id="designation_id" placeholder="Select Designation">
            </select>
            <span class="error-message" id="error-designation_id"></span>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" <?= (isset($is_active) && $is_active == 1) ? "checked" : "" ?>>
            <label class="form-check-label" for="is_active">
                Is Active
            </label>
            <span class="error-message" id="error-is_active"></span>
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
<script>
    var selected_department_id = "<?= @$department_id ?>";
    var selected_designation_id = "<?= @$designation_id ?>";
</script>