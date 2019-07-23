<?php
// Template Name: Artigos
?>

<?php get_header(); ?>
    <section class="header-pages">
        <div class="main-msg">
            <p class="wow fadeInDown">Blog</p>
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
                                    'order'            => 'DESC',
                                    'paged'            => max(1 , get_query_var('paged'))
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

                            <div class="paginate">
                                <?php
                                    //chamar a paginacao
                                    $total_pages = $artigo->max_num_pages;

                                    if ($total_pages > 1){
                                        $current_page = max(1, get_query_var('paged'));
                                    
                                        echo paginate_links(array(
                                            'base' 		=> get_pagenum_link(1) . '%_%',
                                            'format' 	=> '/page/%#%',
                                            'current' 	=> $current_page,
                                            'total' 	=> $total_pages,
                                            'prev_next' => true,
                                            'prev_text' => __('<'),
                                            'next_text' => __('>')
                                        ));
                                    } 
                                ?>
                            </div>


						<?php else: ?>
							<p>Nenhum artigo disponível</p>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>