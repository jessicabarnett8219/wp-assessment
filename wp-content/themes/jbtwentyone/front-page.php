<?php
/*
Template Name: Custom Homepage
 */

get_header();
?>
<section id="primary" class="content-area">
	<main id="main" class="site-main">
        <!-- Get page featured image -->
        <div class="featured-img"><? the_post_thumbnail(); ?></div>
        <!-- Get page title -->
        <h1><? the_title( $page ); ?></h1>
        <h2>Recent Blog Posts</h2>
        <ul>
        <!-- Query params for the 5 most recent posts -->
        <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

        <!-- Start query and loop -->
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <!-- // Display the Post Title with Hyperlink -->
            <li>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <!-- // Display the Post Excerpt -->
                <p><?php the_excerpt(__('(more…)')); ?></p>
            </li>
        <!-- Repeat the process and reset once it hits the limit -->
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        </ul>
    </main>
</section>
<!-- the two custom fields -->
<div class="custom-fields">
<p>Name: <?php the_field('name'); ?> Date Visited: <?php the_field('date_visited'); ?></p>
</div>

<?php get_footer(); ?>

