<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>
            Student
        </h4>

        <button class="btn btn-primary" onclick="editStudent()" type="button" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
            <i class="bx bxs-user-plus"></i> Add Student
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table id="studentTable" class="display table table-striped table-bordered mb-0"></table>
            </div>
        </div>
    </div>
</div>

<!-- Add Student form offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="RightSlideBox" aria-labelledby="RightSlideBoxLabel" style="width:500px !important">

</div>
<script>
    var DeleteApiUrl = "<?= base_url(route_to('student_delete_api')) ?>"

    function successCallback(response) {
        if (response.status == 200 || response.status == 201) {
                $(".offcanvas button[data-bs-dismiss='offcanvas']").click();
            fetchTableData();
        }
    }

    function errorCallback(response) {
        console.log(response);
    }

    function deleteStudent(student_id) {
        deleteRow({
                "student_id": student_id
            }).then((response) => {
                fetchTableData();
            })
            .catch((error) => {
                console.error("Deletion failed or cancelled:", error);
            });
    }

    function editStudent(student_id = null) {
        $.ajax({
            type: "get",
            url: "<?= base_url(route_to("StudentCreateUpdateComponent")) ?>" + (student_id ? "/" + student_id : ""),
            success: function(response) {
                $("#RightSlideBox").html("");
                $("#RightSlideBox").html(response);
                $("#student_gender").selectize({});
                $("#student_cast_category").selectize({});
                initializeSelectize('course_id', {placeholder:"Select Course"}, "<?= base_url(route_to('course_list_api')) ?>", {}, "course_id", "course_name", selected_course_id)
                initializeSelectize('subject_id', {placeholder:"Select Subject"}, "<?= base_url(route_to('subject_list_api')) ?>", {}, "subject_id", "subject_name", selected_subject_id)
                initializeSelectize('department_id', {placeholder:"Select Department"}, "<?= base_url(route_to('department_list_api')) ?>", {}, "department_id", "department_name", selected_department_id)
            }
        });
    }

    function successDataTableCallbackFunction(response) {
        var columns = [
            {
                title: "ID",
                data: "student_id"
            },
            {
                title: "Student Name",
                data: "student_name"
            },
            {
                title: "Course",
                data: "course_name"
            },
            {
                title: "Subject",
                data: "subject_name"
            },
            {
                title: "Department",
                data: "department_name"
            },
            {
                "title": "Actions",
                "data": null,
                "render": function(data, type, row) {
                    return `
                            <button class="btn btn-sm btn-info" onclick="editStudent(${row.student_id})" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
                                <i class="bx bx-edit-alt"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteStudent(${row.student_id})">
                                <i class="bx bx-trash-alt"></i>
                            </button>
                        `;
                }
            }
        ];

        if (response.status == 200) {
            return {
                "status": response.status,
                "columns": columns,
                "data": JSON.parse(response.data)
            };
        } else {
            return {
                "status": response.status,
                "columns": columns,
                "data": {}
            };
        }
    }

    function fetchTableData(parameter = {}) {
        parameter._autojoin = "Y";
        parameter._select = "*";
        DataTableInitialized(
            'studentTable', // table_id
            "<?= base_url(route_to('student_list_api')) ?>", // url
            'POST', // method
            parameter, // parameter
            successDataTableCallbackFunction // dataTableSuccessCallBack
        );
    }
    $(document).ready(function() {
        fetchTableData();
    });
</script>