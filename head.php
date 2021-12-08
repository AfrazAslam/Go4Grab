<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Go4Grab, an application for daily use services like cabs, online food ordering, delivery, fresh meat and groceries, dairy product and much more.">
    <!-- Adding Bootstrap here cause Dont want to waste hours doing it myself -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="./js/jquery/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="./js/jquery/jquery-ui.js"></script>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="./js/scroll.js"></script>
    <script src="./js/loader.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./logo.png" type="image/x-icon">
    <!-- <title>Document</title> -->
</head>
<?php
    include('loader.php');
?>
<script>
    window.onbeforeunload = function () {
    window.scrollTo(top);
}
</script>
<body id="body" class="body">
    <header>
        <?php
            include('navbar.php');
        ?>
    </header>
    <div class="container-fluid" id="main" style="max-width: 1300px;">