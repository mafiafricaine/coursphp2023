<?php

// sommeDe3Nombre(12, 1.6, 45);
// echo "<br>";

// $nb1 = 17;
// $nb2 = 64;
//plus besoin de faire le calcule
// echo $nb1 + $nb2;
// echo "<br>";
//on appelle juste la fonction somme
// sommeDe2Nombre($nb1, $nb2);
// echo "<br>";

// function sommeDe2Nombre($var1, $var2)
// {
//     echo $var1 + $var2;
// }
// function sommeDe3Nombre($num1, $num2, $num3)
// {
//     echo $num1 + $num2 + $num3;
// }

// hello();
// function hello()
// {
//     echo "<b>Hello World !!!</b>";
// }

// $string = "Julien";
// hello($string);


// function hello($prenom): void
// {
//     echo "Hello <b>" . $prenom . "</b> !!!<br>";
// }


//exo1 pdf5
// hello("Julien");
// hello("Robert");
// hello("Sanja");
// hello("Ellen");
// hello("Shams");

//exo2 pdf5
// $tabPrenom = ["Julien", "Robert", "Sanja", "Ellen", "Shams", "Houda", "Luc", "Eva", "Amine"];
// foreach ($tabPrenom as $prenom) {
//     hello($prenom);
// }
// for ($i = 0; $i < sizeof($tabPrenom); $i++) {
//     hello($tabPrenom[$i]);
// }
// $cpt = 0;
// while ($cpt < sizeof($tabPrenom)) {
//     hello($tabPrenom[$cpt]);
//     $cpt++;
// }
// for ($i = 0; $i < 5; $i++) {
//     $prenom = readline("Introduisez un prenom : ");
//     hello($prenom);
// }


// function hello(string $prenom): string
// {
//     return "Hello <b>" . $prenom . "</b> !!!<br>";

// }



// $tab = [5, 5, 6, 87, 5, 8, 585, 98, 2, 5];
// echo sizeof($tab);
// echo hello("Julien");


// function hello2(string $prenom = null): string
// {
//     if ($prenom != null) {
//         return "Hello <b>" . $prenom . "</b> !!!<br>";
//     }
//     return "Hello <b>WORLD</b> !!!<br>";
// }

//version final
// function hello(string $prenom = "World !"): string
// {
//     return "Hello <b>" . $prenom . "</b> !!!<br>";
// }
// echo hello2();
// echo hello("Julien");

// $personne1 = ["Julien", 26];
// if (aEntre25et30ans($personne1[1])) {
//     echo $personne1[0] . " a bien entre 25 et 30 ans compris";
// } else {
//     echo $personne1[0] . " n'a pas entre 25 et 30 ans compris";
// }

// function aEntre25et30ans(int $age): bool
// {
//     if ($age >= 25 && $age <= 30) {
//         return true;
//     }
//     return false;
// }


// function addition(float $nombre1, float $nombre2): float
// {
//     return $nombre1 + $nombre2;
// }

// function moyenne2nombre(float $nb1, float $nb2): float
// {
//     return addition($nb1, $nb2) / 2;
// }

// $nbr1 = readline("Veuillez introduire un premier nombre : ");
// $nbr2 = readline("Veuillez introduire un deuxième nombre : ");
// echo "La moyenne de " . $nbr1 . " et " . $nbr2 . " donne " .  moyenne2nombre($nbr1, $nbr2);


// //exo 3 pdf5 
// $prenom = readline("Entrez votre prénom : ");
// echo helloName($prenom);
// function helloName(string $name): string
// {
//     if ($name != null) {
//         return "Hello " . $name;
//     }
//     return "Hello World !!!";
// }
// //version 2
// function hello(string $prenom = null): string
// {
//     if ($prenom == null) {
//         return "Hello World !!!";
//     }
//     return "Hello " . $prenom . " !!!";
// }
// $reponse = readline("Entrez votre prénom : ");
// echo hello($reponse);

// //exo 4 pdf5
// function bienvenue(): string
// {
//     $prenom = readline("Veuillez introduire un prénom : ");
//     $nom = readline("Veuillez introduire un nom : ");
//     $mail = readline("Veuillez introduire un mail : ");
//     $age = (int)readline("Veuillez introduire un age : ");
//     return "Bienvenu " . $prenom . " " . $nom . "!!!\n" . "Vous avez " . $age . " ans\n" . "Voici votre email : " . $mail;
// }
// echo bienvenue();
// //version 2
// function bienvenue2(string $p, string $n, string $m, int $a): string
// {
//     return "Bienvenu " . $p . " " . $n . "!!!\n" . "Vous avez " . $a . " ans\n" . "Voici votre email : " . $m;
// }
// $prenom = readline("Veuillez introduire un prénom : ");
// $nom = readline("Veuillez introduire un nom : ");
// $mail = readline("Veuillez introduire un mail : ");
// $age = (int)readline("Veuillez introduire un age : ");
// echo bienvenue2($prenom, $nom, $mail, $age);

// //exo 5 pdf5
// $age = readline("Veuillez introduire votre age : ");
// echo adulte($age);
// function adulte(int $a): string
// {
//     if ($a < 18) {
//         return "Vous êtes mineur";
//     }
//     return "Vous êtes majeur";
// }
// //version 2 en verifiant qu'on entre bien un numeric
// $age = readline("Veuillez introduire votre age : ");
// if (is_numeric($age)) {
//     echo adulte($age);
// } else {
//     echo "veuillez introduire un age correct ";
// }

