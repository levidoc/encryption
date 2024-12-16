<?php 
include_once "bin/services.php"; #Include The Encryption Service Classes

$e = new encryption_services('_AUTH_TOKEN_'); 
$enc_data = $e->encryption_threading('Hello World'); 
$output = $e->decryption_threading_1($enc_data); 
echo $output; 

?>
