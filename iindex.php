<?php
require("connection.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Car Rental Agency</title>
</head>

<body class="bg-light">

    <div class="container bg-dark text-light p-3 rounded my-4">
        <div class="d-flex align-items-center justify-content-between px-3">
            <h2>
                <a href="iindex.php" class="text-white text-decoration-none"><i class="bi bi-bar-chart-fill"></i> Product Store</a>
            </h2>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
                <i class="bi bi-plus"></i> Add Products
            </button>
        </div>
    </div>

    <?php

    if (isset($_GET['alert'])) 
    {
        if ($_GET['success'] == 'updated') 
        {
            echo <<<alert
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Image Upload Failed Server down!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;

        } 
        if ($_GET['alert'] == 'img_rem_fail') 
        {
            echo <<<alert
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Image Removal Failed Server down!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        } 
        if ($_GET['alert'] == 'add_failed') 
        {
            echo <<<alert
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Cannot add product! Server down!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        } 
        if ($_GET['alert'] == 'remove_failed') 
        {
            echo <<<alert
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Cannot Remove product Failed Server down!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        } 
        if ($_GET['alert'] == 'update_failed') 
        {
            echo <<<alert
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <strong>Cannot update product! Server down!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        } 

    }
        elseif (isset($_GET['success'])) 
        {
            if ($_GET['success'] == 'updated') 
            {
                echo <<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
            <strong>Product updated</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
            }
            if ($_GET['success'] == 'added') 
            {
                echo <<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
            <strong>Product added</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
            }
            if ($_GET['success'] == 'removed') 
            {
                echo <<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
            <strong>Product removed</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
            }
        }
    
    ?>

    <div class="container mt-4 p-0">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-light">
                <tr>
                    <th width="10%" scope="col" class="rounded-start">Sr. No.</th>
                    <th width="15%" scope="col">Image</th>
                    <th width="10%" scope="col">Model</th>
                    <th width="10%" scope="col">Number</th>
                    <th width="10%" scope="col">Price</th>
                    <th width="35%" scope="col">Description</th>
                    <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">

                <?php

                $query = "SELECT * FROM `product`";
                $result = mysqli_query($con, $query);
                $i = 1;
                $fetch_src = FETCH_SRC;

                while ($fetch = mysqli_fetch_assoc($result)) {
                    echo <<<product
                        <tr class="align-middle">
                        <th scope="row">$i</th>
                        <td><img src="$fetch_src$fetch[image]" width="150px"></td>
                        <td>$fetch[name]</td>
                        <td>$fetch[number]</td>
                        <td>$$fetch[price]</td>
                        <td>$fetch[description]</td>
                        <td>
                        <a href="?edit=$fetch[id]" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i>Edit</a>
                        <button onclick="confirm_rem($fetch[id])" class="btn btn-danger"><i class="bi bi-trash-fill"></i>Delete</button>
                        </td>
                        </tr>
                    product;
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>



    <div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Add Products</h1>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Model</span>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Number</span>
                            <input type="text" class="form-control" name="number" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price" min="1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" required></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .png, .svg/" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="addproduct">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="crud.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Edit Products</h1>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Model</span>
                            <input type="text" class="form-control" name="model" id="editname" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Number</span>
                            <input type="text" class="form-control" name="number" id="editnumber" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Price</span>
                            <input type="number" class="form-control" name="price" id="editprice" min="1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea class="form-control" name="desc" id="editdesc" required></textarea>
                        </div>
                        <img src="" id="editimg" width="100%" class="mb-3"><br>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Image</label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .png, .svg/">
                        </div>

                        <input type="hidden" name="editpid" id="editpid">

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="editproduct">Edit Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_GET['edit']) && $_GET['edit'] > 0) {
        $query = "SELECT * FROM 'products' WHERE 'id'='$_GET[edit]'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        echo "
        <script>
        var editproduct = new bootstrap.Modal(document.getElementById('editproduct'), {
            keyboard: false
          });
          document.querySelector('#editname').value='$fetch[model]';
          document.querySelector('#editnumber').value='$fetch[number]';
          document.querySelector('#editprice').value='$fetch[price]';
          document.querySelector('#editdesc').value='$fetch[description];
          document.querySelector('#editimg').src='$fetch_src$fetch[image]';
          document.querySelector('#editpid').value=''$_GET[edit];
          editproduct.show();
        </script>
        ";
    }
    ?>

    <script>
        function confirm_rem(id) {
            if (confirm("Are you sure, you want to delete this iten")) {
                window.location.href = "crud.php?rem=" + id;
            }
        }
    </script>

</body>

</html>
