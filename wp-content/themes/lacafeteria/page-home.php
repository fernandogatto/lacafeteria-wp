<?php
// Template Name: Home
$sobre = get_page_by_title('Sobre');
?>

<?php get_header(); ?>
	<section class="header">
		<div class="main-msg">
			<p class="wow fadeInDown">Coffee Store</p>
			<a href="/lacafeteria/sobre" class="btn wow fadeInDown" data-wow-delay="1s">Saiba mais</a>
		</div>
	</section>

	<section class="about-us bg-bottom-header">
		<div class="content">
			<div class="container">
				<div class="who-we-are">
					<div class="title">
						<h2>Quem somos</h2>
						<h3>Sobre a cafeteria</h3>
						<h4>Cafeteria</h4>
					</div>
					<div class="description">
						<p><?php the_field('texto_sobre_a_cafeteria', $sobre); ?></p>
					</div>
				</div>
				<div class="values">
					<div class="values-item wow bounceInUp">
                        <div id="coffee-beans">
                            <img src="<?php the_field('imagem_valor_1', $sobre); ?>">
                            <h4><?php the_field('titulo_valor_1', $sobre); ?></h4>
                            <p><?php the_field('descricao_valor_1', $sobre); ?></p>
                        </div>
                	</div>
                    <div class="values-item wow bounceInUp" data-wow-delay=".1s">
                        <div id="coffee-delivery">
                            <img src="<?php the_field('imagem_valor_2', $sobre); ?>">
                            <h4><?php the_field('titulo_valor_2', $sobre); ?></h4>
                            <p><?php the_field('descricao_valor_2', $sobre); ?></p>
                        </div>
                    </div>
                    <div class="values-item wow bounceInUp" data-wow-delay=".2s">
                        <div id="coffee-chef">
                            <img src="<?php the_field('imagem_valor_3', $sobre); ?>">
                            <h4><?php the_field('titulo_valor_3', $sobre); ?></h4>
                            <p><?php the_field('descricao_valor_3', $sobre); ?></p>
                        </div>
                    </div>
                    <div class="values-item wow bounceInUp" data-wow-delay=".3s">
                        <div id="coffee-cup">
                            <img src="<?php the_field('imagem_valor_4', $sobre); ?>">
                            <h4><?php the_field('titulo_valor_4', $sobre); ?></h4>
                            <p><?php the_field('descricao_valor_4', $sobre); ?></p>
                        </div>
                    </div>
				</div>
				<div class="opening-hours">
					<div>
						<div class="title">
							<h3>Horário de funcionamento</h3>
						</div>
						<div class="description">
							<p><span>Domingo: </span><?php the_field('horario_domingo', $sobre); ?></p>
							<p><span>Segunda: </span><?php the_field('horario_segunda', $sobre); ?></p>
							<p><span>Terça: </span><?php the_field('horario_terca', $sobre); ?></p>
							<p><span>Quarta: </span><?php the_field('horario_quarta', $sobre); ?></p>
							<p><span>Quinta: </span><?php the_field('horario_quinta', $sobre); ?></p>
							<p><span>Sexta: </span><?php the_field('horario_sexta', $sobre); ?></p>
							<p><span>Sábado: </span><?php the_field('horario_sabado', $sobre); ?></p>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/open.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="our-drinks">
		<div class="container">
			<div class="our-menu">
				<div class="title">
					<h2>Nossas bebidas</h2>
					<h3>Escolha seu café</h3>
					<h4>Bebidas</h4>
				</div>
				<div class="description">
					<div class="drinks">
						<div class="drinks-item">
							<div id="americano">
								<h4><?php the_field('titulo_cafe_1'); ?></h4>
								<p><?php the_field('descricao_cafe_1'); ?></p>
							</div>
						</div>
						<div class="drinks-item">
							<div id="cappuccino">
								<h4><?php the_field('titulo_cafe_2'); ?></h4>
								<p><?php the_field('descricao_cafe_2'); ?></p>
							</div>
						</div>
						<div class="drinks-item">
							<div id="espresso">
								<h4><?php the_field('titulo_cafe_3'); ?></h4>
								<p><?php the_field('descricao_cafe_3'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="btn">Veja mais</a>
			</div>
		</div>
	</section>
	
	<section class="our-blog">
		<div class="container">
			<div class="recent-posts">
				<div class="title">
					<h2>Nosso blog</h2>
					<h3>Posts recentes</h3>
					<h4>Blog</h4>
				</div>
				<div class="description">
					<div class="posts">

						<?php
							$artigo = new WP_Query(
								array(
									'posts_per_page'   => 3,
									'post_type'        => 'artigo',
									'post_status'      => 'publish',
									'suppress_filters' => true,
									'orderby'          => 'post_date',
									'order'            => 'DESC'
								)
							);
						?>
						<?php if($artigo -> have_posts()):
							while($artigo -> have_posts()): $artigo -> the_post(); ?>

								<div class="posts-item wow fadeInUp">
									<a href="<?php the_permalink(); ?>">
										<div class="posts-item-wrapper">
											<div class="posts-item-img">
												<img src="<?php the_field('imagem_do_artigo'); ?>" alt="<?php the_field('titulo_do_artigo'); ?>">
											</div>
										</div>
										<h4><?php the_field('titulo_do_artigo'); ?></h4>
										<p class="post-date"><?php the_field('data_do_artigo'); ?></p>
										<p><?php the_field('resumo_do_artigo'); ?></p>
									</a>
								</div>

							<?php endwhile; ?>
						<?php else: ?>
							<p>Nenhum artigo disponível</p>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>

					</div>
				</div>
				<a href="/lacafeteria/blog" class="btn">Leia mais</a>
			</div>
		</div>
	</section>
<?php get_footer(); ?>