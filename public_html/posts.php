<?php

// Predefine Fetch Constants
define('MYSQL_BOTH',MYSQLI_BOTH);
define('MYSQL_NUM',MYSQLI_NUM);
define('MYSQL_ASSOC',MYSQLI_ASSOC);


// Connect to Database
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
  die("Could not get data: " . mysqli_error());
}


// Return Results
while ($row = mysqli_fetch_array($data, MYSQL_BOTH))
{
  echo "<article class='post'>
          <h2>" . $row[1] . "</h2>
          <p class='post-details'>by Dolphus Bryant. Posted <time>" . $row[5] . "</time> | Modified: <time>" . $row[6] . "</time></p>
          <p>" . $row[2] . "</p>      
          <p class='post-details'>Sources: <cite>" . $row[4] . "</cite></p>
          <p class='post-details'>Tags: <cite>" . $row[3] . "</cite></p>
          <a href='delete-post.php'>Delete</a> | <a href='edit-post.php'>Edit</a>
        </article>";
}


mysqli_close($connection);

?>