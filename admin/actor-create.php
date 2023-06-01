<?php
    
    include_once('includes/admin_menu.php');

    // Koden laver en ny post og indsætter de nedskrevne værdier fra formlerne i posten.

    if(isset($_POST['submit'])){

        $name = $con->real_escape_string($_POST['name']);
        $full_description = $con->real_escape_string($_POST['full_description']);
        $resume = $con->real_escape_string($_POST['resume']);
        $img = $con->real_escape_string($_POST['img']);
        $character_name = $con->real_escape_string($_POST['character_name']);

        $sql = "INSERT INTO actors (name, full_description, resume, img, character_name, created)
        VALUES ('{$name}', '{$full_description}', '{$resume}', '{$img}', '{$character_name}', NOW())";

        $result = $con->query($sql);
        header('Location: actors.php');
    }
?>

        <div class="position">
            <!-- Her indsætter man den ønskede data man vil have indsat i sin nye post -->
    
            <main class="page-content">
                <div class="inner-wrapper-narrow">
                <form action="actor-create.php" method="post" class="admin-form">
                    <div class="form-item">
                        <label for="name" class="label">Name:</label>
                        <div class="field">
                            <input name="name" type="text" id="name" value="">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="full_description" class="label">Full description:</label>
                        <div class="field">
                            <input name="full_description" type="text" id="full_description" value="">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="resume" class="label">Resume:</label>
                        <div class="field">
                            <input name="resume" type="text" id="resume" value="">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="img" class="label">Image:</label>
                        <div class="field">
                            <input name="img" type="text" id="img" value="">
                        </div>
                    </div>
                    <div class="form-item">
                        <label for="character_name" class="label">Character name:</label>
                        <div class="field">
                            <input name="character_name" type="text" id="character_name" value="">
                        </div>
                    </div>
                    <button type="submit" name="submit">Create Actor</button>
                </form>
                </div>
            </main>
        </div>
       

    
</body>
</html>