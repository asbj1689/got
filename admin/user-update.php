<?php
    
    include_once('includes/admin_menu.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    // Her opdatere koden brugeren med et matchende id til den fra url, med dataen fra html formlen.

    if(isset($_POST['submit'])){

        $firstname = $con->real_escape_string($_POST['firstname']);
        $lastname = $con->real_escape_string($_POST['lastname']);
        $username = $con->real_escape_string($_POST['username']);
        $password = $con->real_escape_string($_POST['password']);
        $email = $con->real_escape_string($_POST['email']);

        $sql = "UPDATE users SET
        firstname = '{$firstname}', 
        lastname = '{$lastname}',
        username = '{$username}',
        password = '{$password}',
        email = '{$email}'
        WHERE id = '{$id}'";

        $result = $con->query($sql);
        if(isset($result)){
            $status = "The user had been succesfully updated.";
        } else {
            $status = "Something went wrong. Please try again!";
        }

        header('Location: users.php');
    }

    $sql = "SELECT * FROM users WHERE id = '{$id}'";
    $result = $con->query($sql);
    $row = $result->fetch_object();
?>        

        <main class="page-content">
            <div class="inner-wrapper-narrow">

             <!-- Her indtaster man den data som skal erstatte den gamle data i den ønskede bruger, en opdatering -->

            <form action="user-update.php?id=<?php echo $row->id; ?>" method="post">
                <div class="form-item">
                    <label for="firstname" class="label">Firstname:</label>
                    <div class="field">
                        <input name="firstname" type="text" id="firstname" value="<?php echo $row->firstname; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="lastname" class="label">Lastname:</label>
                    <div class="field">
                        <input name="lastname" type="text" id="lastname" value="<?php echo $row->lastname; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="username" class="label">Username:</label>
                    <div class="field">
                        <input name="username" type="text" id="username" value="<?php echo $row->username; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="password" class="label">Password:</label>
                    <div class="field">
                        <input name="password" type="password" id="password" value="<?php echo $row->password; ?>">
                    </div>
                </div>
                <div class="form-item">
                    <label for="email" class="label">Email:</label>
                    <div class="field">
                        <input name="email" type="text" id="email" value="<?php echo $row->email; ?>">
                    </div>
                </div>
                <button type="submit" name="submit">Update user</button>
            </form>
            </div>
        </main>
    </div>
</body>
</html>