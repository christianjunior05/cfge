<?php
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
?>
