<?php
/**
 * Array containing the names of each of the pages
 * @var array
 */
  $navArray = array('about', 'work', 'ramblings', 'contact');

  $html = '';
  $class = 'nav__link ';

  foreach ($navArray as $link) {
  $html .= <<<HTML
    <a href="{$link}" class="{$class}">
      <img src="img/nav__{$link}.svg" class="nav__symbol" alt="{$link}">
      <span class="nav__text">{$link}</span>
    </a>
HTML;
    } // foreach ($navArray as $link)

    echo $html;

?>
