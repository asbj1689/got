<?php
include_once('includes/admin_menu.php');
$sql = "SELECT * FROM users ORDER BY firstname";
$result = $con->query($sql);
?>
<div class="position">
    <table class="admin">
        <thead>
            <tr>
                <th>Firstname:</th>
                <th>Lastname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Created</th>
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
                    <td><a href="user-update.php?id=<?php echo $row->id; ?>">Edit</a></td>
                    <td><a href="user-delete.php?id=<?php echo $row->id; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>