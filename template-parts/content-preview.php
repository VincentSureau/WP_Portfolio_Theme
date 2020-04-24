<?php
/**
 * Template part for displaying results in blog home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Vincent_Sureau_Portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("card"); ?>>
    <?= the_post_thumbnail('experience_card', ["class" => "card-img-top"]) ?>
        <div class="card-body">
            <?php the_title( sprintf( '<h2 class="card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <?php the_excerpt(); ?>
        </div>
        <footer class="card-footer">
            <small class="text-muted">
                <?php Vincent_Sureau_Portfolio_posted_on(); ?>
            </small>
            <small class="text-muted">
                <?php Vincent_Sureau_Portfolio_entry_footer(); ?>
            </small>
        </footer>
</article><!-- #post-## -->