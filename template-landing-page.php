<?php
/**
 * Template Name: Landing page 
 * The template file for pages without footer and header.
 * @package Artwork
 * @since Artwork 1.0
 */
get_header();
?>
<div class="container main-container landing-page-container">
	<div class="landing-container">
        <img class="landing-logo" src="http://atrevidas.cl/wp-content/uploads/2018/04/LOGO.png" alt="landing-logo"/>
		<div>
			<p class="landing-tagline">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget quam ornare, mattis odio a, dapibus nulla.
			</p>
		</div>
		<div>
            <a class="landing-page-button" href="/about">Lee mas sobre el proyecto</a>
            <a class="landing-page-button" href="/primera-temporada">Ve la primera temporada</a>
        </div>
	</div>
</div>
<?php get_footer(); ?>