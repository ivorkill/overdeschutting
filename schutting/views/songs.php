<div id="articles">
	<?php
		echo '<section>';
		while ($song = $result->fetch_assoc()) {
		echo '<article>';
		echo '<iframe src="http://www.youtube.com/embed/'.$song['url'].'"></iframe>';
		$str =  '<h1>'.$song['id'].' '.$song['artist'].' : '.$song['song'].'</h1>';
		echo utf8_encode($str);
		echo '<content>'.$song['content'].'</content>';
		echo '</article>';
		}
		echo '</section>';
	?>
</div>