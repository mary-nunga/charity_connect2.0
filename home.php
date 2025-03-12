<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Home Page</title>
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
			width: 170px;
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
		#div3{
			float: right;
			padding-bottom: 20px;
			
			
		}
		#div4{
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
				<a href="home.php" class=" btn btn-secondary" ><strong>Dashboard</strong></a>
				<a href="profile.php" class=" btn btn-secondary"><strong>My Profile</strong></a>
				<a href="settings.php" class="btn btn-secondary"><strong>Settings</strong></a>
	 </div>
	<div id="div2">
	
		<p>
		  <label><strong>MY DONATIONS</strong></label>
	    </p>
		<div id="div3">
		<a href="donation_profile.php" class=" btn btn-dark" ><strong>New Donation</strong></a>
		</div>
		
		<table style="background-color: whitesmoke" width="145%" border="1" align="center" class=" table table-sm table-bordered p-5 table-striped table-hover ">
		 <tbody>
			 <tr>
				 <th width="9%">Donation ID</th>
	             <th width="14%">Receipient Name</th>
                 <th width="12%">Amount Donated</th>
                 <th width="14%">Payment Method</th>
			 
			 </tr>
			 <tr>
				 <td>1</td>
				 <td>Janine</td>
				 <td>200000</td>
				 <td>Paypal</td>
			 
			 </tr>
			 <tr>
				 <td>2</td>
				 <td>tracey</td>
				 <td>400000</td>
				 <td>Mpesa</td>
			 
			 </tr>
			 <tr>
				 <td>3</td>
				 <td>John</td>
				 <td>2300444</td>
				 <td>Card</td>
			 
			 </tr>
			 <tr>
				 <td>4</td>
				 <td>Bruce</td>
				 <td>500000</td>
				 <td>Paypal</td>
			 
			 </tr>
		</tbody>
		</table>
	</div>
	

	<div id="div4">
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