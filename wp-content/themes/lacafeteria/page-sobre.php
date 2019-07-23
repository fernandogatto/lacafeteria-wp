<?php
// Template Name: Sobre
?>

<?php get_header(); ?>
    <section class="header-pages">
        <div class="main-msg">
            <p class="wow fadeInDown">Sobre</p>
        </div>
    </section>
    
    <section class="about-us">
		<div class="content">
			<div class="container">
				<div class="who-we-are">
					<div class="title">
						<h2>Quem somos</h2>
						<h3>Sobre a cafeteria</h3>
						<h4>Cafeteria</h4>
					</div>
					<div class="description">
						<p><?php the_field('texto_sobre_a_cafeteria'); ?></p>
					</div>
                </div>
                
                <div class="opening-hours">
					<div>
						<div class="title">
							<h3>Horário de funcionamento</h3>
						</div>
						<div class="description">
							<p><span>Domingo: </span><?php the_field('horario_domingo'); ?></p>
							<p><span>Segunda: </span><?php the_field('horario_segunda'); ?></p>
							<p><span>Terça: </span><?php the_field('horario_terca'); ?></p>
							<p><span>Quarta: </span><?php the_field('horario_quarta'); ?></p>
							<p><span>Quinta: </span><?php the_field('horario_quinta'); ?></p>
							<p><span>Sexta: </span><?php the_field('horario_sexta'); ?></p>
							<p><span>Sábado: </span><?php the_field('horario_sabado'); ?></p>
						</div>
					</div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/open.jpg">
                </div>
            </div>
        </div>
    </section>
              
    <section class="values-mission">
        <div class="content">
            <div class="container">
                <div class="our-values">
                    <div class="title">
                        <h2>Nossos valores</h2>
                        <h3>Valores</h3>
                        <h4>Valores</h4>
                    </div>
                    <div class="description">
                        <div class="values">
                            <div class="values-item wow bounceInUp">
                                <div id="coffee-beans">
                                    <img src="<?php the_field('imagem_valor_1'); ?>">
                                    <h4><?php the_field('titulo_valor_1'); ?></h4>
                                    <p><?php the_field('descricao_valor_1'); ?></p>
                                </div>
                            </div>
                            <div class="values-item wow bounceInUp" data-wow-delay=".1s">
                                <div id="coffee-delivery">
                                    <img src="<?php the_field('imagem_valor_2'); ?>">
                                    <h4><?php the_field('titulo_valor_2'); ?></h4>
                                    <p><?php the_field('descricao_valor_2'); ?></p>
                                </div>
                            </div>
                            <div class="values-item wow bounceInUp" data-wow-delay=".2s">
                                <div id="coffee-chef">
                                    <img src="<?php the_field('imagem_valor_3'); ?>">
                                    <h4><?php the_field('titulo_valor_3'); ?></h4>
                                    <p><?php the_field('descricao_valor_3'); ?></p>
                                </div>
                            </div>
                            <div class="values-item wow bounceInUp" data-wow-delay=".3s">
                                <div id="coffee-cup">
                                    <img src="<?php the_field('imagem_valor_4'); ?>">
                                    <h4><?php the_field('titulo_valor_4'); ?></h4>
                                    <p><?php the_field('descricao_valor_4'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="our-mission">
                    <div class="title">
                        <h2>Nossa missão</h2>
                        <h3>Missão</h3>
                        <h4>Missão</h4>
                    </div>
                    <div class="description">
                        <p><?php the_field('texto_missao'); ?></p>
                    </div>
                </div>
            </div>
		</div>
	</section>
<?php get_footer(); ?>