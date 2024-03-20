<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package case-5-theme
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
if ( has_post_thumbnail() ) { // Check if the post has a featured image.
    $thumbnail_url = get_the_post_thumbnail_url( null, 'full' ); // Get the URL of the featured image.
    ?>
    <div class="featured-image" style="background-image: url('<?php echo esc_url( $thumbnail_url ); ?>');">
        <!-- Optional content -->
		<?php
if (is_front_page()) {
    // This code will be executed if the current page is the front page
	the_title( '<h1 class="entry-title">', '</h1>' );
}
?>
    </div>
        <div class="container container-featured">
    

	<?php
} else {
?>
<div class="container">
<?php
}
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>


		<!-- <h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1>
		<h1>h</h1> -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
