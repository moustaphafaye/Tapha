<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="moy.css">
  <title>Exercice7</title>
</head>
<body>
  

<?php session_start(); ?>

<form action="controlleur.php" method="post">
    <label for="">Entrer le jour </label><br>
      <input type="text" name="j" id="" 




      value="<?php if(!isset($_SESSION['error']['j']) && isset($_SESSION['post'])) 
      echo  $_SESSION['post']['j']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['j'])):?><br>
            <span style="color:red"><?php echo $_SESSION['error']['j'] ?></span>
      <?php endif?>





      <br/><br><br>
    <label for="">Entrer le mois</label><br>
      <input type="text" name="m" id="" 
      value="<?php if(!isset($_SESSION['error']['m']) && isset($_SESSION['post']) ) 
      echo  $_SESSION['post']['m'] ;else ''  ?>"> 
      <?php if(isset($_SESSION['error']['m'])):?><br>
            <span style="color:red"><?php echo $_SESSION['error']['m'] ?></span>
      <?php endif?>
       <br><br><br>
    <label for="">Entrer l'annee</label><br>
      <input type="text" name="a" id="" 
      value="<?php if(!isset($_SESSION['error']['a']) && isset($_SESSION['post']) )
       echo  $_SESSION['post']['a']; else ''  ?>">
        <?php if(isset($_SESSION['error']['a'])):?><br>
                <span style="color:red"><?php echo $_SESSION['error']['a'] ?></span>
        <?php endif?>
      <br><br><br>

      <input type="submit" name="bouton" id="" value="Valider">


</form>


<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
if(isset($_SESSION['post'])){
  unset($_SESSION['post']);
}
?>
</body>
</html>













