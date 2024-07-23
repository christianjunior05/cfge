<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function sendMail($data)
{
    $mail = new PHPMailer();

    try {
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'www.cfge.ci';
        $mail->SMTPAuth = true;
        $mail->Username = 'user@gfg.com';
        $mail->Password = 'password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($data['email'], $data['name']);

        $mail->isHTML(true);
        $mail->Subject = $data['subject'];
        $mail->Body = '<b>'.$data['comments'].'</b> ';
        $mail->send();
        echo "Votre message a été envoyé avec succès. Merci !";



        // $to = 'akanjikadiriabiola@gmail.com';
        // $subject = 'Test Email';
        // $message = '<html><body>';
        // $message .= '<h1>Hello, World!</h1>';
        // $message .= '<p>This is a test email sent using the PHP <code>mail()</code> function.</p>';
        // $message .= '</body></html>';

        // $headers = 'MIME-Version: 1.0' . "\r\n";
        // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // $headers .= 'From: Your Name '. $data['email'].'' . "\r\n";
        // $headers .= 'Reply-To: '.$data['email'].'' . "\r\n";
        // $headers .= 'X-Mailer: PHP/' . phpversion();

        // if (mail($to, $subject, $message, $headers)) {
        //     echo 'Message has been sent';
        // } else {
        //     echo 'Message could not be sent.';
        // }



    } catch (Exception $e) {
        echo "Message non envoyé {$mail->ErrorInfo}";
    }
}
function validateForm($data)
{
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
            // $pdo = new PDO('mysql:host=localhost;dbname=cfge_db', 'root', '');
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Préparation de la requête d'insertion
            // $stmt = $pdo->prepare("INSERT INTO contact (name, email, subject, comments) VALUES (?, ?, ?, ?)");

            // Exécution de la requête
            // $stmt->execute([$formData['name'], $formData['email'], $formData['subject'], $formData['comments']]);
            sendMail($formData);
            
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