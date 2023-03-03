<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <a href="<?php echo base_url() . '/Product/addProductView'; ?>" class="btn btn-sm shadow-sm mb-3" style="background-color: #0F52BA; color: #fff8e7;">Add Product</a>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="table" width="100%" cellspacing="0" style="margin: 0 auto;">
                <thead>
                    <tr style="text-align: center;">
                        <th style="text-align: center;">No.</th>
                        <th style="text-align: center;">Product Name</th>
                        <th style="text-align: center;">Category</th>
                        <th style="text-align: center;">Price</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                    <thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($product as $product) : ?>
                            <?php
                            if ($product['IsDeleted'] == 0) {
                            ?>
                                <tr>

                                    <td><?= $i++; ?></td>
                                    <td><?= $product['ProductName']; ?></td>
                                    <td><?= $product['Category']; ?></td>
                                    <td><?= $product['Price']; ?></td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        <!-- <a href="" class="btn btn-primary">Detail</a> -->
                                        <a href="viewData(<?php echo (int)$product['ProductID'] ?>)" class="btn" style="background-color: #ff5349; color: #FFFFFF;" data-toggle="modal" data-target="#modal-edit" onclick="viewData(<?php echo (int)$product['ProductID'] ?>)">Change</a>
                                        <a href="<?php echo base_url() . '/Product/delete?id=' . $product['ProductID']; ?>" class="btn" style="background-color: #3A6B35; color: #FFFFFF;">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url() . 'index.php/product/edit' ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <input type="hidden" id="product_id" name="ProductID" value="">
                            <div class="form-group mb-3 w-50">
                                <label>Product Name</label>
                                <input type="text" id="product" name="ProductName" class="form-control">
                                <p class="error-label mb-0 d-none text-danger">Product name cannot be empty</p>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="form-group mb-3 w-50">
                                <label>Category</label>
                                <input type="text" id="category" name="Category" class="form-control">
                                <p class="error-label mb-0 d-none text-danger">Category cannot be empty</p>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="form-group mb-3 w-50">
                                <label>Price</label>
                                <input type="number" id="price" name="Price" max="9494949494" class="form-control">
                                <p class="error-label mb-0 d-none text-danger">You must enter a minimum price of Rp1.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-md btn-primary rounded-75" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script>
    const idProduct = document.getElementById('product_id') //disini error
    const product = document.getElementById('product')
    const category = document.getElementById('category')
    const price = document.getElementById('price')
    const viewData = (idData) => {
        $.ajax({
            url: `<?php echo base_url('index.php/product/editProduct'); ?>`,
            type: 'post',
            dataType: 'json',
            data: {
                ProductID: idData
            },
            success: (data) => {
                idProduct.value = data[0].ProductID
                product.value = data[0].ProductName
                category.value = data[0].Category
                price.value = data[0].Price
            }
        })
    }
</script>