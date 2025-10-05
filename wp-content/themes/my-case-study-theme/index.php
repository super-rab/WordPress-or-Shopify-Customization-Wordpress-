<?php get_header(); ?>

<h2>Latest Posts</h2>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div><?php the_excerpt(); ?></div>
    </article>
<?php endwhile; else: ?>
    <p>No posts found.</p>
<?php endif; ?>

<?php get_footer(); ?>
