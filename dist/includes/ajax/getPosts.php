<?php

  header("content-type:application/json");

  include_once 'config.php';

  $getPosts = new getPosts();

  $postsArray = $getPosts->makeArray($_POST['nowLoaded']);

  echo json_encode($postsArray)
  // print_r($postsArray);

?>
