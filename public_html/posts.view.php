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
  <span style="align-items:baseline; display:flex; justify-content:space-between"><h1>// Posts</h1><button style="height:35px"><a href="new-post.php">New Post</a></button></span>
  
  <?php
    include "posts.php";
  ?>
</section>
<!-- Scripts -->
<script type="text/javascript" src="js/prettify.js"></script>

<?php
  include "static/footer.php";
?>