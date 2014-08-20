<?php
	require_once 'config.php';
	$title = 'Contact Me | Marnu Lombard';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="">
    <h1>Get in contact with me</h1>

    <form class="stylised-form grid" id="contactForm" action="<?=$_SERVER['PHP_SELF'];?>" method="post">
      <label class="label grid__item" for="name">Your name</label>
      <input class="input grid__item" type="text" name="name" id="name">

      <label class="label grid__item" for="address">Your email address</label>
      <input class="input grid__item" type="email" name="address" id="address">

      <label class="label label--fullwidth grid__item" for="message">Your message</label>
      <textarea class="textarea grid__item" name="message" id="message" cols="30" rows="10"></textarea>

      <input class="input noshow" type="text" name="text" id="text">

      <button class="submit">Send a message</button>
    </form>



  </section>

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
