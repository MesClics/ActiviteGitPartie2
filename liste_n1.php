<?php

    include('header.php');

    echo'<h3 class="titre_liste">Films vus en '. (date('Y')-1) .'</h3>
        <ul class= "liste_films">
            <li class="film"><span class="titre_film">Star Wars - Episode II</span> (<span class="real_film">>George Lucas</span>)</li>
            <li class="film"><span class="titre_film">Star Wars - Episode I</span> (<span class="real_film">George Lucas</span>)</li>
            <li class="film"><span class="titre_film">Seul sur Mars (The Martian)</span> (<span class="real_film">Ridley Scott</span>)</li>
            <li class="film"><span class="titre_film">Mia madre</span> (<span class="real_film">Nanni Moretti</span>)</li>
            <li class="film"><span class="titre_film">Le Pont des espions (Bridge of spies)</span> (<span class="real_film">Steven Spelberg</span>)</li>
        </ul>';    

    include('footer.php');

?>
