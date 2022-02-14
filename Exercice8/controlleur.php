<?php 
include_once("fonction.php");

  session_start();
if(isset($_POST['btn_ok'])){
    $a=$_POST['n'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($a,'n',$arrError);
    if(count($arrError)==0){
        liste($a);
    }else{
        $_SESSION['error']=$arrError;
        header('location:index.php');
        exit();

    }
}else{
    header('location:index.php');
    exit();
}