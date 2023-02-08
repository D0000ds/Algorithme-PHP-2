<?php
// fonction qui transforme la phrase "Mon texte en paramètre" en majuscule et en rouge
echo "Exercice 1<br>";
$phraseParametre = "Mon texte en parametre";
$exemple= "jcscscscvevevegv";

function texteParametre($string) {
   
        $phraseMaj = strtoupper($string);
        $coleurRouge = 'red';
        echo "<span style=color:".$coleurRouge.">$phraseMaj</span>";
    

}

texteParametre($phraseParametre);
texteParametre($exemple);


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
        echo '<tr><td>'. strtoupper($pays2).'</td><td>'. $villes2.'</td><td><a href="https://fr.wikipedia.org/wiki/'.$villes2.' " target="">Lien</a></td></tr>';    
    }
    echo "</table>";
}
echo afficherTableHTML2($capitales2);

// fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés
echo "<br>Exercice 5<br>";

$nomInput = array("Nom", "Prénom", "Ville");

function formulaire($nomInput){
    foreach($nomInput as $info){
        echo '<form action="" method="post">
            <p> '.$info.'<br> <input type="text" name="nom" /></p>
            </form>';
    }
}
echo formulaire($nomInput);

//  fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs
echo "<br>Exercice 6<br>";

$elements = array("Monsieur","Madame","Mademoiselle");

function listeDeroulante($elements){
    echo '<form method="post" action=""><select name="choix" id="depart">';
    foreach($elements as $elementsListe){
        echo '<option value="" name='.$elementsListe.'> '.$elementsListe.' </option>';
    }
    echo '</select></form>';
}
echo listeDeroulante($elements);

// fonction personnalisée permettant de générer des cases à cocher, préciser dans le tableau associatif si la case est cochée ou non
echo "<br>Exercice 7<br>";

$elementsCheckBoxs = array(
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
);

function checkboxs($elementsCheckBoxs){
    foreach($elementsCheckBoxs as $infoCheckBoxs => $valeurCheckboxs){
        echo "<form method='POST' action=''>
        <input type='checkbox' name=".$infoCheckBoxs." ".$valeurCheckboxs.">".$infoCheckBoxs."
        </form>";
    }
}
echo checkboxs($elementsCheckBoxs);

//  fonction personnalisée permettant d’afficher l’image N fois à l’écran
echo "<br>Exercice 8<br>";

$elementsImageRep = array("http://my.mobirise.com/data/userpic/764.jpg" => "4");
function imageRep($elementsImageRep){
    foreach($elementsImageRep as $url => $nombreRep){
        for($i = 0 ; $i < $nombreRep ; $i++){
            echo "<img src=".$url." />";
        }
    }
}
echo imageRep($elementsImageRep);

// fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle")
echo "<br>Exercice 9<br>";

$nomsRadio = array("Monsieur","Madame","Mademoiselle");

function radioBouton($nomsRadio){
    foreach($nomsRadio as $infoRadioBouton){
        echo '<input type="radio" id='.$infoRadioBouton.'
        name='.$infoRadioBouton.' value="">'.$infoRadioBouton.'<br>';
    }
}
echo radioBouton($nomsRadio);

// formulaire d 'inscription
echo "<br>Exercice 10<br>";

function formumaireTotal(){
    $elements = array("Nom", "Prénom", "Ville", "E-mail");
    $elementsSexe = array("Homme","Femme","Autre");
    $elementsChoix = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
    echo formulaire($elements);
    echo listeDeroulante($elementsSexe);
    echo listeDeroulante($elementsChoix);
    echo '<input type="submit">';

}
echo formumaireTotal();

//fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date
echo "<br>Exercice 11<br>";

$dateFormat = strtotime("2018/02/23");

function formatDate($dateFormat){ 
    echo date("l j F Y", $dateFormat);
    echo "<br>";
}

echo formatDate($dateFormat);

// une boucle qui afficher les informations des variables contenues dans le tableau
echo "<br>Exercice 12<br>";
$tableauValeurs = array(
    true,
    "texte",
    10,
    25.369,
    array("valeur1","valeur2"));

function affichageTableau($tableauValeurs){
    foreach($tableauValeurs as $tableauValeurs){
        var_dump($tableauValeurs);
        echo "<br>";
    }
}
echo affichageTableau($tableauValeurs);

// une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un véhicule. 
echo "<br>Exercice 13<br>";

class Voiture
{
    private string $marque;
    private string $modele;
    private int $nbDePortes;
    private int $vitesseDuVehicule;
    private bool $demarrage;
    
   public function __construct(string $marque, string $modele, int $nbDePortes)
   {
    $this->marque = $marque;
    $this->modele = $modele;
    $this->nbDePortes = $nbDePortes;
    $this->vitesseDuVehicule = 0;
    $this->demarrage = FALSE;
   }
   
   public function demarrer()
   {
    if  ($this->demarrage == TRUE){
        echo "Le véhicule $this->marque $this->modele est deja allumé<br>";
    } else {
        $this->demarrage = TRUE;
        echo "Le véhicule $this->marque $this->modele démarre<br>";
    }
   }
   public function getDemarrer()
   {
    if ($this->demarrage == False)
    {
        echo "Le véhicule  $this->marque est à l'arret<br>";
    } else {
        echo "Le véhicule  $this->marque est démarré<br>";
    }
   }
   
