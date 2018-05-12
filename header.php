
	
	<div style="height: 200px;">
		<img src="templates/front/images/mtp3.png" style="width:100%; height: 100%;">
	</div>
	<div id="navbar">
			 <ul>
				<li><a href="index2.php" >Trang chủ</a></li>
				<li><a href="#">V-Pop</a></li>
				<li><a href="category.php?cate_id=1">Thể Loại</a></li>
				<li><a href="listartist.php">Nghệ Sĩ</a></li>
				<?php session_start();if(isset($_SESSION['user'])){echo '<li><a href="table_track_admin/view_all.php">AdminTrack</a></li>';}?>
				<?php if(isset($_SESSION['user'])){echo '<li><a href="table_artist_admin/view_artist.php">Adminartist</a></li>';}?>
				<li><a href="views/admin/user/login.php">Đăng nhập</a></li>
				<li><a href="views/admin/user/singup.php">Đăng ký</a></li> 
				<?php if(isset($_SESSION['user'])){echo '<li><a href="admin/user/logout.php">Đăng Xuất</a></li>';}?>
				<li><form action="indexsearch.php" method="POST">
					<input type="text" id="search" name="timkiem" placeholder="">
					</form>	
				</li>

				
			</ul>		 
		</div>