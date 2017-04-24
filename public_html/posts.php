<?php

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



// Make Query
$sql = "SELECT * FROM post ORDER BY post_ID DESC";
$data = mysqli_query($connection, $sql);

if (!$data)
{
  echo "Could not get data: " . mysqli_error();
}



// Return Results
while ($row = mysqli_fetch_array($data, MYSQLI_BOTH))
{
  $post_ID  = $row[0];
  $title    = $row[1];
  $content  = $row[2];
  $tags     = $row[3];
  $sources  = $row[4];
  $created  = $row[5];
  $modified = $row[6];
  
  $html = <<<HTML
  <article id='$post_ID' class='post'>
    <h2>$title</h2>
    <p class='post-details'>by Dolphus Bryant. Posted <time>$created</time> | Modified: <time>$modified</time></p>
    <p>$content</p>
    <p class='post-details'>Sources: <cite>$sources</cite></p>
    <p class='post-details'>Tags: <cite>$tags</cite></p>
    <a href='delete-post.php'>Delete</a> | <a href='edit-post.view.php?id=$post_ID'>Edit</a>
  </article>
HTML;
  
  echo $html;
}



// Close Database Connection
mysqli_free_result($data);
mysqli_close($connection);

?>