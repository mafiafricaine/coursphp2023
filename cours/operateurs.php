<?php
// $heure = (int)readline('Entrez une heure : ');
// if (($heure > 8 and $heure <= 12) || ($heure >= 14 && $heure < 18)) {
//     echo "Le magasin sera ouvert à $heure heures";
// } else {
//     echo "Le magasin sera fermé à " . $heure . " heures";
// }

//exo1 pdf3
//version casse tête
// $heure = (int)readline('Entrez une heure : ');
// if (($heure <= 8 or $heure > 12) and ($heure < 14 or $heure >= 18)) {
//     echo "Le magasin sera fermé à " . $heure . " heures";
// } else {
//     echo "Le magasin sera ouvert à $heure heures";
// }
//version simple
// if (!(($heure > 8 and $heure <= 12) || ($heure >= 14 && $heure < 18))) {
//     echo "Le magasin sera fermé à " . $heure . " heures";
// } else {
//     echo "Le magasin sera ouvert à $heure heures";
// }


//exo2 pdf3
$user1 = [
    'firstname' => 'Will',
    'lastname' => 'Smith',
    'gender' => 'M',
    'age' => 53,
    'vaccinated' => true
];
$user2 = [
    'firstname' => 'Lara',
    'lastname' => 'Croft',
    'gender' => 'F',
    'age' => 17,
    'vaccinated' => false
];
$user3 = [
    'firstname' => 'Marion',
    'lastname' => 'Cotillard',
    'gender' => 'F',
    'age' => 46,
    'vaccinated' => true
];
$user = $user1;

if ($user['age'] >= 18 && $user['vaccinated'] == true) {
    echo "Bienvenue dans le club " . $user['firstname'] . " " . $user['lastname'];
    if ($user['gender'] == "M") {
        echo "<br>Prenez un bracelet bleu";
    } elseif ($user['gender'] == 'F') {
        echo "<br>Prenez un bracelet rose";
    }
} else {
    echo "Vous ne remplissez pas les conditions ";
}
