<?php
// fonction qui transforme la phrase "Mon texte en paramètre" en majuscule et en rouge
echo "Exercice 1<br>";
$phraseParametre = "Mon texte en parametre";
function texteParametre($phraseParametre) {
    if ($phraseParametre == "Mon texte en parametre"){
        $phraseMaj = strtoupper($phraseParametre);
        $coleurRouge = 'red';
        echo "<span style=color:".$coleurRouge.">$phraseMaj</span>";
    }

}

echo texteParametre($phraseParametre);

// un algorithme permettant d’afficher un tableau HTML et qui est trié
echo "<br>Exercice 2<br>";
$capitales = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
);

function afficherTableHTML($capitales){
    ksort($capitales);
    echo "<table border=1><th>Pays </th><th>Capitale </th>";
    foreach($capitales as $pays => $villes ){
        echo "<tr><td>". strtoupper($pays)."</td><td>". $villes."</td></tr>";
    }
    echo "</table>";
}
echo afficherTableHTML($capitales);

// lien hypertexte permettant d’accéder au site d’Elan Formation
echo "<br>Exercice 3<br>";
echo'<a href="https://elan-formation.eu/accueil" target="_blank" >Elan site web</a>';

// un algorithme permettant d’afficher un tableau HTML et qui est trié + avec un colonne liens
echo "<br>Exercice 4<br>";

$capitales2 = array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne"=>"Madrid"
);

function afficherTableHTML2($capitales2){
    ksort($capitales2);
    echo "<table border=1><th>Pays </th><th>Capitale </th><th>Lien wiki </th>";
    foreach($capitales2 as $pays2 => $villes2){
        echo '<tr><td>'. strtoupper($pays2).'</td><td>'. $villes2.'</td><td><a href="https://fr.wikipedia.org/wiki/'.$villes2.' " >Lien</a></td></tr>';    
    }
    echo "</table>";
}
echo afficherTableHTML2($capitales2);