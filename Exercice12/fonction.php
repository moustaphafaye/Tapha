

<?php
    function champvalide($language,$error):void{
            if(empty($language)){
                $error="choisir une langue svp";
            }
        }
        function moisfr($language):void{
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
        }
        function moisEngl($language):void{
            $mois=array(
                'ligne1'=>array('1'=>'January',
                                '2'=>'April',
                                '3'=>'July',
                                '4'=>'October'),
                'ligne2'=>array('1'=>'February',
                                '2'=>'May',
                                '3'=>'August',
                                '4'=>'November',
                                ),
                'ligne3'=>array('1'=>'March',
                                '2'=>'June',
                                '3'=>'September',
                                '4'=>'December')
            );
            echo "<br><br>Les mois en Angrais :<br><br>";
            echo '<table border="solide 1px blue" width=50% height=200px>';
                foreach($mois as $cle=>$tab){
                    echo '<tr>';
                    foreach($tab as $key=>$valeur){
                        echo '<td><strong>'.$valeur.'</strong></td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
        }

?>
