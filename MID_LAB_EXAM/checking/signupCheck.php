<?php 

    function nameCheck($inputName){
        if($inputName>='A' && $inputName<='Z' || $inputName>='a' && $inputName<='z')
        { return true; }
        else{ return false; }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $username=$_REQUEST['username'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $repassword=$_REQUEST['repassword'];
        $job=$_REQUEST['job'];
        $gender=$_REQUEST['gender'];
        $district=$_REQUEST['district'];
        $dob=$_REQUEST['dob'];
        
        if(nameCheck($name)){
            if(ctype_alnum($username) && strlen($username)>=4){
                if($password==$repassword){
                    if(strlen($job)>2){
                        if(file_exists("../../json/user_list.json")){
                            $data=file_get_contents("../../json/user_list.json");
                            $array_data=json_decode($data,true);
                            $id=rand(0,10000);

                            $user = [	
                                'id'=>$id,
                                'name'=>$name, 
                                'username'=>$username, 
                                'email'=> $email,
                                'password'=>$password, 
                                'job'=> $job,
                                'gender'=> $gender,
                                'district'=> $district,
                                'dob'=> $dob
                            ];

                            $array_data[]=$user;
                            $final_data=json_encode($array_data);

                            if(file_put_contents("../../json/user_list.json",$final_data))
                            {
                                $location_data=file_get_contents("../../json/locations.json");
                                $location_array_data=json_decode($location_data,true);

                                $coordinates=file_get_contents("../../json/coordinates.json");
                                $coordinates_array=json_decode($coordinates,true);
                                
                                for($i=0; $i < sizeof($coordinates_array); $i++){
                                    if($district==$coordinates_array[$i]['district']){
                                        $lat=$coordinates_array[$i]['lat'];
                                        $lng=$coordinates_array[$i]['lng'];
                                    }
                                }
                                
                                $content="<p>Name: ".$name."<br>"."Occupation: ".$job."</p>";

                                $locations = [	
                                        'id'=>$id,
                                        'coords'=>[
                                                    'lat'=>$lat,
                                                    'lng'=>$lng
                                                ],
                                    'content'=>$content
                                ];
                                $location_array_data[]=$locations;
                                $final_location_data=json_encode($location_array_data);
                                if (file_put_contents("../../json/locations.json",$final_location_data)) {
                                    header("location: ../view/login.html");
                                } else {
                                    echo "Failed! Try again later ...";
                                }
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
                        echo "Invalid job name ...";
                    }
                }
                else{
                    echo "Password should match ...";
                }
            }
            else{
                echo "Invalid username ...";
            }
        }
        else{
            echo "Invalid Name ...";
        }

    }

?>