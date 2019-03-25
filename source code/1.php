<?php 
if(isset($_POST['submit'])){
	
	$movie_id=$_POST['movie_id'];


$servername = "localhost";
$usernam = "root";
$password = "";
$dbname = "movie";

// Create connection
$conn = new mysqli($servername, $usernam, $password, $dbname);
$rating;
$sql = "SELECT *  FROM movies m,movie_director md WHERE mov_id='".$movie_id."' AND m.dir_id=md.dir_id ";
$result = $conn->query($sql);
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $name=$row['mov_title'];
      $year=$row['mov_year'];
      $type=$row['type'];
      $lang=$row['mov_lang'];
      $director=$row['dir_name'];
    }
}
}
 ?>
 <style>

	#movie_table{
		position:absolute;
		top:100px;
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
	
	}
</style>
 <html>
 	<body style='background:#ddd;'>

 <table id=movie_table>
 <tr><td>
<img alt="Alpha Grand Poster" src="images/<?php echo $movie_id ?>.jpg">
<button onclick="window.location.href='videos/1.MP4'" type="button" value='Download' style='position:absolute;width:245px; padding:5px;margin-top:10px;font-weight:bold;font-size:15px;background:darkgreen;color:white;border:0px;border-radius:5px;' name=movie_id>Play</button>
</td></tr>
</table>
<style>
	.movie_name{
		position:absolute;
		top:140px;left:500px;
	}
	.movie_name_inner{
		font-size:30px;
		color:white;
	}
</style>
		<div class="movie_name">
			<div class="movie_name_inner" style="color: red;"><u>Movie Name </u>:-<?php echo $name; ?></div>
				<div class="year" style='position:relative;font-size:25px;top:30px;'>Released Year:-<?php echo $year;  ?></div> 
				<br>
				<div class="type" style='position:relative;font-size:25px;top:30px;'>Geners:-<?php echo $type;  ?>	</div>
				<br>
				<div class="rating" style='font-size:25px'>
				</div>
				<br>
				<div class="year" style='position:relative;font-size:25px;top:30px;'>Director:-<?php echo $director;  ?></div>
				<br>
				<div class="year" style='position:relative;font-size:25px;top:30px;'>Language:-<?php echo $lang;  ?></div>

			</div>
		</div>

<div class='cast'>
</div>
		

 	</body>
 </html>