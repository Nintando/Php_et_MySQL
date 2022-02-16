<?php
    // Question 2 :
    echo "<br>"."<br>".'Question 2 : ';
    
    function sommeEntier($entier){
        $fact = 0;
        for ($i = 1; $i <= $entier; $i++){
                $fact = $i + $fact;
        }
        echo ($fact);
    }

    sommeEntier(5);
?>