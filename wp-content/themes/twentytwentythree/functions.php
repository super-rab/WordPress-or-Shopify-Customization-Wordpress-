<?php
/**
 * Custom functionality for Case Studies
 */

/**
 * 1. Register Case Study Custom Post Type
 */
function register_case_study_cpt() {
    $labels = array(
        'name'               => 'Case Studies',
        'singular_name'      => 'Case Study',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Case Study',
        'edit_item'          => 'Edit Case Study',
        'new_item'           => 'New Case Study',
        'view_item'          => 'View Case Study',
        'search_items'       => 'Search Case Studies',
        'not_found'          => 'No Case Studies found',
        'not_found_in_trash' => 'No Case Studies found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'case-studies'),
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true,
    );

    register_post_type('case_study', $args);
}
add_action('init', 'register_case_study_cpt');


/**
 * 2. Shortcode [featured_case_studies] 
 *    → displays 3 most recent Case Studies
 */
function featured_case_studies_shortcode($atts) {
    $query = new WP_Query(array(
        'post_type'      => 'case_study',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC'
    ));

    $output = '<div class="featured-case-studies">';
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="case-study">';
            $output .= '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $output .= '<div>' . get_the_excerpt() . '</div>';
            $output .= '</div>';
        }
    } else {
        $output .= '<p>No case studies found.</p>';
    }
    wp_reset_postdata();

    $output .= '</div>';
    return $output;
}
add_shortcode('featured_case_studies', 'featured_case_studies_shortcode');


/**
 * 3. Filter: Modify Case Study titles only on archive pages
 */
function modify_case_study_title($title, $id = null) {
    if (is_post_type_archive('case_study') && in_the_loop()) {
        $post_type = get_post_type($id);
        if ($post_type === 'case_study') {
            $title = 'Case Study: ' . $title;
        }
    }
    return $title;
}
add_filter('the_title', 'modify_case_study_title', 10, 2);

