<!DOCTYPE html>
<html>
<head>
  <title>Movie Entry </title>
</head>
<style>
		body{
					 background-color: lightblue;
			       	 overflow: scroll;
			         width: 1220px;
    				height: 550px;
			}
	.left {
  			position: absolute;
  			top: 0px;
  			left:auto;
 		    right: 0px;
  			width: 800px;
  			height: 100%;
	  	  } 
input[type="text"],
input[type="password"] {
  display: block;
  margin-bottom: 05px;
  padding: 4px;
  width: 300px;
  border-radius:20px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid blue;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 25px;
  width: 220px;
  height: 40px;
  background: green;
  border: none;
  border-radius: 10px;
  color: white;
  font-weight: 500;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
 
}

input[type="submit"]:active {

</style>
<body>
		
   <div class="register_one">
<!--<div id="login-box">-->
  <div class="left">
    <h1>Movie Entry</h1>
    <form method=post>
    <input type="text" name="moviename" placeholder="moviename" required="true" />
    <br>
    <p>

    <input type="text" name="actorname" placeholder="actorname" required="true"/>
    <br>
    <p>
    <input type="text" name="directorname" placeholder="directorname" required="true"/>
    <br>
    <p>
    <input type="text" name="rating" placeholder="rating" required="true"/>
    <br>
    <p>

	    <input type="text" name="movie_date" placeholder="yy-mm-dd" required="true"/>
   <br>
    <p>
	    <input type="text" name="mlang" placeholder="language" required="true"/>


    <input type="submit" name="submit" value="submit" />
      <br>


      </form>
  </div>
</div>
<!-- </div> -->
  </body>
  <?php 
if(isset($_POST['submit'])){
  $moviename=$_POST['moviename'];
  $actorname=$_POST['actorname'];
  $directorname=$_POST['directorname'];
  $rating=$_POST['rating'];
  $rdate=$_POST['movie_date'];
   $mlang=$_POST['mlang'];

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
//echo "Actor=".$moviename."\n"."Directornamr".$directorname;exit();

$sql = "INSERT INTO movie_detail (`movie_name`, `actor_name` ,`director_name` ,`movie_rating` ,`movie_date`,`mlang`)
VALUES ('".$moviename."','".$actorname."','".$directorname."','".$rating."','".$rdate."','".$mlang."')";
if (mysqli_query($conn, $sql)) {

    header("location:display_movie_list.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}

   ?>