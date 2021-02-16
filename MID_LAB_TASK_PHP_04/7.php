<?php 

    for($i=0;$i<=2;$i++)
    {
            for($j=0;$j<=$i;$j++)
            {
            echo "* ";
            }
        echo "<br>";
    }
    echo "<br>";

    for($i=0;$i<=3;$i++)
        {
            $n=1;
        for($j=3-$i;$j>=1;$j--)
        {
            
        echo $n;
        $n++;
        }
        echo "<br>";
        }

        $alpha = range('A', 'Z');  
        $c=0;
            for($i=0; $i<3; $i++){
                  
                for($j=0; $j<=$i; $j++){  
                    echo $alpha[$c];
                    $c++;  
                    }  
                    echo "<br>";  
                }

    ?>