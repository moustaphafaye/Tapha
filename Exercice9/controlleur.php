<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    include_once "fonction.php";
 session_start();
 if(isset($_POST['bouton'])){
     $a=$_POST['t'];
     $_SESSION['post']=$_POST;
     $arrError=[];
    validNombre($a,'t',$arrError);
    if(count($arrError)==0){
        table($a);
    }else{
       $_SESSION['error']=$arrError;
       header('location:index.php');
       exit();
    }

 }
 else{
     header('location:index.php');
     exit();
 }
?>
</body>
</html>