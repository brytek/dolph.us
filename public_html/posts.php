<?php
  $title = "Posts";
  include "static/header.php";
?>
  
<!-- Banner -->
<section class="banner posts-bg">
  <div class="container">
    <h1>My Blog</h1>
    <p>Because the Internet was made for sharing.</p>
  </div>
</section>

<!-- Main Content -->
<section class="container">
  <h1>// Posts</h1>
  <?php

  //predifined fetch constants
  define('MYSQL_BOTH',MYSQLI_BOTH);
  define('MYSQL_NUM',MYSQLI_NUM);
  define('MYSQL_ASSOC',MYSQLI_ASSOC);

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

  $sql = "SELECT * FROM post";
  $data = mysqli_query($connection, $sql);

  if (!$data)
  {
    die("Could not get data: " . mysqli_error());
  }

  while ($row = mysqli_fetch_array($data, MYSQL_BOTH))
  {
    echo "<article class='post'>
            <h2>" . $row[1] . "</h2>
            <p class='post-details'>by Dolphus Bryant. Posted <time>" . $row[5] . "</time></p>
            <p>" . $row[2] . "</p>      
            <p class='post-details'>Sources: <cite>" . $row[4] . "</cite></p>
            <p class='post-details'>Tags: <cite>" . $row[3] . "</cite></p>
          </article>";
  }

  ?>

<!-- Scripts -->
<script type="text/javascript" src="js/prettify.js"></script>

<?php
  include "static/footer.php";
?>