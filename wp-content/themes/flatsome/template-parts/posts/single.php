<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="article-inner <?php flatsome_blog_article_classes(); ?>">
        <div class="col large-10 margin-auto">

		<?php
			if(flatsome_option('blog_post_style') == 'default' || flatsome_option('blog_post_style') == 'inline'){
				get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') );
			}
		?>
        </div>
        <div class="background-white">
            <div class="col large-10 margin-auto">
                <?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
            </div>

        </div>

	</div>
</article>

<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>