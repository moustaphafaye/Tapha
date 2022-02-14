<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>#MIF</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   


    
   
<?php 
   session_start();
?>
     <form action="controlleur.php" method="post" >
    <label>Entrer le nombre svp :</label><br><br>
    <input id="inp" type="text" name="n" value="<?php if(!isset($_SESSION['error']['n']) && isset($_SESSION['post'])) 
      echo  $_SESSION['post']['n']; else ''  ?>"> 
      <?php if(isset($_SESSION['error']['n'])):?>
            <span style="color:blue"><?php echo "<br>" . $_SESSION['error']['n'] ?></span>
      <?php endif?><br><br>
    <input type="submit" name="btn_ok" id="en" value="Envoir">
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


