<?php

$sql = "SELECT * FROM comments WHERE song_id = $song_id";
$result = $mysqli ->query($sql);


