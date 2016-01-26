<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>

	<div class="wrapper container">

		<section class="content sitemap">
			<article class="wide">
				<header>
					<h1>Plan du site</h1>
				</header>

				<h2>Pages</h2>
				<ul class="sitemap">
					<?php wp_list_pages('title_li='); ?>
				</ul>
		
				<h2>Articles</h2>
				<ul class="sitemap">
				<?php 
				$cats = get_categories('exclude=');
				foreach ($cats as $cat) {
					echo '<h3 class="wrapper">'.$cat->cat_name.'</h2>';
					echo '<ul class="wrapper sitemap">';
					query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
					while(have_posts()) {
						the_post();
						$category = get_the_category();
						// Only display a post link once, even if it's in multiple categories
						if ($category[0]->cat_ID == $cat->cat_ID) {
							echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
						}
					}
					echo '</ul>';
					echo '</li>';	
				}
				?>
				</ul>
			</article>
		</section>
	</div>

<?php get_footer(); ?>