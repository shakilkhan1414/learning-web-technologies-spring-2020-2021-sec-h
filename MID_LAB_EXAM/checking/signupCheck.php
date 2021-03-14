<?php 

    function nameCheck($inputName){
        if($inputName>='A' && $inputName<='Z' || $inputName>='a' && $inputName<='z')
        { return true; }
        else{ return false; }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $password=$_REQUEST['password'];
        $repassword=$_REQUEST['repassword'];
        $user_type=$_REQUEST['user_type'];
        
        if(nameCheck($name)){
                if($password==$repassword){
                        if(file_exists("../json/user_list.json")){
                            $data=file_get_contents("../json/user_list.json");
                            $array_data=json_decode($data,true);

                            $user = [	
                                'id'=>$id,
                                'name'=>$name, 
                                'password'=>$password, 
                                'user_type'=> $user_type
                            ];

                            $array_data[]=$user;
                            $final_data=json_encode($array_data);

                            if(file_put_contents("../json/user_list.json",$final_data))
                            {
                                header("location: ../view/login.html");
                            }
                            else{
                                echo "Something went wrong,try again ...";
                            }
                        }
                        else{
                            echo "Storage file doesn't exist ...";
                        }
                }
                else{
                    echo "Password should match ...";
                }
        }
        else{
            echo "Invalid Name ...";
        }

    }

?>