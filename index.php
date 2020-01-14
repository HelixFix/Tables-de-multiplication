<?php

    include("header.php");

    if(isset($_GET["op"])) $op = $_GET["op"]; else $op = ""; // création variable $tableau
    if(isset($_GET["table"])) $table = $_GET["table"]; else $table = ""; // création variable $tableau
    if(isset($_GET["somme"])) $somme = $_GET["somme"]; else $somme = ""; // création variable $tableau
    if(isset($_GET["aleatoire"])) $aleatoire = $_GET["aleatoire"]; else $aleatoire = ""; // création variable $tableau
    if(isset($_GET["table"])) $table = $_GET["table"]; else $table = ""; // création variable $tableau
    if(isset($_GET["tentatives"])) $tentatives = $_GET["tentatives"]; else $tentatives = ""; // création variable $tableau

    function accueil()
    {
        echo"--- accueil ---</br>"; 

        echo"<section>
            <div id=\"twoBox\">
                <div id=\"boxGauche\" class=\"box\">
                    <h2>Réviser vos tables de multiplication</h2>
                    <a href=\"index.php?op=revision\"><img src=\"images/images.jpg\" alt=\"feuille table de multiplication\"></a>
                    <p>La page 1 te permet de te familiariser avec les tables,<br> donc regarde, lis à haute voix et répète.
                        <br>Si tu crois que tu peux t'en souvenir, <br>il est temps de tester tes connaissances à la page 2.
                    </p>
                </div>

                <div id=\"boxDroite\" class=\"box\">
                    <h2>Tester vos aptitudes</h2>
                    <a href=\"index.php?op=test\"><img src=\"images/mathTest.png\" alt=\"math test\"></a>
                </div>
            </div>
        </section>";
    }

    function result()
    {
        global $aleatoire, $table;

        echo"--- result --- $aleatoire, $table</br>";
    }

    function revision()
    {
        global $table;

        echo"--- revision ---</br>";

        echo"<section>créer des checkbox pour la selection des tables par choix multiples avec <br><br>
        <form action=\"index.php\" method=\"get\">";


                echo"<input type=\"hidden\" name=\"op\" value=\"revision\" >";

                for ( $i = 1; $i <= 9; $i++)
                {
                    if ($table && in_array($i, $table)) $checked = "checked"; else $checked = ""; 
                    echo"<input type=\"checkbox\" id=\"table-de-$i\" name=\"table[]\" value=\"$i\" $checked > <label for=\"table-de-$i\">table $i</label><br>";
                }

                echo"<button type=\"submit\">Envoyer</button>";

            echo"</form>";

            echo"<div id=\"\">"; // id=\"math\"

                if(isset($_GET["table"])) $table = $_GET["table"]; else $table = ""; // création variable $tableau

                // var_dump($table);

                for ( $i = 1; $i <= 9; $i++) // Boucle de 1 à 9 (toutes les tables de multiplications)
                {
                    if ($table && in_array($i, $table)) // Vérifie si $i existe dans le tableau
                    {
                        tabledemultiplication($i); // Appelle la fonction qui genere la table de mutiplication
                    } 
                }

                // echo"<a href=\"brouillon.php?table=". $table ."\">Se tester sur la table de $table</a>";

            echo"</div>

        </section>";
    }

    function test()
    {
        global $somme, $table, $aleatoire, $tentatives;

        echo"--- test --- </br>";

        echo"<form action=\"index.php\" method=\"get\">";

            echo"<input type=\"hidden\" name=\"op\" value=\"test\" >";
            echo"<select name=\"table\" ONCHANGE=\"location = this.options[this.selectedIndex].value;\">";

                if(!$table) echo"<option value=\"\">-- Choisir la table de multiplication --</option>";

                for ( $i = 1; $i <= 9; $i++)
                {
                    if($i == $table) $selected = "selected"; else $selected = "";
                    echo"<option value=\"index.php?op=test&table=$i\" $selected>Table de $i</option>";
                }

            echo"</select>";

        echo"</form>";

        /* ************************************************************* */
        /* ************************************************************* */
        /* ************************************************************* */

        if(!$somme)
        {
            echo"--- On affiche la question ---<br>";

            for ( $i = 1; $i <= 9; $i++)
            {
                if ($i == $table) 
                {
                    question($table, "", 0);
                }
            }
        }
        else
        {
            echo"--- On affiche la reponse ---<br>";

            $result = $aleatoire * $table;

            if($result == $somme) 
            {
                echo"Gagné";
                question($table, "", 0);
            }
            else
            {
                $tentatives++;

                echo"Perdu ---> Tentative = $tentatives<br>";

                if($tentatives < 3)
                {
                    question($table, $aleatoire, $tentatives);
                }
                else
                {
                    echo"<a href=\"index.php?op=revision&table[]=". $table ."\">Vas réviser la table de $table bonhomme!</a>";
                }



            }
        }
    }

    function question($table, $aleatoire, $tentatives)
    {
        if(!$aleatoire) $aleatoire = rand(0, 9);

        echo"<div>";
                
            echo"<form action=\"index.php\" method=\"get\">";

                echo" Combien font : $aleatoire x $table = ";

                echo"<input type=\"hidden\" name=\"op\" value=\"test\" >";
                echo"<input type=\"hidden\" name=\"aleatoire\" value=\"$aleatoire\">";
                echo"<input type=\"hidden\" name=\"table\" value=\"$table\">";
                echo"<input type=\"number\" name=\"somme\" required>";
                echo"<input type=\"hidden\" name=\"tentatives\" value=\"$tentatives\">";

                echo"<input type=\"submit\" value=\"Envoyer\">";
                echo"<br><br>";

            echo"</form>";

        echo "</div>";
    }

    function tabledemultiplication($table)
    {
        echo"<h2>Table de $table</h2>";
        echo"<div>";

            for ( $i = 1; $i <= 10; $i++)
            {
                echo"$i * $table = ". $i * $table ."<br>";
            }
            
        echo"</div>";
    }

    switch ($op)
    {
        case"accueil":
        accueil();
        break;

        case"result":
        result();
        break;

        case"revision":
        revision();
        break;

        case"test":
        test();
        break;

        default:
        accueil();
        break;
    } 

    include("footer.php");
