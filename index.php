<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE PHP CRUD</title>
    
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/ffe84c0c76.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00bfff;">
        PHP Simple CRUD Application
    </nav>

    <div class="container">
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-success" role="alert"> ' . $msg . ' </div>';
            }
        ?>
        <a href="add_new.php" class="btn btn-dark mb-3">Add new</a>

        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FIRSTNAME</th>
                    <th scope="col">LASTNAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "db_connect.php";
                    $sql = "SELECT * FROM `crud_simple`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td> <?php echo $row['id'] ?> </td>
                            <td> <?php echo $row['firstname'] ?> </td>
                            <td> <?php echo $row['lastname'] ?> </td>
                            <td> <?php echo $row['email'] ?> </td>
                            <td> <?php echo $row['gender'] ?> </td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                    <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark">
                                    <i class="fa-solid fa-trash fs-5"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>