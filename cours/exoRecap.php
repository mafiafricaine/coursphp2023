<?php
//exo1
// $user1 = "Julien";
// $user2 = "Robert";
// $user3 = "Carine";
// $user4 = "Alice";
// $user5 = "David";
// $user6 = "Sophie";
// $user7 = "Pierre";
// $user8 = "Marie";
// $user9 = "Thomas";
// $user10 = "Élise";
$_lsfq = 12;
$ok = true;
$ok2 = TRUE;
echo $ok . " et " . $ok2;

// echo $user1 . "<br>";
// echo $user2 . "<br>";
// echo $user3 . "<br>";
// echo $user4 . "<br>";
// echo $user5 . "<br>";
// echo $user6 . "<br>";
// echo $user7 . "<br>";
// echo $user8 . "<br>";
// echo $user9 . "<br>";
// echo $user10 . "<br>";

//exo2
// $utilisateurs = ["Julien", "Mathieu", "Marc", "Jean", "Paul", "Elie", "Phillipe", "Jerome", "Clovis", "Tertulien"];
// //echo implode(", ", $utilisateurs);
// for ($i = 0; $i < sizeof($utilisateurs); $i++) {
//     if ($i == 0) {
//         echo $utilisateurs[$i];
//     } else {
//         echo ", " . $utilisateurs[$i];
//     }
// }

//exo3
// $nombre = readline("Veuillez introduire un nombre : ");
// if (is_numeric($nombre)) {
//     if ($nombre % 2 == 0) {
//         echo "$nombre est un nombre pair.\n";
//     } else {
//         echo "$nombre est un nombre impair.\n";
//     }
// } else {
//     echo "Vous n'avez pas introduit un nombre.\n";
// }

//exo4
// $mot = readline("Entrez un mot (entrez \"quitter\" pour arrêter) : ");
// $mots = [];
// while ($mot !== "quitter") {
//     $mots[] = $mot;
//     $mot = readline("Entrez un nouveau mot ou entrez \"quitter\" pour arrêter) : ");
// }
// for ($i = 0; $i < sizeof($mots); $i++) {
//     echo $mots[$i] . "\n";
// }

// //exo5
// $mot = readline("Entrez un mot (entrez \"fin\" pour arrêter) : ");
// $mots = [];
// while ($mot !== "fin") {
//     $mots[] = $mot;
//     $mot = readline("Entrez un nouveau mot ou entrez \"fin\" pour arrêter) : ");
// }
// echo "Vous avez introduis " . sizeof($mots) . " mots ou nombres";7

// $age = 17;
// if ($age < 18) {
//     echo "mineur";
// } else {
//     echo "majeur";
// }

// //ternaire
// echo $age < 18 ? "mineur" : "majeur";

// $num = 10;
// echo $num == 10 ? "vrai" : "faux";

// //exo6
// $montant = readline("Entrez un montant : ");
// if ($montant < 100) {
//     echo "Vous n'avez pas assez d'argent.\n";
// } elseif ($montant > 200) {
//     echo "Vous avez dépassé la limite.\n";
// } else {
//     echo "Vous avez bien introduit le montant " . $montant . " entre 100 et 200 euros.\n";
// }


// //exo7
// $vari = readline("Veuillez introduire un nombre (1 : Bonjour, 2 : Aurevoir, 3 : Bien joué, 4 : Bonne nuit, 5 : À tantôt, 6 : Arrête un peu, 7 : 10 + 10 = 20) : ");
// switch ($vari) {
//     case 1:
//         echo "Bonjour";
//         break;
//     case 2:
//         echo "Aurevoir";
//         break;
//     case 3:
//         echo "Bien joué";
//         break;
//     case 4:
//         echo "Bonne nuit";
//         break;
//     case 5:
//         echo "À tantôt";
//         break;
//     case 6:
//         echo "Arrête un peu";
//         break;
//     case 7:
//         echo "10 + 10 = 20";
//         break;
//     default:
//         echo "La terre est carrée";
//         break;
// }


// $users =
//     [
//         [
//             'firstname' => "Julia",
//             'notes' => [50, 90, 87, 100, 91],
//             'sexe' => "F"
//         ],
//         [
//             'firstname' => "Julien",
//             'notes' => [66, 30, 90, 77, 50],
//             'sexe' => "M"
//         ],
//         [
//             'firstname' => "Ana",
//             'notes' => [55, 99, 76, 88, 45],
//             'sexe' => "F"
//         ],
//         [
//             'firstname' => "Vito",
//             'notes' => [90, 90, 99, 100, 100],
//             'sexe' => "M"
//         ],
//         [
//             'firstname' => "Pierre",
//             'notes' => [88, 95, 85, 95, 90],
//             'sexe' => "M"
//         ],

//     ];
// //exo8
// foreach ($users as $user) {
//     if ($user["sexe"] == "M") {
//         echo $user["firstname"] . " you are a " . $user["sexe"] . "\n" . str_repeat("-", 20) . "\n";
//     }
// }

//exo9
// foreach ($users as $user) {
//     if ($user["sexe"] == "F") {
//         echo $user["firstname"]  . ", note max => " . max($user["notes"]) . "/100 \n" . str_repeat("-", 26) . "\n";
//     }
// }

//exo10
// foreach ($users as $user) {
//     echo "Prénom : " . $user["firstname"] . "\n";
//     echo "Tableau de notes inversé : \n[";
//     foreach (array_reverse($user["notes"]) as $note) {
//         echo $note . "/100 ";
//     }
//     echo "]\n";
// }

//exo11
// foreach ($users as $user) {
//     echo $user["firstname"]  . ", moyenne => " . (array_sum($user["notes"]) / sizeof($user["notes"])) . "/100 \n";
// }

// //exo12
// foreach ($users as $user) {
//     echo "Prénom : " . $user["firstname"] . "\n";
//     echo "Tableau de notes : [";
//     foreach ($user["notes"] as $note) {
//         echo $note . "/100 ";
//     }
//     echo "]\n";
//     echo "Genre : " . $user["sexe"] . "\n \n";
// }


// //exo13
// $tab = [];
// $nombre = readline("Entrez un nombre : ");
// while ($nombre != 0) {
//     if (is_numeric($nombre)) {
//         $tab[] = (int)$nombre;
//     } else {
//         echo "Veuillez introduire un nomre !!! \n";
//     }
//     $nombre = readline("Entrez un nombre : ");
// }
// echo "Les elements du tableau : [";
// foreach ($tab as $valeur) {
//     echo $valeur . " ";
// }
// echo " ] \n";
// echo "Les elements du tableau trié par ordre décroissant : [";
// rsort($tab);
// foreach ($tab as $valeur) {
//     echo $valeur . " ";
// }
// echo "] \n";

// for ($i = 0; $i < sizeof($tab); $i++) {
//     if ($tab[$i] % 2 == 0) {
//         echo $tab[$i] . " est un multiple de 2\n";
//     }
//     if ($tab[$i] % 3 == 0) {
//         echo $tab[$i] . " est un multiple de 3\n";
//     }
//     if ($tab[$i] % 5 == 0) {
//         echo $tab[$i] . " est un multiple de 5\n";
//     }
// }
