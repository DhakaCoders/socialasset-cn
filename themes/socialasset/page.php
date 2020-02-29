<?php get_camp_header(); ?>

<?php while( have_posts() ): the_post(); ?>
<div class="sc-dsc-wrp">
<?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>