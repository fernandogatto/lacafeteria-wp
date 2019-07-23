<?php
$sobre = get_page_by_title('Sobre');
$contato = get_page_by_title('Contato');
?>
	<footer>
		<div class="footer">
			<div class="container">
				<div class="content">
					<div class="about footer-item">
						<h4>Sobre</h4>
						<p><?php the_field('resumo_texto_sobre_a_cafeteria', $sobre); ?></p>
					</div>
					<div class="pages footer-item">
						<h4>Páginas</h4>
						<a href="/lacafeteria"><p>Home</p></a>
						<a href="/lacafeteria/sobre"><p>Sobre</p></a>
						<a href="/lacafeteria/blog"><p>Blog</p></a>
						<a href="/lacafeteria/contato"><p>Contato</p></a>
					</div>
					<div class="contact footer-item">
						<h4>Contato</h4>
						<p><?php the_field('endereco', $contato); ?></p>
						<p><?php the_field('email', $contato); ?></p>
						<p><?php the_field('telefone', $contato); ?></p>
						<div class="social">
							<a href="<?php the_field('link_do_facebook', $contato); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
							<a href="<?php the_field('link_do_instagram', $contato); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="copyright">
			<p>La Cafétéria 2019 - Nenhum direito reservado</p>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>
</html>