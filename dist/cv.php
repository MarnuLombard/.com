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
      <span class="comment-block__line">I'm a front end web-developer, with a history in graphic design.</span>
      <span class="comment-block__line">If you would like to know more about me have a look at my [<a href="/about">about page</a>] (http://marnulombard.com/about)</span>
      <span class="comment-block__line"></span>
      <span class="comment-block__line">If you would prefer to have a look at a more traditional CV,</span>
      <span class="comment-block__line">[<a href="/downloads/marnu%20lombard%cv.pdf">you can download a pdf here</a>] (http://marnulombard.com/downloads/marnu%20lombard%cv.pdf)</span>

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
        <dd class="value"><span class="string">Front-End Web Developer</span></dd>

        <dt class="property">Location</dt>
        <dd class="value"><span class="string">Johannesburg, South Africa</span></dd>

        <dt class="property">Skills</dt>
        <dd class="value"><ul class="value-list">
          <li><span class="string">Front-end Develoment</span></li>
          <li>Web Design</li>
          <li>UI Design</li>
          <li>Sass</li>
          <li>OOCSS</li>
          <li>Grunt / NodeJS</li>
          <li><span class="string">Responsive Web Design</span></li>
          <li>Git</li>
          <li><span class="string">Developing through a CMS</span></li>
          <li>jQuery</li></ul></dd>
      </dl>
    </div><!-- // ruleset.me -->

    <div class="ruleset  indented">
      <h2 class="selector">
        <span class="element" data-namespace="me">Contact</span>
      </h2>

        <dl class="declarations">
          <dt class="property">Email</dt>
          <dd class="value"><?=hideMail('marnu@marnulombard.com');?></dd>

          <dt class="property">Website</dt>
          <dd class="value"><span class="url"><a href="http://marnulombard.com/">marnulombard.com</a></span></dd>

          <dt class="property">GitHub</dt>
          <dd class="value"><span class="url"><a href="https://github.com/marnulombard/">github.com/marnulombard</a></span></dd>

          <dt class="property">Twitter</dt>
          <dd class="value"><a href="https://twitter.com/mr_springtime/">@mr_springtime</a></dd>
      </dl>
    </div><!-- // ruleset.me––contact -->


    <p class="comment-block">
      <span class="comment-block__line">The ways in which I implement those skills in my job</span>
    </p>

    <div class="ruleset">
      <h3 class="selector">practical-aplications</h3>

      <dl class="declarations">
        <dt class="property">languages</dt>
        <dd class="value with-inline-comment">
          <ul class="value-list">
            <li>html</li>
            <li>css</li>
            <li>javascript</li>
            <li>php</li>
          </ul></dd>
        <span class="comment">Minor knowledge of others</span>

        <dt class="property">libraries / frameworks</dt>
        <dd class="value"><ul class="value-list">
            <li><span class="string">jQuery</span> <span class="url">js</span></li>
            <li><span class="string">Laravel</span> <span class="url">php</span></li>
            <li><span class="string">Wordpress</span> <span class="url">php</span></li>
            <li><span class="string">Habari</span> <span class="url">php</span></li></ul></dd>

        <dt class="property">applications</dt>
        <dd class="value"><ul class="value-list">
            <li><span class="string">Photoshop</span></li>
            <li><span class="string">Sublime Text</span></li>
            <li><span class="string">OmniGraffle</span></li>
            <li><span class="string">Terminal</span></li>
            <li><span class="string">Illustrator</span></li>
            <li><span class="string">InDesign</span></li>
            <li><span class="string">MAMP</span></li></ul></dd>
      </dl>
    </div><!-- // ruleset.practical-applications -->


    <p class="comment-block">
      <span class="comment-block__line">
        This is my current place of employment
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
            <li>Online campaign conceptualisation &amp; design</li>
            <li>Print campaign conceptualisation &amp; design</li>
            <li>Design &amp; development of websites</li>
            <li>Server administration</li>
            <li>Repro-readying print materials</li>
            <li>Design, development &amp; distribution of email newsletters</li>
            <li>Problem resolution between studio &amp; management</li>
            <li>Management of studio worklfows</li></ul></dd>

        <dt class="property">Notes</dt>
        <dd class="value"><span class="string">
          I was initially hired as a graphic designer with a knowledhge of HTML &amp; CSS. Which I did well, all the while brushing up my web knowledge and learning PHP as well as Javascript. Over time, web development has become one of the company's largest revenue streams and I have been promoted to head up the studio as senior graphic designer.
        </span></dd>
        </dl>
    </div><!-- // ruleset.indigo -->


    <div class="ruleset">
      <h4 class="selector"><span class="modifier" data-namespace="job">Indigo</span></h4>

      <dl class="declarations">
        <dt class="property">Company</dt>
        <dd class="value"><span class="string">Indigo Marketing</span></dd>

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
            <li>Implimentation of concepts from Art Directors</li>
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
