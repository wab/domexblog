	<div class="around">

		<aside>
			<div class="recherche">
				<?php get_search_form(); ?>
			</div>
			<section class="consult">
				<h1>Les + consultés</h1>
				<ol>
					<?php
						query_posts('posts_per_page=5&meta_key=post_views_count&orderby=meta_value_num&order=DESC');
						if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php
						endwhile; endif;
						wp_reset_query();
					?>
				</ol>
			</section>
			<div class="souscription">
				<h1>Inscrivez-vous</h1>
				<?php echo do_shortcode('[jetpack_subscription_form]'); ?>
			</div>
			<section class="facebook">
				<h1>Devenez fan</h1>
				<div class="facebook-widget">
					<div class="fb-like-box" data-href="http://www.facebook.com/VillagesDomexpo" data-width="202" data-show-faces="true" data-stream="false" data-header="false" show_border="false"></div>
				</div>
			</section>

			<section class="domexpo">
				<h1>Domexpo</h1>

				<ul class="liens-site">
					<li><a href="http://www.domexpo.fr/les-villages-expo" title="" target="_blank">Les villages expos</a></li>
					<li><a href="http://www.domexpo.fr/les-constructeurs" title="" target="_blank">Les constructeurs</a></li>
					<li><a href="http://www.domexpo.fr/la-charte-domexpo" title="" target="_blank">La charte Domexpo</a></li>
				</ul>

				<article class="site-actu">
					<h1>Dernière actu :</h1>
					<h2>Nouvelle maison BBC dans le village de Coignières (78)</h2>
					<a href="#" title="" target="_blank" class="button">Lire la suite</a>
				</article>

				<div class="diaporama">
					<a href="http://www.domexpo.fr/des-idees-de-maisons" title="" target="_blank">Un diaporama<br/>pour stimuler votre imagination !</a>
				</div>

				<div class="liens-apps">
									<a href="https://itunes.apple.com/fr/app/domexpo/id647985562?mt=8" title="" class="iphone" target="_blank">Télécharger l'application iPhone</a>
									<a href="https://play.google.com/store/apps/details?id=com.r2.domexpo&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5yMi5kb21leHBvIl0" title="" class="android" target="_blank">Télécharger l'application Android</a>
								</div>

				<div class="twitter">
					<h1>Dernier tweet :</h1>
					<?php echo do_shortcode('[tweets username="VillagesDomexpo" nb="1" avatar="0" cache="3600" transition="0" delay="0" links="1"] '); ?>
					<a href="http://twitter.com/VillagesDomexpo" title="" target="_blank" class="follow button">Suivez Domexpo sur Twitter</a>
				</div>
			</section> <!-- .domexpo -->

		</aside>

	<footer>
		<div class="wrapper">
			<section class="social">
				<article class="outside">
					<h1>Retrouvez-nous sur :</h1>
					<a class="twitter" href="http://twitter.com/VillagesDomexpo" title="Suivez Domexpo sur Twitter" target="_blank">Domexpo sur Twitter</a>
					<a class="facebook" href="http://www.facebook.com/VillagesDomexpo" title="Rejoignez-nous sur Facebook" target="_blank">Domexpo sur Facebook</a>
					<a class="youtube" href="http://www.youtube.com/VillagesDomexpo" title="Suivez notre chaîne Youtube" target="_blank">Chaîne Domexpo sur Youtube</a>
				</article>
				<article class="inside">
					<p><a href="/plan-du-site" title="">Plan du site</a> - 
					<a href="/mentions-legales" title="">Mentions légales</a>
				</article>
			</section>

			<section class="liens">
				<article class="domexpo">
					<h1><a href="http://www.domexpo.fr" title="" target="_blank">Domexpo</a></h1>
					<p><a href="http://www.domexpo.fr/les-villages-expo" title="" target="_blank">Les villages</a> - 
					<a href="http://www.domexpo.fr/les-constructeurs" title="" target="_blank">Les constructeurs</a> - 
					<a href="http://www.domexpo.fr/la-charte-domexpo" title="" target="_blank">La charte Domexpo</a></p>
				</article>
				<article class="villages">
					<h1>Les villages expo</h1>
					<p><a href="http://www.domexpo.fr/villages/coignieres" target="_blank" title="">Yvelines</a> - 
					<a href="http://www.domexpo.fr/villages/baillet-moisselles" target="_blank" title="">Val d'Oise</a> - 
					<a href="http://www.domexpo.fr/villages/mareuil-les-meaux" target="_blank" title="">Seine et Marne</a> - 
					<a href="http://www.domexpo.fr/villages/ma-ville-du-bois" target="_blank" title="">Essonne</a></p>
				</article>
			</section>
		</div> <!-- .wrapper -->
	</footer>
	
	</div> <!-- .around -->
	<?php wp_footer(); ?>
</body>
</html>