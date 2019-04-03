<?php
/*
Template Name: Custom Homepage
 */

get_header();
?>
<section id="primary" class="content-area">
<h1><? the_title( $page ); ?></h1>
		<main id="main" class="site-main">
<ul>
<!-- // Define our WP Query Parameters -->
<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

<!-- // Start our WP Query -->
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<!-- // Display the Post Title with Hyperlink -->
<li>
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<!-- // Display the Post Excerpt -->
<?php the_excerpt(__('(more…)')); ?></li>

<!-- // Repeat the process and reset once it hits the limit -->
<?php
endwhile;
wp_reset_postdata();
?>
</ul>
        </main>
        </section>
<!-- two custom fields -->
<p>Name: <?php the_field('name'); ?> Date Visited: <?php the_field('date_visited'); ?></p>

<?php get_footer(); ?>

