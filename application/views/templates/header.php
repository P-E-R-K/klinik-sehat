<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/header.css">

    <!-- My Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">

    <!-- Js tanggal -->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="datepicker/bootstrap-datepicker.js"></script>
	<link rel="stylesheet" href="datepicker/datepicker.css">
    
    <title>Klinik SayangIbu</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <DIV class="container">
            <a class="navbar-brand" href="#"><h4>Klinik SayangIbu</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active ">
                    <a class="nav-link mr-3 menu" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mr-3 menu" href="<?php echo base_url('index.php/C_klinik/page_pasien') ?>">Pasien</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mr-3 menu" href="<?php echo base_url('index.php/C_klinik/page_dokter') ?>">Dokter</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mr-3 menu" href="<?php echo base_url('index.php/C_klinik/page_obat') ?>">Obat</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link mr-3 menu logout" href="#" style="margin-left:14px;">Log Out</a>
                </li>
                </ul>
            </div>
        </DIV>
        </nav> 

