<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Paramètres de connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "centre";
    // Création de la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die(json_encode(["success" => false, "subscribe" => "Connection failed: " . $conn->connect_error]));
    }

    // Récupération des données du formulaire
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    // Préparation et liaison
    $stmt = $conn->query("INSERT INTO subscribe (First_Name2, Last_Name2, Email2) VALUES ('$first_name','$last_name','$email')");
    // Exécution de la déclaration
    if ($stmt) {
        echo json_encode(["success" => true, "subscribe" => "Thank you! Your subscribe has been received."]);
    } else {
        echo json_encode(["success" => false, "subscribe" => "Error: " ]);
    }
    // Fermeture de la connexion
    $conn->close();
}
?>