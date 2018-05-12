
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
						<h1>'.$row['name_art'].'</h1>
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
						<h1>'.$row['name_art'].'</h1>
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
						<h1>'.$row['name_art'].'</h1>
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
						<h1>'.$row['name_art'].'</h1>
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
						<h1>'.$row['name_art'].'</h1>
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