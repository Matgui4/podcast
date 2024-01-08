<?php
declare(strict_types = 1);
//--------------------02/01/2024
// je commente sur une ligne, eh oui !

/*sur 2 ligne mtn olala que je
suis fort !
*/
echo 'Hello world </br>';

$name = "Mathis2nice";
echo $name;

//const avec define()
// define('NAME', 'Mathis');
// const NAME = 'Mathis'
// NAME ='MAAA'; Pour voir les erreurs
// echo NAME;

//les types de valeurs
$name = 'Mathis';
$town = "Alençon";

//difference
$simpleQuotes = '$name enseigne à $town';
$doubleQuotes = "$name enseigne à $town";

printf("%s enseigne à %s", $name, $town);

//nb
$age = 18;
$taille = 1.63; //un point pour la virgule
$size = 182e-2;
$age = 0b11111; //31 en binaire
$temperature = -8_000_000; //lisibilité
var_dump($age, $town); //origine de la variable debugging

//booleen
$isWizard = true;
$isMuggle = false;

//tableau
$names = [
    'Mathis',
    'Henry',
    'Harry',

];

// tableau associatif
$teacher = [
    'name' => 'Mathis',
    'mail' => 'Octogone@abadakor.cool',
    'numero' => '3630',
];
$teacher['mail'] = 'fjezkfne@fezfe.fezfe';
var_dump($names, $teacher['name']);

$students = [
    [
        'name' => 'Mathis',
        'mail' => 'Octogone@abadakor.cool',
        'numero' => '3630',
    ],
    [
        'name' => 'Mathis',
        'mail' => 'Octogone@abadakor.cool',
        'numero' => '3630',
    ],
];
var_dump($students[1]['name']);

//----------------------03/01/2024
//opérateur
$firstName = "Henry";
$lastName = "Podbeur";

$withDoubleQuotes = "$firstName $lastName";

$withSingleQuotes = $firstName . ' ' . $lastName;

var_dump($withSingleQuotes);

$withSprintf = sprintf('%s %s', $firstName, $lastName);

//opérateur arithmetique
$nb1 = 31;
$nb2 = 18;
$result = $nb1 + $nb2;
$result = $nb1 - $nb2;
$result = $nb1 * $nb2;
$result = $nb1 / $nb2;
$result = $nb1 % $nb2; // voir si c'est paire et impaire
var_dump($result);

//incrementation et decrementation
$i = 10;
var_dump(
    $i++, //retourne 1 puis incremente 
    ++$i, //incremente 1 puis le retrourne
);

//operateur de comparaison

$nb1 = 5;
$nb2 = 10;

var_dump(
    $nb1 > $nb2, //retourne du booleen
    $nb1 >= $nb2,
    $nb1 == $nb2, //COMPARAISON EN VALEUR seulement
    $nb1 === $nb2, //egalité strict en valeur et en type
    $nb1 != '5', // verifier une difference 
    $nb1 !== '5', // vrifier la dif strict, type et valeur egale
);

//operateur logique
var_dump(
    $nb1 >= 0 && $nb1 <= $nb2,
    $nb1 >= 0 && $nb1 <= $nb2 || $nb1 > 25,
    $nb1 >= 0 && ($nb1 <= $nb2 || $nb1 > 25), //parenthese pour accorder une priorité
    !($nb1 >= 0 && ($nb1 <= $nb2 || $nb1 > 25)), // avoir l'inverse


);

//ooperateur null coalescing
$name = null;
$default = 'Henry Podbeur';

var_dump(
    $name ?? 'Boby'
);

//raccourci pour l'ensemble des operateurs

$nb1 = $nb1 + 12;
$nb1 += 12;

$hello = 'bonjour';
$hello = $hello . 'Boby';
$hello .= 'Boby';

//expression conditionnel
$nb1 = 10;

if ($nb1 > 8) { // pas besoin de mettre le else si il y en a pas besoin
    echo 'Dans le if<br>';
} elseif ($nb1 > 4) {
    //lordre est donc important
    echo 'dans le elseif<br>';
} else {
    //par defaut
    echo 'dans le else<br>';
}

echo 'En dehors de la structure conditionnelle';

//operateur tertaire
$students = [];
$messages = $students ? 'Liste des etudiants' : 'Ancun etudiant';

if ($students) {
    $messages = 'Liste des etidiants';
} else {
    $messages = 'aucun etudiant';
}

//la boucle for

for ($i = 0; $i < 10; $i++) {
    if ($i === 3) {
        continue;
    } elseif ($i === 8) {
        break;
    }
    echo $i . '<br>';
}

//la boucle foreach

$students = [
    [
        'name' => 'Henry',
        'mail' => 'fzefezf@gregrez.fr',
    ],
    [
        'name' => 'Harry',
        'mail' => 'fzefezf@gregrez.fr',
    ],
    [
        'name' => 'Boby',
        'mail' => 'fzefezf@gregrez.fr',
    ],
];
//parcourir les tableaux, pas besoin de gerer l'indice nous meme
foreach ($students as $key => $student) { //key pour avoir un indice
    echo 'Indice ' . $key . ':<br>';
    echo 'Nom : ' . $student['name'] . '<br>';
    echo 'Email : ' . $student['mail'] . '<br>';
}

//la boucle while quand on ne sait pas cb de boucle on doit faire

$nb = 10;
while ($nb > 6) {
    $nb -= 1.3;
    echo $nb . '<br>';
}

//l'instruction switch
$role = 'admin';

switch ($role) {
    case 'admin';
        echo 'vous avez tous les droits<br>';
        break;
    case 'user':
        echo 'vous avez des droits limités <br>';
        break;

    default:
        echo 'qui etes-vous ? <br>';
}

// lexpression match (expression donc valeur)

$role = 'admin';
$message = match ($role) { //CEST UNE AFFECTATION DONC METTRE ";"
    'admin', 'owner' => 'vous avez tous les droits<br>',
    'user', 'follower' => 'vous avez tous les droits mais limités<br>',
    default => 'qui etes-vous ? <br>'
};

//fonction
//definition de la fonction
function hello(string|array $name = 'ezfzafez', string $message = null) //typage cbaine de caractere et tableau
{ //fonction avec parametre et valeur par defaut
    
    if(is_array($name)){
        $name = implode(', ', $name);
    }
    return $message ? 'hello world' . $name.' ' .$message : 'hello world' . $name;
}
//appel de la fonction
$message = hello('$var'); //var = argument
$message = hello();
$message = hello(
    ['steven', 'boby', 'fezfzefez'],
    'coment ça va ?',

);


echo $message;



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php phpinfo() ?> -->
    <button id="btn">Changer l'ordre</button>
<div class="item" style="order: 1;">Div 1</div>
<div class="item" style="order: 2;">Div 2</div>
<div class="item" style="order: 3;">Div 3</div>

<script>
var btn = document.getElementById('btn');
var items = Array.from(document.querySelectorAll('.item'));
var direction = 'asc'; // initialiser à ascendant

btn.addEventListener('click', function() {
   if (direction === 'asc') {
       items.reverse(); // inverser l'ordre si il est actuellement croissant
       direction = 'desc'; // changer la direction à décroissant
   } else {
       items.sort((a, b) => a.style.order - b.style.order); // trier par ordre croissant
       direction = 'asc'; // changer la direction à croissant
   }

   items.forEach(function(item, index) {
       item.style.order = index + 1; // mettre à jour l'ordre de chaque élément
   });
});
</script>

</body>

</html>