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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

$args = array(
    'post_type' => 'post',
    'paged' => 1

);

// The Query
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts())
{
    echo '<ul id="container">';
    while ($the_query->have_posts())
    {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>

    <button id="load_more">Load More</button>


    ';
}
else
{
    // no posts found
    
}
/* Restore original Post Data */
wp_reset_postdata();


get_footer();
