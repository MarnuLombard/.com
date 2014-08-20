<?php

  header("content-type:application/json");

  include_once $_SERVER['DOCUMENT_ROOT'].'/config.php';

  $getPosts = new getPosts();

  $postsArray = $getPosts->makeArray($_POST['nowLoaded']);


  echo json_encode($postsArray);


?>
