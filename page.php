<?php get_header(); ?>
<div id="mainContainer" class="main-container post--detail">
    <div class="content__wrapper">
        <!-- Breadcrumb code -->
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        ?>
    <h1 class="entry-title"><?php the_title(); ?></h1> <!-- Page Title -->
    <?php
        // TO SHOW THE PAGE CONTENTS
        while ( have_posts() ) : the_post(); ?> 
            <div class="entry-content-page">
                <?php the_content(); ?> 
            </div>

        <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
    ?>
        
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>