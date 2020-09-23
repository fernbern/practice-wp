<?php get_header(); ?>
HOME PAGE BOIIIIIIIIIIIIIIIIII <br>
<section class="slider">
    <div class="container"></div>
</section>

<section class="blog-front">
    <div class="container">
    <?php 
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'orderby' => 'title',
            'order' => 'ASC',
            'category_name' => 'info'

        );
        $query = new WP_Query( $args ); ?>
        <div class="loop-content">
            <?php if ( $query->have_posts() ) : ?>
            
                <!-- pagination here -->
            
                <!-- the loop -->
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="front-blog-posts">
                    <?php the_post_thumbnail('box'); ?>
                    <div class="front-blog-heading">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
            
                <!-- pagination here -->
            
                <?php wp_reset_postdata(); ?>
            
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>