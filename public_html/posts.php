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
  <article class="post">
    <h2>Sticky Footer with Flexbox</h2>
    <p class="post-details">by Dolphus Bryant. Posted <time>2017-04-16 09:52</time></p>
    <p>Today I learned how to create a footer that sticks to the bottom of your page using Flexbox. This is the same method I used when styling the footer of this site. It's super simple, and much less frustrating than fiddling with positioning and margins.</p>
    <p>Check it out:</p>
    <div class="code-html">
      <h1>HTML:</h1>
      <pre class="prettyprint lang-html linenums">
<xmp><body>
  <div class="content">
    <p>Content</p>
  </div>
  <footer class="footer"></footer>
</body></xmp></pre>
    </div>
    <div class="code-css">
      <h1>CSS:</h1>
      <pre class="prettyprint lang-css linenums">
html {
  height: 100%;
}

body {
  min-height: 100%;
  display: flex;
  flex-direction: column;
}

.content {
  flex: 1;
}</pre>
    </div>
    <p class="post-details">Sources: <cite><a href="https://css-tricks.com/couple-takes-sticky-footer/">CSS-Tricks.com</a></cite></p>
  </article>
  
  <article class="post">
    <h2>Post Title</h2>
    <p class="post-details">by Dolphus Bryant. Posted <time>Timestamp</time></p>
    <p>Post content.</p>      
    <p class="post-details">Sources: <cite><a href="#">References</a></cite></p>
  </article>
  
  <article class="post">
    <h2>Post Title</h2>
    <p class="post-details">by Dolphus Bryant. Posted <time>Timestamp</time></p>
    <p>Post content.</p>      
    <p class="post-details">Sources: <cite><a href="#">References</a></cite></p>
  </article>
</section>

<!-- Scripts -->
<script type="text/javascript" src="js/prettify.js"></script>

<?php
  include "static/footer.php";
?>