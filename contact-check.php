<?php
function validateForm($data) {
    foreach ($data as $field) {
        if (empty($field)) {
            return "Veuillez remplir tous les champs du formulaire.";
        }
    }

    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        return "Adresse e-mail invalide.";
    }

    return null; // Aucune erreur de validation
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formData = [
        'name' => $_POST["name"],
        'email' => $_POST["email"],
        'subject' => $_POST["subject"],
        'comments' => $_POST["comments"]
    ];



    $validationError = validateForm($formData);

    if ($validationError === null) {
        // Connexion à la base de données avec PDO
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=cfge_db', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparation de la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO contact (name, email, subject, comments) VALUES (?, ?, ?, ?)");

            // Exécution de la requête
            $stmt->execute([$formData['name'], $formData['email'], $formData['subject'], $formData['comments']]);

            echo "Votre message a été envoyé avec succès. Merci !";
            
        } catch (PDOException $e) {
            echo "Erreur lors de l'envoi du message : " . $e->getMessage();
        }
    } else {
        echo $validationError;
    }
} else {
    header("Location: contact.php");
}
?>