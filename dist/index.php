<?php
	require_once 'config.php';
	$title = 'Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>


  <div class="collage__filter">
  <h4>Filter items</h4>
    <a href="#" data-filter="all" class="current">All Categories</a>
    <a href="#" data-filter="front_end_development">Front-end development</a>
    <a href="#" data-filter="back_end_development">Back-end development</a>
    <a href="#" data-filter="laravel">Laravel</a>
    <a href="#" data-filter="print_design">Print design</a>
    <a href="#" data-filter="web_design">Web design</a>
    <a href="#" data-filter="2013">Print design</a>
    <a href="#" data-filter="2014">Web design</a>
    <a href="#" data-filter="under_development">Under development</a>
  </div><!-- // collage__filter -->

<!-- A loading indicator -->
<div class="sexySpinner">
  <span class="ball-1"></span>
  <span class="ball-2"></span>
  <span class="ball-3"></span>
  <span class="ball-4"></span>
  <span class="ball-5"></span>
  <span class="ball-6"></span>
  <span class="ball-7"></span>
  <span class="ball-8"></span>
</div>

<section class="columns collage__wrapper grid" id="ajaxInto">
</section><!-- // collage__wrapper -->

<section class="button__wrapper">
  <button data-nowLoaded="0" class="button__reload icon icon-reload" id="ajaxLoad">
    Load more
  </button>
</section>

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
