<?php 
session_start();
include_once('admin/includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   	<title>Game of Thrones | Forside</title>	
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> 
	<link rel="stylesheet" href="js/flexslider/flexslider.css">
	<link rel="stylesheet" href="css/import.css">
	<link rel="shortcut icon" href="img/favorite_icon.png" type="image/png" />
  </head>
        <div class="page-top">
            <header class="header">
                <div class="logo"><a href="index.php"><img src="img/logo-got.jpg"></a></div>
                <div class="menu">
                    <nav class="nav-collapse">
                        <ul id="nav" class="flex row">
                            <li class="active"><a href="index.php">Forside</a></li>
                            <li><a href="plot.php">Handling</a></li>
                            <li><a href="actors.php">Medvirkende</a></li>
                            <li><a href="trailer.php">Trailer</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>