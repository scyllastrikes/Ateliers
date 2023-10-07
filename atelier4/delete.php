<?php
$dsn = "mysql:host=localhost;dbname=testex3;";
$utilisateur = "root";
$motdepasse = "";

try {
    $connexion = new PDO($dsn, $utilisateur, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $dbname = "testex3"; // Replace with your database name

    // Drop the database (be careful!)
    $sql = "DROP DATABASE IF EXISTS $dbname";
    $connexion->exec($sql);

    echo "Database '$dbname' has been deleted.";
    header("Location: http://localhost/exercice3.html");
    exit();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
