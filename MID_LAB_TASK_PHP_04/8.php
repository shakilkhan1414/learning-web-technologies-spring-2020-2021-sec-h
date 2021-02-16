<?php 
    $array=[
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];
    for($i=0;$i<=2;$i++)
        {        
        for($j=0;$j<=2-$i;$j++)
        {        
        echo $array[$i][$j];
        }
        echo "<br>";
        }
        echo "<br>";

        for($i=0;$i<=2;$i++)
        {     
            if($i==0){
                for($j=0;$j<=$i;$j++)
                {
                    echo $array[$i][$j+3];    
                }
            }
            if($i==1){
                for($j=0;$j<=$i;$j++)
                {
                    echo $array[$i][$j+2];    
                }
            }
            if($i==2){
                for($j=0;$j<=$i;$j++)
                {
                    echo $array[$i][$j+1];    
                }
            }


        echo "<br>";
        }



?>