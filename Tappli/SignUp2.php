<?php
include("connexion.php");
include("insertion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>TaxiApp</title>
</head>
<body>
    <header>
        <img class="logo" src="img/logo.jpeg" alt="TaxiApp"> <strong class="i"> TaxiApp</strong>
        <nav>
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="choice.php">Sign Up</a></li>
                <li><a href="SignIn3.php">Sign In</a></li>
                
            </ul>
        </nav>
    </header>
    <section class=" form-contenair">
          <legend><center> <h2>Register form</h2></center> </legend>
           <form method="post" action="insertion.php" >
               <label for="name">Name:</label>
               <input type="text" name="name" id="name" placeholder="enter your name" required> <br>
               <label for="email">Email:</label>
               <input type="email" name="email" id="email" placeholder="entrer your email address"> <br>
               <label for="tel"> Phone number:</label>
               <input type="tel" name="tel" id="tel" placeholder="enter your phone number" required> <br>
               <label for="password"> Password:</label>
               <input type="text" name="password" id="mdp" placeholder="enter your password" required> <br>
               
               
              
               <input type="submit" name="ok" value=" Sign Up">
           </form>
        
    </section>