<?php
	require_once 'config.php';
	$title = 'About Me | Marnu Lombard';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="text__wrapper text__columns">
    <h1>
      About me
    </h1>
    <p class="lead">
      I build websites. Called it a web app, a product, a mobisite - whatever you wish. I work with clients to create customised solutions to solve <strong>their</strong> particular problems. There is never a one size fits all solution, so my clients and I work together to find what their online needs are and to fill them.
    </p>

    <p>
      I'm a web developer living in Johannesburg, South Africa. My skill-set lies across the web stack, in that I have knowledge of DNS; Database and Server installation; using PHP MVC frameworks to create complex apps; HTML, Javascript and CSS to create the user-facing side of a site.
    </p>
    <p>
      Every free moment I have, you'll find me reading articles on development or browsing github repositories. This is my passion, and I have an insatiable thirst for more knowledge, a new way to create &amp; code.
    </p>
    <p>
      Besides my work, the thing I Love most in the world is my little Daughter.
    </p>
  </section><!--// text__wrapper -->

  <section class="text__wrapper">
    <p>
      I fully intend to write about web-related things at <a href="http://blog.marnulombard.com">blog.marnulombard.com</a>.
    </p>
    <p>
      I'm always available for freelance work, <a href="/contact?about=freelance_work">get hold of me about it here</a>.
    </p>
    <p>
      If you would like to contact me regarding a permanent job offer, <a href="/contact?about=permanent_work">get hold of me about it here</a>.
    </p>
  </section>

	<?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
