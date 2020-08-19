<?php ob_start(); ?>

<h2>Liste des films</h2>

<a class="uk-button uk-button-primary" href="index.php?action=addFilm">Ajouter un film</a>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>REALISATEUR</th>
            <th>NOTE</th>
            <th>ANNEE</th>
            <th>GENRES</th>
            
        </tr>
    </thead>
    <tbody>

<?php

    while($film = $films->fetch()) { 
        
        $stars = str_repeat("<span class='fa fa-star'></span>", $film["note_film"] );
    $starsnull = str_repeat("<img class ='unchecked'src ='https://github.com/9nnative/SQL/blob/master/PDO-Cinema-Correction/images/empty_starv2.png?raw=true'>", 5 - $film["note_film"] );
    
    ?>
        <tr>
            <td>
                <a href="index.php?action=detailFilm&id=<?= $film["id_film"] ?>"><?= $film["titre_film"] ?></a>
            </td>
            <td><?= $film["rea"] ?></td>
            <td><?= $stars.$starsnull ?></td>
            <td><?= $film["annee_film"] ?></td>
            <td><?= $film["genres"] ?></td>
            
            <td>
                        <a href="index.php?action=editGenres&id=<?= $genre["id_genre"] ?>">Editer</a>
                        <a href="index.php?action=deleteGenres&id=<?= $genre["id_genre"] ?>">Supprimer</a>
                    </td>
        </tr>

<?php }

$films->closeCursor();

?>
    </tbody>
</table>

<?php



$titre = "Liste des films";
$contenu = ob_get_clean();
require "views/template.php";

?>