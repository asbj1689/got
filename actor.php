<?php
include_once('includes/menu.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$sql = "SELECT * FROM actors WHERE id = '{$id}'";
$result = $con->query($sql);
$row = $result->fetch_object();

?>

      <body class="not-front plot">

        <div class="page-wrapper">
            <section class="featured">
                <!--large bg img-->
            </section>
            <section class="content">
                <main class="main">
                    <h1>Medvirkende</h1>
                    <div class="col-100"> 


                        <div class="block structure-1 color-4 box-4">
                            <div class="hd"><?php echo $row->character_name; ?></div>
                            <div class="bd">
                            <h2><?php echo $row->name; ?></h2>
                            
                            <p><?php echo $row->full_description; ?></p>
                            </div>        
                            <div class="ft">footer</div>
                        </div>
                    </div>
                </main>
            </section>
            <footer class="footer">

            </footer>
        </div>
    </body>
</html>