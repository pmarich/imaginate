<?php
/*
 Template Name: Portfolio
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

							<!-- <article role="article" itemscope itemtype="http://schema.org/BlogPosting"> -->
								
								<header class="article-header">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</header>

								<section class="entry-content cf" itemprop="articleBody">
									
									<?php query_posts("cat=".$portfolio);
										while (have_posts()) : the_post(); ?>
										<article class="project clearfix" role="article" itemscope itemtype="http://schema.org/BlogPosting">
											<div class="wrap">
											<h2><?php the_title(); ?></h2>
											
											<?php the_content(); ?>
											
											</div><!-- END .wrap -->
										</article>  
									<?php endwhile; // End the loop ?>
									
								</section>
								
							<!-- </article> -->

						</main>

						<?php // get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
