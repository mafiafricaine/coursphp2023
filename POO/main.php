<?php
require "Voiture.php";
// $typeTZ = new DateTimeZone("Europe/Paris");
// $date1 = new DateTime('now', $typeTZ);
// var_dump($date1);

// $tab1= array();
// var_dump($tab1);
// $tab2= array(1,5,8);
// var_dump($tab2);

// $date1 = new DateTime();
// var_dump($date1);
//  $date2 = new DateTime("12/02/1999");
//  var_dump($date2);
// $maVoiture = new Voiture("blanche", 1500.0,7800 );



// $voiture1 = new Voiture();
// $voiture1->couleur = "Bleue";
// $voiture2 = new Voiture();
// $voiture3 = new Voiture();
// var_dump($voiture1, $voiture2, $voiture3);
// var_dump($voiture1);

// $voiture1->demarrer();
// $voiture1->accelerer();

//version avec le return
// echo $voiture1->demarrer2();
// echo "Ma voiture est de couleur : ". $voiture1->couleur . "<br>";
// echo "Elle a un poids de : ". $voiture1->poids . "Kg<br>";
// echo "Elle a un prix de : ". $voiture1->prix . "€<br>";

// echo "<br>";
// $voiture1->couleur = "Noire";
// echo "Ma nouvelle couleur de voiture : ". $voiture1->couleur . "<br>";

//exo 8
// $voiture1 = new Voiture();
// echo "Ma voiture est de couleur : ". $voiture1->obtenirCouleur(). "<br>";
// echo "Elle a un poids de : ". $voiture1->obtenirPoids() . " Kilos <br>";
// echo "Elle a un pirx de : ". $voiture1->obtenirPrix() . " €<br>";
// $voiture1->changerCouleur("Mauve");
// $voiture1->changerPoids(1254.56);
// $voiture1->changerPrix(9999);
// echo "J'ai changé la couleur de ma voiture en : " . $voiture1->obtenirCouleur() . "<br>";


//exo 9
// $voiture1 = new Voiture();
// echo "L'ancien prix de ma voiture : " . $voiture1->obtenirPrix() .  " €<br>";
// $voiture1->augmenterPrix(5000);
// echo "Le nouveau prix de ma voiture : " . $voiture1->obtenirPrix() .  " €<br>";


//exo 10

// $car1 = new Voiture();
// $car2 = new Voiture();
// $car2->changerCouleur("Verte");
// $car2->changerPoids(600.95);
// $car2->changerPrix(15000);

// echo "Voiture 1<br>";
// echo "Couleur : ".$car1->obtenirCouleur() . "<br>";
// echo "Poids : ".$car1->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$car1->obtenirPrix() . " €<br>";
// echo "<br>";
// echo "Voiture 2<br>";
// echo "Couleur : ".$car2->obtenirCouleur() . "<br>";
// echo "Poids : ".$car2->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$car2->obtenirPrix() . " €<br>";
// echo "<br>";

// if($car1->obtenirPrix() > $car2->obtenirPrix()){
//     echo "La voiture ". $car1->obtenirCouleur() . " est plus chère que la voiture ". $car2->obtenirCouleur() . "<br>";
//     echo "Il y a une différence de prix de ". $car1->obtenirPrix() - $car2->obtenirPrix()  . " €";
// }else{
//     echo "La voiture ". $car2->obtenirCouleur() . " est plus chère que la voiture ". $car1->obtenirCouleur() . "<br>";
//     echo "Il y a une différence de prix de ". $car2->obtenirPrix() - $car1->obtenirPrix() . " €";
// }

// $maVoiture1 = new Voiture("Blanche", 1500.0, 7800 );
// $maVoiture2 = new Voiture("Noire", 7500.0, 15200 );
// $maVoiture3 = new Voiture("Verte",265.63,9999 );
// $maVoiture4 = new Voiture("Mauve", 4521.02, 4568 );
// var_dump($maVoiture1 , $maVoiture2 ,$maVoiture3 ,$maVoiture4);

//exo 1
// $maVoiture = new Voiture("Noire",1750.40,10000 );
// echo "Voiture 1<br>";
// echo "Couleur : ".$maVoiture->obtenirCouleur() . "<br>";
// echo "Poids : ".$maVoiture->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$maVoiture->obtenirPrix() . " €<br>";

//exo 2 constructeur avec 3 attributs
// $maVoiture2 = new Voiture("Blanche",546.5,9999 );
// echo "<br>Voiture 2<br>";
// echo "Couleur : ".$maVoiture2->obtenirCouleur() . "<br>";
// echo "Poids : ".$maVoiture2->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$maVoiture2->obtenirPrix() . " €<br>";

