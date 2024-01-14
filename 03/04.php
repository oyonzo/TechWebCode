<?php
    // exo 3.4, boucle et variables locales/globales

    // compléter le code : il y a 3 TODO

    include_once('../UTILS/utils.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" media="screen" type="text/css"
              title="style d" href="04.css" />
    </head>
    <body>
        <h1>exo 3.4, boucle et variables locales/globales</h1>
        
        <div>
            <h2>a) boucle <code>for</code> et variables locales</h2>
            <?php
                // TODO : juste tester le code
                for ($i = 0; $i < 10; $i ++)
                {
                    echo 'ligne ' . $i . ' : ';
                    afficheLigne($i);
                }

                function afficheLigne($numLigne)
                {
                    for ($i = 0; $i < 10; $i ++)
                        echo $numLigne * $i . ' ';
                    echo EOLbr;
                }
            ?>
        </div>

        <div>
            <h2>b) idem avec une table</h2>
            <?php
                // TODO : faire le même affichage, mais avec les balises
                //        table, th, td, voire thead et tbody
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<th></th>';
                for ($i = 0; $i < 10; $i ++) {
                    echo '<th>';
                    echo $i;
                    echo '</th>';
                }
                echo '<tr>';
                echo '</thead>';

                echo '<tbody>';
                for ($i = 0; $i < 10; $i ++)
                {
                    echo '<tr>';
                    echo '<th>';
                    echo 'ligne ' . $i . ' : ';
                    echo '</th>';
                    afficheLigneHTML($i);
                    echo '</tr>';
                }
                echo '<tbody>';
                echo '</table>';
                function afficheLigneHTML($numLigne)
                {
                    for ($i = 0; $i < 10; $i ++)
                        echo '<td>' . $numLigne * $i . '</td>';
            }
            ?>
        </div>
        
        <div>
            <h2>c) variable globale</h2>
            <?php
                // TODO : accéder à la variable $cri dans la fonction
                $cri = 'miaou';
                ecoute();
                function ecoute()
                {
                    global $cri;
                    echo $cri . EOLbr;
                }
            ?>
        </div>
    </body>
</html>
