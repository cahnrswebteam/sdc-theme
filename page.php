<?php get_header(); ?>
<?php get_template_part('parts/set_subsection'); ?>
<?php get_template_part('parts/primary_feature'); ?>
<main class="spine-page-default">

<?php get_template_part('parts/headers'); ?>
<?php get_template_part('parts/featured-images'); ?>
<?php get_template_part('parts/tertiary_nav'); ?>
<section id="primary-section" class="row side-right gutter marginalize-ends">
	
	<?php get_template_part('articles/article'); ?>
</section>

</main>

<?php get_footer(); ?>