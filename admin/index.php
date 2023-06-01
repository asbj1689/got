<?php
include_once('includes/admin_menu.php');

$sql = "SELECT * FROM users ORDER BY created DESC LIMIT 3";
$result = $con->query($sql);

$sql2 = "SELECT * FROM actors ORDER BY created DESC LIMIT 3";
$result2 = $con->query($sql2);

?>
<div class="position">
    <h2 class="login-message"><?php if(isset($_SESSION['id'])){
        echo "Velkommen til kontrol panelet, " . $_SESSION['username'] . "!";
    } ?></h2>
    <table class="admin">
        <thead>
            <tr>
                <th>Firstname:</th>
                <th>Lastname:</th>
                <th>Username:</th>
                <th>Email:</th>
                <th>Created:</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){ ?>
                <tr>
                    <td><?php echo $row->firstname; ?></td>
                    <td><?php echo $row->lastname; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->email; ?></td>
                    <td><?php echo $row->created; ?></td>
                    <td><a href="actor-update.php?id=<?php echo $row->id; ?>">Edit</a></td>
                    <td><a href="actor-delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>    
    </table>
    
    <table class="admin">
        <thead>
            <tr>
                <th>Name:</th>
                <th>Character name:</th>
                <th>Created:</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result2->fetch_object()){ ?>
                <tr>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->character_name; ?></td>
                    <td><?php echo $row->created; ?></td>
                    <td><a href="actor-update.php?id=<?php echo $row->id; ?>">Edit</a></td>
                    <td><a href="actor-delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>    
    </table>
</div>