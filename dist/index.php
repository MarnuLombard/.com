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
    <a href="#" data-filter="web_development">Web development</a>
    <a href="#" data-filter="print_design">Print design</a>
    <a href="#" data-filter="under_development">Under develoment</a>
    <a href="#" data-filter="open_source">Open source</a>
    <a href="#" data-filter="code_snippets">Code snippets</a>
    <a href="#" data-filter="blog_ramblings">Blog ramblings</a>
  </div><!-- // collage__filter -->

<section class="columns collage__wrapper grid">
<?php

  $posts_files =  glob('posts/*.php');

  // randomise order of keys in array
  shuffle($posts_files);

  foreach ($posts_files as $key=>$value) {
    include_once $value;

    $name     = str_replace(array('posts/','.php'), '', $value);
    $image    = 'img/portfolio/full/'.$name.'.jpg';
    $thumb    = 'img/portfolio/thumbs/'.$name.'.jpg';
    $tags     = str_replace('_', ' ', $postData['tags']);
    $tagClass = strtolower($postData['tags']);
    $markdown = Markdown($postData['markdown']);

    $html = <<<HTML
      <div class="grid__item column__item dontsplit {$tagClass}">
        <a href="{$image}" class="collage__img" data-fluidbox>
          <img src="{$thumb}" alt="{$name}">
        </a>
        <div class="markdown">
          $markdown
          <p><small>Tags: <em>$tags</em></small></p>
        </div>
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
