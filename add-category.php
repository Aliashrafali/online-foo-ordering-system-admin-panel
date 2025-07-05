<?php
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top-header.php';
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="dashboard pt-4">
                    <h4>Welcome <span style="float: right; font-size: 15px; padding-top: 5px;"><a href="index.php">Home</a> > Add category</span></h4>
                </div><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="form p-3">
                    <span><b>Fill Food Category Details</b></span><hr>
                    <form action="sql/add-category.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Category <sup><span style="color: red;">*</span></sup></label>
                            <input type="text" name="category" class="form-control" id="category" aria-describedby="emailHelp" placeholder="Enter Category Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image <sup><span style="color: red;">*</span></sup></label>
                            <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp" accept="image/jpg, image/jpeg, image/png" required>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div style="display: block; float: right;">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" name="ok" class="btn btn-success" onclick="return validateCategory()">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    include 'include/footer.php';
?>