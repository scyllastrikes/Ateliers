<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["nom"]) && isset($_GET["prenom"]) && isset($_GET["telephone"]) && isset($_GET["adresse"]) && isset($_GET["codepostal"])) {
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $telephone = $_GET["telephone"];
        $adresse = $_GET["adresse"];
        $codepostal = $_GET["codepostal"];
        $dsn = "mysql:host=localhost;dbname=testex3;";
        $utilisateur = "root";
        $motdepasse = "";
        try {
            $connexion = new PDO($dsn, $utilisateur, $motdepasse);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = "INSERT INTO contacts (Nom, Prenom, Tel, Adresse, CodePostal) VALUES (:Nom, :Prenom, :Tel, :Adresse, :CodePostal)";
            $statement = $connexion->prepare($requete);
            $statement->bindParam(":Nom", $nom);
            $statement->bindParam(":Prenom", $prenom);
            $statement->bindParam(":Tel", $telephone);
            $statement->bindParam(":Adresse", $adresse);
            $statement->bindParam(":CodePostal", $codepostal);
            $statement->execute();
            $connexion = null;
            header("Location: http://localhost/exercice3.html");
            exit();
        } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
            exit();
        }
    } else {
        header("Location: http://localhost/exercice3.html");
    }
} else {
    header("Location: http://localhost/exercice3.html");
}
?>