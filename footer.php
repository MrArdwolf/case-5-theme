<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package case-5-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-main">
			<div class="footer-section">
				<div class="footer-h2">
					<h2>Besöksadress</h2>
				</div>
				<div class="footer-p">
					<p>Sveavägen 3</p>
					<p>111 57 Stockholm</p>
				</div>
			</div>
			<div class="footer-section">
				<div class="footer-h2">
					<h2>Öppettider</h2>
				</div>
				<div class="footer-p">
					<p>Måndag - Torsdag 7:00 - 18:00 </p>
					<p>Fredag 9:00 - 20:00 </p>
					<p>Lördag 11:00 - 16:00</p>
					<p>Söndag  STÄNGT</p>
				</div>
			</div>
			<div class="footer-section">
				<div class="footer-h2">
					<h2>Följ Oss</h2>
				</div>
				<div class="footer-logos">
					<ion-icon name="logo-facebook"></ion-icon>
					<ion-icon name="logo-twitter"></ion-icon>
					<ion-icon name="logo-instagram"></ion-icon>
				</div>
			</div>
		</div>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'case-5-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'case-5-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: "%1$s" Created with %2$s.', 'case-5-theme' ), 'case-5-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>
