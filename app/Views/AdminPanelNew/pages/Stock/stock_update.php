<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>
            Stock
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="table-responsive">
                <table id="stockTable" class="display table table-striped table-bordered mb-0"></table>
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


    function updateQuantity(stock_id, variant_id, size_id) {
        var quantity = $(`#quantity_${variant_id}-${size_id}`).val();
        var url = "";
        if (stock_id == null) {
            url = "<?= base_url(route_to('stock_create_api')) ?>";
        } else {
            url = "<?= base_url(route_to('stock_update_api')) ?>";
        }
        $.ajax({
            type: "post",
            url: url,
            data: {
                stock_id: stock_id,
                variant_id: variant_id,
                size_id: size_id,
                quantity: quantity
            },
            success: function(response) {
                if (response.status == 201 || response.status == 200) {
                    toastr.success("Stock Update Successfully");
                    fetchTableData();
                } else {
                    response.error(response.message);
                    fetchTableData();
                }
            },
            error: function(error) {
                console.error('Error updating quantity:', error);
                alert('An error occurred while updating quantity.');
            }
        });
    }

    function successDataTableCallbackFunction(response) {
        var columns = [{
                title: "ID",
                data: "stock_id"
            },
            {
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
                title: "Size",
                data: "size_name"
            },
            {
                title: "Qty",
                data: null,
                render: function(data, type, row) {
                    return `<input type="number" class="form-control" id="quantity_${row.variant_id}-${row.size_id}" value="${row.quantity}">`;
                }
            },

            {
                "title": "Actions",
                "data": null,
                "render": function(data, type, row) {
                    return `
            <button class="btn btn-sm btn-info" onclick="updateQuantity(${row.stock_id},${row.variant_id},${row.size_id})">
                <i class="fa fa-check"></i>
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
            'stockTable', // table_id
            "<?= base_url(route_to('ProductWiseStockList')) ?>", // url
            'POST', // method
            parameter, // parameter
            successDataTableCallbackFunction // dataTableSuccessCallBack
        );
    }
    $(document).ready(function() {
        fetchTableData();

    });
</script>