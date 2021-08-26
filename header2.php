<?php 
ob_start(); 
session_start();

require_once'functions.php';
$all_class = new allclass;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>
    <!-- icons -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="user-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><img src="images/logo2.png" alt=""></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>