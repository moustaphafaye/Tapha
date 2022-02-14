<?php
  include_once "fonction.php";
  session_start();
  if(isset($_POST['bouton'])){
    $a=$_POST['t'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($a,'t',$arrError);
    if(count($arrError)==0){
      premiertout($a);
      moyenne($a);
        

    }else{
        $_SESSION['error']=$arrError;
        header('location:index.php');
        exit();
    }


  }else{
    header('location:index.php');
    exit();
  }
?>