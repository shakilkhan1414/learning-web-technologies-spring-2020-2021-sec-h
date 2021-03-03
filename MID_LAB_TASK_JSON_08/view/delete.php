<?php 
    if(isset($_GET['id'])){
        $data=file_get_contents("../controller/list.json");
		$array_data=json_decode($data,true);

        for ($i=0; $i < sizeof($array_data); $i++)
        {
            if($array_data[$i]['id']==$_GET['id'])
            {
                unset($array_data[$i]);
                $a=array_values($array_data);
                $final_data=json_encode($a);
					if(file_put_contents("../controller/list.json",$final_data))
					{
						header('location: user_list.php');
					}
					else{
						echo "Something went wrong,try again ...";
					}

            }
        }
        
    }

?>