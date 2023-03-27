<?php

//Function des vérifications des fields mail et tel

function isEmail($isMail)
{
    return filter_var($isMail, FILTER_VALIDATE_EMAIL);
}

function isPhone($isTel)
{
    return preg_match("/^[0-9 ]*$/",$zozo);
}

// https://github.com/google/recaptcha  
// require ReCaptcha class 
require('../js/recaptcha-master/src/autoload.php');


// Configuration expediteur et receptionneur
$from = 'Contact du formulaire Test <noreply@test.lol>';
$sendTo = 'AntoniSDev <nyu58@live.fr>';

// Objet du mail
$subject = 'Nouveau message provenant du formulaire de contact Test';

// array $nomdevariable => texte qui apparait dans le mail
// array 'key'(descripteur) => 'value'(valeur)   

$fields = array('firstname' => 'Prenom', 'name' => 'Nom', 'email' => 'mail', 'phone' => 'tel', 'message' => 'Message');

$okMessage = 'Message envoyé, merci et à bientôt !';
$errorMessage = 'Erreur, veuillez rééessayer !';

// obtenir la clé recpatcha sur ce site : https://www.google.com/recaptcha/admin/create
// clé recaptcha coté server

$recaptchaSecret = '6Ld5mTglAAAAAAmRCkiKOOF0Hd5AF0iqE9Mj42KO';

// Effectuer des tests pour vérifier les données du formulaire apres un submit
// print_r($_POST);

print_r($_POST);
?>