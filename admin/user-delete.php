<?php
    include_once('includes/admin_menu.php');

    // Koden sletter en bruger med en id der matcher den der er medsendt i url

    if(isset($_GET['id'])){

        $id = $_GET['id']; 
    
        if(!isset($_GET['confirm'])){
            $confirm = "Confirm to delete the actor?";
        }
        else{
            // Delete record from database table
            $sql = "DELETE FROM users WHERE id = {$id}";
            $result = $con->query($sql);
            header("Location: users.php");
        }
    }

?>

        <a href="user-delete.php?id=<?php echo $id ?>&confirm=true">Confirm</a>
        <a href="users.php">Cancel</a>
</body>
</html>