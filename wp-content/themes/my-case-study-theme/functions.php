<?php
// ==============================
// 1. Register Custom Post Type: Case Study
// ==============================
function create_case_study_cpt() {
    $labels = array(
        'name'          => __( 'Case Studies' ),
        'singular_name' => __( 'Case Study' ),
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'       => array( 'slug' => 'case-studies' ),
        'show_in_rest'  => true, // ✅ Important for block editor
    );
    register_post_type( 'case_study', $args );
}
add_action( 'init', 'create_case_study_cpt' );


// ==============================
// 2. Shortcode: [featured_case_studies]
// ==============================
function featured_case_studies_shortcode( $atts ) {
    $args = array(
        'post_type'      => 'case_study',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC'
    );

    $query = new WP_Query( $args );
    $output = '<div class="featured-case-studies">';

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $output .= '<div class="case-study-item">';
            if ( has_post_thumbnail() ) {
                $output .= '<a href="' . get_permalink() . '">' . get_the_post_thumbnail( get_the_ID(), 'medium' ) . '</a>';
            }
            $output .= '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $output .= '<p>' . get_the_excerpt() . '</p>';
            $output .= '</div>';
        }
    } else {
        $output .= '<p>No Case Studies found.</p>';
    }

    $output .= '</div>';
    wp_reset_postdata();
    return $output;
}
add_shortcode( 'featured_case_studies', 'featured_case_studies_shortcode' );

// ==============================
// 3. Filter: Modify Case Study titles on archive pages
// ==============================
function modify_case_study_titles( $title, $id = null ) {
    if ( is_admin() ) return $title;

    if ( is_post_type_archive( 'case_study' ) && get_post_type( $id ) === 'case_study' ) {
        $title .= ' (Case Study)';
    }

    return $title;
}
add_filter( 'the_title', 'modify_case_study_titles', 10, 2 );

// ==============================
// 4. Theme setup
// ==============================
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

// Enqueue styles
function my_theme_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
