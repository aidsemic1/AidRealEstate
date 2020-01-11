<?php
$nameError = $emailError  = "";
$db = mysqli_connect('localhost', 'root', '', 'realestate');

if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];  
  $message = $_POST['message'];
  
 

  if (empty($_POST["name"])) {
    $usernameError = "Name is required!";
  } 
  if (empty($_POST["email"])) {
    $emailError = "Email is required!";
  } 

  if (empty($usernameError) && empty($emailError)) {

    $query = "INSERT INTO contact (name, email, subject, message) 
          VALUES('$name', '$email', '$subject', '$message')";
    mysqli_query($db, $query);
    header('location: index.php');
  }
  else {
 
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>REAL ESTATE</title>
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gelasio&display=swap" rel="stylesheet">

	<style>
        p1{font-family: 'Alatsi', sans-serif; 
           font-size: 15px;
           color: white;}

        p2{font-family: 'Orbitron', sans-serif;
           color: white;
           font-size: 21px;}

        p3{font-family: 'Dancing Script', cursive;
           color: white;
           font-size: 40px;}

        button1{font-family: 'Alatsi', sans-serif;
           font-size: 30px;
           color: white;
           background: transparent;
           border: white;
           text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;}

        button{font-family: 'Calibri', sans-serif;
           font-size: 25px;
           color: white;
           background: transparent;
           border: white;
           text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;}

    div.background {
        background-image: url('buyhouse.jpg');
        height:100%;
        width:100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position:absolute;
        top:0;
        right:0;
        bottom:0;
        left:0;
        overflow-x: hidden;
        overflow-y: hidden;}

        div.box2{
            background-color: black;
            position: absolute;
            top: -25px;
            left: -25px;
            width: 100%;
            height: 40px;
            padding: 20px;
            margin: 20px;
            opacity: 0.3;}


        div.logo{
            position: absolute;
            top: -8px;
            left: 5px;}
     

        div.subhead{
            position: absolute;
            top: 45px;
            left: 6px;}

        div.button0{
            position: absolute;
            top: 10px;
            left: 220px;}

        div.button1{
            position: absolute;
            top: 10px;
            left: 410px;}

        div.button2{
            position: absolute;
            top: 10px;
            left: 640px;}

        div.button3{
            position: absolute;
            top: 10px;
            left: 820px;}

        div.button4{
            position: absolute;
            top: 10px;
            left: 990px;}

        div.contactmeform{
        position: absolute;
        top: 200px;
        left: 890px;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 2px;
        padding-bottom: 60px;
        padding-left: 20px;
        padding-right: 20px; }

      div.contacttext{
        position: absolute;
        top: -90px;
        left: 10px;}

      div.submitbuttonsend{
        position: absolute;
        top: 320px;
        left: 140px;} 

    div.location{
            position: absolute;
            top: 260px;
            left: 60px;}

        div.loctext{
            position: absolute;
            top: 265px;
            left: 100px;}

        div.telephone{
            position: absolute;
            top: 310px;
            left: 60px;}

        div.teltext{
            position: absolute;
            top: 315px;
            left: 100px;}

        div.mailbox{
            position: absolute;
            top: 360px;
            left: 60px;}

        div.mailtext{
            position: absolute;
            top: 365px;
            left: 100px;}

        div.facebook{
            position: absolute;
            top: 410px;
            left: 60px;}

        div.facelink{
            position: absolute;
            top: 415px;
            left: 100px;}

        div.instagram{
            position: absolute;
            top: 460px;
            left: 60px;}

        div.instalink{
            position: absolute;
            top: 465px;
            left: 100px;}

        div.headcontact{
            position: absolute;
            top: 180px;
            left: 60px;} 

        div.backinfos{
            position: absolute;
            top: 185px;
            left: 40px;
            height: 320px;
            width: 505px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 2px;}  

        div.arrow{
            position: absolute;
            top: 210px;
            left: 590px;}
     
		</style>
<meta charset="utf-8">
</head>
<body>
    <div class="background">

        <div class="box2">
        </div>

        <div class="logo">
            <img src="logo.png" width="110" height="80">
        </div>

        <div class="box">
        </div>

        <div class="subhead">
            <p2>Sarajevo</p2>
        </div>

        <div class="button0">
            <p><a href="index.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif; font-size: 27px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><strong>Home</strong></a></p>
        </div>

        <div class="button1">
            <p><a href="aboutus.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif; font-size: 27px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><strong>About us</strong></a></p>
        </div>

        <div class="button2">
            <p><a href="buy.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif; font-size: 27px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><strong>Buy</strong></a></p>
        </div>

        <div class="button3">
            <p><a href="sell.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif; font-size: 27px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><strong>Sell</strong></a></p>
        </div>

        <div class="button4">
            <p><a href="contact.php" style="text-decoration: none; font-family: 'Josefin Sans', sans-serif; font-size: 27px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><strong>Contact us</strong></a></p>
        </div>

       <div class="contactmeform">
<form action="contact.php" method="POST" id="signup-form" class="signup-form">
  <div class="contacttext">
<h2 class="form-title" style="font-family: 'Gelasio', serif; color: white; font-size: 22px; text-align: center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">If you are intrested about some of our property or you have property to sell, contact us!</h2>
</div>
<br><br>

<div class="form-group">
<input type="text" class="form-input" name="name" id="name" style="width: 300px; height: 30px; border-radius: 2px; font-family: 'Josefin Sans', sans-serif; color: white; font-size: 22px; text-align: center;" placeholder="Your Name" />
<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 340px;top: 120px;"><?php echo $nameError;?></span>
</div>
<br>
<div class="form-group">
<input type="text" class="form-input" name="email" id="email" style="width: 300px; height: 30px; border-radius: 2px; font-family: 'Josefin Sans', sans-serif; color: white; font-size: 22px; text-align: center;" placeholder="Your Email" />
<span class="error1" style="width:150px;color: red;font-size: 15px;position: absolute;left: 350px;top: 340px;"><?php echo $emailError;?></span>
</div>
<br>
<div class="form-group">
<input type="text" class="form-input" name="subject" id="subject" style="color: #999;width: 300px; height: 30px; border-radius: 2px; font-family: 'Josefin Sans', sans-serif; color: white; font-size: 22px; text-align: center;" placeholder="Subject" />
</div>
<br>
<div class="form-group">
<input type="text" class="form-input" name="message" style="color: #999;width: 300px; height: 100px; border-radius: 2px; font-family: 'Josefin Sans', sans-serif; color: white; font-size: 22px; text-align: center;" placeholder="Message" />
</div>

<div class="submitbuttonsend">
<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" style="font-family: 'Gelasio', serif; color: white; font-size: 22px; padding: 2px; text-align: center; border-radius: 1px; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;" value="Submit" />
</div>
</div>
</form>
</div>

<div class="backinfos">
    </div>

        <div class="location">
            <img src="location.png" height="30" width="30">
        </div>

        <div class="loctext">
            <p1 style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Sarajevo,BiH</p1>
        </div>

        <div class="telephone">
            <img src="telephone.png" height="30" width="30">
        </div>

        <div class="teltext">
            <p1 style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">+38733789655</p1>
        </div>

        <div class="mailbox">
            <img src="mailbox.png" height="30" width="30">
        </div>

        <div class="mailtext">
            <p1 style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">realestatesarajevo@hotmail.com</p1>
        </div>

        <div class="facebook">
            <img src="facebook.png" height="30" width="30">
        </div>

        <div class="facelink">
            <p1 style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">www.facebook.com/RealEstateSarajevo</p1>
        </div>

        <div class="instagram">
            <img src="instagram.png" height="30" width="30">
        </div>

        <div class="instalink">
            <p1 style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 24px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">www.instagram.com/real.estate.sarajevo</p1>
        </div>

        <div class="headcontact">
            <p style="text-decoration: none; font-family: 'Gelasio', serif; font-size: 30px; color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">FIND US AND CONTACT US:</p>
        </div>

        <div class="arrow">
            <img src="noname.png" height="300" width="300">
        </div>
        

        
</div>
</body>
</html>