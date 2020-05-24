<?php

$formSent = false;

if(isset($_POST["submit"])) {
    // Récupération du json
    $messages = json_decode(file_get_contents("json/messages.json"), true);

    //  Array qui sert de vérif. s'il n'y a pas d'erreur et de stockage s'il y en a
    $arrErreurs = array();

    //  Récupération des entrées login
    $nom = $_POST['nom'];
    $sujet = $_POST['sujet'];
    $courriel = $_POST["courriel"];
    $text = $_POST["text"];

    // -------------------- Validation --------------------
    //    Validation des entrées pour la sécurité

    // Stockage des regexp
    $regexp = array(
        'nom' => "#^[A-zÀ-ú \'\-]{2,30}$#",
        //    Regex courriel RFC 5322 Official Standard
        'courriel' => '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD',
        'sujet' => '#[0-9]{10,12}$#'
    );

    //  Validation du nom
    if ($nom == "") {
        $arrErreurs["nom"] = $messages["nom"]["vide"];
    } elseif (!preg_match($regexp["nom"], $nom)) {
        $arrErreurs["nom"] = $messages["nom"]["erreur_regexp"];
    }

    if ($sujet == "") {
        $arrErreurs["sujet"] = $messages["sujet"]["vide"];
    } elseif (!preg_match($regexp["sujet"], $sujet)) {
        $arrErreurs["sujet"] = $messages["sujet"]["erreur_regexp"];
    }

    if ($courriel == "") {
        $arrErreurs["courriel"] = $messages["courriel"]["vide"];
    } elseif (!preg_match($regexp["courriel"], $courriel)) {
        $arrErreurs["courriel"] = $messages["courriel"]["erreur_regexp"];
    }

    if ($text == "") {
        $arrErreurs["text"] = $messages["text"]["vide"];
    }


//    var_dump($arrErreurs);
    // -------------------- Envois du courriel --------------------
    if (count($arrErreurs) == 0) {
        // Set à faux par default
        $courriel_envoye = false;

        // Si pas d'erreur de validation, on tente d'envoyer le courriel
//  Contenu du email -----------

//  Sujet
        $sujet = "Portfolio - " . $sujet;

//  Headers
        $headers .= "From: {$nom} <{$courriel}>\r\n";

//  Envoi du email, la fonction mail return un boolean selon l'échec ou la réussite de l'envoi
        $courriel_envoye = mail("felixalavoie@gmail.com", $sujet, $text, $headers);
    } else {
        var_dump("Fail. Il y a une erreur");
    }
}