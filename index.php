<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="css/index.css">
<?php include 'include/head.php'; ?>
    <title>portfolio</title>
</head>
<body>
 <?php include 'include/navbar.php'; ?>




    <h1>Portfolio</h1>
    <div class="hello_text">
            <h2 >hello my name is Thomas dekker.</h2>
            <h2> I am a software engineer in training.</h2>
            <h2> This will be my portfolio.</h2>
            <h2> You are free to look around.</h2>
    </div>
    <img src="img/mr-bean-wave.gif" alt="Thomas" width="25%">
            <h3>Thanks ted for helping</h3> 
            <div class="bg-modal">  









            <script>
                function validateForm() {
                var x = document.forms["myForm"]["name1"].value;
                if (x == "") {
                    alert("Name must be filled out");
                    return false;
                }
                }
            </script>
   
	<div class="modal-contents">

		<div class="close">+</div>
		<img src="" alt="">

		<form name="myForm" action="index_nopopup.php" onsubmit="return validateForm()" method="post" required>

		<input class="text" type="text" name="name1" placeholder="Name">

	    <input type="submit" id="botton_2" class="button" value="send">

		</form>

	</div>
</div>
<script type="text/javascript" src="js/popup.js"></script>
</html>