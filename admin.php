<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Admin Page</title>
	<style>
		body{
			padding-top: 10px;
			background-color: cadetblue;
			background-size: 100%;
		}
		label{
			font-size: 40px;
		}
		nav{
			background-color: white;		
		}
		
		
		#div1{
			float: left;
			margin-top: 100px;
			margin-right: 30px;
			margin-left: 20px;
			margin-bottom: 500px;
			width: 180px;
			border: solid;
			border-radius: 10px;
			height: 250px;
			
			
		}
		#div2{
			
			text-align: center;
			float: right;
			margin-top: 100px;
			margin-left: 60px;
			margin-bottom: 40px;
			align-content: center;
			padding-right: 150px;
			width: 1200px;
			height: 100px;
			
				
		}
		
		#div4{
		clear: both;
		text-align: center;
		margin-top: 50px;
		margin-bottom: 20px;
	}
		#div5{
			padding-left: 5px;
			background-color: white;
			clear: both;
			margin-top: 40px;
			padding-bottom: 20px;
			
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-light fixed-top">
	<div class="container-fluid">
		<img src="logo.jpg" width="67" height="46" class="navbar-brand">
	  <ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="index.php"><strong>Home</strong></a>
				</li>
			<li class="nav-item">
				<a  class="nav-link" href="aboutus.php"><strong>About Us</strong></a>
				</li>
			<li class="nav-item">
				<a class="nav-link"  href="#contact"><strong>Contact</strong></a>
				</li>
			
			</ul>
			</div>
    </nav>
		
     <div id="div1" class="btn-group-vertical">
				<a href="admin.php" class=" btn btn-secondary" ><strong>Dashboard</strong></a>
		 		<a href="admin_users.php" class=" btn btn-secondary"><strong>Manage Users</strong></a>
		        <a href="admin_donations.php" class="btn btn-secondary"><strong>Manage Donations</strong></a>
		        <a href="adminprofile.php" class=" btn btn-secondary"><strong>My Profile</strong></a>
		        <a href="adminsettings.php" class="btn btn-secondary"><strong>Settings</strong></a>
	 </div>
	<div id="div2">
	
		<p>
		  <label><strong>WELCOME ADMIN</strong></label>
			<h2>Recent Donations</h2>
	    </p>
		<table style="background-color: whitesmoke" width="145%" border="1" align="center" class=" table table-sm table-bordered p-5 table-striped table-hover ">
		 <tbody>
			 <tr>
				 <th width="9%">Donor</th>
	             <th width="14%">Amount</th>
                 <th width="12%">Payment Method</th>
				 <th width="14%">Date Donated</th>
                 
			 
			 </tr>
			 <tr>
				 <td>John</td>
				 <td>$ 200000</td>
				 <td>Paypal</td>
				 <td>23/04/2024</td>
			 
			 </tr>
			 <tr>
				 
				 <td>Tracey</td>
				 <td>$ 400000</td>
				 <td>Mpesa</td>
				 <td>02/04/2024</td>
			 
			 </tr>
			 <tr>
				
				 <td>John</td>
				 <td>$ 2300444</td>
				 <td>Card</td>
				 <td>23/08/2024</td>
			 
			 </tr>
			 <tr>
				 
				 <td>Bruce</td>
				 <td>$ 500000</td>
				 <td>Paypal</td>
				 <td>23/09/2024</td>
			 
			 </tr>
		</tbody>
		</table>
	</div>
	<div id="div4"><a href="logout.php" class="btn btn-dark btn-lg">Logout</a></div>
	

	<div id="div5">
			<hr>
		<footer id="contact">
	<h3>Contact Us</h3>
	<p>Email: <a href="mailto:support@charityconnect.com">support@charityconnect.com</a></p>
	<p>Phone: +29394042040</p>
	<p>Adress: 123 Giving Street, Hope City</p>
	</footer>
	
	</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>