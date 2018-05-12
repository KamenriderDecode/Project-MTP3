<!DOCTYPE html>
<html>
<?php
		require_once("configs/config.php");
		require_once("configs/connect.php");
	  
	   if(isset($_GET['track_id'])) $id=$_GET['track_id'];
	   $sql = "SELECT * FROM track where track_id='".$id."'";
	  
	   $retval = mysqli_query($conn,$sql);

	   
	   
	   while($row = mysqli_fetch_array($retval))
	   {
	      $media="{$row['track_link']}";
	      $lyrics="{$row['lyrics']}";
	      $track_name=$row['track_name'];
	      $artist="{$row['name_art']}";
	      $publishment="{$row['publishment']}";
	      $category="{$row['category']}";
	      $track_avt="{$row['track_avt']}";
	   }
	   
	   
	   mysqli_close($conn);
	?>
<head>
	<link rel="stylesheet" type="text/css" href="templates/front/css/header_footer.css">
	<title><?php if(isset($track_name)) echo $track_name; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="templates/front/css/track.css">
	<link href='code/media-player.css' rel='stylesheet' />
	<script src='code/media-player.js'></script>
</head>
<body >
		<?php
			require 'header.php';
		?>
		<div id="content">
			<div class="track_info">
					<h2>
						<?php
							echo "$track_name-$artist<br>";

							echo "Năm phát hành: $publishment";
						?>
					</h2>
				</div>
			<div id='media-player'>
				<audio id='media-video' controls>
					<source src='<?php echo $media ?>' type='audio/mp3'>
			<!-- <source src='WantingYou.mp3' type='audio/mp3'> -->
				</audio>
				<div id='media-controls'>
					<progress id='progress-bar' min='0' max='100' value='0'>0% played</progress>
					<button id='replay-button' class='replay' title='replay' onclick='replayMedia();'>Replay</button>	
					<button id='play-pause-button' class='play' title='play' onclick='togglePlayPause();'>Play</button>
					<button id='stop-button' class='stop' title='stop' onclick='stopPlayer();'>Stop</button>
					<button id='volume-inc-button' class='volume-plus' title='increase volume' onclick='changeVolume("+");'>Increase volume</button>
					<button id='volume-dec-button' class='volume-minus' title='decrease volume' onclick='changeVolume("-");'>Decrease volume</button>
					<button id='mute-button' class='mute' title='mute' onclick='toggleMute("true");'>Mute</button>	
				</div>
				<div id='media-play-list'>
					<h2>Play list</h2>
					<ul id='play-list'>
						<li><span class='play-item' onclick='loadVideo("WantingYou.mp3");'>Wanting You</span></li>
						<li><span class='play-item' onclick='loadVideo("TimeBomb.mp3");'>Time Bomb</span></li>
					</ul>
				</div>
			</div>	
			<!--COMMENTS-->
			<div id="comments">
			<?php   if(isset($_GET['track_id'])) $id=$_GET['track_id']; 
					date_default_timezone_get();
			         require 'configs/connect.php';
					 require 'models/comments.php';
if(isset($_SESSION['user']))
			{		echo    "<form id='getcomments' action='".getComments($conn)."' method='POST'>";
					echo    '<input type="hidden" name="trackidget" value="'.$id.'"/>';	
					echo    '<input type="hidden" name="username" value="'.$_SESSION['user'].'"/>';
					echo    "<input type='hidden'  name='date' value='".date('Y-m-d H:i:s')."'>
							<textarea name='message' ></textarea>
							<input id='submit' type='submit' name='submit' value='コメントする'/>
				  			</form>";
			}
					  displayComments($conn,$id);
			?>
			</div>
		</div>
		<?php
			require 'footer.php';
		?>