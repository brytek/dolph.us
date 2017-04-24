<?php
  $title = "Contact";
  include "static/header.php";
?>

<!-- Banner -->
<section class="banner contact-bg">
  <div class="container">
    <h1>Reach Out</h1>
    <p>Got questions? I might have answers!</p>
  </div>
</section>

<!-- Main Content -->
<section class="container">
  <h1>// Contact</h1>
  <div class="contact">
    <form class="contact-form" action="#" method="post">
      <input placeholder="Your name" type="text" required autofocus/>
      <input placeholder="Your email address" type="email" required/>
      <input placeholder="Message subject" type="text" required/>
      <textarea id="ck-editor" placeholder="Type your message here" required></textarea>
      <button name="submit" type="submit" id="contact-form-submit" data-submit="Sending...">Send</button>
    </form>
    <ul class="contact-links">
      <li><a href="https://www.twitter.com"><img src="img/social-icons/twitter.png"/>Twitter</a></li>
      <li><a href="https://github.com/brytek"><img src="img/social-icons/github.png"/>Github</a></li>
      <li><a href="https://www.linkedin.com"><img src="img/social-icons/linkedin.png"/>LinkedIn</a></li>
      <li><a href="https://www.facebook.com/"><img src="img/social-icons/facebook.png"/>Facebook</a></li>
    </ul>
  </div>
</section>

<?php
  include "static/footer.php";
?>