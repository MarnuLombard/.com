<?php

 /**
  * To get all posts, echo initial load and handle ajax calls
  */

  class getPosts
  {

    public function makeArray($alreadyLoaded)
    {

      // Get all posts as one multi-dimentional array
      $posts_files = glob('posts/*.php');

      // Randomise the order
      shuffle($posts_files);

      // get contents of the files in an array
      $posts_contents;

      foreach ($posts_files as $key => $value) {
        // load posts file
        require $value;

        // Define vars to push into the "top-level" array
        $name     = str_replace(array('posts/','.php'), '', $value);
        $image    = 'img/portfolio/full/'.$name.'.jpg';
        $thumb    = 'img/portfolio/thumbs/'.$name.'.jpg';
        $tags     = str_replace('_', ' ', $postData['tags']);
        $tagClass = strtolower($postData['tags']);
        $markdown = Markdown($postData['markdown']);

        // insert contents into the "top-level" array
        $posts_contents[] = array(
          "name" => $name,
          "image" => $image,
          "thumb" => $thumb,
          "tags" => $tags,
          "tagClass" => $tagClass,
          "markdown" => $markdown
        );
      } // foreach $posts_files

      // spit the array up into chunks of 8
      // Don't ask why 8...
      $posts_chunks = array_chunk($posts_contents, 8);

      // we count the amount of chunks in the top level array
      $chunk_count   = count($posts_chunks);
      // we incriment the value of what's been loaded
      $nowLoaded    = $alreadyLoaded + 1;
      // are they all loaded?
      if ($nowLoaded > $chunk_count) {
        $posts_chunks = '';
        $nowLoaded = 'end';
      } else {
        // Here we use the $var passed in the func call
        // ($alreadyLoaded) to determine which 'chunk'/array
        // to load
        $posts_chunks = $posts_chunks[$alreadyLoaded];
      }

      // add the nowLoaded to the var that we return
      $posts_chunks['nowLoaded'] = $nowLoaded;

      // else we return the arrays for ajax
      return $posts_chunks;

    } // func makeArray

  }// class getPosts

?>
