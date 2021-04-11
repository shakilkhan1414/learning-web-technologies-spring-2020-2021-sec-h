<?php 
    session_start();
    require_once "../../database/adminModel.php";
    require_once "../../database/userModel.php";

    if(!isset($_SESSION['flag'])){
        header("location: index.php");
    }

    $result=getadminById($_SESSION['id']);
    $name=$result['name'];
    $image=$result['profile_image'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>FarmersEdge-Dashboard</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body onload="homeContent();">
    
    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="../../img/logo.png" alt="">
            <label for="sidebar-toggle"><i class="fas fa-bars"></i></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li class="active" onclick="homeContent()">
                        <i class="fas fa-home-lg-alt"></i>
                        <span>Home</span>
                </li>
                <li>
                        <i class="fas fa-users"></i>
                        <span>Members</span>
                </li>
                <li onclick="addMember()">
                        <i class="fas fa-user"></i>
                        <span>Add Member</span>
                </li>
                <li>
                        <i class="fas fa-box"></i>     
                        <span>Products</span>
                </li>
                <li onclick="addProduct()">
                        <i class="fas fa-box-open"></i>
                        <span>Add Product</span>
                </li>
                <li onclick="addAdmin()">
                        <i class="fas fa-user-shield"></i>
                        <span>Add Admin</span>
                </li>
                <li>
                        <i class="fas fa-cart-arrow-down"></i>
                        <span>Orders</span>
                </li>
                <li>
                        <i class="fas fa-comments"></i>
                        <span>Inbox</span>
                </li>
                <li>
                        <i class="fas fa-chart-line"></i>
                        <span>Transactions</span>
                </li>
                <li onclick="addNotice()">
                        <i class="fas fa-flag-checkered"></i>
                        <span>Notice</span>
                </li>
                <li>
                        <i class="fas fa-mailbox"></i>
                        <span>Member's Post</span>
                </li>
                <li>
                        <i class="fas fa-question-circle"></i>
                        <span>FAQ</span>
                </li>
                <li>
                        <i class="fas fa-id-card"></i>
                        <span>Contact Us</span>
                </li>
                <li onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                </li>
            </ul>
        </div>
    </div>
    
    
    <div class="main-content">
        
        <header>
            <div class="headertext">
                <h2>Dashboard</h2>
            </div>
            <div class="search-wrapper">
                <i class="fas fa-search ti-search"></i>
                <input type="search" placeholder="Search here">
            </div>
            
            <div class="social-icons">
                <div class="image">
                    <img src="../../img/admin/<?="$image";?>" alt="admin_image">
                </div>
                <div class="details">
                    <?="<h4>$name</h4>";?>
                    <span>Admin</span>
                </div>
            </div>
        </header>
        
        <main>      
            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                                <?php 
                                    $alluserresult=getAllUser();
                                    $members=sizeof($alluserresult);
                                    echo $members;
                                ?>
                            </h4>
                            <h5>Members</h5>  
                        </div>
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                            <?php
                                $conn=getConnection(); 
                                $productsql="select * from product";
                                $productresult=$conn->query($productsql);
                                $product=$productresult->num_rows;
                                echo $product;
                                ?>
                            </h4>
                            <h5>Products</h5>  
                        </div>
                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
                
                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>
                            <?php
                                $ordersql="select * from orders";
                                $orderresult=$conn->query($ordersql);
                                $orders=$orderresult->num_rows;
                                echo $orders;
                                ?>
                            </h4>
                            <h5>Orders</h5>  
                        </div>
                        <i class="fas fa-cart-plus"></i>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <div>
                            <h4>7000</h4>
                            <h5>Balance</h5>  
                        </div>
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
            </div>
            
            <section class="recent" id="main-content">

            </section>
            
        </main>
        
    </div>
    
    <script src="../js/script.js"></script>
</body>
</html>