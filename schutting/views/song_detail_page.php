<div id="page_title">
    <h2>In de Radio 1 Tour Top 100</h2>
</div>
<div id="detail">
<?php
	while ($previous_song = $previous->fetch_assoc()) {
		echo "<div id='left_song'><div class='rank'>".$previous_song['id']."</div>";
		echo "<a href='?page=song_detail_page&song_id=".$previous_song['id']."'>".utf8_encode($previous_song['song'])."</a></div>";
	};
	while ($next_song = $next->fetch_assoc()) {
		echo "<div id='right_song'><div class='rank'>".$next_song['id']."</div>";
		echo "<a href='?page=song_detail_page&song_id=".$next_song['id']."'>".utf8_encode($next_song['song'])."</a></div>";
	};
	while ($current_song = $current->fetch_assoc()) {
		$str = "<div id='main_song'><div class='rank'>".$current_song['id']."</div> <h1>".$current_song['artist'].": ".$current_song['song']."</h1>";
		echo utf8_encode($str);
		echo "<iframe src='http://www.youtube.com/embed/".$current_song['url']."'></iframe></div>";
	};	
?>
</div>
<div id="article_text_more">
    <p>O quamquam despicationes, ingeniis praetermissum ea officia de non labore iis fore, singulis minim ubi singulis exercitation. Est ne quem velit anim, se quem eram eu officia, ex est adipisicing, cillum cohaerescant incididunt nisi ingeniis id summis expetendis ut exquisitaque te ipsum litteris ingeniis eu nulla ex de elit senserit, probant cohaerescant ad cernantur.<br> Ea fore distinguantur. Se noster iudicem ut fugiat incurreret aut quem malis, ab quid arbitrantur iis ingeniis fore quorum te quid. Pariatur noster quem ab anim. Quis cohaerescant cernantur sint iudicem non vidisse do possumus.</p>
</div>
<div id="page_title">
    <h2>Reageer op dit bericht </h2>
</div>
<div id="comment_form">
<form method="post" action="index.php?page=insert">
    <h4>Gebruikersnaam</h4>
    <input type="text" name="username">
    <h4>E-mail</h4>
    <input type="email" name="email">
    <h4>Commentaar</h4>
    <textarea rows="4" cols="50" name="commentbox">
     </textarea>
    <input type="submit" name="submit" value="VERSTUUR">

	<input type="hidden" name="songfield" value="<?php echo $_GET['song_id']; ?>">

</form>
</div>
=======
</form>
</div>

