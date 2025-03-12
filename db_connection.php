<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();

$servername="localhost";
$username="root";
$password="";
$database="charity_connect";

//create connection
$conn=new mysqli($servername,$username, $password,$database);

//check if connected
if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
	 
}
//insert data into database

function register(){
	global $conn;
	
	if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
		
	$password=password_hash($password, PASSWORD_DEFAULT);
	
	if($fname !=''  && $lname !='' && $username !='' && $password !='' ){
		
		$result = $conn-> query("INSERT INTO users(FirstName,LastName,Username,Password) VALUES ('$fname','$lname','$username','$password')");
		
		if($result){
      		echo "<script>
		  alert('Data saved');
		  
		   </script>"; 
			ob_end_flush();
			
			header("Location: login.php");
			
			exit();
		
		
		$conn->close();

	}	else{
		echo "<script>
			alert('PLease fill all fields');
		</script>";
	}
		
}
}
}

?>