<?php

    session_start();
    include_once "fonction.php";
     if(isset($_POST['envoi']) ) {
      $p=$_POST['choix'];
      $_SESSION['post']=$_POST;
      $error=[];
      champvalide($p,$error);
      if(count($error)==0){
            if($p=="Français"){
                moisfr($p);
            }else if($p=="English"){
                moisEngl($p);
            }
      }else{
        $_SESSION['error']=$error;
        header('location:index.php');
      }
     }else{
         header('location:index.php');
         exit();
     }
    
    // $language = $_POST['language'];
    // $error=[];
    // lesmois($language,$error);
    // $_SESSION['post']=$_POST;
    // $_SESSION['error']=$error;
    // header('location:index.php');


?>