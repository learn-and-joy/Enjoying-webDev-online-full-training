Qu'est-ce qu'un fichier PHP ?
    Les fichiers PHP peuvent contenir du texte, du HTML, du CSS, du JavaScript et du code PHP
    Le code PHP est exécuté sur le serveur(apache) et le résultat est renvoyé au navigateur en tant que code HTML brut
    Les fichiers PHP ont l'extension ".php"

Que peut faire PHP ?
    PHP peut générer du contenu de page dynamique
    PHP peut créer, ouvrir, lire, écrire, supprimer et fermer des fichiers sur le serveur
    PHP peut collecter des données de formulaire
    PHP peut envoyer et recevoir des cookies
    PHP peut ajouter, supprimer, modifier des données dans votre base de données
    PHP peut être utilisé pour contrôler l'accès des utilisateurs
    PHP peut crypter les données
    Avec PHP, vous n'êtes pas limité à la sortie HTML. Vous pouvez produire des images, des fichiers PDF et même des films Flash. Vous pouvez également sortir n'importe quel texte, tel que XHTML et XML.

Syntax:
- Creer un fichier avec une extention .php dans www contenant:
    <!DOCTYPE html>
    <html>
    <body>

    <h1>My first PHP page</h1>

        <?php
        echo "Hello World!";
        ?>

    </body>
    </html>

- lancer: http://localhost/learnandjoy-enjoyingwebdev/session_nine/cours/php/bases_du_php.php


PHP est sensible à la moitié de la casse :
    Sensible à la casse (défini par l'utilisateur et défini par PHP)
        - variables
        - constantes
        - clés de tableau
        - propriétés de classe
        - constantes de classe

    Insensible à la casse (défini par l'utilisateur et défini par PHP)
        - les fonctions
        - constructeurs de classe
        - méthodes de classe
        - mots-clés et constructions (if, else, null, foreach, echo etc.)


Var declaration:
    $var = "batata";

    <!DOCTYPE html>
    <html>
    <body>
    
        <?php
        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
        ?>
    
    </body>
    </html>

PHP Comments:
<?php

// Ceci est un commentaire sur une seule ligne

# Ceci est également un commentaire sur une seule ligne

/*
Ceci est un bloc de commentaires de plusieurs lignes
qui s'étend sur plusieurs
lignes
*/

?>

PHP echo and print Statements:
    echo et print sont plus ou moins les mêmes. Ils sont tous deux utilisés pour sortir des données à l'écran.

    Les différences sont minimes : echo n'a pas de valeur de retour tandis que print a une valeur de retour de 1 donc il peut être utilisé dans des expressions. echo peut prendre plusieurs paramètres (bien qu'une telle utilisation soit rare) tandis que print peut prendre un argument. echo est légèrement plus rapide que print.

<?php

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
print $x + $y;
echo $x + $y;

?>

PHP Data Types: php pocede un typage dynamique: 
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource

pour detecter le type d'une variable:
<?php

$x = 5985;
var_dump($x);
?>

PHP Conditional Statements:
    if (condition) {
    code to be executed if this condition is true;
    } elseif (condition) {
    code to be executed if first condition is false and this condition is true;
    } else {
    code to be executed if all conditions are false;
    }

<?php
$t = date("H");
//https://www.php.net/manual/fr/function.date.php

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

The PHP switch Statement:
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>

PHP Loops:
while Loop:
    <?php
    $x = 0;

    while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
    }
    ?>

do while Loop:
    <?php
    $x = 1;

    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    ?>

for Loop:
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?>

foreach Loop:
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>

PHP Functions:
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>

PHP Arrays:
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>

PHP Associative Arrays (key value): 
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>





repense quiz -5:

<?php
  $date = date("d");
  echo $date;
   if($date<15){
    echo "Debut de mois";
  } else{
    echo "Fin de mois";
  }
?>