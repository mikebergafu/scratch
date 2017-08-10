<html>
    <head>
    <title>Web Programming - Add Stock</title>
    <meta name="author" content="mike-berg afu"/>
    <script src="../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
    	.header-links{
			text-decoration:none;
			margin-top:50px; 
			font-size:15px;
			border:1px dashed white;
			background-color:black;
			color:white;
			}
			
		.ope-action{
				width:150px;
				margin:5px;
				box-shadow:1px 1px 1px 0 #000;
			}
		.label-style{
				background-color:#999;
				color:#FFF;
				box-shadow:1px 1px 1px #000;
			}
    </style>
    <script>
    function dateGet(){
    	alert("Date Selected");
    
    }
    </script>
    </head>

<body>
	<div class="container" style="width:100%;">
    	<div class="row">
        	<div class="col-md-12">
            	<!--Page Contents Starts Here-->
                <!--Row 1-->
                <div class="row" style="background-color:#FC0;">
                	<div class="col-md-2">
                    	<img src="../assets/img/logo.png" style="width:100px; height:100px; margin:10px;" />
                    </div>
                    <div class="col-md-7" style="padding-right:50px;">
                    	<h2 class="page-header" >Market Stocker</h2>
                    </div>
                    <div class="col-md-3">
                    	<a class="header-links btn btn-link" href="../index.html">Home</a>
                        <a class="header-links btn btn-link">FQAs</a>
                        
                        <a class="header-links btn btn-link">About</a>
                    </div>
                
                </div>
                <!--Row 2-->
                <div class="row" style="background-color:#ddd;">
                	<div class="col-md-8" style="padding:auto;">
                    	<p>Take Stock Form</p>
                        <form id="frm_take_stock" action="#" method="POST" enctype="multipart/form-data">
                            <div class="input-group">
                               <label class="input-group-addon label-style" style="width:100px;">Description</label>
                               <input id="txt_desc" name="txt_desc" class="form-control" type="text" placeholder="Stock Description" style="width:300px;"/>                            
                            </div>
                            <br/>
                            <div class="input-group">
                               <label class="input-group-addon label-style" style="width:100px;">Quantity</label>
                               <input id="txt_quantity" name="txt_quantity" class="form-control" type="number" placeholder="Stock Quantity" style="width:150px;"/>                            
                            </div>
                            <br/>
                            <div class="input-group">
                               <label class="input-group-addon label-style" style="width:100px;">Unit Price</label>
                               <input id="txt_u_price" name="txt_u_price" class="form-control" type="currency" placeholder="Unit Price" style="width:150px;"/>                            
                            </div>
                            
                            <br/>
                            <div class="input-group">
                               <label class="input-group-addon label-style" style="width:100px;">Type of Stock</label>
                               
                               <select class="form-control" style="width:150px;">
                               		<option value="Food">Food</option>
                                    <option value="Book">Book</option>
                                    <option value="Automotive">Automotive</option>
                               </select>
                               </div>
                               <br/>
                               <div class="input-group">
                               <label class="input-group-addon label-style" style="width:100px;">Expire Date</label>
                               <input id="txt_expire_date" name="txt_expire_date" class="form-control" type="date" placeholder="Expire Date" style="width:150px;" onClick="dateGet()"/>                            
                            </div>
                                                            	
                    	</form>
                    </div>
                    <div class="col-md-4">
                    	<h2 class="page-header">Operations</h2>
                        <p>
                        	<a class="btn btn-default ope-action" title="Clck to Add New Stock"><span class="glyphicon glyphicon-plus"></span>&nbsp;Take Stock</a><br/>
                            <a class="ope-action btn btn-default " title="Clck to Edit New Stock"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Stock</a>
                            <a class="ope-action btn btn-default " title="Clck to View Stock"><span class="glyphicon glyphicon-file"></span>&nbsp;View Stock</a>
                            <a class="ope-action btn btn-danger " title="Clck to Delete Product"><span class="glyphicon glyphicon-minus"></span>&nbsp;Delete Product</a>
                            <a class="ope-action btn btn-default " title="Clck to View Sold"><span class="glyphicon glyphicon-euro"></span>&nbsp;View Sold</a>
                        </p>
                    </div>
                    
                </div>
                
                <!--Row 3-->
                <div class="row" style="background-color:#057;">
                	<div class="col-md-12">
                    	<p>Col 1</p>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

</body>





</html>
