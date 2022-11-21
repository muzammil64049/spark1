<?php

include 'connection.php';

$_Id = $_GET['ID'];

$q = " DELETE FROM `customerinfo` WHERE ID = $_Id ";


$query = mysqli_query($con, $q);

header('location:CustomerInfo.php');

?>