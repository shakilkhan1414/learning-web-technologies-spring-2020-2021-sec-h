<?php
    require_once "../../database/adminModel.php";

    function validateEmail($data){
        $atposition=strpos($data,'@');
        $dotposition=strrpos($data,'.');
        
        if($atposition < 1 || $dotposition < $atposition+2 || $dotposition+2 >= strlen($data)){
            return false;
        }
        else{
            return true;
        } 
    }

    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $error="";

        $name=process_input($_REQUEST['name']);
        $username=process_input($_REQUEST['username']);
        $email=process_input($_REQUEST['email']);
        $password=process_input($_REQUEST['password']);
        $gender=process_input($_REQUEST['gender']);
        $dob=process_input($_REQUEST['dob']);

        if(empty($name)){
            $error="*Name is required!";
            header("location: ../view/addAdmin.php?error=$error");
        }
        else{
            if(ctype_alpha($name) || strpos($name," ")==true){
                if(empty($username)){
                    $error="*Username is required!";
                    header("location: ../view/addAdmin.php?error=$error");
                }
                else{
                    if(ctype_alnum($username)){
                        if(strlen($username)>4){    
                            if(!empty($email)){
                                if(validateEmail($email)){
                                    if(!empty($password)){
                                        if(strlen($password)>4){
                                            if(strpos($password, "@")!== false||strpos($password, "*")!== false||strpos($password, "$")!== false||strpos($password, "%")!== false){
                                                    if(!empty($dob)){
                                                        $img_name = $_FILES['profile_image']['name'];
                                                        $img_size = $_FILES['profile_image']['size'];
                                                        $tmp_name = $_FILES['profile_image']['tmp_name'];
                                                                    
                                                        $img_explode = explode('.',$img_name);
                                                        $img_ext = end($img_explode);
                                                    
                                                        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];
                                                        if(in_array($img_ext, $extensions) === true){
                                                            if($img_size > 5242880){
                                                                $error="*Max upload size is 5 MB!";
                                                                header("location: ../view/addAdmin.php?error=$error");
                                                            }
                                                            else{
                                                                $time = time();
                                                                $new_img_name = $time.$img_name;
                                                                if(move_uploaded_file($tmp_name,"../../img/admin/".$new_img_name)){
                                                                    $admin_data=[
                                                                        'name'=> $name,
                                                                        'username'=> $username,
                                                                        'email'=> $email,
                                                                        'password'=> $password,
                                                                        'gender'=> $gender,
                                                                        'dob'=> $dob,
                                                                        'profile_image'=> $new_img_name
                                                                    ];

                                                                    if(insertAdmin($admin_data)){
                                                                        $success="Successfull!";
                                                                        header("location: ../view/addAdmin.php?success=$success");
                                                                    }
                                                                    else{
                                                                        $error="*Something went wrong, try again!";
                                                                        header("location: ../view/addAdmin.php?error=$error");
                                                                    }
                                                                }  
                                                            }
                                                        }
                                                        else{
                                                            $error="*Incorrect file format!";
                                                            header("location: ../view/addAdmin.php?error=$error");
                                                        }  
                                                    }
                                                    else{
                                                        $error="*Date of birth is required!";
                                                        header("location: ../view/addAdmin.php?error=$error");
                                                    }   

                                            }
                                            else{
                                                $error="*Include a ( @, *, $, % ) in password!";
                                                header("location: ../view/addAdmin.php?error=$error");
                                            }
                                        }
                                        else{
                                            $error="*Atleast 5 characters required in password!";
                                            header("location: ../view/addAdmin.php?error=$error");
                                        }
                                    }
                                    else{
                                        $error="*Password is required!";
                                        header("location: ../view/addAdmin.php?error=$error");
                                    }                                 
                                }
                                else{
                                    $error="*Invalid email format!";
                                    header("location: ../view/addAdmin.php?error=$error");
                                }
                            }
                            else{
                                $error="*Email is required!";
                                header("location: ../view/addAdmin.php?error=$error");
                            }
                        }
                        else{
                            $error="*atleast 5 characters required in username!";
                            header("location: ../view/addAdmin.php?error=$error");
                        }
                    }
                    else{
                        $error="*Only letters and numbers are allowed in username!";
                        header("location: ../view/addAdmin.php?error=$error");
                    }
                }
            }
            else{
                $error="*Invalid name!";
                header("location: ../view/addAdmin.php?error=$error");
            }
        }
    }
?>
