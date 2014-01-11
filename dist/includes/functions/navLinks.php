<?php
/**
 * Way to fudge the seperation of logic & presentation- but hey...
 */

/**
 * Array containing the names of each of the pages
 * @var array
 */
$navArray = array('about', 'work', 'ramblings', 'contact');


/**
 * Takesan array of input returns a string of html.
 * @param   array   $links [the array above]
 * @return  string            [Content for each of the respective  nav bars as html]
 */
function Navlinks($links, $transition)
{
  $html = '';
  $class = 'nav__link ';

  if ($transition === true) {
    $class .= 'nav__link--transition';
  }

  foreach ($links as $link) {
  $html .= <<<HTML
    <a href="{$link}" class="{$class}">
      <img src="img/nav__{$link}.svg" class="nav__symbol" alt="{$link}">
      <span class="nav__text">{$link}</span>
    </a>
HTML;
    } // foreach ($links as $link)

    return $html;
}// Navlinks()


?>
