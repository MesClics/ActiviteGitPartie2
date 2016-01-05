<?php
    echo '<div id="logo">
            <h1>Mes Films</h1>
            <h2>Liste des films vus au ' . date('d M Y') . '</h2>
        </div>
        
        <ul id="menu">
            <li><a href="liste_n.php">films vus en ' . date('Y') .'</a></li>
            <li><a href="liste_n1.php">films vus en ' . (date('Y')-1) .'</a></li>
        </ul>';
    
?>