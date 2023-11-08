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
        'surname' => $_POST["surname"],
        'tel' => $_POST["tel"],
        'email' => $_POST["email"]
    ];



    $validationError = validateForm($formData);

    if ($validationError === null) {
        // Connexion à la base de données avec PDO
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=cfge_db', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparation de la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO brochure (name, surname, tel, email) VALUES (?, ?, ?, ?)");

            // Exécution de la requête
            $stmt->execute([$formData['name'], $formData['surname'], $formData['tel'], $formData['email']]);

            // Spécifiez le chemin du fichier PDF que vous souhaitez télécharger.
            $nomFichier = 'includes/Brochure.pdf';

            // Vérifiez si le fichier existe.
            if (file_exists($nomFichier)) {
                // Configurez les en-têtes HTTP pour indiquer que vous téléchargez un fichier PDF.
                header('Content-Description: File Transfer');
                header('Content-Type: application/pdf');
                header('Content-Disposition: attachment; filename="' . basename($nomFichier) . '"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($nomFichier));

                // Lisez le fichier et envoyez-le au client.
                readfile($nomFichier);
                exit;

            } else {
                // Si le fichier n'existe pas, affichez un message d'erreur.
                echo 'Le fichier demandé n\'existe pas.';
            }

            
            echo "Vos informations ont été envoyées avec succès";
            
        } catch (PDOException $e) {
            echo "Erreur lors de l'envoi des informations : " . $e->getMessage();
        }
    } else {
        echo $validationError;
    }
} else {
    header("Location: brochure.php");
}

?>
