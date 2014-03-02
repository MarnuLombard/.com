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
      I'm a web developer living in Johannesburg, South Africa. My skill-set lies predominantly in the front-end (<em>not a euphemism</em>), but my knowledge and use of PHP pushes me into the realm of a &ldquo;full-stack&rdquo; developer.
    </p>
    <p>
      My biggest back-end claims to fame are that I:
      <ol class="mt-20">
        <li>built a bespoke cms from the ground up and used it in production and,</li>
        <li>set up a web server running Ubuntu from the command line. I set up the mail server and DNS on it too (<em>booya!</em>).</li>
      </ol>
    </p>

    <p>
      Instead of the standard html, css, js stack&mdash; I generally develop using the following:
    </p>

    <p class="text--indent">
      <strong>PHP</strong> to include database calls and eliminate repetition (include() for templates, foreach() for recurring blocks of content);
    </p>
    <p class="text--indent">
      <strong>Sass</strong> as a preprocessor for css. This allows me to use variables and various methods of logic to generate the css rules;
    </p>
    <p class="text--indent">
      <strong>Jquery</strong> as a js library. While I do realise that <strong>Jquery is still javascript</strong>, I am one of those naughty developers that automatically includes it in my builds. There are very few projects of mine that don't use it- but I am excited to have the time to try write all my functions (<em>plugins</em>) from scratch on a build;
    </p>
  </section><!--// text__wrapper -->

  <section class="text__wrapper">
    <p>
      I write about web-related things at <a href="http://blog.marnulombard.com">blog.marnulombard.com</a>.
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
