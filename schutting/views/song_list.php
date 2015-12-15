<div id="content">
	<div id="articles">
	<h2>Complete Tour Top</h2>
	<section>
		<?php
			while ($song = $result->fetch_assoc()) {
				$str = $song['id']." <a href='?page=song_detail_page&song_id=".$song['id']."'>".$song['artist']." - ".$song['song']."</a><br>";
				echo utf8_encode($str);
			}
		?>
	</section>
	</div>
</div>