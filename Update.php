<?php

include 'connection.php';

if (isset($_POST['done'])) {

    $_Id = $_GET['ID'];

    $cn = $_POST['CustomerName'];
    $e = $_POST['Email'];
    $an = $_POST['AccountNo'];
    $q = "UPDATE `customerinfo` SET `CustomerName`='$cn',`Email`='$e',`AccountNo`='$an'  WHERE ID =$_Id";


    $query = mysqli_query($con, $q);

    header('location:CustomerInfo.php');
}

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">

        <form method="post">

            <br><br>
            <div class="card">

                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation </h1>
                </div><br>

                <label> Customer Name: </label>
                <input type="text" name="CustomerName" class="form-control"> <br>


                <label> Email: </label>
                <input type="text" name="Email" class="form-control"> <br>

                <label> Account No: </label>
                <input type="text" name="AccountNo" class="form-control"> <br>

                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

            </div>
        </form>
    </div>
</body>

</html>