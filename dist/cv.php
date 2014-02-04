<?php
	require_once 'config.php';
	$title = 'CV | Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="csscv">

    <p class="comment-block">
      <span class="comment-block__line">A quick breakdown of who I am</span>
    </p>
    <div class="ruleset">
      <h3 class="selector">Me</h3>

      <dl class="declarations">
        <dt class="property">Name</dt>
          <dd class="value"><span class="string">Marnu lombard</span></dd>

        <dt class="property">Job</dt>
          <dd class="value"><span class="string">Front-End Web Developer</span></dd>

        <dt class="property">Location</dt>
          <dd class="value"><span class="string">Johannesburg, South Africa</span></dd>

        <dt class="property">Skills</dt>
        <dd class="value">
          <ul class="value-list">
            <li><span class="string">Front-end Develoment</span></li>
            <li>Web Design</li>
            <li>UI Design</li>
            <li>Sass</li>
            <li>OOCSS</li>
            <li>Grunt / NodeJS</li>
            <li><span class="string">Responsive Web Design</span></li>
            <li>Git</li>
            <li><span class="string">Developing through a CMS</span></li>
            <li>jQuery</li>
          </ul>
        </dd>
      </dl>
    </div><!-- // ruleset.me -->

    <p class="comment-block">
      <span class="comment-block__line">The ways in which I implement those skills in my job</span>
    </p>
    <div class="ruleset">
    <h3 class="selector">practical-aplications</h3>

    <dl class="declarations">
      <dt class="property">languages</dt>
        <dd class="value">
          <ul class="value-list">
            <li>html</li>
            <li>css</li>
            <li>javascript</li>
            <li>php</li>
          </ul>
        </dd>

      <dt class="property">libraries</dt>

        <dd class="value">
          <ul class="value-list">
            <li><span class="string">jQuery</span> <span class="url">js</span></li>
            <li><span class="string">Wordpress</span> <span class="url">php</span></li>
            <li><span class="string">Modernizr</span> <span class="url">js</span></li>
            <li><span class="string">Phalcon</span> <span class="url">php</span></li>
          </ul>
        <span class="comment">Minor knowledge of others</span>
        </dd>

      <dt class="property">applications</dt>

        <dd class="value">
          <ul class="value-list">
            <li><span class="string">Photoshop</span></li>
            <li><span class="string">Sublime Text</span></li>
            <li><span class="string">OmniGraffle</span></li>
            <li><span class="string">Terminal</span></li>
            <li><span class="string">Illustrator</span></li>
            <li><span class="string">InDesign</span></li>
            <li><span class="string">MAMP</span></li>
          </ul>
        </dd>

    </dl>
    </div><!-- // ruleset.practical-applications -->



    <div class="ruleset">
      <h4 class="selector"><span class="modifier" data-namespace="job">Indigo</span></h4>

      <dl class="declarations">

      </dl>
    </div><!-- // ruleset.languages -->
  </section><!-- // csscv -->

  <?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
