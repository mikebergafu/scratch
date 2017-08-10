<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <link href="../assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    	.row-striped:nth-of-type(odd){
			background-color:#FF6;
			
			}
		.row-striped:nth-of-type(even){
			background-color:#fff;
			}
    
    </style>
    
    <script>
    	function sendVal(){
			var book_key=document.getElementById('btnIssue').value;
			window.location.href="../html/issue-book.html?book_id="+book_key;
			
			}
    </script>
</head>
<body>
<?php 
	require_once (__DIR__ .'../mysqli-engine.php');
    // Our database object
    $db=new MySqliDb();

//check if the image already is in the candidate table
		$checkQry="SELECT * FROM tbl_sign ORDER BY created_on DESC";
		$res=$db->select($checkQry);
	?>
		<?php
		echo "<h2 class=' page-header' style='color:#c36; margin:10px;'>
		All Signages</h2>";
		echo "<center><table class='table table-bordered table-striped table-condensed cf' style='width:98%;  margin:10px;'>
			<thead class='cf'>
			 <div class='input-group'>
                        	<span class='input-group-addon glyphicon glyphicon-search' style='background-color:#FFFF66; '></span><span class='input-group-addon' style='background-color:#FFFF66; width:100px;'>Signage</span>
							
                            <input class='form-control' type='search' name='txt_sign' id='txt_sign' placeholder='Search Signage' style='width:200px;'/>
                        </div>
            <tr>
                <th>SN#</th>
				<th>Company</th>
				<th>Location</th>
				<th class='numeric' >Size</th>
				<th>Faces</th>
				<th>Client Type</th>
				<th>Sign Type</th>
				<th>Action</th>
            </tr>
			</thead>";
			?>
		<?php
				$index=1;
               foreach($res as $row) {
				   
				   ?>
                   <tbody>
                       <tr >
                       <td data-title='SN#'>
					   <?php echo $index++ ;?>
                       </td>
                        <td data-title='Company' ><?php echo $row['company_name'];?></td>
                       <td data-title='Location' ><?php echo $row['geo_name'];?></td>
                       <td data-title='Size'><?php echo $row['sign_length']." by ".$row['sign_breadth'];?></td>
                       <td data-title='Faces'><?php echo $row['face'];?></td>
                       <td data-title='Client Type'><?php echo $row['client_type'];?></td>
                       <td data-title='Sign Type'><?php echo $row['sign_type'];?></td>
                       <td data-title='Action'><button class="btn btn-primary" id="btnIssue" value='<?php echo $row['signage_id'];?>' onClick="showMe(this.value)">Issue</button></td>
                       </tr>
                    </tbody>
              <?php  } ?>
              
              </table></center>
              
              
<script>
 function showMe(me){
	 //alert("The Book ID is "+ me);
	 //window.location = '../html/issue-book.html';
	 window.location.href="../html/issue-book.html?book_id="+me;
	 }


</script>
 <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
</body>			
</html>