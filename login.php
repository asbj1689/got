<?php
include_once('includes/menu.php');

// Koden forhindrer en i at tilgå siden hvis man er logget ind

if(isset($_SESSION['id'])){
   header('Location: admin/index.php');
}

// Koden tjekker for om den indtastede bruger matcher en bruger i databasen.  

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '{$username}' && password = '{$password}'";
    $result = $con->query($sql);

    if (mysqli_num_rows($result) == 1){
        $aut_user = $result->fetch_object();
        $_SESSION['id'] = $aut_user->id;
        $_SESSION['username'] = $aut_user->username;
        header('Location: admin/index.php');
    } elseif(mysqli_num_rows($result) == 0){
        echo "Det indtastede brugernavn eller password er forkert.<br>Prøv igen!";
    }
} 
?>

      <body class="front">
        
            <section class="featured">
                <!--large bg img-->
            </section>
            <section class="content">
                <main class="main">
                    
                    <!-- En formel for at indtaste brugeren man ønsker at logge ind med. -->          
                                <form action="login.php" method="post">
                                    <div class="form-item">
                                        <label for="username" class="label">Username:</label>
                                        <div class="field">
                                            <input type="text" name="username" id="username">
                                        </div>
                                    </div>
                                    <div class="form-item">
                                        <label for="password" class="label">Password:</label>
                                        <div class="field">
                                            <input type="password" name="password" id="password">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit">Submit</button>
                                </form>
                </main>
            </section>
        </div>
    </body>
</html>


