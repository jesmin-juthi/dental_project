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
    <!-- header section start -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" class="img-fluid" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 header-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">List your practice on Zocdoc</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Log in / Sign up
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#" style="display: inline;">Patients</a>
                                            <a href="#">Log in</a>
                                            <a href="#">Sign up</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#" style="display: inline;">Doctors</a>
                                            <a href="#">Log in</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="header-text py-5 mt-4">
                        <h1>Find local dermatologists
                            who take your insurance</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header section end -->