
<header class="header--main">
  <nav class="nav--main grid" role="navigation">

    <a href="/" class="grid__item one-twelfth logo__wrapper">
      <img src="img/logo.svg" alt="" class="logo">
    </a>

    <div class="nav__link__wrapper grid__item">
    <?php
      $links = array('about', 'work', 'ramblings', 'contact');
      foreach ($links as $link) {
    ?>
      <a href="<?= $link ?>" class="nav__link nav--transition">
        <img src="img/nav__<?= $link ?>.svg" class="nav__symbol" alt="<?= $link ?>">
        <span class="nav__text"><?= $link ?></span>
      </a>
    <?
      } // foreach ($links as $link)
    ?>
    </div>

    <div class="grid__item one-twelfth icon__wrapper">
      <a href="https://github.com/marnulombard/" class="icon icon-github nav--transition" target="_blank">
        <span>Github</span>
      </a>
      <a href="http://twitter.com/mr_springtime" class="icon icon-twitter nav--transition" target="_blank">
        <span>Twitter</span>
      </a>
    </div>
  </nav>
</header>

<!--
<header class="header--main">
  <nav class="nav--main grid" role="navigation">
    <a href="/" class="grid__item logo__wrapper">
      <img src="img/logo.svg" alt="">
    </a>
    <div class="grid__item nav__link__wrapper">

    </div>
    <div class="grid__item icon__wrapper">

    </div>

  </nav>
</header> -->
