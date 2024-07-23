<?php
$currentDir = __DIR__;
    $file = "$currentDir/OfficeForm.pdf";
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$_GET['filename'].'.pdf"');
    header('Content-Length: ' . filesize($tmpFilePath));
    header('Content-length:'.filesize($file));
    readfile($file);
?>