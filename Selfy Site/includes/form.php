
  <h2>Contact form</h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="" method="POST">
  <label for="name" > Your Name </label>
  <input type="text" name="name" value="">
  <label for="email" > Your Email </label>
  <input type="text" name="email" value="">
  <label for="msg" > Your Message </label>
  <input type="text" name="msg" value="">
  <label for="subscribe" > Join our newsletter </label>
  <input type="checkbox" name="subscribe" value="true">
  <button type="submit" name="button" class="">Submit</button>
</form>
