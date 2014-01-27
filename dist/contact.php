<?php
	require_once 'config.php';
	$title = 'Contact Me | Marnu Lombard';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="">
    <h1></h1>

    <?php print_r($_GET); ?>

  </section>

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
