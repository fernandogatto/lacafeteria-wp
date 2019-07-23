<?php
// Template Name: Contato
?>

<?php get_header(); ?>
	<section class="header-pages">
		<div class="main-msg">
			<p class="wow fadeInDown">Contato</p>
		</div>
	</section>
		
	<section class="contact-us">
		<div class="container">
			<div class="title">
				<h2>Contato</h2>
				<h3>Fale conosco</h3>
				<h4>Contato</h4>
			</div>
			<div class="description">
				<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post">
					<div class="group-item">
						<label for="name">Nome</label>
						<input type="text" id="name" name="name">
					</div>
					<div class="group-item">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email">
					</div>
					<div class="group-item">
						<label for="phone">Telefone</label>
						<input type="text" id="phone" name="phone">
					</div>
					<div class="group-item">
						<label for="message">Mensagem</label>
						<textarea type="text" id="message" name="message"></textarea>
					</div>
					<button type="submit" class="btn">Enviar</button>
				</form>
				<div class="how-to-meet">
					<h3>Onde nos encontrar</h3>
					<p>2130 Fulton St, San Francisco, CA 94117, EUA</p>
					<h3 style="margin-top: 20px;">Entre em contato</h3>
					<p>contato@email.com</p>
					<p>+55 021 2412-3333</p>
					<h3 style="margin-top: 20px;">Social</h3>
					<div class="social">
						<a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
						<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<!-- https://www.embedgooglemap.net/ -->
		<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/best-wordpress-themes/"></a></div></div>
	</section>
<?php get_footer(); ?>