<?php
session_start();
include_once('includes/connection.php');
if(!isset($_SESSION['id'])){
    header('Location: ../login.php');
}
$sql = "SELECT * FROM logo";
$result = $con->query($sql);
$row = $result->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   	<title>Game of Thrones</title>	
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> 
	<link rel="stylesheet" href="../js/flexslider/flexslider.css">
	<link rel="stylesheet" href="../css/import.css">
	<link rel="shortcut icon" href="img/favorite_icon.png" type="image/png" />
  </head>
      <body class="front">
        <div class="page-top">
            <header class="header">
                <div class="logo"><a href="index.php"><img src="../img/<?php echo $row->logo ?>"></a></div>
                <div class="menu">
                    <nav class="nav-collapse">
                        <ul id="nav" class="flex row">
                        <li><a href="users.php">Users</a></li>
                            <li><a href="actors.php">Actors</a></li>
                            <li><a href="user-create.php">Create user</a></li>
                            <li><a href="actor-create.php">Create actor</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>