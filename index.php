<?php
include_once('includes/menu.php');
$sql = "SELECT * FROM actors WHERE number ORDER BY number";
$result = $con->query($sql);

?>
      <body class="front">

        <div class="page-wrapper">
            
            <section class="featured">
                <!--large bg img-->
            </section>
            <section class="content">
                <main class="main">

                    <div class="grid col-25-25-25-25"> 
                        <?php while($row = $result->fetch_object()){ ?>
                            <div>
                                <article class="block box-4 structure-1 color-4 effect-1">
                                    <div class="hd"><?php echo $row->character_name; ?></div>
                                    <div class="bd">
                                        <div class="img">
                                                <a href="actor.php?id=<?php echo $row->id; ?>"><img src="img/<?php echo $row->cimg; ?>"></a>
                                        </div>
                                        <div class="main"><?php echo $row->resume; ?></div>
                                    </div>
                                    <div class="ft"></div>        
                                </article>
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