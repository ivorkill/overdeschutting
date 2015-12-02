<?php

echo '<section>';

while ($song = $result->fetch_assoc()) {
	
	echo '<article>';
	echo '<img src='.$song['img'].'>';
	echo '<h1>'.$song['id'].' '.$song['artist'].' : '.$song['song'].'</h1>';
	echo '<content>'.$song['content'].'</content>';
	echo '</article>';
}

echo '</section>';