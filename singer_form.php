<?php
  	   	require("models/singer_info.php");
  	   	require("configs/connect.php");

 		$artist_id=$_GET["artist_id"];
?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width= device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="templates/front/css/header_footer.css">
	<link rel="stylesheet" type="text/css" href="templates/front/css/form singer.css">
	<title><?php echo $name ?></title>
</head>
<body>

<header class="header">
	<?php
		require 'header.php';
	?>
</header>

<div class="wall">
		<div class="banner">
			<img src="<?php echo $img_cover; ?>" alt="img_cover" width="1100px" height="320px">
			<div class="info">
				<div class="icon">
					<img src="<?php echo $img_avr; ?>" alt="img_avr" height="150">
				</div>
					<div id="name"><h2><?php echo $name ?></h2></div>
			</div>
		</div>

		<div class="content">
			<h2>Thông tin cá nhân</h2>
			<ul>
				<li>Tên thật:<?php echo $name ?></li>
				<li>Ngày sinh:<?php echo $birthday ?></li>
				<li>Thể loại:<?php echo $cate_name ?></li>
				<li>Quốc gia:<?php echo $country ?></li>
			</ul>
			<p><?php echo $history ?></p>

			<div class="baihat">
				<h2>Album bài hát</h2>
				<ul>
				<?php 

				    $list="SELECT * FROM track WHERE artist_id='".$artist_id."'";
				    $ndt=mysqli_query($conn,$list);
				    //var_dump($conn)--tra DL nhan dc; die();
				    if(!$ndt){
				    die ('Record not exist <br>');
				    }
				      while ($row=mysqli_fetch_array($ndt)) {
				      	?>
				        <li>
				        	<a href="track_test.php?artist_id=<?php echo $row['artist_id'] ?>&track_id=<?php echo $row['track_id'] ?>;"><?php echo $row['track_name'] ?></a>
						</li>
				        <?php
				    }

				 ?>
					
				</ul>

			</div>		
		</div>
</div>

<footer>
	<?php
		require 'footer.php';
	?>
</footer>

</body>
</html>