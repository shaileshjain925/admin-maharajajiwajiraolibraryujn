<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>
            Faculty
        </h4>

        <button class="btn btn-primary" onclick="editFaculty()" type="button" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
            <i class="bx bxs-user-plus"></i> Add Faculty
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table id="facultyTable" class="display table table-striped table-bordered mb-0"></table>
            </div>
        </div>
    </div>
</div>

<!-- Add Faculty form offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="RightSlideBox" aria-labelledby="RightSlideBoxLabel">

</div>
<script>
    var DeleteApiUrl = "<?= base_url(route_to('faculty_delete_api')) ?>"

    function successCallback(response) {
        if (response.status == 200 || response.status == 201) {
            $(".offcanvas button[data-bs-dismiss='offcanvas']").click();
            fetchTableData();
        }
    }

    function errorCallback(response) {
        console.log(response);
    }

    function deleteFaculty(faculty_id) {
        deleteRow({
                "faculty_id": faculty_id
            }).then((response) => {
                fetchTableData();
            })
            .catch((error) => {
                console.error("Deletion failed or cancelled:", error);
            });
    }

    function editFaculty(faculty_id = null) {
        $.ajax({
            type: "get",
            url: "<?= base_url(route_to("FacultyCreateUpdateComponent")) ?>" + (faculty_id ? "/" + faculty_id : ""),
            success: function(response) {
                $("#RightSlideBox").html("");
                $("#RightSlideBox").html(response);
                $('#faculty_gender').selectize({});
                $('#faculty_blood_group').selectize({});
                initializeSelectize('department_id', {}, "<?= base_url(route_to('department_list_api')) ?>", {}, "department_id", "department_name", selected_department_id)
                initializeSelectize('designation_id', {}, "<?= base_url(route_to('designation_list_api')) ?>", {}, "designation_id", "designation_name", selected_designation_id)
            }
        });
    }

    function successDataTableCallbackFunction(response) {
        var columns = [{
                title: "ID",
                data: "faculty_id"
            },
            {
                title: "Faculty Name",
                data: "faculty_name"
            },
            {
                title: "Image",
                data: 'faculty_image',
                render: function(data, type, row) {
                    return `
                       <img class="image-fluid" style="height:auto; width:100px" src="<?= base_url() ?>/${data}">     
                        `;
                }
            },
            {
                title: "Gender",
                data: "faculty_gender"
            },
            {
                title: "Blood Group",
                data: "faculty_blood_group"
            },
            {
                title: "University ID",
                data: "university_id"
            },
            {
                title: "Mobile",
                data: "faculty_mobile"
            },
            {
                title: "Email",
                data: "faculty_email"
            },
            {
                title: "Department",
                data: "department_name"
            },
            {
                title: "Designation",
                data: "designation_name"
            },
            {
                title: "Is Active",
                data: "is_active"
            },
            {
                "title": "Actions",
                "data": null,
                "render": function(data, type, row) {
                    return `
                            <button class="btn btn-sm btn-info" onclick="editFaculty(${row.faculty_id})" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
                                <i class="bx bx-edit-alt"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteFaculty(${row.faculty_id})">
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
            'facultyTable', // table_id
            "<?= base_url(route_to('faculty_list_api')) ?>", // url
            'POST', // method
            parameter, // parameter
            successDataTableCallbackFunction // dataTableSuccessCallBack
        );
    }
    $(document).ready(function() {
        fetchTableData();
    });
</script>