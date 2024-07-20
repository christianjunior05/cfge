<?php
$currentDir = __DIR__;
    $file = "$currentDir/OfficeForm.pdf";
    header('content-type: application/pdf');
 
    //header('content-disposition: inline;filename"'.$file.'"');
    
    //header('content-transfer-encoding: binary');
    
    //header('Accept-Range: bytes');
    header('Content-length:'.filesize($file));
    readfile($file);
?>