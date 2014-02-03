<?php
	require_once 'config.php';
	$title = 'CV | Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="csscv">
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
          <li><span class="string">Front-end Architecture</span></li>
          <li>Design</li>
          <li>Development</li>
          <li>OOCSS</li>
          <li>Performance</li>
          <li><span class="string">Responsive Web Design</span></li>
          <li>Git</li>
        </ul>
      </dd>
    </dl>

    </div><!-- // ruleset -->
  </section><!-- // csscv -->


  <?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
