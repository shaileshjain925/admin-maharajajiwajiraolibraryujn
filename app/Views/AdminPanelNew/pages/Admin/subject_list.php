<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>
            Subject
        </h4>

        <button class="btn btn-primary" onclick="editSubject()" type="button" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
            <i class="bx bxs-user-plus"></i> Add Subject
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table id="subjectTable" class="display table table-striped table-bordered mb-0"></table>
            </div>
        </div>
    </div>
</div>

<!-- Add Subject form offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="RightSlideBox" aria-labelledby="RightSlideBoxLabel">

</div>
<script>
    var DeleteApiUrl = "<?= base_url(route_to('subject_delete_api')) ?>"

    function successCallback(response) {
        if (response.status == 200 || response.status == 201) {
                $(".offcanvas button[data-bs-dismiss='offcanvas']").click();
            fetchTableData();
        }
    }

    function errorCallback(response) {
        console.log(response);
    }

    function deleteSubject(subject_id) {
        deleteRow({
                "subject_id": subject_id
            }).then((response) => {
                fetchTableData();
            })
            .catch((error) => {
                console.error("Deletion failed or cancelled:", error);
            });
    }

    function editSubject(subject_id = null) {
        $.ajax({
            type: "get",
            url: "<?= base_url(route_to("SubjectCreateUpdateComponent")) ?>" + (subject_id ? "/" + subject_id : ""),
            success: function(response) {
                $("#RightSlideBox").html("");
                $("#RightSlideBox").html(response);
            }
        });
    }

    function successDataTableCallbackFunction(response) {
        var columns = [{
                title: "Subject ID",
                data: "subject_id"
            },
            {
                title: "Subject Code",
                data: "subject_code"
            },
            {
                title: "Subject Name",
                data: "subject_name"
            },
            {
                "title": "Actions",
                "data": null,
                "render": function(data, type, row) {
                    return `
                            <button class="btn btn-sm btn-info" onclick="editSubject(${row.subject_id})" data-bs-toggle="offcanvas" data-bs-target="#RightSlideBox" aria-controls="RightSlideBox">
                                <i class="bx bx-edit-alt"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" onclick="deleteSubject(${row.subject_id})">
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
        DataTableInitialized(
            'subjectTable', // table_id
            "<?= base_url(route_to('subject_list_api')) ?>", // url
            'POST', // method
            parameter, // parameter
            successDataTableCallbackFunction // dataTableSuccessCallBack
        );
    }
    $(document).ready(function() {
        fetchTableData();
    });
</script>