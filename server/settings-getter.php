<?php
	
	require_once (__DIR__ .'../settings-engine.php');
	$db=new MysqliSettingsDb();
	header('Content-type: application/json'); 
	$title_tag;
    
	$res = $db->query("SELECT * FROM tbl_home ORDER BY created_on DESC");
	
	$outp = array();
	$outp = $res->fetch_all(MYSQLI_ASSOC);
	
	echo json_encode($outp);
	
	
?>