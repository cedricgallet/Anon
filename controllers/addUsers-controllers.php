<?php

include(dirname(__FILE__).'/../utils/regex.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    ////////////////////////////////////////////////////////// pseudo : Nettoyage et validation//////////////////////////////////////////////////////////////////////

    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    // On vérifie que ce n'est pas vide
    if(!empty($pseudo)){
        $testRegex = preg_match('/'.REGEX_NO_NUMBER.'/',$pseudo);
        // Avec une regex (constante déclarée plus haut), on vérifie si c'est le format attendu 
        if(!$testRegex){
            $error["pseudo"] = "Le nom n'est pas au bon format!!"; 
        } else {
            // Vérifier la longueur de chaine (on aurait pu le faire dans la regex)
            if(strlen($pseudo)<=1 || strlen($pseudo)>=70){
                $error["pseudo"] = "La longueur de chaine n'est pas bonne";
            }
        }
    } else { // Pour les champs obligatoires, on retourne une erreur
        $error["pseudo"] = "Vous devez entrer un nom!!";
    }
    ////////////////////////////////////////////////////////////////email : Nettoyage et validation//////////////////////////////////////////////////////////////////////

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));

    if(!empty($email)){
        $testEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
        if(!$testEmail){
            $error["email"] = "L'adresse email n'est pas au bon format!!"; 
        }
    } else {
        $error["email"] = "L'adresse mail est obligatoire!!"; 
    }

   ///////////////////////////////////////////////////////////////////Password : Nettoyage et validation////////////////////////////////////////////////////////////////////




   //////////////////////////////////////////////////////////////// ajoutArticle : Nettoyage et validation/////////////////////////////////////////////////////////////////    

    $addArticle = trim(filter_input(INPUT_POST, 'addArticle', FILTER_SANITIZE_STRING));

}


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Rendu des vues concernées


include(dirname(__FILE__).'/../views/templates/header.php');

if($_SERVER["REQUEST_METHOD"] != "POST" || !empty($error)){
    include(dirname(__FILE__).'/../views/user/form.php');
} 

include(dirname(__FILE__).'/../views/templates/footer.php');