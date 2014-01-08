$(function (){

  $('body').on('click', '#ajaxLoad', function(e){

    var toInsert = '';
    var loadingClass = 'icon--loading';

    e.preventDefault();

    $(this).addClass(loadingClass);

    $.ajax({
      url: 'getPosts.php',
      // url: 'delete.json',
      type: 'post',
      dataType: 'json',
      data: {'nowLoaded': $(this).attr('data-nowLoaded')},
      cache: false,

      success: function(json) {
        console.log(json);

        $.each(json, function(i, item) {
          if(typeof item == 'object') {
          toInsert += '<div class="grid__item column__item dontsplit '+item.tagClass+'"><a href="'+item.image+'" class="collage__img" rel="foo" data-fluidbox><img src="'+item.thumb+'" alt="'+item.name+'"></a><div class="markdown">'+item.markdown+'<p><small>Tags: <em>'+item.tags+'</em></small></p></div></div>';
          }
          else {
            return false;
          }
        }) // end $.each() loop

        if(json.nowLoaded != 'end') {
          // if the alreadyLoaded is any other value other than end, we add the next page link
          $('#ajaxLoad').replaceWith('<button data-nowLoaded="'+json.nowLoaded+'" class="button__reload icon-reload" id="ajaxLoad">Load more</button>');
        } else {
          $('#ajaxLoad').replaceWith('<p>All posts loaded</p>');
        }

        $('#ajaxInto').append(toInsert);

        // Call the functions that get killed when dom is inserted
        callKilledFunctions();
      },
      error: function(xhr, desc, err) {
        console.log(xhr + "\n" + err);
      }
    }); // end ajax call
  });

});