?>

</html>


<!--Projet Tables de multiplication : (2-3 jours)

Objectif : créer un site avec du PHP qui permet aux utilisateurs de réviser leurs tables de multiplication.

Une page index permettra de se rendre sur 2 pages différentes : une pour voir les tables et une pour tester ses connaissances.

La page pour voir les tables aura un formulaire qui permettra de sélectionner une ou plusieurs tables de multiplication (exemple : celle du 6, du 8, du 9), après soumission de celui-ci : les tables sélectionner apparaîtront en dessous de la page.

La page pour tester ses connaissances aura un formulaire pour sélectionner une seule table cette fait. Une fois cette table sélectionnée vous ferez apparaître un nouveau formulaire (condition PHP pour générer du HTML à combiner avec la méthode du formulaire que vous désirez). Ce formulaire proposera un calcul à faire au hasard (ex : 6 fois 3 = ?) et aura un input dans lequel on pourra rentrer sa réponse. Une fois cette réponse soumise, on affichera si la réponse est bonne ou non et le formulaire proposera un nouveau calcul à faire (ex : 6 fois 8 = ?), etc…

Objectif : Utiliser du PHP pour gérer vos pages (pour ne pas avoir à réécrire notre header et notre footer sur chaque page), utiliser les superglobales PHP : $_ et pourquoi pas découvrir une nouvelle superglobale qui pourrait vous aider pour garder des données le temps de visite du site (session), algorithmie, faire un beau site.

Rendu : sur vos espaces grâce au FTP -->