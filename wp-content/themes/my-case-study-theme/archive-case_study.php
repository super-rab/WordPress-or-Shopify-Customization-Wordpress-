<?php get_header(); ?>

<main class="container">
    <h1><?php post_type_archive_title(); ?></h1>

    <?php if ( have_posts() ) : ?>
        <div class="case-studies-grid">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="case-study-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div><?php the_post_thumbnail('medium'); ?></div>
                    <?php endif; ?>
                    <div><?php the_excerpt(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination">
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '« Previous',
                'next_text' => 'Next »',
            ));
            ?>
        </div>
    <?php else : ?>
        <p>No Case Studies found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
