			<footer class="footer cf" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

					<ul class="nav main-nav cf">
						<li><a href="<?php echo home_url(); ?>/portfolio">Portfolio</a><span class="add-on">My work</span></li>
						<li><a href="<?php echo home_url(); ?>/about">About Me</a><span class="add-on">How I got here</span></li>
						<li><a href="<?php echo home_url(); ?>/blog">Blog</a><span class="add-on">What's going on</span></li>
						<li><a href="<?php echo home_url(); ?>/contact">Contact</a><span class="add-on">Making something?</span></li>
						<li><a href="<?php echo home_url(); ?>">Resume</a><span class="add-on">(PDF)</span></li>
					</ul>
					<ul class="nav social cf">
						<li><a href="https://www.linkedin.com/profile/view?id=31860689&trk=nav_responsive_tab_profile"><img title="LinkedIn" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-linkedin.svg" alt="Find me on LinkedIn" /></a></li>
						<li><a href="https://twitter.com/pmarich"><img title="Twitter" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-twitter.svg" alt="Find me on Twitter" /></a></li>
						<li><a href="http://codepen.io/pmarich/"><img title="CodePen" class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/icon-codepen.svg" alt="Find me on CodePen" /></a></li>
					</ul>
					<small class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</small>
				
			</footer>

		</div><!-- END #container -->
		</div><!-- END .drawer-wrap -->
		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
