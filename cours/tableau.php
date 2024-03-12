<?php
// $notes = [18, 13,5, 9, 10];
// $tab = [15, 12.5, "ok", true];
// echo $notes;
// var_dump($notes);
// echo $notes[3];
// $notes = array(18, 13, 5, 9, 10);
// echo

//exo1 pdf2
// $notes = [18, 13, 5, 9, 10];
// $somme = $notes[0] + $notes[1] + $notes[2] + $notes[3] + $notes[4];
// $moyenne = $somme / 5;
// echo "C'est la moyenne : " . $moyenne . "<br>C'est la somme : " . $somme;

//exo2 pdf2
// $animal = ["chien", "chat", "elephant", "tortue"];
// echo $animal[1] . "\n" . $animal[3];

//exo3 pdf2
// $semaine = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
// echo "Aujourd'hui nous sommes " . $semaine[3] .
//     "\nAprès-demain nous serons " . $semaine[5] .
//     "\nAvant-hier nous étions " . $semaine[1];

// $tab = ["Jack", "Sparrow", [18, 13, 5, 9, 10]];
// echo $tab[0] . " pour sa 2 eme note, il a eu " . $tab[2][1] . "/20";
// echo $tab[2];

//exo1 pdf2 page 2
// $tab2dim = ["James", "Bond", "M", "7/7/2007", ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"], "London"];
// echo "Nom : " . $tab2dim[1] . "<br>Prenom : " . $tab2dim[0] . "<br>Sexe : " . $tab2dim[2] .
//     "<br>Date de Naissance : " . $tab2dim[3] . "<br>Ville : " . $tab2dim[5] . "<br>Hier : " . $tab2dim[4][2];

// $users = [
//     'firstname' => 'Lara',
//     'lastname' => 'Croft',
//     'gender' => 'F',
//     'dateOfBirth' => "23/10/1995",
//     'notes' => [18, 13, 5, 10, 9],
//     'city' => 'London'
// ];
//pour afficher la ville
// echo $users["city"];
//pour afficher la deuxième note
// echo $users['notes'][1];

// echo $users['firstname'];
//pour changer le firstname du tableau
// $users["firstname"] = "Edward";
// echo "\n" . $users['firstname'];

//pour ajouter une sixieme note
// $users['notes'][5] = 20;

//permet de voir ce qu'il y a dans une variable
// var_dump($users);

//exo1 pdf2 page 3
$users = [
    'firstname' => 'Lara',
    'lastname' => 'Croft',
    'gender' => 'F',
    'dateOfBirth' => "23/10/1995",
    'notes' => [18, 13, 5, 10, 9],
    'city' => 'London'
];
// $users["lastname"] = "Elric";
// $users["notes"][4] = 17;
// echo $users["lastname"] . "<br>" . $users['firstname'] . "<br>" . $users['notes'][4];

//exo2 pdf2 page 3
// $users2 = [
//     'firstname' => 'Antonio',
//     'lastname' => 'Banderas',
//     'gender' => 'M',
//     'dateOfBirth' => "2/1/1975",
//     'notes' => [18, 13, 5, 10, 9],
//     'city' => 'Barcelone',
//     'joursDeSemaine' => ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"]
// ];
// $moy = ($users2['notes'][0] + $users2['notes'][1] + $users2['notes'][2] + $users2['notes'][3] + $users2['notes'][4]) / 5;

// echo $users2["lastname"] . "<br>" . $users2['firstname'] . "<br>" . $moy . "<br>" . $users2["joursDeSemaine"][4];

// //exo 3 pdf2
// $users2['joursDeSemaine'][7] = "néant";

// $tab = ["pikachu", "raichu", "ronflex"];
// print_r($tab);


$classeUser = [
    [
        'firstname' => "Julien",
        'lastname' => "Dunia",
        'notes' => [8, 15, 12]
    ],
    [
        'firstname' => "Hakima",
        'lastname' => "Darmouch",
        'notes' => [18, 5, 10]
    ],
    [
        'firstname' => "Christian",
        'lastname' => "Bale",
        'notes' => [7, 19, 5]
    ]
];

//exo pdf2 page 4 correction
// echo $classeUser[0]["notes"][0];
// echo $classeUser[2]["notes"][1];
// $moyenne = ($classeUser[2]["notes"][0] + $classeUser[2]["notes"][1] + $classeUser[2]["notes"][2]) / 3;
// echo $moyenne;
