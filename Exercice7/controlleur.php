
<?php 
include_once("fonction.php");

  session_start();
if(isset($_POST['bouton']))
{
    $j=$_POST['j'];
    $m=$_POST['m'];
    $a=$_POST['a'];
    $_SESSION['post']=$_POST;
    $tab=[];
    jourvalide($j,"j",$tab);
    moisvalide($m,"m",$tab);
    anvalide($a,"a",$tab);
    datevalide($j,$m,$a,"j",$tab);
    echo "la date que vous avez saisi est: "." ".$j." / ".$m." / ".$a."<br>";
    if(count($tab)==0)
    {
        datesuit($j,$m,$a);
        precedent($j,$m,$a);
    }
    else
    {
        $_SESSION['error']=$tab;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}
else
{
    //Redirection
    header('location:index.php');
    exit();
}
