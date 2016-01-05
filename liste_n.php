<?php
    include('header.php');

    echo'<h3 class="titre_liste">Films vus en '. date('Y') .'</h3>
        <ul class= "liste_films">
            <li class="film"><span class="titre_film">Les Chaussons rouges (The red shoes)</span> (<span class="real_film">Michael Powell, Emeric Pressburger</span>)</li>
            <li class="film"><span class="titre_film">Le Voyeur (Peeping Tom)</span> (<span class="real_film">Michael Powell</span>)</li>
            <li class="film"><span class="titre_film">Star Wars - Episode III</span> (<span class="real_film">George Lucas</span>)</li>
            <li class="film"><span class="titre_film">Public Ennemies</span> (<span class="real_film">Michael Mann</span>)</li>
        </ul>';    

    include('footer.php');
?>
