<?php
	require_once 'config.php';
	$title = 'Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body class="basic">
<?php include_once 'static/noscript.php'; ?>

	<?php include_once 'static/header.php'; ?>

<body class="basic">
<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>


  <div class="collage__filter">
    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".web_development">Web development</a>
    <a href="#" data-filter=".print_design">Print design</a>
    <a href="#" data-filter=".under_development">Under develoment</a>
    <a href="#" data-filter=".open_source">Open source</a>
    <a href="#" data-filter=".code_snippets">Code snippets</a>
    <a href="#" data-filter=".blog_ramblings">Blog ramblings</a>
  </div><!-- // collage__filter -->

<section class="collage__wrapper grid">
<?php

  use \MKD\Markdown;

  $posts_files =  glob('posts/*.php');

for ($i=0; $i < count($posts_files); $i++) {
  $css_class = 'wrapper ';  // Elements can have multiple css classes
  $css_class .= $i % 2 == 0 ? 'row_odd' : 'row_even';
}
  foreach ($posts_files as $key=>$value) {
    include_once $value;

    $name     = str_replace(array('posts/','.php'), '', $value);
    $image    = 'img/portfolio/full/'.$name.'.jpg';
    $thumb    = 'img/portfolio/thumbs/'.$name.'.jpg';
    $tags     = str_replace('_', ' ', $postData['tags']);
    $tagclass = strtolower($postData['tags']);
    $width    = 'width-'.$postData['width'];
    $markdown = Markdown($postData['markdown']);

    $html = <<<HTML
      <div class="grid__item {$width} {$tagClass}">
        <a href="{$image}" class="collage__img" data-fluidbox>
          <img src="{$thumb}" alt="{$name}">
        </a> <br>
        $markdown<br>
        <p><small>Tags: <em>$tags</em></small></p>
      </div>
HTML;

    echo $html;

  } // foreach ($posts_files as $value)

?>
</section><!-- // collage__wrapper -->

  <button class="button__reload icon-reload">
    Load more
  </button>

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
