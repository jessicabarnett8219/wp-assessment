<?php get_header(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        ?>

        <main>
            <article>
                <?php the_title( '<h1>', '</h1>' ); ?>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>
        </main>

        <?php
    endwhile;
endif;
wp_reset_postdata();
get_footer();
