<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infosite
 */

?>

	<footer class="footer">
        <div class="container">
            <div class="top">
                <div class="block">
                    <div class="title">
                        <?php the_field('footer-title-1'); ?>
                        <!-- About us -->
                    </div>
                    <p>
                        <?php the_field('footer-description-1'); ?>
                        <!-- West W theme for WordPress is designed for magazine, news and editorial ventures. With content and readability being the primary goal, the theme is designed with flexible layout pattern and decent space for advertisements. -->
                    </p>
                </div>
                <div class="block">
                    <div class="title">
                        <?php the_field('footer-title-2'); ?>
                        <!-- The thing is... -->
                    </div>
                    <p>
                        <?php the_field('footer-description-2'); ?>
                        <!-- that the West W is not just a WordPress theme is your way of ling and your solid philosophy that creates perfect world for your customers. -->
                    </p>
                </div>
                <div class="block">
                    <div class="title">
                        <?php the_field('footer-title-3'); ?>
                        <!-- You may also like -->
                    </div>
                    <ul>
                        <li><a href="#">tv record</a></li>
                        <li><a href="#">push it</a></li>
                        <li><a href="#">stash day news</a></li>
                        <li><a href="#">school big bang</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <?php the_field('copyright'); ?>
                &copy; 2021 by Bart Simpson
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
