<?php
    
    include_once('includes/admin_menu.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Her opdatere koden brugeren med et matchende id til den fra url, med dataen fra html formlen.

    if(isset($_POST['submit'])){

        $name = $con->real_escape_string($_POST['name']);
        $full_description = $con->real_escape_string($_POST['full_description']);
        $resume = $con->real_escape_string($_POST['resume']);
        $img = $con->real_escape_string($_POST['img']);
        $character_name = $con->real_escape_string($_POST['character_name']);

        $sql = "UPDATE actors SET
        name = '{$name}', 
        full_description = '{$full_description}',
        resume = '{$resume}',
        img = '{$img}',
        character_name = '{$character_name}'
        WHERE id = '{$id}'";

        $result = $con->query($sql);
        if(isset($result)){
            $status = "The actor had been succesfully updated.";
        } else {
            $status = "Something went wrong. Please try again!";
        }

        header('Location: actors.php');
    }

    $sql = "SELECT * FROM actors WHERE id = '{$id}'";
    $result = $con->query($sql);
    $row = $result->fetch_object();
?>        

        <main class="page-content">
            <div class="inner-wrapper-narrow">

             <!-- Her indtaster man den data som skal erstatte den gamle data i den ønskede bruger, en opdatering -->

            <form action="actor-update.php?id=<?php echo $row->id; ?>" method="post">
                <div class="form-item">
                    <label for="name" class="label">Name:</label>
                    <div class="field">
                        <input name="name" type="text" id="name" value="<?php echo $row->name; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="full_description" class="label">Full description:</label>
                    <div class="field">
                        <input name="full_description" type="text" id="full_description" value="<?php echo $row->full_description; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="resume" class="label">Resume:</label>
                    <div class="field">
                        <input name="resume" type="text" id="resume" value="<?php echo $row->resume; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="img" class="label">Image:</label>
                    <div class="field">
                        <input name="img" type="text" id="img" value="<?php echo $row->img; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="character_name" class="label">Character name:</label>
                    <div class="field">
                        <input name="character_name" type="text" id="character_name" value="<?php echo $row->character_name; ?>">
                    </div>
                </div>
                <button type="submit" name="submit">Update actor</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>