<?php
$username = $_POST['username'];
$email = $_POST['email'];
$comment_made = $_POST ['commentbox'];
$submit_button = $_POST ['submit'];
$song_id = $_POST ['songfield'];

$sql = "INSERT INTO comments (username, email, comment, song_id) VALUES ('$username', '$email', '$comment_made', '$song_id')";

$result = $mysqli ->query($sql);

echo $sql;