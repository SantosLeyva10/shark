(function($) {

  'use strict';

var $container = jQuery('#grid');
		$container.imagesLoaded(function(){
			$container.masonry({
				itemSelector: 'li.post',
				transitionDuration: '0.3s'
			});
		});


  $(function(){
    
    var $container = jQuery('#grid');
    
    $container.imagesLoaded(function(){
      $container.masonry({
        itemSelector: 'li.post'
      });
    });
        });

})( jQuery );