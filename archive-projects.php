<?php

get_header(); 

if(have_posts()) :
	echo '<div class="archive-grid">';
	while( have_posts() ) : the_post();
    project();
	endwhile;
	echo '</div>';
endif;
get_footer(); 
?>