
<!DOCTYPE html>
<html>
<head>
	<title>Mtp3-Music.com</title>
	<meta charset="utf-8">
		<!--day la file css cho header and footer-->
		 <link rel="stylesheet" href="templates/front/css/css_artist/reset.css" type="text/css"/> <!--file nay ko anh huong den cac file khac-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    	<link rel="stylesheet" type="text/css" href="templates/front/css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		/*function changeBG(){
			imageID=0;
			if (imageID==0){
				document.getElementById("mid").style.backgroundImage="url(images/maxresdefault.jpg)";
				imageID++;
			}
			if (imageID==1){
				document.getElementById("mid").style.backgroundImage="url(images/image1.jpg)";
				imageID++;
			}
			if (imageID==2){
				document.getElementById("mid").style.backgroundImage="url(images/image2.jpg)";
				imageID==0;
			}
			

		}
		setInterval(changeBG(),3000);*/
		var bgImg = 1;

		//runs every second
		window.setInterval(function(){
		    yourFunction();
		}, 10000);

		//changes background image
		function   yourFunction () {
		  ++bgImg;

		  if(bgImg === 4){
		    bgImg = 1;
		  }

		  if(bgImg === 1){
		    $('#mid').css("background-image","URL('templates/front/images/homepage/maxresdefault.jpg')");

		  }

		  if(bgImg === 2){
		    $('#mid').css("background-image","URL('templates/front/images/homepage/image1.jpg')");
		  }

		  if(bgImg === 3){
		    $('#mid').css("background-image","URL('templates/front/images/homepage/image2.jpg')");
		  		}        
		}
	</script>
</head>
		<?php	require 'header.php';?>
	<!--ai them trang gi thi them truong hop va include o day nhe!!-->		 
   <content>
	    <section id="mid">
		<section id="main">
			<div id="line">
						<h1 class="headline">Mới nhất</h1>

					</div>
					<div id="thoisu" style="border-top: 2px solid orange">
						<?php
	                       include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM track order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						  {
							 echo '<article >
							 <h1><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h1>
							<img class="ava" src="'.$row['track_avt'].'" alt="#" />
							<p>Thể loại:</p><a href="#">Pop, Rock Ballad</a>
							<h5>'.$row['name_art'].'</h5>
							<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/> </article> ';
							
						  }
						  

	                    ?>
					</div>
					<div id="sline" style="border-top: 2px solid orange;margin-top: 20px">
						<h1 class="headline">Nổi nhất</h1>
					</div>
					<div id="vanhoa">
						<?php
	                       include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM track order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						  {
							 echo '<article >
							<h1><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h1>
							<img class="ava" src="'.$row['track_avt'].'" alt="#" />
							<p>Thể loại:</p><a href="#">Pop, Rock Ballad</a>
							<h5>'.$row['name_art'].'</h5>
							<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/> </article> ';
							
						  }
						  

	                    ?>
					</div>
					<div id="sline" style="border-top: 2px solid orange;margin-top: 20px">
						<h1 class="headline">Âu Mỹ</h1>
					</div>
					<div id="vanhoa">
						<?php
	                       include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM track order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						  {
							 echo '<article >
							<h1><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h1>
							<img class="ava" src="'.$row['track_avt'].'" alt="#" />
							<p>Thể loại:</p><a href="#">Pop, Rock Ballad</a>
							<h5>'.$row['name_art'].'</h5>
							<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/> </article> ';
							
						  }
						  

	                    ?>
					</div>
					<div id="sline" style="border-top: 2px solid orange;margin-top: 20px">
						<h1 class="headline">K-Pop</h1>
					</div>
					<div id="vanhoa">
						<?php
	                       include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM track order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						  {
							 echo '<article >
							<h1><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h1>
							<img class="ava" src="'.$row['track_avt'].'" alt="#" />
							<p>Thể loại:</p><a href="#">Pop, Rock Ballad</a>
							<h5>'.$row['name_art'].'</h5>
							<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/> </article> ';
							
						  }
						  

	                    ?>
					</div>
					<div id="sline" style="border-top: 2px solid orange;margin-top: 20px">
						<h1 class="headline">J-POP</h1>
					</div>
					<div id="vanhoa">
						<?php
	                       include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM track order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						  {
							 echo '<article >
							<h1><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h1>
							<img class="ava" src="'.$row['track_avt'].'" alt="#" />
							<p>Thể loại:</p><a href="#">Pop, Rock Ballad</a>
							<h5>'.$row['name_art'].'</h5>
							<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/> </article> ';
							
						  }
						  

	                    ?>
					</div>
		</section>
		<div id="sidebar">
					<aside>
						<h1>Top Bài Hát trong tuần</h1>
						<ul>
							<li><a href="#">Chicken Attack</a></li>
							<li><a href="#">Apple Pen</a></li>
							<li><a href="#">Zen Zen Zense</a></li>
							<li><a href="#">Lạc Trôi</a></li>	
							<li><a href="#">The Longest Time</a></li>
							<li><a href="#">Lạc Rang</a></li>
							<li><a href="#">Lạc Luộc</a></li>
							<li><a href="#">Lạc Nướng</a></li>			
							<li><a href="#">No.1</a></li>
							<li><a href="#">Fuck it. Out of Ideas</a></li>
								
						</ul>
					</aside>
		</div>
		</section>
    </content>
	<footer class="clearfix">
		<?php
			require 'footer.php';
		?>

	</footer>

</body>
</html>