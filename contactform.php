<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject   = $_POST['subject'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "fr_srh@yahoo.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");

}