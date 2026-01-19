<?php
/**
 * Kelen Silva - Reprogramação da Consciência
 * Functions and definitions
 * 
 * @package Kelen_Silva
 * @since 2.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Configurações do Tema
 */
function kelen_silva_setup() {
    // Suporte para título do site
    add_theme_support('title-tag');
    
    // Suporte para imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte para logo customizado
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    
    // Suporte para HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    
    // Largura do conteúdo
    if (!isset($content_width)) {
        $content_width = 1200;
    }
    
    // Registro de menu
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'kelen-silva'),
    ));
}
add_action('after_setup_theme', 'kelen_silva_setup');

/**
 * Enfileirar Scripts e Estilos
 */
function kelen_silva_scripts() {
    // Google Fonts
    wp_enqueue_style('kelen-silva-fonts', 
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap', 
        array(), 
        null
    );
    
    // Tema Principal
    wp_enqueue_style('kelen-silva-style', get_stylesheet_uri(), array(), '2.0');
    
    // jQuery (já incluso no WordPress)
    wp_enqueue_script('jquery');
    
    // Script customizado
    wp_enqueue_script('kelen-silva-custom', 
        get_template_directory_uri() . '/js/custom.js', 
        array('jquery'), 
        '2.0', 
        true
    );
}
add_action('wp_enqueue_scripts', 'kelen_silva_scripts');

/**
 * Registrar campos ACF via código (caso o plugin não esteja instalado)
 */
function kelen_silva_acf_add_local_field_groups() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    // GRUPO 1: HERO SECTION
    acf_add_local_field_group(array(
        'key' => 'group_hero',
        'title' => '🌟 Hero - Topo do Site',
        'fields' => array(
            array(
                'key' => 'field_hero_logo',
                'label' => 'Logo Principal',
                'name' => 'hero_logo',
                'type' => 'image',
                'instructions' => 'Escolha a logo que aparece no topo',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Título Principal',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Dê um Salto Quântico e Reprograme Sua Consciência',
            ),
            array(
                'key' => 'field_hero_subtitle',
                'label' => 'Subtítulo',
                'name' => 'hero_subtitle',
                'type' => 'textarea',
                'default_value' => 'O renascimento não acontece fora. Ele desperta quando você está pronta para sustentar a sua própria energia e manifestar a realidade que deseja.',
            ),
            array(
                'key' => 'field_hero_badge',
                'label' => 'Badge (8 Encontros)',
                'name' => 'hero_badge',
                'type' => 'text',
                'default_value' => '8 ENCONTROS 100% ONLINE AO VIVO PELO ZOOM',
            ),
            array(
                'key' => 'field_hero_btn1_text',
                'label' => 'Texto Botão 1',
                'name' => 'hero_btn1_text',
                'type' => 'text',
                'default_value' => 'QUERO REPROGRAMAR MINHA CONSCIÊNCIA',
            ),
            array(
                'key' => 'field_hero_btn1_link',
                'label' => 'Link Botão 1 (Hotmart)',
                'name' => 'hero_btn1_link',
                'type' => 'url',
                'default_value' => 'https://pay.hotmart.com/E97944766B?off=6y9966ug',
            ),
            array(
                'key' => 'field_hero_btn2_text',
                'label' => 'Texto Botão 2',
                'name' => 'hero_btn2_text',
                'type' => 'text',
                'default_value' => 'DÚVIDAS? FALE NO WHATSAPP',
            ),
            array(
                'key' => 'field_hero_btn2_link',
                'label' => 'Link Botão 2 (WhatsApp)',
                'name' => 'hero_btn2_link',
                'type' => 'url',
                'default_value' => 'https://wa.me/5551981502140',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-home.php',
                ),
            ),
        ),
    ));

    // GRUPO 2: CHAMADO DA ALMA
    acf_add_local_field_group(array(
        'key' => 'group_chamado',
        'title' => '🌿 Chamado da Alma',
        'fields' => array(
            array(
                'key' => 'field_chamado_title',
                'label' => 'Título',
                'name' => 'chamado_title',
                'type' => 'text',
                'default_value' => '🌿 Um Chamado da Alma',
            ),
            array(
                'key' => 'field_chamado_text1',
                'label' => 'Texto 1',
                'name' => 'chamado_text1',
                'type' => 'textarea',
                'default_value' => 'Talvez você já tenha feito terapias, cursos e buscado respostas em diversos lugares.',
            ),
            array(
                'key' => 'field_chamado_text2',
                'label' => 'Texto 2',
                'name' => 'chamado_text2',
                'type' => 'textarea',
                'default_value' => 'E ainda assim… sente que existe algo mais profundo pedindo para despertar.',
            ),
            array(
                'key' => 'field_chamado_destaque',
                'label' => 'Texto Destaque (Caixa)',
                'name' => 'chamado_destaque',
                'type' => 'textarea',
                'default_value' => 'Quando a alma está pronta para parar de buscar fora e começar a sustentar a própria energia com consciência.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-home.php',
                ),
            ),
        ),
    ));

    // GRUPO 3: SOBRE KELEN
    acf_add_local_field_group(array(
        'key' => 'group_sobre',
        'title' => '👩‍🦋 Sobre Kelen Silva',
        'fields' => array(
            array(
                'key' => 'field_sobre_logo',
                'label' => 'Logo Circular',
                'name' => 'sobre_logo',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_sobre_nome',
                'label' => 'Nome',
                'name' => 'sobre_nome',
                'type' => 'text',
                'default_value' => 'Kelen Silva',
            ),
            array(
                'key' => 'field_sobre_bio',
                'label' => 'Biografia',
                'name' => 'sobre_bio',
                'type' => 'wysiwyg',
                'default_value' => '<p>Meu nome é <strong>Kelen Silva</strong> e sou <strong>Guia da Alma</strong>, especialista em cura energética...</p>',
            ),
            array(
                'key' => 'field_sobre_instagram',
                'label' => 'Instagram',
                'name' => 'sobre_instagram',
                'type' => 'url',
                'default_value' => 'https://www.instagram.com/kelenguiadaalma/',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-home.php',
                ),
            ),
        ),
    ));

    // GRUPO 4: PREÇO
    acf_add_local_field_group(array(
        'key' => 'group_preco',
        'title' => '💰 Seção de Preço',
        'fields' => array(
            array(
                'key' => 'field_preco_antigo',
                'label' => 'Preço Antigo',
                'name' => 'preco_antigo',
                'type' => 'text',
                'default_value' => 'R$ 597,00',
            ),
            array(
                'key' => 'field_preco_atual',
                'label' => 'Preço Atual',
                'name' => 'preco_atual',
                'type' => 'text',
                'default_value' => 'R$ 297',
            ),
            array(
                'key' => 'field_preco_parcelado',
                'label' => 'Texto Parcelamento',
                'name' => 'preco_parcelado',
                'type' => 'text',
                'default_value' => 'ou parcelado no cartão',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-home.php',
                ),
            ),
        ),
    ));

    // GRUPO 5: WHATSAPP
    acf_add_local_field_group(array(
        'key' => 'group_whatsapp',
        'title' => '💬 WhatsApp Flutuante',
        'fields' => array(
            array(
                'key' => 'field_whatsapp_number',
                'label' => 'Número do WhatsApp',
                'name' => 'whatsapp_number',
                'type' => 'text',
                'default_value' => '5551981502140',
                'instructions' => 'Apenas números, com DDI e DDD (ex: 5551981502140)',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-home.php',
                ),
            ),
        ),
    ));
}
add_action('acf/init', 'kelen_silva_acf_add_local_field_groups');

