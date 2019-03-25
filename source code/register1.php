

<?php 

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

$sql = "INSERT INTO account_detail (username,email, password,new_password)
VALUES ('$uname','$email','$pass','$new_pass')";
if (mysqli_query($conn, $sql)) {
    echo"<script> alert('New record created successfully');
    window.location.href='index.php'
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


   ?>