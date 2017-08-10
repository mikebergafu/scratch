<?php
	require_once (__DIR__ .'../mysqli-engine.php');
	$db=new StockUpDb();
	
	if(isset($_POST['txt_desc']) && isset($_POST['txt_quantity'])){
		
		$desc=$db->quote($_POST['txt_desc']);
		$quantity=$db->quote($_POST['txt_quantity']);
		
		$sql="INSERT INTO tbl_product(product_desc, quantity) 
		VALUES($desc,$quantity)";
		
		$db->query($sql);
		
		echo "<script>alert('Successfully Saved!');
			window.location.href='../html/add-stock.html';
		</script>";
		
				
		} else {
			echo "<script>alert('Form Data Not Saved!');
			window.location.href='../html/add-stock.html';
			</script>";
			}
	
	

?>