   public function setDemarrer($demarrage)
   {
    $this->demarrage = $demarrage;
    if ($this->demarrage == False)
    {
        echo "Le véhicule  $this->marque est à l'arret<br>";
    } else {
        echo "Le véhicule  $this->marque est démarré<br>";
    }
   }

   public function accelerer($vitesseDuVehicule)
   {
    $this->vitesseDuVehicule = $vitesseDuVehicule + $this->vitesseDuVehicule;
    echo "Le véhicule $this->marque $this->modele accélère de $vitesseDuVehicule km / h<br>";
   }
   public function getAccelerer()
   {
    echo "Sa vitesse actuelle est de: $this->vitesseDuVehicule km / h<br>";
   }
   public function setAccelerer($vitesseDuVehicule)
   {
    $this->vitesseDuVehicule = $vitesseDuVehicule;
    echo "Sa vitesse actuelle est de: $this->vitesseDuVehicule km / h<br>";
   }

   public function stopper()
   {
    if ($this->demarrage == FALSE){
        echo "Le véhicule $this->marque $this->modele est deja arretée<br>";
    } else{
        $this->demarrage = FALSE;
        echo "Le véhicule $this->marque $this->modele est stoppé<br>";
    }
   }
   public function getStopper()
   {
    if ($this->demarrage == TRUE)
    {
        echo "Le véhicule  $this->marque est à l'arret<br>";
    } else {
        echo "Le véhicule  $this->marque est démarré<br>";
    }
   }

   public function setStopper($demarrage)
   {
    $this->demarrage = $demarrage;
    if ($this->demarrage == TRUE)
    {
        echo "Le véhicule  $this->marque est à l'arret<br>";
    } else {
        echo "Le véhicule  $this->marque est démarré<br>";
    }
   }

   public function ralentir($vitesseDuVehicule)
   {
    if ($this->vitesseDuVehicule <= 0){
        echo "Le véhicule $this->marque $this->modele est a 0 km / h il est donc impossible de ralentir<br>";
    }else{
        $this->vitesseDuVehicule = $this->vitesseDuVehicule - $vitesseDuVehicule ;
        echo "Le véhicule $this->marque $this->modele ralentit de $vitesseDuVehicule km / h<br>";

    }
   }

   public function info()
   {
    echo "Nom et modèle du véhicule: $this->marque $this->modele<br>";
    echo "Nombre de portes: $this->nbDePortes<br>";
    if ($this->demarrage == False)
    {
        echo "Le véhicule  $this->marque est à l'arret<br>";
    } else {
        echo "Le véhicule  $this->marque est démarré<br>";
    }
    echo "Sa vitesse actuelle est de: $this->vitesseDuVehicule km / h<br>";
   }
}

$v1 = new Voiture("Peugeot","408",5);
$v1->accelerer(0);
$v1->ralentir(10);
$v2 =new Voiture("Citroën","C4",3);
$v2->demarrer(TRUE);
$v2->accelerer(50);


// classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie)
echo "<br>Exercice 14<br>";

class VoitureTwo 
{ 
    protected $marqueTwo; 
    protected $modeleTwo;

    public function __construct($marqueTwo, $modeleTwo) 
    { 
        $this->marqueTwo = $marqueTwo; 
        $this->modeleTwo = $modeleTwo; 
    } 

    public function getMarque() 
    { 
        echo "$this->marqueTwo<br>"; 
    } 
    public function setMarque($marqueTwo) 
    { 
        $this->marqueTwo = $marqueTwo; echo "$this->marqueTwo<br>"; 
    } 

    public function getModele() 
    { 
        echo "$this->modeleTwo<br>";
    } 
    public function setModele($modeleTwo) 
    { 
        $this->modeleTwo = $modeleTwo; 
        echo "$this->modele2<br>"; 
    } 

    public function getInfos() 
    { 
        echo "$this->marqueTwo $this->modeleTwo"; 
    }
    
    public function __toString()
    {
        return "$this->marqueTwo $this->modeleTwo";
    }
} 

class VoitureElec extends VoitureTwo 
{ 
    private $autonomie; 
    
    public function __construct($marqueTwo, $modeleTwo, $autonomie) 
    { 
        parent::__construct($marqueTwo, $modeleTwo); 
        $this->autonomie = $autonomie; 
    } 

    public function getAutonomie() 
    { 
        echo "$this->autonomie<br>"; 
    } 
    public function setAutonomie($autonomie) 
    { 
        $this->autonomie = $autonomie;
        echo "$this->autonomie<br>"; 
    } 
    
    public function getInfos() 
    { 
        parent::getInfos();
        echo " et $this->autonomie km d'autonomie";
     
    }
    public function __toString()
    {
        return parent::__toString()." et $this->autonomie km d'autonomie";
        
    }

} 

$v3 = new VoitureTwo("Peugeot","408"); 
echo $v3."<br>";

$v4 = new VoitureElec("BMW","I3",100); 
echo "<br>".$v4;
