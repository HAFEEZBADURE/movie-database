<?php
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
//echo "Actor=".$moviename."\n"."Directornamr".$directorname;exit();

$sql = "SELECT * FROM movie_detail";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {

$data = $result->fetch_all();
//echo '<pre>';print_r($data);?>
<html>
<head>   
<style>  

body{
	background: 111;
	overflow: scroll;
    width: 1220px;
    height: 700px;

}
#hafeez{
	position:relative;
		font-size:20px;
		color:white;
		margin:0px;
		font-weight:1px;
	}
	.header_outer{
		background:solid green;
		position:fixed;
		top:0px;left:0px;
		width: 100%;
		height: 100%;
        z-index: 1;
}
</style>


</head>
<style> 
body {
    background-image: url("img_tree.gif"), url("paper.gif");
    background-repeat: no-repeat, repeat;
    background-color: #cccccc;
}
.div1 {
    width: 300px;
    height: 100px;
    border: 1px solid green;
    margin-top:  90px;
    padding: 30px;
}
 
</style>

<div class="div1">movie is stored as well as displayed

 

 </div>
 
 
<br>
<div class="header_outer">
<div id=hafeez>
	<div>
		<h1 align="center">  <u>  Movielist</u></h1>
<table  border="5" id='table' align="center">

	
	<thead>
		
		<th> Movie Name</th>
		<th> Actor Name </th>
		<th> Director Name  </th>
		<th> Release Date </th>
		<th> Rating </th>
		
		<th> Language </th>

	</thead>
	
<tbody>
  </div>
    
<?php foreach($data as $det){ ?>

	<tr>
		<td>
			<?php echo $det[1];?>
		</td>

		<td>
			<?php echo $det[2];?>
		</td>

		<td>
			<?php echo $det[3];?>
		</td>

		<td>
			<?php echo $det[5];?>
		</td>

		<td>
			<?php echo $det[4];?>
		</td>

		<td>
			<?php echo $det[6.];?>
		</td>
	</tr>


 <?php } ?>

</tbody>
<
</table>
<br>
<center><button onclick="location.href='index.php'">
logout
</button>
	</div>
</html>

<?php  }else{ 
echo "No records found";Exit();

 } 

?>
	<?php 

if(isset($_POST['delete_id']) && !empty($_POST['delete_id'])){
	$id = $_POST['delete_id'];



$sql = "DELETE FROM  movie_detail WHERE id=$id";
if (mysqli_query($conn, $sql)) {
echo"<script>
    alert('Record deleted successfully');
    window.location.href='display_movie_list.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




}

	?>