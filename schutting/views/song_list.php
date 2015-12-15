<div id="content">
	<div id="songlist">
	<h2>Complete Tour Top<img src="img/top100logo.png"></h2>
	<section>
		<?php
			while ($song = $result->fetch_assoc()) {
				$str = "<div class='rank'>".$song['id']."</div> <a href='?page=song_detail_page&song_id=".$song['id']."'>".$song['artist']." - ".$song['song']."</a><br>";
				echo utf8_encode($str);
			}
		?>
	</section>
	</div>
</div>