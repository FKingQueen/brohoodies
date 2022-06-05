<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>

        <?php
            require_once 'dbConfig.php'; 

            $email = $_GET['email'];
            $pw = $_GET['pw'];

            $query = "SELECT * FROM user WHERE email = '$email' and password = '$pw'";
            $name = $conn->query($query);

            $query = "SELECT * FROM user WHERE email = '$email' and password = '$pw'";
            $userId = $conn->query($query);

        ?>
            
        <?php
            if(!empty($_GET['msg']))
            { ?>
                <p>
                    <?php echo $_GET['msg']; ?>
                </p>
            <?php }
        ?>  

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    BRO'HOODIES
                </a>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                        <?php 
                            while($row = $name->fetch_assoc()) {
                                echo $row["name"];
                            }
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Add New Product
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Adding New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <form action="add-product.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <input type="hidden" id="userId" name="userId" value="
                            <?php 
                                while($row = $userId->fetch_assoc()) {
                                echo $row["id"];
                                }
                            ?>
                            ">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Product Name</span>
                                </div>
                                <input type="text" name="pName" class="form-control" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Product Color</span>
                                </div>
                                <input type="text" name="pColor" class="form-control" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Product Price</span>
                                </div>
                                <input type="number" name="pPrice" class="form-control" required>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="pSize">Product Size</label>
                                </div>
                                <select class="custom-select" id="pSize" name="pSize" required>
                                    <option selected>Choose...</option>
                                    <option value="1">Small</option>
                                    <option value="2">Medium</option>
                                    <option value="3">Large</option>
                                </select>
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Product Image</label>
                                </div>
                                    <input id="prof_image" type="file" class="form-control  " name="prof_image" autocomplete="prof_image">
                            </div>
                            

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>