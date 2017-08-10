<?php		
	require_once (__DIR__ .'../mysqli-engine.php');
	$db=new StockUpDb();
	
	$qty=$_POST['txt_search'];

	
	$sql="SELECT * FROM tbl_product WHERE quantity=".$qty;
	$res=$db->select($sql);
	
		foreach($res as $row){
				echo $row['product_desc']."<br/>";
				echo $row['quantity']."<br/>";
			}
?>