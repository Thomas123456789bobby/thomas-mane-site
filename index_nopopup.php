<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/index.css">
<?php include 'include/head.php'; ?>
    <title>portfolio</title>
</head>
<body>
 <?php include 'include/navbar.php'; ?>
 <?php $name1 = $_POST['name1']; ?>
 <?php if ($name1 == "thomas") {
 } else {
     include 'api/user/user_32.php';
 }
 ?>

 
    <h1>Portfolio</h1>
    <div class="hello_text">
            <h2> Hello my name is Thomas dekker.</h2>
            <h2> I am a software engineer in training.</h2>
            <h2> This will be my portfolio.</h2>
            <h2> You are free to look around.</h2>
    </div>
    <img src="img/mr-bean-wave.gif" alt="Thomas" width="25%">
            <h3>Thanks ted for helping</h3>
            
</html>