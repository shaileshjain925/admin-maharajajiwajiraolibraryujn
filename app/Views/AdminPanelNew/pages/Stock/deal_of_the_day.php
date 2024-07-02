<style>
    .tooltip-inner {
        text-align: left;
        width: 500px;
        background-color: white;
        color: black;
        overflow-x: hidden;
        overflow-y: hidden;
    }

    .custom-tooltip {
        width: 500px;
    }
</style>
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>
            Deals of the day
        </h4>
        <div class="col-md-2">
            <label for="color">Brand</label>
            <select id="brand_id" name="brand_id"></select>
        </div>
        <div class="col-md-2">
            <label for="color">Category Type</label>
            <select id="category_type_id" name="category_type_id"></select>
        </div>
        <div class="col-md-2">
            <label for="color">Category</label>
            <select id="category_id" name="category_id"></select>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table id="dealsTable" class="display table table-striped table-bordered mb-0 table-sm"></table>
            </div>
        </div>
    </div>
</div>

</div>


<script>
    function successCallback(response) {
        if (response.status == 200 || response.status == 201) {
            fetchTableData();
        }
    }

    function errorCallback(response) {
        console.log(response);
    }


    function updateDiscount(deals_of_the_day_id, variant_id, selling_price) {
        var discount = parseFloat($(`#discount_${variant_id}`).val());
        var from_date = $(`#from_date_${variant_id}`).val();
        var to_date = $(`#to_date_${variant_id}`).val();


        var url = deals_of_the_day_id == null ?
            "<?= base_url(route_to('deals_create_api')) ?>" :
            "<?= base_url(route_to('deals_update_api')) ?>";

        $.ajax({
            type: "POST",
            url: url,
            data: {
                deals_of_the_day_id: deals_of_the_day_id,
                variant_id: variant_id,
                discount: discount,
                from_date: from_date,
                to_date: to_date
            },
            success: function(response) {
                if (response.status === 201 || response.status === 200) {
                    toastr.success("Discount updated successfully");
                    fetchTableData();
                } else if (response.status == 422) {
                    $.each(response.errors, function(key, value) {
                        toastr.error(value);
                    });
                } else {
                    toastr.error(response.message);
                    fetchTableData();
                }
            },
            error: function(error) {
                console.error('Error updating discount:', error);
                alert('An error occurred while updating the discount.');
            }
        });
    }

    function successDataTableCallbackFunction(response) {
        var columns = [{
                title: "SKU Code",
                data: "variant_sku_code"
            },
            {
                title: "Product Name",
                data: "product_name"
            },
            {
                title: "Variant Name",
                data: "variant_name"
            },
            {
                title: "Stock",
                data: "quantity"
            },
            {
                title: "Sale Price",
                data: "selling_price",
                render: function(data, type, row) {
                    var tooltipContent = `
<pre>
Purchase Rate   ${row.purchase_rate}
M.R.P           ${row.mrp}
Dis %           ${row.discount_per}
Dis Amt         ${row.discount_amt}
Sch %           ${row.discount}
Sch Amt         ${row.discount_deal_amt}
Selling Price   ${row.selling_price}
<hr>
<b>GST Inclusive</b>
GST %           ${row.gst_per}
GST Amt         ${row.gst_amt}
Cost Amt        ${row.cost_price}
Profit %        ${row.profit_per}
Profit Amt      ${row.profit_amt}
</pre>
`;

                    // Return a button with tooltip or popover setup
                    return `
            <button class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-html="true" title="${tooltipContent}">
                ${row.selling_price}
            </button>
        `;
                }
            },
            {
                title: "Date Range",
                data: null,
                render: function(data, type, row) {
                    row.from_date = row.from_date ?? '';
                    row.to_date = row.to_date ?? '';
                    return `
            <input type="date" class="form-control form-control-sm datepicker" title="From Date" id="from_date_${row.variant_id}" value="${row.from_date}" style="width: 120px; margin-right: 5px;">
            <input type="date" class="form-control form-control-sm datepicker" title="To Date" id="to_date_${row.variant_id}" value="${row.to_date}" style="width: 120px;">
        `;
                }
            },

            {
                title: "Dis%",
                data: null,
                render: function(data, type, row) {
                    return `<input style="max-width:60px" type="number" class="form-control form-control-sm" id="discount_${row.variant_id}" value="${row.discount}">`;
                }
            },
            {
                "title": "Actions",
                "data": null,
                "render": function(data, type, row) {
                    return `
            <button class="btn btn-sm btn-info" onclick="updateDiscount(${row.deals_of_the_day_id},${row.variant_id})">
                <i class="fa fa-check"></i>
            </button>
        `;
                }
            },
            {
                "title": "Profit %",
                "data": 'profit_per',
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

    function tooltip() {
        $('[data-bs-toggle="tooltip"]').tooltip({
            html: true // Enable HTML in the tooltip content
        });
    }

    function afterTableView(data) {
        tooltip();
    }

    function fetchTableData(parameter = {}) {
        var brand_id = $('#brand_id').val();
        var category_type_id = $('#category_type_id').val();
        var category_id = $('#category_id').val();

        parameter.brand_id = brand_id;
        parameter.category_type_id = category_type_id;
        parameter.category_id = category_id;

        DataTableInitialized(
            'dealsTable', // table_id
            "<?= base_url(route_to('ProductDealOfTheDayList')) ?>", // url
            'POST', // method
            parameter, // parameter
            successDataTableCallbackFunction, // dataTableSuccessCallBack,
            {},
            afterTableView
        );
    }
    var filters = {};

    $(document).ready(function() {
        fetchTableData();
        initializeSelectize('brand_id', {
            placeholder: "Brand"
        }, "<?= base_url(route_to('brand_list_api')) ?>", {}, "brand_id", "brand_name").onchange(function(brand_id) {
            filters.brand_id = brand_id;
            fetchTableData(filters);
        });
        initializeSelectize('category_type_id', {
            placeholder: "Category Type"
        }, "<?= base_url(route_to('categoryType_list_api')) ?>", {}, "category_type_id", "category_type_name").onchange(function(category_type_id) {
            filters.category_type_id = category_type_id;
            fetchTableData(filters);
        });
        initializeSelectize('category_id', {
            placeholder: "Category"
        }, "<?= base_url(route_to('category_list_api')) ?>", {}, "category_id", "category_name").onchange(function(category_id) {
            filters.category_id = category_id;
            fetchTableData(filters);
        });
    });
</script>