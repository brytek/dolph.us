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
$post = $_GET['id'];
$sql = "SELECT * FROM post WHERE post_ID = " . $post;
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
  <section class="container new-post">
    <h1>// Edit</h1>
    <form action="submit-post.php" method="post">    
      <label for="title">Post Title: </label><input name="title" type="text" value="$title" required>
      <label for="content">Body: </label><textarea id="ck-editor" name="content" value="$content" required></textarea>
      <label for="tags">Tags: </label><input name="tags" type="text" value="$tags">
      <label for="sources">Sources: </label><input name="sources" type="text" value="$sources">
      <button type="submit">Submit</button>
    </form>
  </section>
HTML;
  
  echo $html;
}



// Close Database Connection
mysqli_close($connection);
  
?>