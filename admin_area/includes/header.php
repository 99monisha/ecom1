<?php
include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My e-commerce website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>
    <div class="section1" id="home">
    <div class="part1">
    <div class="navi">
        <div class="main-logo">DIAMOND </div>
        <nav>
        <ul id="menuitems">
            <li class="active"><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="item.html"class="menu-btn">Product</a></li>
            <li><a href="#sale"class="menu-btn">Sale</a></li>
            <li><a href="#company"class="menu-btn">Company</a></li>
            <li><a href="cart.html"class="menu-btn">Cart</a></li>
            <li><a href="#contact"class="menu-btn">Contact</a></li>
</ul>
</nav>
<img src="images/11.PNG" class="menu" onclick="menutoggle()">
<a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
</div>