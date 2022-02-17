// Prendre une variables en javascript (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher

console.log("1 - Prendre une variables en javascript (la déclaration d'une variable se fait avec un $ en php), affecter une valeur à cette variable et l'afficher");

let variable1 = '5';

console.log(variable1);


//Prendre deux variables en js, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables

console.log("2 - Prendre deux variables en php, affecter une valeur à chaque variable, afficher le résultat de l'addition, de la soustraction, et de la multiplication de ces deux variables");

let variable2 = 5;
let variable3 = 3;
let resultat = variable2 + variable3;

console.log("Mon addition : "); 
console.log(resultat); 

resultat = variable2 - variable3;
console.log("Soustraction : "); 
console.log(resultat); 

resultat = variable2 * variable3;
console.log("Multiplication : "); 
console.log(resultat); 


// Prendre une variable en js et affecter une chaine de caracètere à cette variable et l'afficher
console.log("3 - Prendre une variable en js et affecter une chaine de caracètere à cette variable et l'afficher");

let variable4 = "Bonjour à tous";
console.log(variable4); 

console.log("4 - Afficher à l'aide des deux variables déjà défini le texte contenu dans les variables à l'aide d'une concaténation (un espace est souhaitée entre les deux variables)")

let variableA = "Coucou";
let variableB = "petite perruche";
let variableC = variableA + " " + variableB;


console.log(variableA + " " + variableB);
console.log(variableC);

console.log("5 - Permutter le contenu de la variable a et de la variable b");

let variableD = "A";
let variableE = "B";

let variableF = variableD; 

variableD = variableE; 
variableE = variableF; 

console.log(variableD + " " + variableE);

console.log("6 - A partir d'un algorithme, définir dans tout les cas possibles quels chiffre est le plus grand (vous pouvez changer les valeurs des variables a et b pour tester toutes les possiblités)");

var chiffre1 = 15;
var chiffre2 = 5;

if (chiffre1 > chiffre2){
    console.log("chiffre1 est plus grand que chiffre2");
}
else if (chiffre2 > chiffre1){
    console.log("chiffre2 est plus grand que chiffre1");
}
else{
        console.log("chiffre1 est égal à  chiffre2");
    }

console.log("7 -faire une fonction qui prend en parametres deux variables ( a et b par exemple ) et qui définis quel chiffre est le plus grand");

var tonton = 60;
var tata = 20;


function comparaison(a, b)
{
    var resultat = "a definir";

    if (a > b){
        resultat = "chiffre1 est plus grand que chiffre2";
    }
    else if (b > a){
         resultat = "chiffre2 est plus grand que chiffre1";
    }
    else{
         resultat = "chiffre1 est égal à  chiffre2";
        }

        return resultat;

}

var result = comparaison(tonton, tata);
console.log(result);

console.log("8 -afficher un nombre aléatoire à partir de la fonction rand()");

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }

var aleatoire = getRandomInt(100);
console.log(aleatoire);

console.log("8 -afficher 10 nombre aléatoire à partir de la fonction rand() en utilisant une boucle");

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }

 var aleatoire2 =  getRandomInt(100);

for (i=0; i<10; i++)
{

    var aleatoire2 =  getRandomInt(100);
    console.log(aleatoire2);
}

console.log("afficher des nombres aléatoires compris entre 1 et 100 et s'arreter quand le dernier chiffre est >90");

var aleatoire3 = getRandomInt(100);


while (aleatoire3 < 90)
{

    console.log(aleatoire3);

    aleatoire3 = getRandomInt(100);

}
if (aleatoire3 >= 90) { console.log(aleatoire3);}