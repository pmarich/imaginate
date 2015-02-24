<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div id="inner-content" class="cf">
			<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<section class="entry-content cf" itemprop="articleBody">
									<div class="intro t-3of5 d-1of2">
										<header class="article-header">
											<h1 class="page-title"><?php the_title(); ?></h1>
										</header>
										<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
									</div>
									<div class="t-2of5 d-3of7 last-col">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/portrait1.png" alt="Patrick Marich, drawing" />
									</div>
								</section>

				<?php endwhile; else : ?>

						<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
								</footer>
						</article>

				<?php endif; ?>
				<section class="secondary-content cf">
					<div class="wrap">
						<article class="t-4of5 d-1of2 cf">
										<header>
											<h1 class="label-head">The Sandbox</h1>
											<?php query_posts('posts_per_page=1&cat=' . $sandbox_cat);
												while (have_posts()) : the_post(); ?>
												<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
												<span class="date"><?php echo get_the_date('n/y')?></span>
										</header>
										<a href="<?php the_permalink()?>">
												<?php
												if (is_mobile()) {
													the_post_thumbnail('medium');
												} else {
													the_post_thumbnail('large');
												} ?>
										</a>

										<?php the_excerpt() ?>
												
										<?php endwhile; ?>
						</article>
						<article class="t-4of5 d-1of2 cf">
										<header>
											<h1 class="label-head">Bloggy Stuff</h1>
											<?php query_posts('posts_per_page=1&cat=' . $bloggy_cat);
												while (have_posts()) : the_post(); ?>
												<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
												<span class="date"><?php echo get_the_date('n/y')?></span>
										</header>
										<a href="<?php the_permalink()?>">
											<?php
												if (is_mobile()) {
												   the_post_thumbnail('medium');
												} else {
													the_post_thumbnail('large');
											} ?>
										</a>

										<?php the_excerpt()?>
										
										<?php endwhile; ?>
						</article>
					<div><!-- END .wrap -->
				</section>

			</main>

		</div>

	</div>

<?php get_footer(); ?>
