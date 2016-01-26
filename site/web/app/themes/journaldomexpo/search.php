<?php get_header(); ?>

<div class="wrapper container">

	<section class="content">

		<header>
			<h1>Résultat de la recherche "<?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>" : <span class="count">'); echo $count . ' '; _e('articles</span>'); wp_reset_query(); ?></h1>
		</header>
		
		<?php
		$counter = 0; ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$class = '';
		$counter++;
		if ($counter == 1) {
			$class .= 'wide';
		} else {
			$class .= 'regular';
		}
		?>
		
			<article class="<?php echo $class; ?>">
				<a href="<?php the_permalink(); ?>" title="" class="thumbnail large">
					<?php
					if ($counter == 1) {
						the_post_thumbnail('large');
					} else {
						the_post_thumbnail('medium');
					}
					?>
				</a>
				<header>
					<a href="<?php the_permalink(); ?>" title="">
						<h1><?php the_title(); ?></h1>
					</a>
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
				<?php the_content('Lire la suite'); ?>
			</article>
		
		<?php
		//endif;
		endwhile; ?>
		<?php endif; ?>
		
		<nav class="pagination">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => 'Précédent',
			'next_text' => 'Suivant'
		) );
		?>
		</nav>
		
		<?php wp_reset_query(); ?>

</div> <!-- .container -->

<?php get_footer(); ?>