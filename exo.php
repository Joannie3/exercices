<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo ("<br><br><br>====== EXO n°2 ======<br><br>");
echo ("Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables <br>");

/* Code à ajouter ci-dessous */

$variable1 = 5;
$variable2 = 10;

$addition = $variable1+$variable2;
echo 'addition '.$addition.'<br>';

$soustraction = $variable1-$variable2;
echo 'soustraction '.$soustraction.'<br>';

$multiplication = $variable1*$variable2;
echo 'multiplication '.$multiplication.'<br>';


echo ("<br><br><br>====== EXO n°3 ======<br><br>");
echo ("Prendre une variable en php et affecter une chaine de caracètere à cette variable et l'afficher <br>");

/* Code à ajouter ci-dessous */
$variable3 = 'Bonjour à tous';
echo $variable3;

echo ("<br><br><br>====== EXO n°4 ======<br><br>");
echo ("Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables) <br>");
$a = "coucou";
$b = "petite perruche";
/* Code à ajouter ci-dessous */

echo $a." ".$b;


echo ("<br><br><br>====== EXO n°5 ======<br><br>");
echo ("Permutter le contenu de la variable a et de la variable b <br>");
$a = 20 ;
$b = 30 ;
/* Code à ajouter ci-dessous */

$z = $a;
$a = $b;
$b = $z;

echo 'valeur a '.$a.' (30) et valeur b '.$b.' (20)';

echo ("<br><br><br>====== EXO n°6 ======<br><br>");
echo ("A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités) <br>");
$a = 20 ;
$b = 30 ;
/* Code à ajouter ci-dessous */

if ($a > $b){echo'A est plus grand que B';}

elseif ($a == $b){echo'A est egal à B';}

else {echo'B est plus grand que A';}



echo ("<br><br><br>====== EXO n°7 ======<br><br>");
echo ("faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand <br>");
$a = 20 ;
$b = 30 ;
/* Code à ajouter ci-dessous */

$valeursup = max($a, $b);
echo 'la valeur sup est '.$valeursup.'<br>';


echo ("<br><br><br>====== EXO n°8 ======<br><br>");
echo ("afficher un nombre aléatoire à partir de la fonction rand() <br>");
/* Code à ajouter ci-dessous */

$aleatoire = rand(1, 10);
echo $aleatoire;

echo ("<br><br><br>====== EXO n°9 ======<br><br>");
echo ("afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle <br>");
/* Code à ajouter ci-dessous */


$aleatoire2 = rand(1, 100);
    for ($i=1; $i<=10; $i++) {
    echo ' chiffre aleatoire '.$aleatoire2.'<br>';
    $aleatoire2 = rand(1, 100); 
}



echo ("<br><br><br>====== EXO n°10 ======<br><br>");
echo ("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90 <br>");
/* Code à ajouter ci-dessous */


$aleatoire3 = rand(1, 100);


while ($aleatoire3 <= 90)
{
        echo ' '.$aleatoire3.' <br>';

    $aleatoire3 = rand(1, 100);
}
    if ($aleatoire3 > 90)
    {

        echo ' '.$aleatoire3.' <br>';

    }


echo ("<br><br><br>====== EXO n°11 ======<br><br>");
echo ("Afficher une variable entrée manuellement par l'utilisateur<br>");
/* Code à ajouter ci-dessous */

if (isset($_GET['action']))
{

if($_GET['action'] == 'variable')
{
    $valeur = $_POST['valeur'];

    echo ' l utilisateur a rentré la valeur '.$valeur.' ';

}
}

?>

<form action="exo.php?action=variable" method="POST">

<input type="text" value="" name="valeur"/>

<input type="submit" value="Valider"/>

</form>








<?php
echo ("<br><br><br>====== EXO n°12 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer un nombre entier et afficher si ce chiffre est pair ou impair<br>");
/* Code à ajouter ci-dessous */
if (isset($_GET['action']))
{

if($_GET['action'] == 'chiffre')
{
    $valeur = $_POST['chiffre'];

    if ($valeur%2 == 1)
    {
        echo ''.$valeur.' le chiffre est impair';
    }

    else
    {
        echo ''.$valeur.' le chiffre est pair';
    }

}
}
?>

<form action="exo.php?action=chiffre" method="POST">

<input type="number" value="" name="chiffre"/>

<input type="submit" value="Valider"/>

</form>


<?php
echo ("<br><br><br>====== EXO n°13 ======<br><br>");
echo ("Même exercice que n°12, mais rajouter un message d'erreur si l'utilisateur n'entre pas un nombre entier<br><br><br>");
/* Code à ajouter ci-dessous */

if (isset($_GET['action']))
{

if($_GET['action'] == 'entier')
{
    $valeur = $_POST['chiffre'];

if (ctype_digit($valeur))
{
    echo 'le nombre est un entier<br><br>';
}

else {echo'<font color="red">erreur merci de rentrer un nombre entier</font><br><br>';}

}
}

?>

<form action="exo.php?action=entier" method="POST">

Merci de rentrer un nombre entier : <input type="text" value="" name="chiffre"/>

<input type="submit" value="Valider"/>

</form>


<?php
echo ("<br><br><br>====== EXO n°14 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer une année, et afficher si cette année est sextile ou bissextile<br>");
/* Code à ajouter ci-dessous */

echo ("<br><br><br>====== EXO n°15 ======<br><br>");
echo ("Demander à l'utilisateur d'entrer une date, et afficher si cette date est valide ou non<br>");
/* Code à ajouter ci-dessous */




?>
    
</body>
</html>