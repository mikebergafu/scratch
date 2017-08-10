
<?php

	require_once (__DIR__ .'../settings-engine.php');
	$db=new MysqliSettingsDb();
	
	//get form field value and check if it contain data
	if(isset($_POST['txt_titlebar_text'])&& isset($_POST['txt_main_heading'])){	
		//now assign the data to the desc variable
		$titlebar=$db->quote($_POST['txt_titlebar_text']);
		$page_header=$db->quote($_POST['txt_main_heading']);
		
		$sql_insert="INSERT INTO tbl_home(title_tag, page_header_title) VALUES ($titlebar,$page_header)";
		
		$db->query($sql_insert);	
		
		echo "<script>alert('Title Tag: " .$titlebar." Page Heading ".$page_header."');
			window.location.href='../pages/page-setting.html';
		</script>";		
		}else{
			echo "<script>alert('Ooops! Something went wrong');
			window.location.href='../pages/page-setting.html';
		</script>";
			} 

?>

