<?php 
include("/../configs/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mtp3-Music.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../templates/front/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
<body onload="yourFunction()">

	<div id="navbar">
		 <ul>
			<li><a href="#" >Trang chủ</a></li>
			<li><a href="#" >US-UK</a></li>
			<li><a href="#" >K-Pop</a></li>
			<li><a href="#">J-Pop</a></li>
			<li><a href="#">V-Pop</a></li>
			<li><a href="#">Thể Loại</a></li>
			<li><a href="#">Nghệ Sĩ</a></li>
			<li><a href="#">Cá nhân</a></li>
			<li><a href="#">Đăng nhập</a></li>
			<li><a href="#">Đăng ký</a></li>
			<li><input type="text" name="search" placeholder="Search.."></li>
		</ul>		 
	</div>