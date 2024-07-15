<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="RightSlideBoxLabel"><?= (isset($student_id) && !empty($student_id)) ? "Update" : "Add" ?> Role User</h5>
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
        <input type="hidden" name="student_id" id="student_id" value="<?= @$student_id ?>">
        <div class="mb-3">
            <label class="form-label">Student Name</label>
            <input type="text" id="student_name" name="student_name" class="form-control" placeholder="Student Name" value="<?= @$student_name ?>">
            <span class="error-message" id="error-student_name"></span>
        </div>
        <div class="mb-3">
            <img class="image-fluid" style="height:auto; width:100px" id="student_image_display" src="<?= base_url() ?>/<?= @$student_image ?>">
            <label class="form-label">Upload Faculty Image</label>
            <input type="hidden" id="student_image" name="student_image" value="<?= @$student_image ?>">
            <input type="file" id="file" name="file" placeholder="Upload Faculty Image" onchange="uploadImage('file', 'student', 'student_image', 'student_image_display')">
            <span class="error-message" id="error-student_image"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter Address"><?= @$address ?></textarea>
            <span class="error-message" id="error-address"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Gender</label>
            <select name="student_gender" id="student_gender">
                <option value="M" <?=(isset($student_gender) && $student_gender == 'M')?"selected":""?>>Male</option>
                <option value="F" <?=(isset($student_gender) && $student_gender == 'F')?"selected":""?>>Female</option>
                <option value="T" <?=(isset($student_gender) && $student_gender == 'T')?"selected":""?>>Third Gender</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="student_email" id="student_email" type="email" class="form-control" placeholder="Enter Email" value="<?= @$student_email ?>" />
            <span class="error-message" id="error-student_email"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Mobile Number</label>
            <input name="student_mobile" id="student_mobile" type="text" class="form-control" placeholder="Enter Mobile numbers" value="<?= @$student_mobile ?>" />
            <span class="error-message" id="error-student_mobile"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Admission Date</label>
            <input name="student_admission_date" id="student_admission_date" type="date" class="form-control" placeholder="Enter Admission Date" value="<?= @$student_admission_date ?>" />
            <span class="error-message" id="error-student_admission_date"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Admission Closing Date</label>
            <input name="student_admission_closing_date" id="student_admission_closing_date" type="date" class="form-control" placeholder="Enter Admission Closing Date" value="<?= @$student_admission_closing_date ?>" />
            <span class="error-message" id="error-student_admission_closing_date"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Father Name</label>
            <input name="student_father_name" id="student_father_name" type="text" class="form-control" placeholder="Enter Father Name" value="<?= @$student_father_name ?>" />
            <span class="error-message" id="error-student_father_name"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Mother Name</label>
            <input name="student_mother_name" id="student_mother_name" type="text" class="form-control" placeholder="Enter Mother Name" value="<?= @$student_mother_name ?>" />
            <span class="error-message" id="error-student_mother_name"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Cast Category</label>
            <select name="student_cast_category" id="student_cast_category">
                <option value="UR" <?=(isset($student_cast_category) && $student_cast_category == 'UR')?"selected":""?>>UR</option>
                <option value="OBC" <?=(isset($student_cast_category) && $student_cast_category == 'F')?"selected":""?>>OBC</option>
                <option value="SC" <?=(isset($student_cast_category) && $student_cast_category == 'SC')?"selected":""?>>SC</option>
                <option value="ST" <?=(isset($student_cast_category) && $student_cast_category == 'ST')?"selected":""?>>ST</option>
            </select>
            <span class="error-message" id="error-student_cast_category"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Course</label>
            <select name="course_id" id="course_id">
            </select>
            <span class="error-message" id="error-course_id"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Subject</label>
            <select name="subject_id" id="subject_id">
            </select>
            <span class="error-message" id="error-subject_id"></span>
        </div>
        <div class="mb-3">
            <label class="form-label">Department</label>
            <select name="department_id" id="department_id">
            </select>
            <span class="error-message" id="error-department_id"></span>
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
    var selected_course_id = "<?=@$course_id?>";
    var selected_subject_id = "<?=@$subject_id?>";
    var selected_department_id = "<?=@$department_id?>";
</script>