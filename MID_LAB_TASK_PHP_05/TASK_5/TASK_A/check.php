<?php
	if(isset($_POST['submit']))
	{
        if(isset($_POST['degree']))
        {
            foreach($_POST['degree'] as $value){
                echo $value.'<br>';
            }
        }
    }

?>