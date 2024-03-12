<?php
// Attention on reprend la session ouverte
// session_start();
$title = "BD";
$nav = "bd";
require "header.php";
require "db.php";
// require "functions/authentification.php";
//verifie si on est connecté. Dans le cas ou on est pas connecté il nous redirige vers login
if (!is_connected()) {
    //redirection
    header('Location: /coursphp3/login.php');
}

?>
<h1>Base de Données</h1>
<?php
// try{
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root",""); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie';
//     $resultat = $pdo->query('SELECT * from articles' );
//     var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// } ?>

<?php
//exo 4
// try{
//     $pdo = new PDO('mysql:dbname=coursmysql2;host=localhost', "root",""); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie<br>';
//     $resultat = $pdo->query('SELECT * from users' );
//     //var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
//     foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $user){
//         echo $user->id_user . " ". $user->firstname . " ". $user->lastname . " ". $user->gender . " ". $user->date_of_birth . " ". $user->city . " ". $user->weight_kg ."<br>";
//     }
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// } 

//exo 5
// try{
//     $pdo = new PDO('mysql:dbname=coursmysql1;host=localhost', "root",""); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie<br>';
//     //version SQL majuscule
//     // $resultat = $pdo->query(
//     //     'SELECT article_name, UPPER(CONCAT(lastname," ",firstname)) as auteur
//     //     from users INNER JOIN articles ON id_user = id_user_article' );
//     // // var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
//     // foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//     //     echo "Nom de l'article : ".$req->article_name . "<br>Auteur de l'article : ". $req->auteur . "<br><br>";
//     // }

//     //version php majuscule
//     $resultat = $pdo->query(
//         'SELECT article_name, lastname,firstname
//         from users INNER JOIN articles ON id_user = id_user_article' );
//     // var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
    
//     foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//         echo "Nom de l'article : ".$req->article_name . "<br>Auteur de l'article : ". strtoupper($req->lastname) . " " . strtoupper($req->firstname) ."<br><br>";
//     }
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// }


//creation d'un article, ajout en base de données grace à la methode exec de PDO
//ATTENTION PAS LA BONNE PRATIQUE
// try{
//     $pdo = new PDO('mysql:dbname=coursmysql1;host=localhost', "root",""); 
//     //On définit le mode d'erreur de PDO sur Exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie<br>';
//     $titre= "Ajouter un article en BD via PHP";
//     $description = "Blablablabla";
//     $datetime = new DateTime();
//     $date = $datetime->format('Y-m-d H:i:s'); 
//     $id_user = "1";
//     $pdo->exec('INSERT into articles VALUES (NULL,"'.$titre. '","'.$description. '","'.$date. '","'.$date. '" ,"'.$id_user. '" )' );
//     echo "Article ajouté<br>";

// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// }


// //creation d'un article, ajout en base de données grace à la methode prepare() ensuite execute() de PDO
// //LA BONNE PRATIQUE
//        try{
//         $pdo = new PDO('mysql:dbname=coursmysql1;host=localhost', "root",""); 
//         //On définit le mode d'erreur de PDO sur Exception
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo 'Connexion réussie<br>';
//         $titre= "Ajouter un article en BD via PHP avec prepare et execute 2";
//     $description = "Blablablabla";
//     $datetime = new DateTime();
//     $date = $datetime->format('Y-m-d H:i:s'); 
//     $id = 3;
//     $req = $pdo->prepare('INSERT INTO articles VALUES(:id_article, :article_name, :description, :createdAt, :updatedAt, :id_user_article)');
//     $req->execute(array(
//        'id_article' => NULL, 
//        'article_name' => $titre,
//        'description' => $description,
//        'createdAt' => $date,
//        'updatedAt' => $date,
//        'id_user_article' => $id
//        ));

//     echo "L'article : \"". $titre . "\" a bien été ajouté"; 
       

//     }catch (PDOException $e){
//         die('Erreur : '. $e->getMessage());
//     }
    
//creation 
// $titre= "Ajouter Try/Catch un article avec prepare et execute 2";
//     $description = "Blablablabla";
//     $datetime = new DateTime();
//     $date = $datetime->format('Y-m-d H:i:s'); 
//     $id = 3;
//     try{
//         $req = $pdo->prepare('INSERT INTO articles VALUES(:id_article, :article_name, :description, :createdAt, :updatedAt, :id_user_article)');
//         $req->execute(array(
//             'id_article' => NULL, 
//             'article_name' => $titre,
//             'description' => $description,
//             'createdAt' => $date,
//             'updatedAt' => $date,
//             'id_user_article' => $id
//         ));
//         echo "Un nouvel article a été ajouté";
//     }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }

