
<?php
/**
 * Custom Query Function
 *
 *
 * @package Vincent_Sureau_Portfolio
 */

if ( ! function_exists( 'Vincent_Sureau_Portfolio__custom_query' ) ) {
	function Vincent_Sureau_Portfolio__custom_query($args = array())
	{
		$post_type = $args['post_type'] ? $args['post_type'] : 'post';
		$section_max_posts = $args['section_max_posts'] ? $args['section_max_posts'] : 3;

		if ($section_max_posts == 0 || $section_max_posts == 1) {
			$section_max_posts = 1;
		}
		$query_args = array(
			'post_type' => $post_type,
			'posts_per_page' => $section_max_posts,
			'ignore_sticky_posts' => true
			);
        $the_query = new WP_Query( $query_args );
        
        $posts =  $the_query->posts;

        wp_reset_postdata();

        return $posts;

	}
}