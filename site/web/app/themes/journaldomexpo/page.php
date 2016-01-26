<?php get_header(); ?>
	
	<div class="wrapper container">
	
		<section class="content">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<article class="wide">
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<?php the_content(); ?>
				</article>
			
			<?php endwhile;
			endif; ?>
			
		</section> <!-- .content -->

	</div> <!-- .container -->

<?php get_footer(); ?>