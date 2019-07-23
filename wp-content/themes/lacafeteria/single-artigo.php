<?php
// Template Name: Artigo
?>

<?php get_header(); ?>
    <section class="header-post" style="background: linear-gradient( rgba(36, 36, 36, .4), rgba(36, 36, 36, .6) ), url(<?php the_field('imagem_do_artigo'); ?>); background-position: center; background-repeat: no-repeat; background-size: cover; width: 100%; height: 300px;">
        <div class="main-msg">
            <p class="wow fadeInDown"><?php the_field('titulo_do_artigo'); ?></p>
        </div>
    </section>

    <section class="body-post">
        <div class="container">
            <div class="content">
                <p class="post-date"><?php the_field('data_do_artigo'); ?></p>
                <p><?php the_field('texto_do_artigo'); ?></p>
            </div>
            <a href="/lacafeteria/blog" class="btn">Leia mais</a>
        </div>
    </section>
<?php get_footer(); ?>