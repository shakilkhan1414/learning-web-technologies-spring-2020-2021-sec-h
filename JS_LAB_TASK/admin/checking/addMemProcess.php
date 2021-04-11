<?php
    require_once "../../database/userModel.php";

    function validateEmail($data){
        $atposition=strpos($data,'@');
        $dotposition=strrpos($data,'.');
        
        if($atposition <1 || $dotposition < $atposition+2 || $dotposition+2 >= strlen($data)){
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

        $firstname=process_input($_REQUEST['firstname']);
        $lastname=process_input($_REQUEST['lastname']);
        $username=process_input($_REQUEST['username']);
        $email=process_input($_REQUEST['email']);
        $password=process_input($_REQUEST['password']);
        $repassword=process_input($_REQUEST['repassword']);
        $gender=process_input($_REQUEST['gender']);
        $dob=process_input($_REQUEST['dob']);

        if(empty($firstname) || empty($lastname)){
            $error="*Name is required!";
            header("location: ../view/addMember.php?error=$error");
        }
        else{
            if(ctype_alpha($firstname) && ctype_alpha($lastname) || strpos($firstname," ")==true){
                if(empty($username)){
                    $error="*Username is required!";
                    header("location: ../view/addMember.php?error=$error");
                }
                else{
                    if(ctype_alnum($username)){
                        if(strlen($username)>4){    
                            if(!empty($email)){
                                if(validateEmail($email)){
                                    if(!empty($password)){
                                        if(strlen($password)>4){
                                            if(strpos($password, "@")!== false||strpos($password, "*")!== false||strpos($password, "$")!== false||strpos($password, "%")!== false){
                                                if($password==$repassword){
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
                                                                header("location: ../view/addMember.php?error=$error");
                                                            }
                                                            else{
                                                                $time = time();
                                                                $new_img_name = $time.$img_name;
                                                                if(move_uploaded_file($tmp_name,"../../img/user/".$new_img_name)){
                                                                    $user=[
                                                                        'firstname'=> $firstname,
                                                                        'lastname'=> $lastname,
                                                                        'username'=> $username,
                                                                        'email'=> $email,
                                                                        'password'=> $password,
                                                                        'gender'=> $gender,
                                                                        'dob'=> $dob,
                                                                        'profile_image'=> $new_img_name
                                                                    ];

                                                                    if(insertUser($user)){
                                                                        $success="Successfull!";
                                                                        header("location: ../view/addMember.php?success=$success");
                                                                    }
                                                                    else{
                                                                        $error="*Something went wrong, try again!";
                                                                        header("location: ../view/addMember.php?error=$error");
                                                                    }
                                                                }  
                                                            }
                                                        }
                                                        else{
                                                            $error="*Incorrect file format!";
                                                            header("location: ../view/addMember.php?error=$error");
                                                        }  
                                                    }
                                                    else{
                                                        $error="*Date of birth is required!";
                                                        header("location: ../view/addMember.php?error=$error");
                                                    }   
                                                }
                                                else{
                                                    $error="*Password didn't match!";
                                                    header("location: ../view/addMember.php?error=$error");
                                                }
                                            }
                                            else{
                                                $error="*Include a ( @, *, $, % ) in password!";
                                                header("location: ../view/addMember.php?error=$error");
                                            }
                                        }
                                        else{
                                            $error="*Atleast 5 characters required in password!";
                                            header("location: ../view/addMember.php?error=$error");
                                        }
                                    }
                                    else{
                                        $error="*Password is required!";
                                        header("location: ../view/addMember.php?error=$error");
                                    }                                 
                                }
                                else{
                                    $error="*Invalid email format!";
                                    header("location: ../view/addMember.php?error=$error");
                                }
                            }
                            else{
                                $error="*Email is required!";
                                header("location: ../view/addMember.php?error=$error");
                            }
                        }
                        else{
                            $error="*atleast 5 characters required in username!";
                            header("location: ../view/addMember.php?error=$error");
                        }
                    }
                    else{
                        $error="*Only letters and numbers are allowed in username!";
                        header("location: ../view/addMember.php?error=$error");
                    }
                }
            }
            else{
                $error="*Invalid name!";
                header("location: ../view/addMember.php?error=$error");
            }
        }
    }
?>
