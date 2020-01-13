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
        <section> liste choix unique radio

        

    <form action="test.php" method="get">
  <input list="tableau" name="tableau">
  <datalist id="tableau">
    <option value="Table de 1">
    <option value="Table de 2">
    <option value="Table de 3">
    <option value="Table de 4">
    <option value="Table de 5">
    <option value="Table de 6">
    <option value="Table de 7">
    <option value="Table de 8">
    <option value="Table de 9">
  </datalist>
  <input type="submit">
</form>

<div id="math">
<?php
                if (isset($_GET["tableau"]) == 'Table'+'de'+'1') {
                    echo '<div class="table2">';
                    for ($l = 0; $l < 10; $l++) {
                        echo  $n = $l . ' x ' . 1 . ' = ' . ' <input type="number" name="somme"> <input type="submit" value="Envoyer">' . '<br><br>';
                    }
                    echo '</div>';
                }
               
                ?>
<!--utiliser un foreach avec action pour passer au suivant-->
<?php

$tableDe1 = ['0 X 1','0 X 2','0 X 3','0 X 4','0 X 5','0 X 6','0 X 7','0 X 8','0 X 9',];


foreach($tableDe1 as $element)

{

   echo $element . ' =' . '<br />';

}

?>
</div>

        <form action="../../form-result.php" method="get">
        
  <p>Réponse <input type="number" name="somme"> <input type="submit" value="Envoyer"></p>
</form>


<!--<option value="42">La réponse</option>--> 
        </section>
    </main>
   
</body>
<?php
include("footer.php");
?>

</html>