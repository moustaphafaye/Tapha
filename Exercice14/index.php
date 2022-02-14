<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice14</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<form action="">
<?php echo '<strong style="font-size:30px"><span style="color:red"> Voici le champ de saisie !!!<br> </span></strong>'?>
    <textarea name="" id="" cols="50" rows="30"></textarea><br>
    <?php echo '<input  style="background-color:yellow" type="submit" name="envoi" value="VALIDER ICI SVP ">'?> 
</form>

<form id="form2"action="">
<?php echo '<strong style="font-size:30px"><span style="color:red"> Voici les numéros valides du saisie !!!<br> </span></strong>'?>
    <textarea name="" id="" cols="50" rows="30"></textarea>
</form>
<form action="">
<?php echo '<strong style="font-size:30px"><span style="color:red"> Voici les numéros non valides du saisie !!!<br> </span></strong>'?>
    <textarea name="" id="" cols="50" rows="30"></textarea>
</form>
</body>
</html>