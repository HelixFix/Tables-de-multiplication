
<form action="brouillon.php" method="get">
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
<?php


$table = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9',];




$randIndex = array_rand($table);

// output the value for the random index
echo '<p>' . 'le faire avec un random ? <p>';





if (isset($_GET["tableau"]) == '1') {
    $randIndex = array_rand($table);
    $n = $randIndex * 1;
    echo '<div><form action="brouillon.php" method="get">';
    echo  $n = $randIndex . ' x ' . 1 . ' =  <input type="number" name="somme"> <input type="submit" value="Envoyer"><br><br></form>';
    if ((isset($_GET["somme"]) == '$n')) {
        echo '<span>true</span>';
    }
    echo '</div>';
}
?>
