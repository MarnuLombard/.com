<?php
	require_once 'config.php';
	$title = 'Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body class="basic">
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>


  <div class="collage__filter">
    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".web">Web development</a>
    <a href="#" data-filter=".print">Print design</a>
    <a href="#" data-filter=".under_development">Under develoment</a>
    <a href="#" data-filter=".open_source">Open source</a>
    <a href="#" data-filter=".code_snippets">Code snippets</a>
    <a href="#" data-filter=".blog">Blog ramblings</a>
  </div><!-- // collage__filter -->

<?php

  use \MKD\Markdown;

  $posts_files =  glob('posts/*.php');
  // print_r($posts_files);


  foreach ($posts_files as $value) {
    include_once $value;
    $name = str_replace(array('posts/','.php'), '', $value);
    echo $name;
    /*$tags     = $postData['tags'];
    $width    = $postData['width'];
    $markdown = Markdown::defaultTransform($postData['markdown']);

    $html = <<<HTML
      <div class="grid__item {$width} {$tags}">
        $markdown <br>
        <p><small><em>Tags: $tags</em></small></p>
      </div>
HTML;

    echo $html;
*/
  } // foreach ($posts_files as $value)

?><section class="collage__wrapper grid">

</section><!-- // collage__wrapper -->

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>
<script>

</script>
</body>
</html>
<?php ob_flush(); ?>
