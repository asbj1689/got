<?php
include_once('includes/admin_menu.php');
$sql = "SELECT * FROM actors ORDER BY name";
$result = $con->query($sql);
?>
<div class="position">
    <table class="admin">
        <thead>
            <tr>
                <th>Name:</th>
                <th>Character name</th>
                <th>Created</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_object()){ ?>
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
