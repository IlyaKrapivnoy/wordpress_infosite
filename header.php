<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package infosite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri (); ?>/css/style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="content">
        <div class="container">
            <header>
                <div class="left">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            West W
                        </a>
                    </div>
                </div>
                <div class="right">
                    <figure class="quote">
                        <blockquote>
                            Business opportunities are like buses, there's always another one <strong>coming</strong>.
                        </blockquote>
                        <figcaption>
                            &mdash; Richard Branson, <cite>Mental models</cite>
                        </figcaption>
                    </figure>
                </div>
            </header>
        </div>
