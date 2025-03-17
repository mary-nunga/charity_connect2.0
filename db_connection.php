<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//first we have to connect the project to the database

$con=mysqli_connect("localhost","root","","charity_connect");

//then we check the connection
if($con==false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

function register(){
	global $con;
	//then check if the form was submitted
if($_SERVER['REQUEST_METHOD']=="POST"){ 

if(isset($_POST['submit'])){
//after that get the submitted user input and put them in variables	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];

//check if all fields are filled before inserting
if(!empty($fname) && !empty($lname) && !empty($username) && !empty($password)){
	
	//this hashes the password in db	
	$hashed_password=password_hash($password,PASSWORD_DEFAULT);
	
//then insert the variables in the database	
	$sql = "INSERT INTO users (FirstName,LastName,Username,Password) VALUES ('$fname','$lname','$username','$hashed_password')";
	
	$rs = mysqli_query($con,$sql);
	
	//confirmation message-this is js pop up window
	if($rs)
{
	echo " <script>alert('Records added successfully!');
	
	window.location.href = 'login.php'
	</script>";

	exit();
}
	
} else
	{
		echo "<script> alert('Fill in all fields!');</script>";
	
	}
}
	
}

	
}

function login(){
	global $con;
	//to login, first check if the form data has been submitted
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	//then check if the submit button was clicked
	if(isset($_POST['submit'])){
		
	//the trim removes extra spaces from the username and password.
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		
	//then use this query to search for users in the database.
		$sql= "SELECT * FROM users WHERE Username='$username'";
		//this is used to run the query
		$result= mysqli_query($con,$sql);
		
		//fetches user data as an array
		$user = mysqli_fetch_assoc($result);
	//this checks if a matching record is found
		
		//when found it starts a session so they stay logged in
		//password verify makes sure password matches the hashes one in db
		if($user && password_verify($password,$user['Password'])){
			session_start();//starts a session
			
			$_SESSION['username']=$user['Username'];//saves the logged-in user's username
			
			echo "<script>
			  alert('Login successful!');
              window.location.href = 'home.php';
	            </script>";

	         exit();
			
		}else {
			echo "<script>
			alert('User not found!');
			</script>";
		}
		
	}else{
		echo "<script>
			alert('Fill in all fields!');
			</script>";
		
	}
}

	
}
?>
