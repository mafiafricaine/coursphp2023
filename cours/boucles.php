<?php
//Boucle Tantque 

// $nombre = (int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
// while ($nombre !== 0) {
//     echo "Voici votre nombre : " . $nombre . "\n";
//     $nombre = (int)readline("Entrez un nombre (entrez 0 pour arrêter) : ");
// }

// $nombre = (int)readline("Entrez un nombre entre 0 et 10 pour gagner un lot : ");
// $numeroGagnant = rand(0, 10);
// while ($nombre !== $numeroGagnant) {
//     echo "Mauvais numéro, vous n'avez pas gagné !" . "\n";
//     $nombre = (int)readline("Retentez votre chance, entrez un nombre à nouveau : ");
// }
// echo "Bravo !!! \nVous avez enfin trouvé le numéro gagnant ! \nC'était le numéro " . $numeroGagnant;

// //exo1 pdf3
// $mot = readline("Entrez un mot (entrez \"stop\" pour arrêter) : ");
// while ($mot !== "stop") {
//     echo "Voici votre mot : " . $mot . "\n";
//     $mot = readline("Entrez un mot (entrez \"stop\" pour arrêter) : ");
// }

//Boucle Pour
// for ($i = 1; $i < 10; $i++) {
//     echo $i . "<br>";
// }

// $notes = [18, 13, 5, 9, 10, 12, 5, 0, 12, 6, 8, 7, 9];
// // echo $notes;
// // echo $notes[0] . "<br>" . $notes[1] . "<br>" . $notes[2] . "<br>" . $notes[3] . "<br>" . $notes[4];
// for ($i = 0; $i < 13; $i++) {
//     echo $notes[$i] . " ";
// }
//sans devoir compter les éléments d'un tableau
// $notes = [18, 13, 5, 9, 10, 12, 5, 0, 12, 6, 8, 7, 18, 19, 17, 4, 6, 3, 15, 2, 15, 14, 16, 9, 10, 0, 9];
// for ($i = 0; $i < sizeof($notes); $i++) {
//     echo $notes[$i] . "/20 <br>";
// }


// $semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// for ($i = 0; $i < sizeof($semaine); $i++) {
//     echo $semaine[$i] . " ";
// }

// $notes = [18, 13, 5, 9, 10];
// echo "Affichage du tableau avec la boucle FOR : <br>";
// for ($i = 0; $i < sizeof($notes); $i++) {
//     echo $notes[$i] . "/20 <br>";
// }

// echo "Affichage du tableau avec la boucle WHILE : <br>";
// $compteur = 0;
// while ($compteur < sizeof($notes)) {
//     echo $notes[$compteur] . "/20 <br>";
//     $compteur++;
// }

// echo "Affichage du tableau avec la boucle FOREACH : <br>";
// foreach ($notes as $note) {
//     echo $note . "/20 <br>";
// }

// $users = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'gender' => 'F',
//     'dateOfBirth' => "23/10/1995",
//     'city' => 'London'
// ];
// foreach ($users as $cle => $valeur) {
//     echo $cle . " : " . $valeur . "<br>";
// }

// $users = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'sexe' => 'F',
//     'dateOfBirth' => "23/10/1995",
//     'notes' => [18, 13, 5, 10, 9],
//     'city' => 'London'
// ];
// foreach ($users as $cle => $valeur) {
//     if (is_array($valeur)) {
//         echo $cle . ' : [';
//         foreach ($valeur as $note) {
//             echo $note . "/20 ";
//         }
//         echo "]<br>";
//     } else {
//         echo $cle . ' : ' . $valeur . '<br>';
//     }
// }

//exo1 pdf3 boucles for
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// for ($i = 0; $i < sizeof($jours); $i++) {
//     echo $jours[$i] . " ";
// }

// // avec boucle while
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// $i = 0;
// while ($i < sizeof($jours)) {
//     echo $jours[$i] . " ";
//     $i++;
// }

// // avec boucle foreach
// $jours = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// foreach ($jours as $jour) {
//     echo $jour . " ";
// }

//exo2 pdf3
// $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
// for ($i = 1; $i < sizeof($mois); $i += 2) {
//     echo $mois[$i] . " ";
// }

// exo3 pdf3
// $nombre = [11, 18, 99, 17, 65220, 6485, 78, 97, 48, 2, 112];
// for ($i = 0; $i < sizeof($nombre); $i++) {
//     if ($nombre[$i] % 2 == 0) {
//         echo $nombre[$i] . " est pair <br>";
//     }
// }

//exo1 pdf3 foreach
// $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
// foreach ($mois as $element) {
//     if ($element == "Janvier") {
//         echo $element;
//     } else {
//         echo " - " . $element;
//     }
// }
// echo "<br>";
// //version avec decembre
// foreach ($mois as $element) {
//     if ($element == "Decembre") {
//         echo $element;
//     } else {
//         echo $element . " - ";
//     }
// }

//exo2 pdf3
// $notes = [18, 13, 5, 9, 10];
// foreach ($notes as $note) {
//     if ($note >= 10) {
//         if ($note == 10) {
//             echo "Tu as eu tout pile la moitié " . $note . "/20 <br>";
//         } else {
//             echo "Tu as réussi avec la note de " . $note . "/20 <br>";
//         }
//     } else {
//         echo "Tu as raté avec la note de " . $note . "/20 <br>";
//     }
// }

//meilleur version parcequ'on ne se repete pas avec les notes sur 20 
// $notes = [18, 13, 5, 9, 10];
// foreach ($notes as $note) {
//     if ($note >= 10) {
//         if ($note == 10) {
//             echo "Tu as eu tout pile la moitié ";
//         } else {
//             echo "Tu as réussi avec la note de ";
//         }
//     } else {
//         echo "Tu as raté avec la note de ";
//     }
//     echo $note . "/20 <br>";
// }

//exo1 difficile TGV
// $mot = readline("Entrez un mot (entrez \"stop\" pour arrêter) : ");
// $mots = [];
// while ($mot !== "stop") {
//     $mots[] = $mot;
//     $mot = readline("Entrez un noueau mot ou entrez \"stop\" pour arrêter) : ");
// }
// for ($i = 0; $i < sizeof($mots); $i++) {
//     if ($i == 0) {
//         echo $mots[$i];
//     } else {
//         echo ", " . $mots[$i];
//     }
// }

//exo2 difficile 
// $classe = [
//     [
//         'firstname' => "Julien",
//         'lastname' => "Dunia",
//         'notes' => [8, 15, 12]
//     ],
//     [
//         'firstname' => "Hakima",
//         'lastname' => "Darmouch",
//         'notes' => [18, 5, 10]
//     ],
//     [
//         'firstname' => "Christian",
//         'lastname' => "Bale",
//         'notes' => [7, 19, 5]
//     ]
// ];

// foreach ($classe as $user) {
//     foreach ($user as $cle => $valeur) {
//         if (is_array($valeur)) {
//             $somme = 0;
//             echo $cle . " Moyenne : ";
//             for ($i = 0; $i < sizeof($valeur); $i++) {
//                 $somme = $valeur[$i] + $somme;
//             }
//             echo $somme / sizeof($valeur);
//         } else {
//             echo $cle . " : " . $valeur;
//         }
//         echo "<br>";
//     }
//     echo "<br>";
// }
