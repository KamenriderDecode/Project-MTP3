<?php
	require 'configs/config.php';
	require 'configs/connect.php';

	$category=$_GET["cate_id"];
	//var_dump($category)
	if(!isset($category))
		{
			include"index2.php";
		}
		else
	{
	    $category1="SELECT * FROM category WHERE cate_id='".$category."'";
	    $stt=mysqli_query($conn,$category1);
	    //var_dump($conn); die();
	    if(!$stt){
	    die ('Record not exist <br>');
	   }
	      while ($row=mysqli_fetch_array($stt)) 
	      //MYSQL_ASSOC tranh dao nguoc SQL
	      {
	        $cate_name = $row['cate_name'];
	      }
	}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title><?php echo $cate_name ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width= device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="templates/front/css/style.css">
	<link rel="stylesheet" type="text/css" href="templates/front/css/header_footer.css">
</head>
<body>
	<header>
		<?php
			require ("header.php");
		?>
	</header>

	<content>
		<section id="main">
					<h2><?php echo $cate_name ?></h2>
					<div id="thoisu" style="border-top: 2px solid orange">
						<?php

					  	$category="SELECT track.category,category.cate_name,track.track_id,track.track_name,track.track_avt,track.name_art
					    FROM track
					    INNER JOIN category ON track.category=category.cate_id
					    WHERE category='".$category."'" ;
					    $cate=mysqli_query($conn,$category);
					    if(!$cate){
					    die ('Record not exist <br>');
					    }
					      while ($row=mysqli_fetch_array($cate)){
						   	?>
						   	<article>
						   		<h1><a href="track_test.php?track_id=<?php echo $row['track_id'] ?>;"><?php echo $row["track_name"]; ?></a></h1>
						   		<img class="ava" src="<?php echo $row['track_avt'] ?>;" alt="ava" />
						   		<p>Thể loại:</p><a href="category.php?cate_id=<?php echo $row["category"] ?>"><?php echo $row["cate_name" 	] ?></a>
						   		<h4><a></a><?php echo $row['name_art']; ?></h4>
						   		<input type="button" value="Nghe" onclick="location.href="#";" class="playbutton"/>
						   	</article>
						   	<?php

						    }
						   	mysqli_close($conn);
					?>
					</div>
		</section>
	</content>

	<footer>
		<?php
			require("footer.php");
		?>
	</footer>

</body>
</html>