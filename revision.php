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
        <section>créer des checkbox pour la selection des tables par choix multiples avec <br><br>
            <form action="revision.php" method="get">

                <input type="checkbox" name="1">
                <label for="1">Table de 1</label>

                <input type="checkbox" name="2">
                <label for="2">Table de 2</label>

                <input type="checkbox" name="3">
                <label for="3">Table de 3</label>

                <input type="checkbox" name="4">
                <label for="4">Table de 4</label>

                <input type="checkbox" name="5">
                <label for="5">Table de 5</label>

                <input type="checkbox" name="6">
                <label for="6">Table de 6</label>
                <button type="submit">Envoyer</button>
            </form>
            <div id="math">
                <div id="table1" class="table">
                <?php
                if ($_GET["1"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo  $n = $l . 'x' . 1 . '=' . $n = $l * 1 . '<br>';
                    }
                }
                ?>
                </div>
                <div id="table2" class="table">
                <?php
                if ($_GET["2"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . 'x' . 2 . '=' . $n = $l * 2 . '<br>';
                    }
                }
                ?>
                </div>
                <div id="table3" class="table">
                <?php
                if ($_GET["3"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 3 . '=' . $n = $l * 3 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table4" class="table">
                <?php
                if ($_GET["4"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 4 . '=' . $n = $l * 4 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table5" class="table">
                <?php
                if ($_GET["5"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 5 . '=' . $n = $l * 5 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table6" class="table">
                <?php
                if ($_GET["6"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 6 . '=' . $n = $l * 6 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table7" class="table">
                <?php
                if ($_GET["7"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 7 . '=' . $n = $l * 7 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table8" class="table">
                <?php
                if ($_GET["8"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 8 . '=' . $n = $l * 8 . '<br></div>';
                    }
                }
                ?>
                </div>
                <div id="table9" class="table">
                <?php
                if ($_GET["9"] === 'on') {
                    
                    for ($l = 0; $l < 10; $l++) {
                        echo '<div class="table">' . $n = $l . 'x' . 9 . '=' . $n = $l * 9 . '<br></div>';
                    }
                }
                ?>
                </div>
            </div>


        </section>
    </main>




</body>
<?php
include("footer.php");
?>

</html>