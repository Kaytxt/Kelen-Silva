<?php
/**
 * Index template - fallback
 * 
 * @package Kelen_Silva
 * @since 2.0
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="site-container section">
        
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title" style="text-align: center;">', '</h1>'); ?>
                    </header>

                    <div class="entry-content" style="max-width: 900px; margin: 0 auto;">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Páginas:', 'kelen-silva'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <div class="no-content" style="text-align: center; padding: 80px 20px;">
                <h2><?php esc_html_e('Nenhum conteúdo encontrado', 'kelen-silva'); ?></h2>
                <p><?php esc_html_e('Parece que não há nada aqui. Crie uma página e selecione o template "Página Inicial Completa".', 'kelen-silva'); ?></p>
            </div>
            <?php
        endif;
        ?>
        
    </div><!-- .site-container -->
</main><!-- #primary -->

<?php
get_footer();
