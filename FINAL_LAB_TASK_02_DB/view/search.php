<?php
	require_once('../model/productModel.php');
	$title= "Search";
	include('header.php');
    
?>

	<div id="page_title">
		<h1>Search List</h1>
	</div>

	<div id='nav_bar'>
		<a href="index.html"> Back</a> |
	</div>
    <br>
    <div>
        <form action="" method="post">
            <input type="text" name="search_text" id="">
            <input type="submit" name="search" value="Search By Name">
        </form>
    </div>
    <br>

	<div id="main_content">
		<table border="1" style="border-collapse: collapse;">
			
			<?php 
            if(isset($_POST['search'])){
                $products=searchProduct($_POST['search_text']);
                if(sizeof($products)>0){
                    echo "<tr>
                            <td>Name</td>
                            <td>Profit</td>
                            <td>Action</td>
                        </tr>";

                        for($i=0;$i<sizeof($products);$i++){
                            $id=$products[$i]['id'];
                            $name=$products[$i]['name'];
                            $buying_price=$products[$i]['buying_price'];
                            $selling_price=$products[$i]['selling_price'];
                            $profit=$selling_price - $buying_price;
                            $displayable=$products[$i]['displayable'];
        
                            if($displayable=="yes"){
                                echo "<tr>
                                    <td>$name</td>
                                    <td>$profit</td>
                                    <td>
                                        <a href='edit.php?id=$id'>EDIT</a> |
                                        <a href='delete.php?id=$id'>DELETE</a>
                                    </td>
                                </tr>";
                            }
                        }
                }
                else{
                    echo "<tr>
                            <td>Nothing Found!</td>
                        </tr>";
                }

                
            }
        		
		?>
		</table>
	</div>

<?php include('footer.php'); ?>