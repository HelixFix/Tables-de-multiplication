
<?php

if(isset($_GET["table"])) $table = $_GET["table"]; else $table = ""; // création variable $tableau
if(isset($_GET["somme"])) $somme = $_GET["somme"]; else $somme = ""; // création variable $tableau
if(isset($_GET["aleatoire"])) $aleatoire = $_GET["aleatoire"]; else $aleatoire = ""; // création variable $tableau
if(isset($_GET["table"])) $table = $_GET["table"]; else $table = ""; // création variable $tableau

?>



    <!-- <input list="tableau" name="tableau">
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
    </datalist> -->


    <?php
    
        /* ************************************************************* */
        /* ************************************************************* */
        /* ************************************************************* */

        echo"<form action=\"brouillon.php\" method=\"get\">";

            echo"<select name=\"table\" ONCHANGE=\"location = this.options[this.selectedIndex].value;\">";
    
                if(!$table) echo"<option value=\"\">-- Choisir la table de multiplication --</option>";

                for ( $i = 1; $i <= 9; $i++)
                {
                    if($i == $table) $selected = "selected"; else $selected = "";
                    echo"<option value=\"brouillon.php?table=$i\" $selected>Table de $i</option>";
                }

            echo"</select>";

        echo"</form>";

        /* ************************************************************* */
        /* ************************************************************* */
        /* ************************************************************* */

        if($somme)
        {
            echo"--- On affiche la reponse ---";

            $result = $aleatoire * $table;

            if($result == $somme) echo"Gagné";
            else echo"Perdu";

        }
        else
        {
            echo"--- On affiche la question ---";

            $aleatoire = rand(0, 9);

            for ( $i = 1; $i <= 9; $i++)
            {
                if ($i == $table) 
                {
                    echo"<div>";
                    
                        echo"<form action=\"brouillon.php\" method=\"get\">";
        
                            echo" Combien font : $aleatoire x $i = ";
                            echo"<input type=\"hidden\" name=\"aleatoire\" value=\"$aleatoire\">";
                            echo"<input type=\"hidden\" name=\"table\" value=\"$table\">";
                            echo"<input type=\"number\" name=\"somme\" value=\"\">";
                            echo"<input type=\"submit\" value=\"Envoyer\">";
                            echo"<br><br>";
        
                        echo"</form>";
        
                    echo "</div>";
        
                }
            }
        }


// if ((isset($_GET["somme"]) == $n)) {
//     echo '<span>true</span>';
//     echo '<input type="submit" value="Merci">';
// }
// if ($tableau == '1') 
// {
//     var_dump($_GET["tableau"]);
//     $randIndex = array_rand($table);
//     $n = $randIndex * 1;
//     echo '<div><form action="brouillon.php" method="get">';
//     echo  $n = $randIndex . ' x ' . 1 . ' =  <input type="number" name="somme"> <input type="submit" value="Envoyer"><br><br></form>';
//     if ((isset($_GET["somme"]) == '$n')) {
//         echo '<span>true</span>';
//         echo '<input type="submit" value="Merci">';
//     }
//     echo '</div>';
// }

// if ($tableau == '2') {
//     var_dump($_GET["tableau"]);
//     $randIndex = array_rand($table);
//     $n = $randIndex * 2;
//     echo '<div><form action="brouillon.php" method="get">';
//     echo  $n = $randIndex . ' x ' . 2 . ' =  <input type="number" name="somme"> <input type="submit" value="Envoyer"><br><br></form>';
//     if ((isset($_GET["somme"]) == '$n')) {
//         echo '<span>true</span>';
//     }
//     echo '</div>';
// }

// event.preventDefault()




?>


