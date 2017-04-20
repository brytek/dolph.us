<?php

$title = "Submit Post";

include "static/header.php";
include "db-config.php";

global $host;
global $user;
global $pass;
global $db;

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection)
{
  echo 'Failed to Connect to Database: ' . mysqli_error();
}

$title = $_POST['title'];
$content = $_POST['content'];
$tags = $_POST['tags'];
$sources = $_POST['sources'];

$title = mysqli_real_escape_string($connection, $title);
$content = mysqli_real_escape_string($connection, $content);
$tags = mysqli_real_escape_string($connection, $tags);
$sources = mysqli_real_escape_string($connection, $sources);

$sql = mysqli_query($connection, "INSERT INTO post (title, content, tags, sources) VALUES ('$title', '$content', '$tags', '$sources')");

if (mysqli_affected_rows($connection) > 0)
{
  echo "<section class='container'><p>Post submitted successfully.</p><p><a href='../new-post.php'>Make another post</a> | <a href='../index.php'>Go Home</a></p></section>";
} else {
  echo "<p>An error occured: " . mysqli_error() . "</p>";
}

mysqli_close($connection);

include "static/footer.php";

?>