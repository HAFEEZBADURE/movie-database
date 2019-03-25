<!DOCTYPE html>
<html>
<head>
	<title></title>
</head><style>
	.register_outer{
		position:fixed;
		background:green;
		width:500px;
	}
	#register_outer{
		
	}
	.register_inner{
		position:relative;
		padding:10px;
		left:90px;
		padding-top:20px;
		padding-bottom: 30px;



	}
	.register_inner input{
		margin:10px;
		padding:10px;
		width:250px;
	}
	h2{
		text-align:center;
		position:relative;
		left:-90px;
		color:white;
		font-size:30px;
	}
</style>
<body>
	<div id=register_outer class="register_outer">
		<div class="register_inner">
			<h2>Registration</h2>
			<form action="register1.php " method="POST">
    <input type="text" name="username" placeholder="Username" />
    <br>
    <p>

    <input type="text" name="email" placeholder="E-mail" />
    <br>
    <p>
    <input type="password" name="password" placeholder="Password" />
    <br>
    <p>
    <input type="password" name="re_password" 
    placeholder="re_password" />
 <br>
    <p>
    <input type="submit" name="signup_submit" value="register" />
      </form>

		</div>
	</div>
</body>
</html>
 <?php 
if(isset($_POST['signup_submit'])){
  $uname=$_POST['username'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $new_pass=$_POST['new_password'];

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO account_detail (username, password)
VALUES ('".$uname."','".$pass."')";
/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

}

   ?>