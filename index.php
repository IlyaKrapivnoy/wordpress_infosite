<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package infosite
 */

get_header();
?>

	<main>
        <div class="container">
            <div class="about">
                <div class="about-pic">
                    <img src="<?php echo get_template_directory_uri (); ?>/images/about.jpeg" alt="a guy is going out">
                </div>
            </div>
        </div>
    </maain>
</div> <!-- content ends -->

<?php
get_footer();
