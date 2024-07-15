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
        die(json_encode(["success" => false, "message" => "Connection failed: " . $conn->connect_error]));
    }

    // Récupération des données du formulaire
    $first_name = $_POST['First_Name'];
    $last_name = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $company_Name = $_POST['Company_Name'];
    $message = $_POST['Message'];

    // Préparation et liaison
    $stmt = $conn->query("INSERT INTO message (First_Name, Last_Name, Email, Company_Name, Message) VALUES ('$first_name','$last_name','$email','$company_Name','$message')");

    // Exécution de la déclaration
    if ($stmt) {
        echo json_encode(["success" => true, "message" => "Thank you! Your message has been received."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " ]);
    }
    // Fermeture de la connexion
    $conn->close();
}
?>

