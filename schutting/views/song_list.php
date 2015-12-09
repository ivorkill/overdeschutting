<div id="content">
	<div id="articles">
	<h2>Complete Tour Top</h2>
	<section>
		<?php
			while ($song = $result->fetch_assoc()) {
				$str = 	 $song['id'].' '.$song['artist'].' - '.$song['song'].'<br>';
				echo utf8_encode($str);
			}
		?>
	</section>
	</div>
</div>