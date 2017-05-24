<?php


$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$statut=$_GET['statut'];
$mail=$_GET['mail'];
$message=$_GET['message'];

$error = array(); 




        if(isset($nom)) {
        if(strlen($nom)==0) {
            
            $error['nom']=true;
                /*     echo "Il manque votre nom";*/
        }
        else {
               $error['nom']=false;
        }
    }

    if(isset($prenom)) {
        if(strlen($prenom)==0) {
             $error['prenom']=true;
/*                     echo "Il manque votre prénom";*/
        }
        else {
        $error['prenom']=false;
        }
    }

    if(isset($statut)) {
        if(strlen($statut)==0) {
             $error['statut']=true;
/*                     echo "Il manque votre statut";*/
        }
        else {
        $error['statut']=false;
        }        
    }
    
        if(isset($mail)) {
        if(strlen($mail)==0) {
             $error['mail']=true;
/*                     echo "Il manque votre mail";*/
        }
        else {
        $error['mail']=false;
        }             
    }
            if(isset($message)) {
        if(strlen($message)==0) {
             $error['message']=true;
/*                     echo "Il manque votre message";*/
        }
        else {
        $error['message']=false;
        }         
    }

echo json_encode($error);

?>


