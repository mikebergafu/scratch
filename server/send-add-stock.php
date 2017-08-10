
<?php

	require_once('mysqli-engine.php');
	
	$db=new StockUpDb();
	
	//get form field value and check if it contain data
	if(!empty($_POST['txt_desc'])&&
	!empty($_POST['txt_quantity'])&&
	!empty($_POST['txt_u_price'])){
		
		//now assign the data to the desc variable
		$desc=$db->quote($_POST['txt_desc']);
		$qty=$db->quote($_POST['txt_quantity']);
		$price=$db->quote($_POST['txt_u_price']);
		//print the content of the desc variable
		//echo "Description variable contains ".$desc;
		
		$sql_insert="INSERT INTO tbl_product(product_desc, quantity, unit_prioce) VALUES ($desc,$qty,$price)";
		
		$db->query($sql_insert);	
		
		echo "<script>alert('DESCPRITION: " .$desc." Quantity ".$qty." Unit Price ".$price."');
			window.location.href='../index.html';
		</script>";		
		}
		
				
		//$desc=$_POST['txt_desc'];
		//$qty=$_POST['txt_quantity'];
		//$u_px=$_POST['txt_u_price'];
?>
