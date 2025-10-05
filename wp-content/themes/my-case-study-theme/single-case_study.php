<?php get_header(); ?>

<main class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="case-study-single">
        <h1><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="featured-image"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>

        <div class="content"><?php the_content(); ?></div>
    </article>
<?php endwhile; endif; ?>

    <p><a href="<?php echo get_post_type_archive_link('case_study'); ?>">&laquo; Back to Case Studies</a></p>
</main>

<?php get_footer(); ?>
