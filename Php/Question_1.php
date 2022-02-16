<?php
    // Question 1 : 
    // A)
    echo 'Question 1 : ';
    echo 'A)';
    function tableMultiplication($nombre) {
        echo "<br>";
        echo 'table de '.$nombre;
        echo "<br>";
        for ($i = 1; $i<=10; $i++){
            echo "<br>";
            echo ($i.'x'.$nombre.'='.$i*$nombre);
        }
    }

    tableMultiplication(5);

    // B)
    echo "<br>"."<br>".'B)';

    for ($i = 1; $i <= 10; $i++){
        echo "<br>";
        tableMultiplication($i);
    }
?>