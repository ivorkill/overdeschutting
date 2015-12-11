<div id="content">
	<div id="articles">
		<?php
			echo '<section>';
			while ($song = $result->fetch_assoc()) {
			echo '<article>';
			echo '<iframe src="http://www.youtube.com/embed/'.$song['url'].'"></iframe>';
			$str =  '<h1>'.$song['id'].' '.$song['artist'].' : '.$song['song'].'</h1>';
			echo utf8_encode($str);
			echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
			echo '</article>';
			}
			echo '</section>';
		?>
	</div>
</div>