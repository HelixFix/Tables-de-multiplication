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
  <option value="1">Table de 1</option>
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
                if (isset($_GET["tableau"]) == '1') {
                    echo '<div><form action="test.php" method="get">';
                    for ($l = 0; $l < 10; $l++) {
                        echo  $n = $l . ' x ' . 1 . ' = ' . ' <input type="number" name="somme"> <input type="submit" value="Envoyer">' . '<br><br></form>';
                    } if((isset($_GET["somme"]) == '$n')) {
                        echo '<span>true</span>';
                    }
                    echo '</div>';
                }
               
                ?>

               
<!--utiliser un foreach avec action pour passer au suivant

if true continue
sinon alert-->
<?php

$tableDe1 = ['1 X 0','1 X 1','1 X 2','1 X 3','1 X 4','1 X 5','1 X 6','1 X 7','1 X 8','1 X 9',];
$tableDe2 = ['2 X 0','2 X 1','2 X 2','2 X 3','2 X 4','2 X 5','2 X 6','2 X 7','2 X 8','2 X 9',];
$tableDe3 = ['3 X 0','3 X 1','3 X 2','3 X 3','3 X 4','3 X 5','3 X 6','3 X 7','3 X 8','3 X 9',];
$tableDe4 = ['4 X 0','4 X 1','4 X 2','4 X 3','4 X 4','4 X 5','4 X 6','4 X 7','4 X 8','4 X 9',];
$tableDe5 = ['5 X 0','5 X 1','5 X 2','5 X 3','5 X 4','5 X 5','5 X 6','5 X 7','5 X 8','5 X 9',];
$tableDe6 = ['6 X 0','6 X 1','6 X 2','6 X 3','6 X 4','6 X 5','6 X 6','6 X 7','6 X 8','6 X 9',];
$tableDe7 = ['7 X 0','7 X 1','7 X 2','7 X 3','7 X 4','7 X 5','7 X 6','7 X 7','7 X 8','7 X 9',];
$tableDe8 = ['8 X 0','8 X 1','8 X 2','8 X 3','8 X 4','8 X 5','8 X 6','8 X 7','8 X 8','8 X 9',];
$tableDe9 = ['9 X 0','9 X 1','9 X 2','9 X 3','9 X 4','9 X 5','9 X 6','9 X 7','9 X 8','9 X 9',];


foreach($tableDe1 as $element)

{

   echo $element . ' =' . '<input type="number" name="somme"> <input type="submit" value="Envoyer">' . '<br />';

}

foreach($tableDe2 as $element)

{

   echo $element . ' =' . '<input type="number" name="somme"> <input type="submit" value="Envoyer">' . '<br />';

}


$randIndex = array_rand($tableDe1);
 
// output the value for the random index
echo '<p>' . 'le faire avec un random ? <p>'. $tableDe1[$randIndex];

?>
</div>

       <!-- <form action="../../form-result.php" method="get">
        
  <p>Réponse <input type="number" name="somme"> <input type="submit" value="Envoyer"></p>
</form>-->


<!--<option value="42">La réponse</option>--> 
        </section>
    </main>
   
</body>
<?php
include("footer.php");
?>

</html>