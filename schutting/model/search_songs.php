<?php

$search_string;

$sql = "SELECT * FROM songs WHERE title LIKE '%$search_string%'";

$search_result = $mysqli->query($sql);

$search_result = $mysqli->query($sql);

$search_result = resultToArray($search_result);
?>