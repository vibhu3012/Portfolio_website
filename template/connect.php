<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['email'];
$subj= $_POST['subject'];
$desc= $_POST['description'];

echo "sccc";
$to= "vibhumithal@gmail.com";
$subject = "Mail from vibhumithal.com";
$message = "Name=". $name . "\n" ." Email = " . $email . "\n" . " Subject =" . $sub . "\n\n" . " Description =" . $description; 

$headers = "From: ". $email;

if(mail($to,$subject,$message,$headers)){
    echo "SENT SUCCESSFULLY.THANKYOU";
    }
    else{
        echo "SOMETHING WENT WRONG.CONNECT BACK SHORTLY";
    }

}
?>


