<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div>
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }
            ?>
        </div>
        <div class="centro" id="post-image-text">
            <?php the_content(__('(more...)')); ?>
        </div>
        <?php
    endwhile;
else:
    ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>