<?php
include("header.php");
?>

<body>
    <main>
        <aside>
            <?php
            include("aside.php");
            ?>
        </aside>
        <section>créer des checkbox pour la selection des tables par choix multiples avec stream_bucket_make_writeable<br><br>
        <form action="exo24.php" method="get">
        <input type="checkbox" name="6">
        <button type="submit">Envoyer</button>
</form>
    <div>
        <?php
        if ($_GET["table"] === '6'){
            echo '<img id="cahier" src="images/pageCahier.png" alt="">';
            for ($l = 0; $l < 10; $l++) {
                for ($c = 0; $c < 10; $c++) {
                    echo '<div id="table">' . $n = $l . 'x' . $c . '=' . $n = $l * $c . '<br></div>';
                    
                }
            }
                }

            
        
        
?>

    </div>

    </section>
    </main>
    


    
</body>
<?php
include("footer.php");
?>

</html>