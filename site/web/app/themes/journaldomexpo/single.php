<?php get_header(); ?>
	
	<div class="wrapper container">
	
		<section class="content">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php setPostViews(get_the_ID()); ?>
			
				<article class="wide">
						<?php the_post_thumbnail('large'); ?>
					<header>
						<h1><?php the_title(); ?></h1>
						<p class="infos-post">
							Le <time date="<?php the_date('d-m-Y'); ?>" pubdate><?php echo get_the_date('d F Y'); ?></time> dans 
							<?php
							$categories = get_the_category();
							$separator = ', ';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" class="categorie">'.$category->cat_name.'</a>'.$separator;
								}
							echo trim($output, $separator);
							}
							?>
						</p>
					</header>
					<?php the_content(); ?>
				</article>
			
			<?php endwhile;
			endif; ?>
			
		</section> <!-- .content -->

		<section class="comments">
			
			<?php comments_template(); ?>
			
		</section>

	</div> <!-- .container -->

<?php get_footer(); ?>