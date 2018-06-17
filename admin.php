<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="bootstrap-4.1.1-dist/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<link rel="icon" type="img/jpg" href="images/icon.png">
    <link rel="stylesheet" href="adminstyle.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="sidenav" id="mySidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Expenses Made</a>
        <a href="#">Workers Details</a>
        <a href="#">Equipment List</a>
        <span style="color: #fff" onclick="openNav()"><i class="fa fa-bars"></i></span>
    </div>

</body>
</html>