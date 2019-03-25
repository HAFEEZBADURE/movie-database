<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
body{
	background: rgba(0,51,0,0.5);
	

}
	.header_outer{
		background:rgba(0,100,0,1);
		position:fixed;
		top:0px;left:0px;
		width: 100%;
		height: 80px;
        z-index: 1;

	}
	.header_inner{
		position:absolute;
		left:550px;
		top:20px;
	}
	.header_inner divs{
	margin:15px;
	font-weight:bold;
	color:silver;
	font-size: 18px;
	
	}
	.header_inner divs:hover{
		color:white;
		cursor: pointer;
	}
	#search_btn{
	padding:10px;
	width:250px;
	  
	font-weight:bold;
	}
	#desc{
		position: absolute;
		width:99%;
		top:100px;
		text-align: center;
	}
	#one{
		font-size:40px;
		color:white;
	}
	#two{
		margin-top:20px;

	}
	#third{
		font-size:30px;
		position:absolute;
		top:250px;
		width:99%;
		margin-top:px;
		text-align:center;
		color:white;
		font-weight:bold;

	}

	hr{
		position:absolute;
		border:0.7px solid black;

		width:80%;
		top:300px;
		left:150px;
	}

	.register_outer{
		position:absolute;
		background:black;
		top:80px;
		left:800px;

	}
</style>
<body> 	
	
	<div class="header_outer">
		<font color="white" >
		<h1 style="border-left-width: 1px;margin-left: 22px;">  MOVIE DATABASE</h1>
		<div class="header_inner" style="left: 660px;>
		< input id=search_btn type="text" placeholder="quick search" >
		<a href=''><divs>Home</divs></a>
		<divs onClick='moviedet()''>View_movie</divs>
	 	<divs onclick='hide()'>Login</divs>
		<divs>|</divs>
		<divs onclick='hide1()' style="margin-left:5px" >Register</divs>
		<divs onclick="window.location.href='about.php'" style="margin-left:5px" >About</divs>
		</div>
	</div>
		<div id=desc>
		<div id=one><b> <u> Download MDB movies: HD smallest size </u></b></div>
		<div id=two>
			Welcome to the official movie database. Here you will be able to store and download movies in <br> excellent 720p, 1080p and 3D quality, all at the smallest file size. Only here.
		</div>

		</div>
		<div id=third>Popular movies</div>
<hr>

<script>
	       function moviedet(){
	window.location.href='display_movie_list.php';
}
</script>";
	</script>
<style>

	#movie_table{
		position:absolute;
		top:300px;
		left:80px;
	}

	#movie_table tr{
		padding:10px;
	}

	#movie_table tr td{
		margin:10px;
		padding:30px;
		
	}

	#movie_table tr td img,#td1{
		border:8px solid white;
		border-radius:10px;	
	}

	#td1:hover{
		cursor:pointer;
		opacity: 0.6;
	}

	#td1{
	position:  absolute;
	width:230px;
	height:345px;
	background:black;
	opacity: 0;
	transition: 0.3s;
	id=
	}
</style>
<!--
<table id=movie_table>
	<tr>
		<td><td1 id=td1 name=aaaa ></td1><img id=img src="images/a.jpg" alt=""></td>
		<td><td1 id=td1><a href="abc.php"></a></td1>
<img alt="Alpha Grand Poster" src="images/photo1.jpg"  >

</td>
		<td><td1 id=td1></td1><img src="images/photo2.jpg" alt=""></td>
		<td><td1 id=td1></td1><img src="images/photo3.jpg" alt=""></td>
	</tr>
	<tr>
		<td><td1 id=td1></td1><img id=img src="images/photo4.jpg" alt=""></td>
<td><td1 id=td1></td1><img id=img src="images/photo6.jpg" alt=""></td>
<td><td1 id=td1></td1><img id=img src="images/photo7.jpg" alt=""></td>
<td><td1 id=td1></td1><img id=img src="images/photo8.jpg" alt=""></td>


	</tr>
</table>
-->
<?php 

include 'movie_desc.php';




 ?>

<style>

	#login_outer{
		position:absolute;
		top:70px;
		background: solid pink;
		padding:20px;
		color:white;
		left:1000px;
		display:none;
		z-index:1;

	}
	#login_inner{

	}
	#login_inner input{
		position:relative;
		margin:10px;
		padding:10px;
		left:-10px;top:-5px;
		
	}
	
</style>
<div id="login_outer">

  <div id="login_inner">
  	<form method=POST>
  		Username<br>

  		<input type="text" id="onee" placeholder="username" name="user" required="true"><br>
  		Password<br>
  		<input type="password" placeholder="********* "name="pass" required="true"><br>
  		<input type="submit" name=submit>

  	</form>
 
  </div>
</div>
<div id="register_outer" style="display:none;">
		<?php include'movie_register.php'; ?>
</div>


	<?php 
	if(isset($_POST['usersubmit'])){
		$user=$_POST['userlogin'];
		$pass=$_POST['userpass'];
		$servername = "localhost";
$usernam = "root";
$password = "";
$dbname = "movie";

$conn = new mysqli($servername, $usernam, $password, $dbname);
$rating;
$sql = "SELECT *  FROM  user_account WHERE (username='".$user."' or id='".$user."') and pass='".$pass."'  ";
$result = $conn->query($sql);
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     echo'<script>
window.location.assign("http://localhost/project1/display_movie_list.php");

     </script>';
    }
}



	}
	 ?>

</div>

</body>
</html>
<?php
$servername = "localhost";
$usernam = "root";
$password = "";
$dbname = "movie";
if(isset($_POST['submit']))
{
$p=$_POST['pass'];
$u=$_POST['user'];
// Create connection
$conn = new mysqli($servername, $usernam, $password, $dbname);

$sql = "SELECT *  FROM account_detail WHERE username='".$u."' AND password='".$p."' ";
$result = $conn->query($sql);
if ($result->num_rows ==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo"<script>
	window.location.href='adminmovie.php';
</script>";
    }

} else {
    echo 'Invalid user name or password'; exit;
}
$conn->close();
}

?>

<script>
	var i=0;
function hide(){
	if(i==0){
	document.getElementById("login_outer").style.display='block';i=1;}
	else{
		i=0;	
		document.getElementById("login_outer").style.display='none';
	}}
	var ii=0;
	function hide1(){	
	if(ii==0){
	document.getElementById("register_outer").style.display='block';ii=1;}
	else{
		ii=0;

		document.getElementById("register_outer").style.display='none';
	}
}	
var iii=0;
function userhide(){
if(iii==0){
	document.getElementById("userbox").style.display='block';iii=1;}
	else{
		iii=0;

		document.getElementById("userbox").style.display='none';
	}
}	


</script>