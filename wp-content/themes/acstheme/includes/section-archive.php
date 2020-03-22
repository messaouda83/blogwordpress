
<?php
if( have_posts() ): while( have_posts() ): the_post(); ?>
<h3><?php the_title();?></h3>
    <?php the_excerpt(); ?> Read more...</a>
    <a href="<?php the_parmalink(); ?>"
<?php endwhile; else: endif;?>