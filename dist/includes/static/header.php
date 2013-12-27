<header class="header--main">
  <nav class="nav--main" role="navigation">
    <a href="/">
      <img src="img/logo.svg" alt="" class="logo">
    </a>

<?php
  $links = array('about', 'work', 'ramblings', 'contact');

  foreach ($links as $link) {
?>
    <span class="nav__link--wrapper">
      <a href="<?= $link ?>" class="nav__link">
        <img src="img/nav__<?= $link ?>.svg" alt="<?= $link ?>">
        <span class="nav__text"><?= $link ?></span>
      </a>
    </span>
<?
  } // foreach ($links as $link)
?>
    <div class="float--right">
      <a href="https://github.com/marnulombard/" class="icon icon-github" target="_blank">Github</a>
      <a href="http://twitter.com/mr_springtime" class="icon icon-twitter" target="_blank">Twitter</a>
    </div>
  </nav>
</header>
