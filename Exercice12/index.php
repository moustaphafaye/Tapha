<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controlleur.php" method="post">
    <!-- <input type="radio" name="language" value="French">
    <label for="">Francais</label><br>
    <input type="radio" name="language" value="English">
    <label for="">Anglais</label><br> -->
    <select name="choix" id="">
    
        <option value="Français">Français</option>
        <option value="English">English</option>
    </select><br><br>
    <input type="submit" name="envoi" value="Valider">
    <!-- <?php if(isset($_SESSION['error']) && isset($_SESSION['post'])) echo ($_SESSION['error']); else echo '';?> -->
    </form>

<?php

    $mois=array(
        'ligne1'=>array('1'=>'Janvier',
                        '2'=>'Avril',
                        '3'=>'Juillet',
                        '4'=>'Octobre'),
        'ligne2'=>array('1'=>'Fevrier',
                        '2'=>'Mai',
                        '3'=>'Aoùt',
                        '4'=>'Novembre',
                        ),
        'ligne3'=>array('1'=>'Mars',
                        '2'=>'Juin',
                        '3'=>'Septembre',
                        '4'=>'Decembre')
    );
    echo "<br><br>Les mois en francais :<br><br>";
    echo '<table border="solide 1px blue" width=50% height=200px>';
        foreach($mois as $cle=>$tab){
            echo '<tr>';
            foreach($tab as $key=>$valeur){
                echo '<td><strong>'.$valeur.'</strong></td>';
            }
            echo '</tr>';
        }
        echo '</table>';

?>
<?php
 if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
 }
?>
<?php
 if(isset($_SESSION['post'])){
    unset($_SESSION['post']);
 }
?>
</body>
</html>