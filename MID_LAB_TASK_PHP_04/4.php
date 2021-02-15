<?php 
    $num1=2;
    $num2=7;
    $num3=5;
    echo "Given numbers= ".$num1.",".$num2.",".$num3;
    echo "<br>";
    if($num1>$num2)
    {
        if($num1>$num3)
        {
            echo $num1." is the largest number.";
        }
        else{
            echo $num3." is the largest number.";
        }
    }
    else{
        if($num2>$num3)
        {
            echo $num2." is the largest number.";
        }
        else{
            echo $num3." is the largest number.";
        }
    }
?>