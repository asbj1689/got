<?php

// Koden logger dig ud og dirigere dig til hovedsiden index.php

session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time()-36000, '/');
    session_destroy();
    header("Location: ../index.php");
}
?>