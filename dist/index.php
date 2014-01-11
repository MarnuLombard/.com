<?php
	require_once 'config.php';
	$title = 'Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body>
<!-- A sexy css spinner -->
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
<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>


  <div class="collage__filter">
  <h4>Filter items</h4>
    <a href="#" data-filter="all" class="current">All Categories</a>
    <a href="#" data-filter="web_development">Web development</a>
    <a href="#" data-filter="print_design">Print design</a>
    <a href="#" data-filter="under_development">Under develoment</a>
    <a href="#" data-filter="open_source">Open source</a>
    <a href="#" data-filter="code_snippets">Code snippets</a>
    <a href="#" data-filter="blog_ramblings">Blog ramblings</a>
  </div><!-- // collage__filter -->

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
