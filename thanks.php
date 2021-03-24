<?php

foreach ($errors as $message) {
    if ($message != "") {
        echo $message . "<br><br>";
    }
}

echo 'Merci ' . $firstName . ' ' . $lastName . ' de nous avoir contacté à propos de "' . $subject . '".' . "<br><br>" . "Un de nos conseillers vous contactera soit à l'adresse " . $email . " ou par téléphone au " . $phone . " dans les plus brefs délais pour traiter votre demande:" . "<br><br>" . $_POST["user_message"];