// //modification 
// try{
//     $req = $pdo->prepare("UPDATE articles SET article_name = 'White' WHERE id_article = 120");
//     $req->execute();
//     echo "Votre article a bien été modifié<br>";
// }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }

//suppression 
// try{
//     $req = $pdo->prepare("DELETE FROM articles WHERE id_article = 118");
//     $req->execute();
//     echo "Votre article a bien été supprimé<br>";
// }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }

//exo6
    // $prenom = "Julien";
    // $nom = "Dunia";
    // $genre = "M";
    // $datetime = new DateTime("1998/11/18");
    // $dateDeNaiss = $datetime->format('Y-m-d'); 
    // $ville = "Bruxelles";
    // $poids = 87;
    
    // try{
        
    //     $req = $pdo->prepare('INSERT INTO users VALUES(:id_user, :firstname, :lastname, :gender, :date_of_birth, :city, :weight_kg)');

    //     $req->execute([
    //         'id_user' => NULL,
    //         'firstname' => $prenom,
    //         'lastname' => $nom,
    //         'gender' => $genre,
    //         'date_of_birth' => $dateDeNaiss,
    //         'city' => $ville,
    //         'weight_kg' => $poids
    //     ]);
        
    //     echo "Le nouvel utilisateur " . $prenom . " ". $nom ." a bien été ajouté";
    // }catch (PDOException $e){
    //     echo "Erreur : " . $e->getMessage();
    // }

    //Exo7

    // fonction qui retourne l'age en fonction d'une date de type DateTime
//     function age(DateTime $date): int{
//         $aujourdHui = new DateTime();
//         $difference = $date->diff($aujourdHui);
//         //y signifie year donc il donnera la difference en année
//         return $difference->y; 
//     }
// try{
    
//     $resultat = $pdo->query('SELECT firstname, date_of_birth,gender from users where gender = "M" ' );
//     foreach($resultat->fetchAll(PDO::FETCH_OBJ) as $req){
//         //ici je transforme la date de naissance reçu en string de la base de données en un objet date de type DateTime
//     $dateDeN = new DateTime($req->date_of_birth); 
//     echo "prénom : ".$req->firstname . "<br>age : ". age($dateDeN) . "<br>sexe : ".$req->gender . "<br><br>";
// }
// }catch (PDOException $e){
//     die('Erreur : '. $e->getMessage());
// }

//EXO 8
// try{
//         $req = $pdo->prepare("UPDATE users SET firstname = 'Carine' WHERE id_user = 5");
//         $req->execute();
//         echo "Votre prénom a bien été modifié<br>";
//     }catch (PDOException $e){
//             echo "Erreur : " . $e->getMessage();
//         }

//Ex9
// try{
//     $req = $pdo->prepare("DELETE FROM articles WHERE id_article = 17");
//     $req->execute();
//     echo "Votre article a bien été supprimé<br>";
// }catch (PDOException $e){
//         echo "Erreur : " . $e->getMessage();
//     }

//Exo 9
// try {
//         $resultat = $pdo->query('SELECT * FROM articles ORDER BY id_article DESC LIMIT 1,1;');
//         //ici on recupere l'avant dernier article dans un tableau d'objet
//         $article = $resultat->fetchAll(PDO::FETCH_OBJ);
//         //ici je met dans id l'id de l'article
//         $id = $article[0]->id_article;

//         $req = $pdo->prepare("DELETE FROM articles WHERE id_article = '".$id."' ");
//         $req->execute();
//         echo '<br>Suppression réussi de l\'article '.$id.'!<br><br>';
//         echo "Nom de l'article : ".$article[0]->article_name . "<br>Description : " .$article[0]->description ; 
//     } catch (PDOException $e) {
//         die('Erreur : ' . $e->getMessage());
//     }

//EXO10
try{
    $resultat = $pdo->query('SELECT * from users');
$donnees = $resultat->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }

?>
<div align="center">
    <div class="col-5">
        <table class="table table-responsive table-hover table-striped table-dark table-bordered ">
            <thead class="bg-secondary text-white">
                <tr align="center">
                    <th>Id</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Genre</th>
                    <th>Date de Naissance</th>
                    <th>Ville</th>
                    <th>Poids</th>
                </tr>
            </thead>
            <?php

            foreach ($donnees as $user) { ?>
                <tbody>
                    <tr align="center">
                        <td><?php echo $user->id_user; ?></td>
                        <td><?php echo $user->firstname; ?></td>
                        <td><?php echo $user->lastname; ?></td>
                        <td><?php echo $user->gender; ?></td>
                        <td><?php echo $user->date_of_birth; ?></td>
                        <td><?php echo $user->city; ?></td>
                        <td><?php echo $user->weight_kg ." Kg"; ?></td>
                    <?php } ?>
                    </tr>
                </tbody>
        </table>
        <?php
        require "footer.php";
        ?>
    </div>
