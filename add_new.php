<?php

    include "db_connect.php";

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['gender'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
    
        $sql = "INSERT INTO `crud_simple`(`id`, `firstname`, `lastname`, `email`, `gender`) VALUES (NULL, '$firstname', '$lastname', '$email', '$gender')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: index.php?msg=New record added successfully");
        } 
        else{
            echo "Failed: " . mysqli_error($conn);
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE PHP CRUD</title>
    
    <!-- Font awesome -->
    <script src="https://use.fontawesome.com/81c40666e3.js"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00bfff;">
        PHP Simple CRUD Application
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New User</h3>
            <p class="text-muted"> Complete the form to add a new user.</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width: 50vw; min-width: 300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">FirstName: </label>
                    <input type="text" name="firstname" placeholder="Manu" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">LastName: </label>
                    <input type="text" name="lastname" placeholder="Dibingo" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email: </label>
                <input type="email" name="email" placeholder="mandib@gmail.com" class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>Gender:</label> &nbsp;
                <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                <label for="male" class="form-input-label">Male</label>

                &nbsp;

                <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                <label for="female" class="form-input-label">Female</label>
            </div>
            <div>
                <button type="submit" class="btn btn-success" name="submit">Save</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div> 
        </form>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

