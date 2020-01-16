<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<?php
   					$args = array( 'post_type' => 'post', 'order' => 'ASC' );
  					 $product_posts = get_posts( $args ); // returns an array of posts
		?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   					<h1><?php the_title(); ?></h1>
		<?php endforeach; wp_reset_postdata(); ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>