// $maVoiture3 = new Voiture("Verte",778.9,25000);
// echo "<br>Voiture 3<br>";
// echo "Couleur : ".$maVoiture3->obtenirCouleur() . "<br>";
// echo "Poids : ".$maVoiture3->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$maVoiture3->obtenirPrix() . " €<br>";

//exo 3 avec 4 attributs
// $maVoiture2 = new Voiture("Blanche",546.5,9999,"BMW");
// echo "Voiture 2<br>";
// echo "Couleur : ".$maVoiture2->obtenirCouleur() . "<br>";
// echo "Poids : ".$maVoiture2->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$maVoiture2->obtenirPrix() . " €<br>";
// echo "Marque : ".$maVoiture2->obtenirMarque() . "<br>";

// $maVoiture3 = new Voiture("Verte",1542.23,1000,"Audi");
// echo "<br>Voiture 3<br>";
// echo "Couleur : ".$maVoiture3->obtenirCouleur() . "<br>";
// echo "Poids : ".$maVoiture3->obtenirPoids() . " Kg<br>";
// echo "Prix : ".$maVoiture3->obtenirPrix() . " €<br>";
// echo "Marque : ".$maVoiture3->obtenirMarque() . "<br>";

//exo 4 avec 4 attributs
// $car1 = $maVoiture2;
// $car2 = $maVoiture3;
// echo "Voici la voiture 1<br>" . $car1;
// echo "Voici la voiture 2<br>" . $car2;

// if($car1->plusChere($car2)){
//     echo "La voiture ". $car1->obtenirCouleur() . " est plus chère que la voiture ". $car2->obtenirCouleur() . "<br>";
//     echo "Il y a une différence de prix de ". $car1->obtenirPrix() - $car2->obtenirPrix()  . " €";
// }else{
//     echo "La voiture ". $car2->obtenirCouleur() . " est plus chère que la voiture ". $car1->obtenirCouleur() . "<br>";
//     echo "Il y a une différence de prix de ". $car2->obtenirPrix() - $car1->obtenirPrix() . " €";
// }

// $maVoiture1 = new Voiture("Jaune",1300.5,8000,"BMW");
// $maVoiture2 = new Voiture("Verte",1542.23,1000,"Audi");
// $maVoiture3 = new Voiture("Blanche",546.5,9999,"Fiat");
// $car = new Voiture("Mauve", 562.23,100000,"Tesla");

// echo $maVoiture1;
// echo $maVoiture2;
// echo $maVoiture3;
// echo $car;

// require "Employe.php";
// $dateEmbauche1 = new DateTime("02/05/2020");
// $date1 = new DateTime("12/11/2000");
// $employe1 = new Employe(425,"Dunia","Julien",$date1, $dateEmbauche1, 5000);
// //utilisation de notre toString
// // echo $employe1;

// //utilisation de afficherEmploye
// $employe1->afficherEmploye();

// //employe une fois passé par augmentationDuSalaire
// $employe1->augmentationDuSalaire();
// echo "<br>Nouvel fiche avec augmentation salaire<br>";
// $employe1->afficherEmploye();

// echo $employe1->anciennete();

require "User.php";
require "Article.php";
$dateNU1 = new DateTime("2000/02/14");
$user1 = new User(1,"Julien","Dunia", $dateNU1,"M","Bruxelles",99.9 );
// // echo $user1;

$dateNU2 = new DateTime("1985/03/17");
$user2 = new User(2,"James","Harden", $dateNU2,"M","Los Angeles",76.9 );
// // echo $user2;

//maniere basique en passant par le constructeur de Article
// $dateCA1 = new DateTime();
// $article1 = new Article(1,"Le covid est parmis nous","Blablablablablblabalbaaka",$dateCA1,$user2);
// echo $article1;


$user1->creerArticle(1,"Covid welcome back","Voici la description de l'article");
$user1->creerArticle(2,"Il fait froid","Le temps en Belgique");
echo $user1;
// // $user1->getListeArticles()[0]->setDescription("NOIIIIRRR");
// $user2->creerArticle(3,"GoodBye Covid","Blablablbal");
// // echo $article1;

// // var_dump($user1->getListeArticles()[0]->getCreationDate());
// echo $user1;
// $user1->afficheNomArticle();
// // var_dump($user1);

// $tabUser = [$user1,$user2];
// foreach($tabUser as $utilisateur){
//     echo $utilisateur->getFirstname() . " " . $utilisateur->getLastname(). "<br>";
//     foreach($utilisateur->getListeArticles() as $article){
//         echo $article;
//     }
//     echo "<br>";
// }






