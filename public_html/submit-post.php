<?php

$title = "Submit Post";
include "static/header.php";

// Open Database Connection
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

$title = mysqli_real_escape_string($connection, htmlspecialchars($_POST['title']));
$content = mysqli_real_escape_string($connection, htmlspecialchars($_POST['content']));
$tags = mysqli_real_escape_string($connection, htmlspecialchars($_POST['tags']));
$sources = mysqli_real_escape_string($connection, htmlspecialchars($_POST['sources']));

// Make Query
$sql = mysqli_query($connection, "INSERT INTO post (title, content, tags, sources) VALUES ('$title', '$content', '$tags', '$sources')");

if (mysqli_affected_rows($connection) > 0)
{
  echo "<section class='container'><p>Post submitted successfully.</p><p><a href='new-post.php'>Make another post</a> | <a href='index.php'>Go Home</a></p></section>";
} else {
  echo "<section class='container'><p>An error occured: " . mysqli_error() . "</p></section>";
}

// Close Database Connection
mysqli_close($connection);

include "static/footer.php";

?>