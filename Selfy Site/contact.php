<?php
  include 'includes/header.php'
 ?>

<style media="screen">

label, input {
  display: block;
  margin: 5px 0;
  font-family: 'Oswald';
}

input[type="text"] {
  width: 100%;
}

button {
    background: orange;
}

</style>

<div class="container mt-5">
  <h2>Contact Us</h2>
  <hr>
  <div class="row">
    <div class="col">
      <img src="https://is4-ssl.mzstatic.com/image/thumb/Purple124/v4/c1/ae/3d/c1ae3d6d-8629-acd0-6ec6-8fd4e4a1b9b8/AppIcon-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/1200x630wa.png" alt="">
    </div>
    <div class="col">

      <?php
        if (empty($_POST)) {
          include 'includes/form.php';
        } else {
          if (($_POST['name']) == '') {
            echo "<h2> You forgot to submit yourname, please try again!</h2>";
          } else {
            echo "<h2> Thanks to submit {$_POST['name']}!</h2>";
            echo "<p> We will contact you at your Email {$_POST['email']}";
            if (isset($_POST['subscribe'])) {
              echo "<h5> Thanks for joining our newsletter as well! </h5>";
            }
          }
        }
       ?>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php'
 ?>