/**
 * Shortcode para botão WhatsApp
 */
function kelen_silva_whatsapp_button() {
    $whatsapp = get_field('whatsapp_number') ?: '5551981502140';
    
    ob_start();
    ?>
    <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" 
       class="whatsapp-float" 
       target="_blank" 
       aria-label="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </a>
    <?php
    return ob_get_clean();
}
add_shortcode('whatsapp_button', 'kelen_silva_whatsapp_button');

/**
 * Adicionar CSS inline
 */
function kelen_silva_custom_css() {
    ?>
    <style type="text/css">
        :root {
            --brand-purple: #a066b1;
            --brand-teal: #00a896;
            --brand-peach: #fab178;
            --brand-light: #fafafa;
            --brand-dark: #654170;
        }
    </style>
    <?php
}
add_action('wp_head', 'kelen_silva_custom_css');

/**
 * Customizer - Configurações adicionais
 */
function kelen_silva_customize_register($wp_customize) {
    // Seção de Cores
    $wp_customize->add_section('kelen_silva_colors', array(
        'title'    => __('Cores da Marca', 'kelen-silva'),
        'priority' => 30,
    ));
    
    // Cor Primária
    $wp_customize->add_setting('primary_color', array(
        'default'   => '#a066b1',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label'    => __('Cor Primária (Roxo)', 'kelen-silva'),
        'section'  => 'kelen_silva_colors',
    )));
}
add_action('customize_register', 'kelen_silva_customize_register');

/**
 * Adicionar classe ao body
 */
function kelen_silva_body_classes($classes) {
    if (is_page_template('template-home.php')) {
        $classes[] = 'home-template';
    }
    return $classes;
}
add_filter('body_class', 'kelen_silva_body_classes');

/**
 * Habilitar SVG Upload
 */
function kelen_silva_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'kelen_silva_mime_types');

/**
 * Mensagem admin se ACF não estiver instalado
 */
function kelen_silva_acf_notice() {
    if (!class_exists('ACF')) {
        ?>
        <div class="notice notice-warning">
            <p><strong>Importante!</strong> Este tema funciona melhor com o plugin <strong>Advanced Custom Fields (ACF)</strong>. <a href="<?php echo admin_url('plugin-install.php?s=advanced+custom+fields&tab=search&type=term'); ?>">Instale agora (grátis)</a></p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'kelen_silva_acf_notice');
