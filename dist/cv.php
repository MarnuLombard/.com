<?php
	require_once 'config.php';
	$title = 'CV | Marnu Lombard | Web Developer';
	include_once 'static/head.php';
?>

<body>

<?php include_once 'static/noscript.php'; ?>

  <?php include_once 'static/header.php'; ?>

  <section class="csscv">

    <h1 class="comment-block  spaced--large">
      <span class="comment-block__line">The Curriculum Vitae of Marnu Lombard.</span>
      <span class="comment-block__line"></span>
      <span class="comment-block__line">I'm a full-stack end web-developer, with a history in graphic design.</span>
      <span class="comment-block__line">I have an absolute passion for PHP development (back-end), but know my way around the front-end well too.</span>
      <span class="comment-block__line">If you would like to know more about me have a look at my [<a href="/about">about page</a>] <span class="url">http://marnulombard.com/about</span></span>
      <span class="comment-block__line"></span>
      <span class="comment-block__line">If you would prefer to have a look at a more traditional CV,</span>
      <span class="comment-block__line">[<a href="/downloads/marnu%20lombard%cv.pdf">you can download a pdf here</a>] <span class="url">http://marnulombard.com/downloads/marnu%20lombard%cv.pdf</span></span>

    </h1>

    <p class="comment-block">
      <span class="comment-block__line">A quick breakdown of who I am</span>
    </p>
    <div class="ruleset">
      <h2 class="selector">Me</h2>

      <dl class="declarations">
        <dt class="property">Name</dt>
        <dd class="value"><span class="string">Marnu lombard</span></dd>

        <dt class="property">Job</dt>
        <dd class="value"><span class="string">Full-stack Web Developer</span></dd>

        <dt class="property">Location</dt>
        <dd class="value"><span class="string">Johannesburg, South Africa</span></dd>

        <dt class="property">Skills</dt>
        <dd class="value"><ul class="value-list">
          <li><span class="string">Back-end Development</span></li>
          <li><span class="string">Front-end Development</span></li>
          <li>Web Design</li>
          <li>UI Design</li>
          <li>PHP</li>
          <li>Sass</li>
          <li>OOP</li>
          <li>Grunt</li>
          <li><span class="string">Responsive Web Design</span></li>
          <li>Git</li>
          <li>jQuery</li></ul></dd>
      </dl>
    </div><!-- // ruleset.me -->

    <div class="ruleset  indented">
      <h2 class="selector">
        <span class="element" data-namespace="me">Contact</span>
      </h2>

        <dl class="declarations">
          <dt class="property">Email</dt>
          <dd class="value"><span class="url"><?=hideMail('marnu@marnulombard.com');?></span></dd>

          <dt class="property">Website</dt>
          <dd class="value"><span class="url"><a href="http://marnulombard.com/">marnulombard.com</a></span></dd>

          <dt class="property">GitHub</dt>
          <dd class="value"><span class="url"><a href="https://github.com/marnulombard/">github.com/marnulombard</a></span></dd>

          <dt class="property">Twitter</dt>
          <dd class="value"><span class="url"><a href="https://twitter.com/mr_springtime/">@mr_springtime</a></span></dd>
      </dl>
    </div><!-- // ruleset.me––contact -->


    <p class="comment-block">
      <span class="comment-block__line">The ways in which I implement those skills in my job</span>
    </p>

    <div class="ruleset">
      <h3 class="selector">practical-applications</h3>

      <dl class="declarations">
        <dt class="property">languages</dt>
        <dd class="value with-inline-comment">
          <ul class="value-list">
            <li>php</li>
            <li>html</li>
            <li>css</li>
            <li>javascript</li>
          </ul></dd>
        <span class="comment">Minor knowledge of others</span>

        <dt class="property">libraries / frameworks</dt>
        <dd class="value"><ul class="value-list">
            <li><span class="string">Laravel</span> (php)</li>
            <li><span class="string">jQuery</span> (js)</li>
            <li><span class="string">Wordpress</span> (php)</li>
            <li><span class="string">Vagrant</span> (server management)</li>
            <li><span class="string">Symfony</span> (php)</li></ul></dd>

        <dt class="property">applications</dt>
        <dd class="value"><ul class="value-list">
            <li><span class="string">PhpStorm</span></li>
            <li><span class="string">Sublime Text</span></li>
            <li><span class="string">Photoshop</span></li>
            <li><span class="string">OmniGraffle</span></li>
            <li><span class="string">Terminal</span></li>
            <li><span class="string">Illustrator</span></li>
            <li><span class="string">InDesign</span></li>
            <li><span class="string">MAMP</span></li></ul></dd>
      </dl>
    </div><!-- // ruleset.practical-applications -->


    <p class="comment-block">
      <span class="comment-block__line">
        Reason fir leaving: A better offer was made to me
      </span>
    </p>
    <div class="ruleset">
      <h4 class="selector"><span class="modifier" data-namespace="job">Indigo</span></h4>

      <dl class="declarations">
        <dt class="property">Company</dt>
        <dd class="value"><span class="string">Indigo Marketing</span></dd>

        <dt class="property">Title</dt>
        <dd class="value"><span class="string">Studio Head / Web developer &amp; Graphic Designer</span></dd>

        <dt class="property">From</dt>
        <dd class="value"><span class="string">February, 2011</span></dd>

        <dt class="property">To</dt>
        <dd class="value"><span class="string">Present</span></dd>

        <dt class="property">Responsibilities</dt>
        <dd class="value">
          <ul class="value-list">
            <li>Online campaign conceptualization &amp; design</li>
            <li>Print campaign conceptualization &amp; design</li>
            <li>Design &amp; development of websites</li>
            <li>Server administration</li>
            <li>Repro-readying print materials</li>
            <li>Design, development &amp; distribution of email newsletters</li>
            <li>Problem resolution between studio &amp; management</li>
            <li>Management of studio work-flows</li></ul></dd>

        <dt class="property">Notes</dt>
        <dd class="value"><span class="string">
          I was initially hired as a graphic designer with a knowledge of HTML &amp; CSS. Which I did well, all the while brushing up my web knowledge and learning PHP as well as Javascript. Over time, web development has become one of the company's largest revenue streams and I have been promoted to head up the studio.
        </span></dd>
        </dl>
    </div><!-- // ruleset.indigo -->


    <div class="ruleset">
      <h4 class="selector"><span class="modifier" data-namespace="job">BBDO</span></h4>

      <dl class="declarations">
        <dt class="property">Company</dt>
        <dd class="value"><span class="string">Net#work BBDO</span></dd>
        <span class="comment">Now 140 BBDO</span>

        <dt class="property">Title</dt>
        <dd class="value"><span class="string">DTP Art Director <em>(with minor web developer duties)</em></span></dd>

        <dt class="property">From</dt>
        <dd class="value"><span class="string">February, 2009</span></dd>

        <dt class="property">To</dt>
        <dd class="value"><span class="string">December, 2010</span></dd>

        <dt class="property">Responsibilities</dt>
        <dd class="value">
          <ul class="value-list">
            <li>Repro-readying print materials</li>
            <li>Implementation of concepts from Art Directors</li>
            <li>Print campaign design</li>
            <li>Graphic Design</li>
            <li>Design &amp; development of websites</li></ul></dd>
    </div><!-- // ruleset.bbdo -->
  </section><!-- // csscv -->

  <?php include_once 'static/footer.php'; ?>

<?php include_once 'static/scripts.php'; ?>

</body>
</html>
<?php ob_flush(); ?>
