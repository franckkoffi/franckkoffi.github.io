<?php
  
// Store the file name into variable
$file = 'cv_kouadio-franck-martial-koffi.pdf';
$filename ='cv_kouadio-franck-martial-koffi.pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
?>