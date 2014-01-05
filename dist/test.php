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

<?/*php

  use \MKD\Markdown;

  $posts_files =  glob('posts/*.php');
  // print_r($posts_files);


  foreach ($posts_files as $value) {
    include_once $value;
    $name = str_replace(array('posts/','.php'), '', $value);
    echo $name;
    $tags     = $postData['tags'];
    $width    = $postData['width'];
    $markdown = Markdown::defaultTransform($postData['markdown']);

    $html = <<<HTML
      <div class="grid__item {$width} {$tags}">
        $markdown <br>
        <p><small><em>Tags: $tags</em></small></p>
      </div>
HTML;

    echo $html;

  } // foreach ($posts_files as $value)
*/
?>

<style>

</style>

<section class="columns grid">

      <div class="grid__item width-1 ">
        <a href="img/portfolio/full/indigo.jpg" class="collage__img" data-fluidbox="">
          <img src="img/portfolio/thumbs/indigo.jpg" alt="indigo">
        </a> <br>
        <h4>Indigo Marketing</h4>

<p>This is the redesign of my current employer's site.</p>

<p><strong>Notable features:</strong></p>

<ul>
<li>Completely hi-res ready with SVGs and icon-fonts</li>
<li>A dynamically generated, database-driven gallery</li>
<li>An upload system for the gallery</li>
<li>The slider removes itself before the DOM loads or images download based screen size. (no display:none)</li>
</ul>

<p><a href="http://indigo.co.za">Live site</a></p>
<br>
        <p><small>Tags: <em>Web Development 2013</em></small></p>
      </div>      <div class="grid__item width-1 ">
        <a href="img/portfolio/full/joanke.jpg" class="collage__img" data-fluidbox="">
          <img src="img/portfolio/thumbs/joanke.jpg" alt="joanke">
        </a> <br>
        <h4>Jo Anke Contemporary Gallery</h4>

<p>A very straightforward site for a local art gallery.</p>

<p><strong>Notable features:</strong></p>

<ul>
<li>Very little, just good solid code</li>
</ul>

<p><a href="http://www.joanke.co.za">Live site</a></p>
<br>
        <p><small>Tags: <em>Web Development 2013</em></small></p>
      </div>      <div class="grid__item width-2 ">
        <a href="img/portfolio/full/kainav.jpg" class="collage__img" data-fluidbox="">
          <img src="img/portfolio/thumbs/kainav.jpg" alt="kainav">
        </a> <br>
        <h4>Kainav Conservation Foundation</h4>

<p>In the early parts of the build, but have a look at the <a href="https://github.com/MarnuLombard/kainav">github repo here.</a></p>

<p><strong>Notable features:</strong></p>

<ul>
<li>A new build structure, finally fully seperating <em>src</em> and <em>dist</em></li>
<li>Using <a href="http://www.gruntjs.com">grunt.js</a> to automate my build process</li>
<li>Written to be hooked up to a database, ie. all sections are foreach( echo'ed) out from an array instead of static content</li>
</ul>

<p><a href="http://www.kainavconservation.co.za/index.php">Live site</a></p>
<br>
        <p><small>Tags: <em>Web Development 2013 Under Development</em></small></p>
      </div>      <div class="grid__item width-2 ">
        <a href="img/portfolio/full/na.jpg" class="collage__img" data-fluidbox="">
          <img src="img/portfolio/thumbs/na.jpg" alt="na">
        </a> <br>
        <h4>Narcotics Anonymous</h4>

<p>A very large scale site for an NGO. The previous site has ~80 pages. (And was written in a table-based layout)</p>

<p><strong>Notable features:</strong></p>

<ul>
<li>Massive databases, generating most of the site's content</li>
<li>A low-level CMS for the client to manage their own databases</li>
<li>Some crazy php and javascript functions</li>
<li>A PHP-based user forum</li>
<li>Using UserVoice to get feedback from the users while developing</li>
</ul>

<p><a href="http://www.na.org.za/">Live site</a></p>
<br>
        <p><small>Tags: <em>Web Development 2013</em></small></p>
      </div>      <div class="grid__item width-2 ">
        <a href="img/portfolio/full/sbv.jpg" class="collage__img" data-fluidbox="">
          <img src="img/portfolio/thumbs/sbv.jpg" alt="sbv">
        </a> <br>
        <h4>SBV (Secure Banking Vehicle)</h4>

<p>A corporate site for a large cash in transit company.</p>

<p><strong>Notable features:</strong></p>

<ul>
<li>I built a custom CMS for them. Using PHP and Javascript I created a very simple- but very comprehensive CMS for client too use. Examples of this code is avaliable upon request</li>
<li>Just the standard best practices (<a href="http://modernizr.com/">Modernizr</a>, <a href="https://github.com/stubbornella/oocss/wiki/">OOCSS</a>, etc)</li>
</ul>

<p><a href="http://www.sbv.co.za/">Live site</a></p>
<br>
        <p><small>Tags: <em>Web Development 2013</em></small></p>
      </div>
</section><!-- // columns -->

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>
<script>

</script>
</body>
</html>
<?php ob_flush(); ?>
