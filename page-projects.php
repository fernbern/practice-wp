<?php get_header(); ?>
<?php 
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'title',
    'order' => 'ASC',
    'category_name' => 'projects'

);
$query = new WP_Query( $args );

 
if ( $query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="projects-content">
        <?php the_post_thumbnail('box'); ?>
        <div class="projects-heading">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>