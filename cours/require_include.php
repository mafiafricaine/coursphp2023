<?php
require "fonctionsReq.php";
// include "fonctionsReqo.php";


// if (ouiOuNon("Voulez vous faire une addition ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo addition($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une addition.\nAurevoir !!!";
// }
// echo "\n";
// include_once 'sep.php';
// echo "\n";
// if (ouiOuNon("Voulez vous faire une multiplication ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo multiplication($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une multiplication.\nAurevoir !!!";
// }
// echo "\n";

// //exo1 pdf5
// if (ouiOuNon("Voulez vous faire une soustraction ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo soustraction($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une soustraction.\nAurevoir !!!";
// }
// echo "\n";

// //exo2 pdf5
// if (ouiOuNon("Voulez vous faire une multiplication ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo multiplication($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une multiplication.\nAurevoir !!!";
// }
// echo "\n";

// //exo3 pdf5
// if (ouiOuNon("Voulez vous faire une division ? ")) {
//     $nb1 = (float)readline("entrez un premier nombre : ");
//     $nb2 = (float)readline("entrez un deuxième nombre : ");
//     echo division($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une division.\nAurevoir !!!";
// }
// echo "\n";

//exo4 pdf5
// if (ouiOuNon("Voulez vous faire une addition ? ")) {
//     $nb1 = readline("entrez un premier nombre : ");
//     $nb2 = readline("entrez un deuxième nombre : ");
//     if (is_numeric($nb1) && is_numeric($nb2)) {
//         echo addition($nb1, $nb2);
//     } else {
//         echo "Vous n'avez pas introduis 2 nombres";
//     }
// } else {
//     echo "Vous avez refusé de faire une addition.\nAurevoir !!!";
// }
// echo "\n";

//exo6 pdf5
// $verification = ouiOuNon('Voulez vous diviser deux nombres ? ');
// if ($verification == true) {
//     $nbr1 = readline('Entrez donc votre premier nombre : ');
//     $nbr2 = readline("Et votre deuxième nombre : ");
//     if (is_numeric($nbr1) && is_numeric($nbr2)) {
//         while ($nbr2 == 0 || is_numeric($nbr2) == false) {
//             if ($nbr2 == 0) {
//                 echo "Vous avez essayer de diviser par 0 ! Recommencez\n";
//             } else {
//                 echo "Vous avez saisi autre chose qu'un nombre !";
//             }
//             $nbr2 = readline("Quel est votre deuxième nombre ? ");
//         }
//         echo division($nbr1, $nbr2);
//     } else {
//         echo "Vous n'avez pas saisi deux nombres ! Aurevoir\n";
//     }
// } else {
//     echo "Vous avez refusez ...\n";
// }
//exo6 pdf5 v2
// if (ouiOuNon("Voulez vous faire une division : ")) {
//     $nb1 = readline("Veuillez introduire un premier nombre : ");
//     $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//     while (!is_numeric($nb1)) {
//         echo "Vous n'avez pas introduit un nombre !!\n";
//         $nb1 = readline("Veuillez introduire un premier nombre : ");
//     }
//     while (!is_numeric($nb2) || $nb2 == 0) {
//         if ($nb2 == 0) {
//             echo "Vous avez tentez une division par 0, recommencez !!!\n";
//             $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//         } else {
//             echo "Vous n'avez pas introduit un nombre !!\n";
//             $nb2 = readline("Veuillez introduire un deuxième nombre : ");
//         }
//     }
//     echo $nb1 . " divisé par " . $nb2 . " donne " . division($nb1, $nb2);
// } else {
//     echo "Vous avez refusé de faire une division. \nAurevoir !!!";
// }


if (ouiOuNon("Faire le calcul ? : ")) {
    $cal = (int)readline("1 : addition, 2 : soustraction, 3 : multiplication, 4 : division : ");
    if ($cal >= 1 && $cal <= 4) {
        $nbr1 = readline("1e Nombre : ");
        $nbr2 = readline("2e Nombre : ");
        if (is_numeric($nbr1) && is_numeric($nbr2)) {
            if ($cal != 4) {
                echo calcule($nbr1, $nbr2, $cal);
            } else {
                while ($nbr2 == 0 || !is_numeric($nbr2)) {
                    if ($nbr2 == 0 && is_numeric($nbr2)) {
                        echo "Vous avez tenter une division par 0, recommencer \n";
                    } else {
                        echo "Vous avez introduis autre chose qu'un nombre\n";
                    }
                    $nbr2 = readline("Veuillez introduire un deuxieme nombre : ");
                }
                echo calcule($nbr1, $nbr2, $cal);
            }
        } else {
            echo "Veuillez introduire 2 nombres ";
        }
    } else {
        echo "Vous avez introduit autre chose qu'un chiffre entre 1 et 4";
    }
} else {
    echo "Sad pour toi";
}
