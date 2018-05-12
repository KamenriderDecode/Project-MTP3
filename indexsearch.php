<!DOCTYPE html>
<html>
<head>
	<title>Mtp3-Music.com</title>
	<meta charset="utf-8">
		<!--day la file css cho header-->
		<link rel="stylesheet" type="text/css" href="templates/front/css/header_footer.css">
		<link rel="stylesheet" href="templates/front/css/css_artist/reset.css" type="text/css"/>
        <link rel="stylesheet" href="templates/front/css/css_artist/style.css" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
		<?php
			require 'header.php';
		?>
	<!--ai them trang gi thi them truong hop va include o day nhe!!-->		 
   <content>
		<div id="body" style="min-height: 420px;">	
			<div id="content" >
				<div id="row">			   
	   			<?php require 'models/search_track.php' ?>	
				</div>
			</div>
		</div>

	   </body>>
    </content>
	<footer>
	<?php
		require 'footer.php';
	?>

	</footer>

</body>
</html>