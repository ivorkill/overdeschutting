<div id="content">
	<div id="articles">
	<h2>Complete Tour Top<img src="img/top100logo.png"></h2>
		<?php
			while ($song = $result->fetch_assoc()) {
				$str = $song['id']."<a href='?page=song_detail&song_id=".$song['id']."'>".$song['artist']." - ".$song['song']."</a><br>";
				echo utf8_encode($str);
			}
		?>
	</div>
</div>