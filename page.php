<?php 
get_header() ;
    while (have_posts()) {
       the_post() ; ?>
       <h2>this is page not post</h2>
    <h1><?php the_title() ?></h1>
    <p> <?php the_content() ?></p>
       
    <?php 
    }

    get_footer() ;
?>