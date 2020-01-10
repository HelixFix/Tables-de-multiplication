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
        <section>
            <div id="twoBox">
                <div id="boxGauche" class="box">
                    <h2>Réviser vos tables de multiplication</h2>
                    <a href="revision.php"><img src="images/images.jpg" alt="feuille table de multiplication"></a>
                    <p>La page 1 te permet de te familiariser avec les tables,<br> donc regarde, lis à haute voix et répète.
                        <br>Si tu crois que tu peux t'en souvenir, <br>il est temps de tester tes connaissances à la page 2.
                    </p>
                </div>

                <div id="boxDroite" class="box">
                    <h2>Tester vos aptitudes</h2>
                    <a href="test.php"><img src="images/mathTest.png" alt="math test"></a>
                </div>
            </div>
        </section>
    </main>
</body>

<?php
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