//exo 6 pdf5
//version original addition
// function addition(float $a, float $b): float
// {
//     return $a + $b;
// }
// $nombre1 = (float)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (float)readline("Veuillez introduire un deuxième nombre : ");
// echo $nombre1 . " additioné à " . $nombre2 . " donne " . addition($nombre1, $nombre2);
// //version original soustraction
// function soustraction(float $a, float $b): float
// {
//     return $a - $b;
// }
// $nombre1 = (float)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (float)readline("Veuillez introduire un deuxième nombre : ");
// echo $nombre1 . " soustrait à " . $nombre2 . " donne " . soustraction($nombre1, $nombre2);

// //version original multiplication
// function multiplication(float $a, float $b): float
// {
//     return $a * $b;
// }
// $nombre1 = (float)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (float)readline("Veuillez introduire un deuxième nombre : ");
// echo $nombre1 . " multiplié par " . $nombre2 . " donne " . multiplication($nombre1, $nombre2);
//version 1 
// function addition(int $a, int $b): string
// {
//     $c = $a + $b;
//     return ($a . " additioné à " . $b . " donne " . $c);
// }
// $nombre1 = (int)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (int)readline("Veuillez introduire un deuxième nombre : ");
// echo addition($nombre1, $nombre2);

//version 2
// function addition(int $a, int $b): string
// {
//     return ($a . " additioné à " . $b . " donne " . ($a + $b));
// }
// $nombre1 = (int)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (int)readline("Veuillez introduire un deuxième nombre : ");
// echo addition($nombre1, $nombre2);

//version 3
// function addition()
// {
//     $nombre1 = null;
//     $nombre2 = null;
//     while (!is_numeric($nombre1)) {
//         $nombre1 = readline("Veuillez introduire un premier nombre : ");
//         if (!is_numeric($nombre1)) {
//             echo "Veuillez introduire un nombre valide";
//         }
//     }
//     while (!is_numeric($nombre2)) {
//         $nombre2 = readline("Veuillez introduire un deuxieme nombre : ");
//         if (!is_numeric($nombre2)) {
//             echo "Veuillez introduire un nombre valide";
//         }
//     }
//     $nombre1 = (int)$nombre1;
//     $nombre2 = (int)$nombre2;
//     $resultat = $nombre1 + $nombre2;
//     echo $nombre1 . " additioné à " . $nombre2 . " donne " . $resultat;
// }
// addition();

//exo 7 pdf5
// function soustraction(int $a, int $b): string
// {
//     $c = $a - $b;
//     return ($a . " soustrait à " . $b . " donne " . $c);
// }
// $nombre1 = (int)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (int)readline("Veuillez introduire un deuxième nombre : ");
// echo soustraction($nombre1, $nombre2);

//exo 8 pdf5
// function multiplication(int $a, int $b): string
// {
//     $c = $a * $b;
//     return ($a . " multiplié par " . $b . " donne " . $c);
// }
// $nombre1 = (int)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (int)readline("Veuillez introduire un deuxième nombre : ");
// echo multiplication($nombre1, $nombre2);

//exo 9 pdf5
//version original division
// function division(float $a, float $b): float
// {
//     return $a / $b;
// }
// $nombre1 = (float)readline("Veuillez introduire un premier nombre : ");
// $nombre2 = (float)readline("Veuillez introduire un deuxième nombre : ");
// while ($nombre2 === 0.0) {
//     echo "Vous avez tenté de divisé par 0, recommencez\n";
//     $nombre2 = (float)readline("Veuillez introduire un deuxième nombre : ");
// }
// echo $nombre1 . " divisé par " . $nombre2 . " donne " . division($nombre1, $nombre2);

//exo10 pdf5
function estFemme($sexe): bool
{
    if ($sexe === "F") {
        return true;
    }
    return false;
}

function estAdulte($age): bool
{
    if ($age >= 18) {
        return true;
    }
    return false;
}

$users = [
    [
        "prenom" => "Victoria",
        "sexe" => "F",
        "age" => 18
    ],
    [
        "prenom" => "Anna",
        "sexe" => "F",
        "age" => 15
    ],
    [
        "prenom" => "Valentin",
        "sexe" => "M",
        "age" => 25
    ],
    [
        "prenom" => "Adrian",
        "sexe" => "M",
        "age" => 13
    ]
];

// function display(array $users): void
// {
//     foreach ($users as $user) {
//         echo  $user["prenom"];
//         if (estFemme($user["sexe"])) {
//             echo " est une femme ";
//         } else {
//             echo " est un homme ";
//         }
//         if (estAdulte($user["age"])) {
//             echo "majeur(e) age(e) de {$user["age"]} ans. ";
//         } else {
//             echo "mineur(e) age(e) de {$user["age"]} ans. ";
//         }
//         echo  "<br>";
//     }
// }
// display($users);

//exo 11 pdf5
function display($users)
{
    foreach ($users as $user) {

        $femme = estFemme($user["sexe"]);
        $adult = estAdulte($user["age"]);

        if ($femme && $adult) {
            echo "Bonjour Madame " . $user["prenom"] . " vous etes une adulte âgée de " . $user["age"] . " ans.";
        };
        if ($femme && !$adult) {
            echo "Bonjour  Mademoiselle " . $user["prenom"] . " vous êtes une mineure âgée " . $user["age"] . " ans.";
        }
        if (!$femme && $adult) {
            echo "Bonjour  Monsieur " . $user["prenom"] . " vous etes  un adulte âgé de " . $user["age"] . " ans.";
        }
        if (!$femme && !$adult) {
            echo "Bonjour " . $user["prenom"] . " vous etes un mineur âgé de " . $user["age"] . " ans.";
        }
        echo " <br>";
    }
}
display($users);
