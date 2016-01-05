<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Films à voir</title>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
    </head>
        
    <body>
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
    </body>
</html>
