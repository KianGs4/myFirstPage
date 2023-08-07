<?php
$number = 1 ; 
if(isset($_POST["submit"])) {
    $name = $_POST["firstname"] ; 
    $last = $_POST["lastname"]  ; 
    $email = $_POST["Email"] ; 
    $ms    = $_POST["Message"] ; 
    $txt = $name . " " . $last . "\n" . $email . "\n" . $ms ;
    for($number = 1 ; file_exists("files\\$number.txt")  ; $number ++)  ;  
    $file = fopen("files\\$number.txt" , "w") ; 
    fwrite($file , $txt) ; 
    fclose($file) ; 
    $number += 1 ;  
}

?>
