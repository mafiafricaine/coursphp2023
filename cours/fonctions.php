<?php
// $tabIndexe = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'sexe' => 'F',
//     'dateOfBirth' => "24/10/1995",
//     'city' => 'London'
// ];
// var_dump($tabIndexe);

//exo1 pdf4
// $notes = [18, 13, 5, 9, 10];
// echo "Votre tableau est : [ ";
// foreach ($notes as $note) {
//     echo $note . " ";
// }
// echo "]<br>Voici la valeur max : " . max($notes);

//exo2 pdf4
// $input = readline("Veuillez entrer un mot : ");
// $palindrome = strrev($input);
// if ($palindrome === $input) {
//     echo "Votre mot est un palindrome et donne \"" . $palindrome . "\" à l'envers";
// } else {
//     echo "Votre mot n'est pas un palindrome et donne \"" . $palindrome . "\" à l'envers";
// }

//exo3 pdf4
// $input = readline("Veuillez entrer un mot : ");
// $input = strtolower($input);
// $palindrome = strrev($input);
// if ($palindrome === $input) {
//     echo "Votre mot est un palindrome et donne \"" . $palindrome . "\" à l'envers";
// } else {
//     echo "Votre mot n'est pas un palindrome et donne \"" . $palindrome . "\" à l'envers";
// }

//version amélioré
// $input = strtolower(readline("Veuillez entrer un mot : "));
// if (strrev($input) === $input) {
//     echo "Votre mot est un palindrome et donne \"" . $input . "\" à l'envers";
// } else {
//     echo "Votre mot n'est pas un palindrome et donne \"" . strrev($input) . "\" à l'envers";
// }

//exo4 pdf4
// $notes = [18, 13, 5, 9, 10];
// echo array_sum($notes) / sizeof($notes);

//exo5 pdf4
// $notes = [18, 13, 5, 9, 10];
// echo "Votre tableau est : [ ";
// foreach ($notes as $note) {
//     echo $note . " ";
// }
// echo "]<br>Voici votre tableau inversé : [ ";
// $notesInverse = array_reverse($notes);
// foreach ($notesInverse as $note) {
//     echo $note . " ";
// }
// echo "]";

//exo6 pdf4
$notes = [18, 13, 5, 9, 10];
echo "Votre tableau est : [ ";
foreach ($notes as $note) {
    echo $note . " ";
}
echo "]<br>Voici votre tableau trié de manière croissante : [ ";
asort($notes);

foreach ($notes as $note) {
    echo $note . " ";
}
echo "]";

//exo7 pdf4
$notes = [18, 13, 5, 9, 10];
echo "Votre tableau est : [ ";
foreach ($notes as $note) {
    echo $note . " ";
}
echo "]<br>Voici votre tableau trié de manière décroissante : [ ";
rsort($notes);

foreach ($notes as $note) {
    echo $note . " ";
}
echo "]";
