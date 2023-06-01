<?php
    
    include_once('includes/admin_menu.php');

    // Koden laver en ny post og indsætter de nedskrevne værdier fra formlerne i posten.

    if(isset($_POST['submit'])){

        $firstname = $con->real_escape_string($_POST['firstname']);
        $lastname = $con->real_escape_string($_POST['lastname']);
        $username = $con->real_escape_string($_POST['username']);
        $password = $con->real_escape_string($_POST['password']);
        $email = $con->real_escape_string($_POST['email']);

        $sql = "INSERT INTO users (firstname, lastname, username, password, email, created)
        VALUES ('{$firstname}', '{$lastname}', '{$username}', '{$password}', '{$email}', NOW())";

        $result = $con->query($sql);
        header('Location: users.php');
    }
?>           

        <!-- Her indsætter man den ønskede data man vil have indsat i sin nye post -->
<div class="position">
    <main class="page-content">
        <div class="inner-wrapper-narrow">
        <form action="user-create.php" method="post" class="admin-form">
            <div class="form-item">
                <label for="firstname" class="label">Firstname:</label>
                <div class="field">
                    <input name="firstname" type="text" id="firstname" value="">
                </div>
            </div>
            <div class="form-item">
                <label for="lastname" class="label">Lastname:</label>
                <div class="field">
                    <input name="lastname" type="text" id="lastname" value="">
                </div>
            </div>
            <div class="form-item">
                <label for="username" class="label">Username:</label>
                <div class="field">
                    <input name="username" type="text" id="username" value="">
                </div>
            </div>
            <div class="form-item">
                <label for="password" class="label">Password:</label>
                <div class="field">
                    <input name="password" type="text" id="password" value="">
                </div>
            </div>
            <div class="form-item">
                <label for="email" class="label">Email:</label>
                <div class="field">
                    <input name="email" type="text" id="email" value="">
                </div>
            </div>
            <button type="submit" name="submit">Create user</button>
        </form>
        </div>
    </main>
</div>
</body>
</html>