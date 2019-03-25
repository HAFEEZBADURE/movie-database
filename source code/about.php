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
		font-size:20px;
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
		<h1 style="border-left-width: 1px;margin-left: 22px;">ABOUT MOVIE DATABASE</h1>
		<div class="header_inner" style="left: 660px;>
		< input id=search_btn type="text" placeholder="quick search" >
		<a href='index.php'><divs>Home</divs></a>
		</div>
	</div>
		<div id=desc>
		<div id=one><b> Download MDB movies: HD smallest size</b></div>
		<div id=two>
			Welcome to the official movie database. Here you will be able to store and download movies in <br> excellent 720p, 1080p and 3D quality, all at the smallest file size. Only here.
		</div>

		</div>
		<hr>
		<div id=third><p>
			<h2> description</h2>
		 			The choosen area or topic for this project is movies. The aim of the project is to create a movie database containing data essential to all users ranging for the average user looking for the description of a movie to somebody from the entertainment industry  who is looking for additional information related to a movie such as the band or artist of a song from the movie.
The information included in the database covers a wide range of elements that can be of use to anybody seeking information related to a movie.

		</p></div>
		<center><button onclick="location.href='index.php'">
Home
</button>
</body></html>
