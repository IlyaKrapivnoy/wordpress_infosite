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
                <div class="section-title">
                    About
                </div>
                <div class="section-description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores in incidunt aliquam quos!
                </div>
                <div class="about-pic">
                    <img src="<?php echo get_template_directory_uri (); ?>/images/about.jpeg" alt="a guy is going out">
                </div>
                <div class="about-content">
                    <div class="column">
                        <div class="column-title">
                            Why should you choose us?
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio maxime consectetur fugiat facilis voluptas placeat ex saepe quis harum. Nostrum aspernatur doloribus tempora? Cupiditate consectetur, numquam doloribus a officia magni quas omnis praesentium minus aperiam animi atque, voluptatibus placeat in?
                        </p>
                    </div>
                    <div class="column">
                        <div class="column-title">
                            Why they sicretly have already choosen us?
                        </div>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus a ullam earum fugiat voluptatibus illo iste architecto, quo dolor eligendi provident error fugit maiores molestias quidem assumenda cum dolorum quaerat beatae eaque incidunt, deserunt fuga accusantium maxime? Maiores labore eligendi nam esse maxime blanditiis sequi modi quaerat?
                    </div>
                </div>
            </div>
        </div>
    </maain>
</div> <!-- content ends -->

<?php
get_footer();
