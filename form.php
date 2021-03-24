<?php

$firstNameErr = $lastName = $emailErr = $subjectErr = $messageErr = $phoneErr = "";
$firstName = $lastName = $email = $subject = $message = $phone = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['firstname'])) {
        $firstNameErr = "Un prénom est requis.";
    } else {
        $firstName = $_POST['firstname'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['lastname'])) {
        $lastNameErr = "Un nom est requis.";
    } else {
        $lastName = $_POST['lastname'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['sujet'])) {
        $subjectErr = "Veuillez choisir un sujet.";
    } else {
        $subject = $_POST['sujet'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user_message'])) {
        $messageErr = "Veuillez écrire un message.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['phone'])) {
        $phoneErr = "Un numéro de téléphone est requis.";
    } else {
        $phone = $_POST['phone'];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['user_email'])) {
        $emailErr = "Une adresse mail est requise.";
    } else {
        $email = $_POST['user_email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "L'adresse mail est invalid.";
        }
    }
}

$errors = [$firstNameErr, $lastNameErr, $emailErr, $phoneErr, $subjectErr, $messageErr];

require 'thanks.php';