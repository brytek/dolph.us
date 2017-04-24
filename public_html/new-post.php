<?php
  $title = "New Post";
  include "static/header.php";
?>

<!-- Banner -->
<section class="banner posts-bg">
  <div class="container">
    <h1>New Post</h1>
    <p>Let it all out!</p>
  </div>
</section>

<!-- Main Content -->
  
<section class="container new-post">
  <h1>// Write</h1>
  <form action="submit-post.php" method="post">    
    <label for="title">Post Title: </label><input name="title" type="text" required>
    <label for="content">Body: </label><textarea id="ck-editor" name="content" required></textarea>
    <label for="tags">Tags: </label><input name="tags" type="text">
    <label for="sources">Sources: </label><input name="sources" type="text">
    <button type="submit">Submit</button>
  </form>
</section>
  
<?php
  include "static/footer.php";
?>