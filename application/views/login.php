<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik SayangIbu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php base_url();?>assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
</head>
<body>
    <h4>Klinik SayangIbu</h4>
    <div class="kotak rounded mx-auto d-block">
        <img src="<?php echo base_url().'assets/img/anak.jpg' ?>" alt="sayang ibu" class="gambar">
        <div class="login">
            <h3>Login</h3>
            <input class="form-control input" type="text" placeholder="Admin">
            <input class="form-control input" type="text" placeholder="Password">
            <button type="button" class="btn btn-warning">Sign in</button>
        </div> 
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("img").click(function(){
        $(this).hide();
    });
});
</body>
</html>
