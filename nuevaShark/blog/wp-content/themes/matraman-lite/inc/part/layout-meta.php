<?php if(is_singular()){ 

	  echo '<div class="navigation-single">';	
	  matraman_lite_content_nav( 'nav-below' );
	  echo '</div><!-- Navigation-Single -->';

 } 

 matraman_lite_comment_checker(); 