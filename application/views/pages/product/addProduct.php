<div class="container h-75 my-4 rounded-lg p-5 bg-light shadow-lg">
    <h1 class="text-center mb-2">Add Product</h1>
    <?php echo validation_errors(); ?>/
    <form action="<?php echo base_url() . '/Product/addProduct' ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Product Name</label>
                    <input type="text" name="product_name" id="product" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">Product name cannot be empty</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Category</label>
                    <input type="text" name="category" id="category" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">Category cannot be empty</p>
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label>Price</label>
                    <input type="number" name="price" id="price" max="9494949494" class="form-control">
                    <p class="error-label mb-0 d-none text-danger">You must enter a minimum price of Rp1.</p>
                </div>
            </div>
            <!-- <div class="col-lg-12 d-flex justify-content-center">
                <div class="form-group mb-3 w-50">
                    <label for="">Choose Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div> -->

            <div class="col-lg-12 d-flex justify-content-center">
                <input type="submit" class="btn btn-md btn-primary rounded-75" value="Submit">
            </div>
        </div>
    </form>
</div>