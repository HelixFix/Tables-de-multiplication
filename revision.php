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

                <input type="checkbox" name="7">
                <label for="7">Table de 7</label>

                <input type="checkbox" name="8">
                <label for="8">Table de 8</label>

                <input type="checkbox" name="9">
                <label for="9">Table de 9</label>
                <button type="submit">Envoyer</button>
            </form>
            <div id="math">

                <?php
                if (isset($_GET["1"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo  $n = $l . ' x ' . 1 . ' = ' . $n = $l * 1 . '<br>';
                    }
                    echo '</div>';
                }

                ?>


                <?php
                if (isset($_GET["2"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 2 . ' = ' . $n = $l * 2 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["3"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 3 . ' = ' . $n = $l * 3 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["4"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 4 . ' = ' . $n = $l * 4 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["5"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 5 . ' = ' . $n = $l * 5 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["6"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 6 . ' = ' . $n = $l * 6 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["7"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 7 . ' = ' . $n = $l * 7 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["8"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 8 . ' = ' . $n = $l * 8 . '<br>';
                    }
                    echo '</div>';
                }
                ?>


                <?php
                if (isset($_GET["9"]) == 'on') {
                    echo '<div class="table">';
                    for ($l = 0; $l < 10; $l++) {
                        echo $n = $l . ' x ' . 9 . ' = ' . $n = $l * 9 . '<br>';
                    }
                    echo '</div>';
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