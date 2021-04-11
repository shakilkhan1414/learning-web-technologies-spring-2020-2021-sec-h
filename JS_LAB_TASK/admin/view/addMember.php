<a href="dashboard.php">Home</a>
    <br><br>



<div class="container">
    <div class="title">Add Member</div>

    <?php 
        if(isset($_REQUEST['success'])){
            $success=$_REQUEST['success'];
            echo "<span class='successaddmember'>$success</span>";
        }
      else if(isset($_REQUEST['error'])){
        $error=$_REQUEST['error'];
        echo "<span class='erroraddmember'>$error</span>";
      }
    ?>
    


    <div class="content">
      <form action="../checking/addMemProcess.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="firstname" placeholder="Enter your first name" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" placeholder="Enter your last name" name="lastname" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your password" name="password" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Retype Password</span>
            <input type="password" placeholder="Retype your password" name="repassword" autocomplete="off">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="Male" id="dot-1" checked>
          <input type="radio" name="gender" value="Female" id="dot-2">
          <input type="radio" name="gender" value="p_n_t_s" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="last"> 
            <div class="input-box">
                <span class="details">Date of Birth</span>
                <input type="date" name="dob" id="date">
            </div>
            <div class="input-box">
                <span class="details">Profile Picture</span>
                <input type="file" name="profile_image" id="image">
            </div>
        </div>
        <div class="button">
          <input type="submit" value="Add">
        </div>
      </form>
    </div>
  </div>










  <style>
      #wrapper{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(to left,rgba(0, 0, 0,0.7),rgba(0, 0, 0,0.7)),url("../../img/background.jpg");
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px 0 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  color: #150338;
  font-size: 25px;
  font-weight: 500;
  position: relative;
}

.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 3px 0;
}

form .user-details .input-box{
  margin-bottom: 5px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 10px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #150338;
}
 form .gender-details .gender-title{
  font-size: 18px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 5px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: black;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 0 0 20px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 400;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background-color: black;
 }
 
  form .last{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 3px 0;
  }
  form .last .input-box{
    margin-bottom: 5px;
    width: calc(100% / 2 - 20px);
    font-size: 18px;
  }
  form .last .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
  }
  form .last .input-box input[type='file']{
    border:0;
  }
  .erroraddmember{
    color: red;
    display: inline-block;
    transform: translateY(10px);
  }
  .successaddmember{
    color: green;
    display: inline-block;
    transform: translateY(10px);
  }
  </style>