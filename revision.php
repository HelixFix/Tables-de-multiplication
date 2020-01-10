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
            <form action="revision.php" method="get">

                <input type="checkbox" name="1">
                <label for="1">Table de 1</label>

                <input type="checkbox" name="2">
                <label for="2">Table de 2</label>

                <input type="checkbox" name="3">
                <label for="3">Table de 3</label>

                <input type="checkbox" name="4">
                <label for="4">Table de 5</label>

                <input type="checkbox" name="5">
                <label for="5">Table de 5</label>

                <input type="checkbox" name="6">
                <label for="6">Table de 6</label>
                <button type="submit">Envoyer</button>
            </form>
            <div id="math">
                <?php
                if ($_GET["6"] === 'on') {
                    echo '<img class="cahier" src="images/pageCahier.png" alt="">';
                    for ($l = 0; $l < 10; $l++) {
                        
                            echo '<div class="table">' . $n = $l . 'x' . 6 . '=' . $n = $l * 6 . '<br></div>';
                        }
                    }if ($_GET["5"] === 'on') {
                        echo '<img class="cahier" src="images/pageCahier.png" alt="">';
                        for ($l = 0; $l < 10; $l++) {
                            
                                echo '<div class="table">' . $n = $l . 'x' . 5 . '=' . $n = $l * 5 . '<br></div>';
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