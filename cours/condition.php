<?php
// $note = 10;
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else {
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }


// if ($note >= 10) {
//     if ($note == 10) {
//         echo "Vous avez tout juste la moyenne";
//     } else {
//         echo "Bien joué vous avez réussi !";
//     }
// } else {
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }


// if ("ok" == "ok") {
//     echo "Ok est egale a ok";
// }

// $note = readline('Entrez une note : ');
// if ($note >= 10) {
//     if ($note == 10) {
//         echo "Vous avez tout juste la moyenne";
//     } else {
//         echo "Bien joué vous avez réussi !";
//     }
// } else {
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }

//exo  1 pdf 2
// $age = 22;
// if ($age > 18) {
//     echo 'Vous êtes un adulte et vous avez ' . $age . ' ans';
// } elseif ($age < 18) {
//     echo 'Vous avez ' . $age . ' ans et n\'êtes pas encore un adulte';
// } else {
//     echo 'Vous avez ' . $age . ' ans. Bienvenu dans l\'age adulte';
// }

//exo2 pdf 2
// $age = readline("Veuillez introdduire votre âge ? ");
// if ($age > 18) {
//     echo 'Vous êtes un adulte et vous avez ' . $age . ' ans';
// } elseif ($age < 18) {
//     echo 'Vous avez ' . $age . ' ans et n\'êtes pas encore un adulte';
// } else {
//     echo 'Vous avez ' . $age . ' ans. Bienvenu dans l\'age adulte';
// }

//exo3 pdf2
// $gender = "M";
// if ($gender == "M") {
//     echo "Vous êtes un homme";
// } else if ($gender == "F") {
//     echo "Vous êtes une femme";
// } else if ($gender == "X") {
//     echo "Vous êtes non binaire";
// } else {
//     echo "Vous n'êtes pas humain";
// }

//exo4 pdf2
// echo "\n";
// $gender = readline("Veuillez introduire votre genre (M,F ou X) : ");
// if ($gender == "M") {
//     echo "Vous êtes un homme";
// } else if ($gender == "F") {
//     echo "Vous êtes une femme";
// } else if ($gender == "X") {
//     echo "Vous êtes non binaire";
// } else {
//     echo "Vous n'êtes pas humain";
// }


// $note = (float)readline('Entrez votre note : ');
// if ($note > 10) {
//     echo "Bien joué vous avez réussi !";
// } else if ($note === 0) {
//     echo "Tu es nul";
// } else {
//     echo "C'est dommage, vous feriez mieux la prochaine fois";
// }

// $action = (int)readline("Entrez une action : ('1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
// if ($action === 1) {
//     echo "Vous attaquez";
// } else if ($action === 2) {
//     echo "Vous défendez";
// } elseif ($action === 3) {
//     echo "Vous vous soignez";
// } elseif ($action === 4) {
//     echo "Vous fuyez";
// } elseif ($action === 5) {
//     echo "Vous ne faites rien";
// } else {
//     echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

// $action = (int)readline("Entrez une action : (1 : Attaquer, 2 : Defendre, 3 : Se soigner, 4 : Fuir, 5 : Ne rien faire) : ");
// switch ($action) {
//     case 1:
//         echo "Vous attaquez !";
//         break;
//     case 2:
//         echo "Vous défendez !";
//         break;
//     case 3:
//         echo "Vous vous soignez !";
//         break;
//     case 4:
//         echo "Vous fuyez !";
//         break;
//     case 5:
//         echo "Vous ne faites rien !";
//         break;
//     default:
//         echo "Relancez le programme et Entrez une action 1,2,3,4 ou 5";
// }

//exo 1 switch
$jour = (int)readline("Entrez un jour (1 : Lundi, 2 : Mardi, 3 : Mercredi, 4 : Jeudi, 5 : Vendredi, 6 : Samedi, 7 : Dimanche) : ");
switch ($jour) {
    case 1:
        echo "Nous sommes Lundi !";
        break;
    case 2:
        echo "Nous sommes Mardi !";
        break;
    case 3:
        echo "Nous sommes Mercredi !";
        break;
    case 4:
        echo "Nous sommes Jeudi !";
        break;
    case 5:
        echo "Nous sommes Vendredi !";
        break;
    case 6:
        echo "Nous sommes Samedi !";
        break;
    case 7:
        echo "Nous sommes Dimanche !";
        break;
    default:
        echo "Relancez le programme et Entrez une action 1,2,3,4,5,6 ou 7";
}
