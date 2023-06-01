<?php
include_once('includes/menu.php');
$sql = "SELECT * FROM actors ORDER BY name";
$result = $con->query($sql);
?>

      <body class="not-front plot">

        <div class="page-wrapper">
            <section class="featured">
                <!--large bg img-->
            </section>
            <section class="content">
                <main class="main">
                    <h1>Medvirkende</h1>
                    <div class="grid col-100"> 

                    <?php while($row = $result->fetch_object()){ ?>
                        <div class="block structure-1  color-4 box-4 landscape">
                            <div class="hd"><?php echo $row->character_name; ?></div>
                            <div class="bd">
                                <div class="img"><a href="actor.php?id=<?php echo $row->id; ?>"><img src="img/<?php echo $row->img; ?>"></a></div>
                                <div class="block-content">
                                    <h3><a href="actor.php?id=<?php echo $row->id; ?>"><?php echo $row->name ?></a></h3>
                                   
                                    <p><?php echo $row->full_description; ?></p>
                                </div>
                            </div>        
                            <div class="ft">footer</div>
                        </div>
                    <?php } ?>
                        

                    </div>
                </main>
            </section>
            <footer class="footer">

            </footer>
        </div>
    </body>
</html>