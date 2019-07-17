<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Low_Dash
 */

get_header();
?>

	<div id="hero" class="jumbotron w-100 py-5 text-center text-light mb-0" style="background-image: url('http://conroe-noon-lions.local/wp-content/uploads/2019/07/lions-club-hero-3.png'); background-size: cover; background-position: center;">
    <h1 class="py-5 my-5">New site coming soon!</h1> 
	</div> <!-- #hero -->

	<div id="primary" class="content-area col-12 text-center text-brand-blue">
		<div class="container">
    <h4>Contact Info</h4>

<p>Office Location: 1106 Wilson Road, Conroe, Texas 77301<br>

Mailing Address: P.O.Box 1135, Conroe, Texas 77305<br>

Office Phone Number: 936-760-1666<br>

Fax Number: 936-760-1668<br>

Email Address: cnlc@consolidated.net</p>
			
		</div> <!-- .container -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
