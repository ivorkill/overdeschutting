<div id="page_title">
    <h2>In de Radio 1 Tour Top 100</h2>
</div>
<?php
	while ($previous_song = $previous->fetch_assoc()) {
		echo $previous_song['id'];
		$str = $previous_song['song'];
		echo utf8_encode($str);
	};
	while ($next_song = $next->fetch_assoc()) {
		echo $next_song['id'];
		$str = $next_song['song'];
		echo utf8_encode($str);
	};
	while ($current_song = $current->fetch_assoc()) {
		$str = '<h1>'.$current_song['id'].' '.$current_song['artist'].': '.$current_song['song'].'</h1>';
		echo utf8_encode($str);
		echo '<iframe src="http://www.youtube.com/embed/'.$current_song['url'].'"></iframe>';
	};
?>

<div id="article_text_more">
    <p>O quamquam despicationes, ingeniis praetermissum ea officia de non labore iis fore, singulis minim ubi singulis exercitation. Est ne quem velit anim, se quem eram eu officia, ex est adipisicing, cillum cohaerescant incididunt nisi ingeniis id summis expetendis ut exquisitaque te ipsum litteris ingeniis eu nulla ex de elit senserit, probant cohaerescant ad cernantur.<br> Ea fore distinguantur. Se noster iudicem ut fugiat incurreret aut quem malis, ab quid arbitrantur iis ingeniis fore quorum te quid. Pariatur noster quem ab anim. Quis cohaerescant cernantur sint iudicem non vidisse do possumus.</p>
</div>

<div id="page_title">
    <h2>Reageer op dit bericht </h2>
</div>

<div id="comment_form">
<form method="post">
    <h4>Gebruikersnaam</h4>
    <input type="text" name="username">
    <h4>E-mail</h4>
    <input type="email" name="email">
    <h4>Website</h4>
    <input type="email" name="email">
    <h4>Commentaar</h4>
    <textarea rows="4" cols="50" name="commentbox">
     </textarea>
    <input type="submit" name="submit" value="VERSTUUR">

</form>
</div>
</div>