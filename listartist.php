<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="templates/front/css/css_artist/reset.css" type="text/css"/>
	<link rel="stylesheet" href="templates/front/css/css_artist/style.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="templates/front/css/header_footer.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>


	<body>
		<header>
			<?php
				require 'header.php';
			?>
		</header>
		<content>
			<div id="body">
				<!--sidebar-->
	            <div id="content" >
					<h2 class="title-item">
	                </h2>
					<div id="row">
	                <?php
						include 'models/pagination.php';
						$result=mysqli_query($conn,"SELECT * FROM artist order by rand() LIMIT  $position,$display");
						
						while($row=mysqli_fetch_array($result))
						{
							echo '<div class="item">
	                        <img src="'.$row['artist_avr'].' " alt="'.$row['name'].'" />
	                        <div class="contentitem"><a<h3><a href="singer_form.php?artist_id='.$row['artist_id'].'">'.$row['name'].'</a></h3></div>
	                    </div> ';
						}
					
					?>
				</div>
						
	            
	            </div>        
				<!--sidebarright-->
					<!--jqueryforsidebar-right-->
					<script>
						$(document).ready(function(){
							$(".tabcontent").hide();
							$(".tabcontent:first").show();
							$("#toptrack li").click(function(){
								$("#toptrack li.active").removeClass(".active");
								$(this).addClass(".active");
								$(".tabcontent").hide();
								var activeBar=$(this).attr("rel");
								$("#"+activeBar).fadeIn();
							})
						})
				    </script> 
					<div id="sidebar-right">            
					<h2><a href="">BXH Bài Hát</a></h2>
					<div id="toptrack">
							<ul id="tabtrack" class="clearfix" >
								<li class="active" rel="tab1"><a>Việt Nam</a></li>
								<li class="active" rel="tab2"><a>Âu Mỹ</a></li>
								<li class="active" rel="tab3"><a>Hàn Quốc</a></li>
							</ul>
					</div>
						<div id="listtoptrack" >
							<div class="tabcontent" id="tab1">
								<ul>
							  		<?php require 'configs/connect.php';
									  $result=mysqli_query($conn,"SELECT * FROM track LIMIT 3");
									  while($row=mysqli_fetch_array($result))
									  {
										  echo ' <li class="toplist">
										<a><img src="'.$row['track_avt'].'" alt="'.$row['track_name'].'"/>
											 </a>
											 <div class="contenttrack">
											<p class="numberrank">2</p>
											<div class="contenttrack2">
											<h3>'.$row['track_name'].'</h3>
											<h4>'.$row['name_art'].'</h4>
											
										     </div>
											 </div>	
										
										<i class="icon-circle-play"></i>
														
							  		</li>';
									  }
									?>
								</ul>
							</div>
							<div class="tabcontent" id="tab2">
								<a href=""><img src="http://zmp3-photo-td.zadn.vn/banner/9/8/980314b2f29f97aaed9fa2991bc442ab_1490847983.jpg" alt="Shape of you"/></a>
								<p>fasfasdfasdfasf</p>
							</div>
							<div class="tabcontent" id="tab3">
								<img src="http://zmp3-photo-td.zadn.vn/banner/2/1/215932021c0d75092fdd2a2fd07f2d12_1490974626.jpg" alt="Knock Knock - TWICE"/></a>
								<p>fasdfasd</p>
							</div>
						</div>

					</div>
	            </div>
	         </content>
			<footer>
				<?php
					require 'footer.php';
				?>
			</footer>
    </body>
</html>
