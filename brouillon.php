
<form action="brouillon.php" method="get">
    <input list="tableau" name="tableau">
    <datalist id="tableau">
        <option value="1">Table de 1</option>
        <option value="2">Table de 2</option>
        <option value="3">Table de 3</option>
        <option value="4">Table de 4</option>
        <option value="5">Table de 5</option>
        <option value="6">Table de 6</option>
        <option value="7">Table de 7</option>
        <option value="8">Table de 8</option>
        <option value="9">Table de 9</option>
    </datalist>
    <input type="submit">
</form>
<?php


$table = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',];
$un = 1;



$randIndex = array_rand($table);

// output the value for the random index
echo '<p>' . 'le faire avec un random ? <p>';





if (isset($_GET["tableau"]) == '1') {
    var_dump($_GET["tableau"]);
    $randIndex = array_rand($table);
    $n = $randIndex * 1;
    echo '<div><form action="brouillon.php" method="get">';
    echo  $n = $randIndex . ' x ' . 1 . ' =  <input type="number" name="somme"> <input type="submit" value="Envoyer"><br><br></form>';
    if ((isset($_GET["somme"]) == '$n')) {
        echo '<span>true</span>';
        echo '<input type="submit" value="Merci">';
    }
    echo '</div>';
}

if (isset($_GET["tableau"]) == '2') {
    var_dump($_GET["tableau"]);
    $randIndex = array_rand($table);
    $n = $randIndex * 2;
    echo '<div><form action="brouillon.php" method="get">';
    echo  $n = $randIndex . ' x ' . 2 . ' =  <input type="number" name="somme"> <input type="submit" value="Envoyer"><br><br></form>';
    if ((isset($_GET["somme"]) == '$n')) {
        echo '<span>true</span>';
    }
    echo '</div>';
}

//event.preventDefault()
?>


