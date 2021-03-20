<?php
get_header();
include("inc/content.php");
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
get_footer();

if(!isset($_COOKIE['views'.$post->ID.COOKIEHASH]) || $_COOKIE['views'.$post->ID.COOKIEHASH] != '1'){
    setPostViews($post->ID);
    setcookie('views'.$post->ID.COOKIEHASH,'1',time() + 60,COOKIEPATH,COOKIE_DOMAIN);
}
