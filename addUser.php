<?php
$title = "Ajouter Utilisateur";
$nav = "adduser";
require "db.php";
require "header.php";
?>
<div align="center">
    </br>
    <h1>Ajouter un utilisateur en Base de données</h1>
    </br>
    <?php
    if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["gender"]) && isset($_POST["date_of_birth"]) && isset($_POST["city"]) && isset($_POST["weight_kg"])) :
        $prenom = $_POST["firstname"];
        $nom = $_POST["lastname"];
        $gender = $_POST["gender"];
        $dateDeNaiss = $_POST["date_of_birth"];
        $ville = $_POST["city"];
        $poids = $_POST["weight_kg"];
        try {
            $req = $pdo->prepare('INSERT INTO users VALUES(:id_user, :firstname, :lastname, :gender, :date_of_birth, :city, :weight_kg)');
            $req->execute(array(
                'id_user' => NULL,
                'firstname' => $prenom,
                'lastname' => $nom,
                'gender' => $gender,
                'date_of_birth' => $dateDeNaiss,
                'city' => $ville,
                'weight_kg' => $poids
            ));
            echo "<br>Un nouvel utilisateur a bien été ajouté";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    endif;
    ?>
    <form action="addUser.php" method="POST">
        <div>
            <label>Prénom : <input type="text" name="firstname" placeholder="firstname"></label>
            <br>
            <label>Nom : <input type="text" name="lastname" placeholder="lastname"></label>
            <br>
            <label for="gender-select">genre : </label>
            <select type="text" name="gender">
                <option value="">--Choisissez--</option>
                <option value="M">Homme</option>
                <option value="F">Femme</option>
                <option value="X">Autres</option>
            </select>
            <br>
            <label>Date de naissance : <input type="text" name="date_of_birth" placeholder="****/**/**"></label>
            <br>
            <label>Ville : <input type="text" name="city" placeholder="city"></label>
            <br>
            <label>Poids : <input type="number" name="weight_kg" placeholder="weight in kg"></label>
        </div>
        <br><br>
        <button type="submit">Ajouter Utilisateur</button>
    </form>
    <?php
    require_once 'footer.php';
    ?>