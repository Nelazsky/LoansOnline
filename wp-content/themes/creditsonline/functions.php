<?php
/**
 * CreditsOnline functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CreditsOnline
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!function_exists('creditsonline_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function creditsonline_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on CreditsOnline, use a find and replace
         * to change 'creditsonline' to the name of your theme in all the template files.
         */
        load_theme_textdomain('creditsonline', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'creditsonline'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'creditsonline_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'creditsonline_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creditsonline_content_width()
{
    $GLOBALS['content_width'] = apply_filters('creditsonline_content_width', 640);
}

add_action('after_setup_theme', 'creditsonline_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creditsonline_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'creditsonline'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'creditsonline'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'creditsonline_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function creditsonline_scripts()
{
    wp_enqueue_style('creditsonline-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('creditsonline-style', 'rtl', 'replace');

    wp_enqueue_script('creditsonline-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'creditsonline_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method()
{
    wp_enqueue_script('jquery');
}

add_action('init', 'register_offer');
function register_offer()
{
    register_post_type('offer', [
        'labels' => [
            'name' => 'Офферы', // основное название для типа записи
            'singular_name' => 'Оффер', // название для одной записи этого типа
            'add_new' => 'Добавить Оффер', // для добавления новой записи
            'add_new_item' => 'Добавление Оффера', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Редактирование Оффера', // для редактирования типа записи
            'new_item' => 'Новый Оффер', // текст новой записи
            'view_item' => 'Смотреть Оффер', // для просмотра записи этого типа.
            'search_items' => 'Искать Оффер', // для поиска по этим типам записи
            'not_found' => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'Офферы', // название меню
        ],
        'description' => 'Кредитный оффер',
        'public' => true,
        'show_in_menu' => true, // показывать ли в меню адмнки
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => 4,
        'menu_icon' => null,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => [
            'title',
            'thumbnail',
            'custom-fields',
            'post-formats'
        ], // 'editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'has_archive' => true,
    ]);

    register_taxonomy('region', 'offer', [
        'label' => '', // определяется параметром $labels->name
        'labels' => [
            'name' => 'Регионы',
            'singular_name' => 'Регионы',
            'search_items' => 'Поиск регионов',
            'all_items' => 'Все регионы',
            'view_item ' => 'Посмотреть регион',
            'parent_item' => 'Родительский регион',
            'parent_item_colon' => 'Родительский регион:',
            'edit_item' => 'Изменить регион',
            'update_item' => 'Обновить регион',
            'add_new_item' => 'Добавить новый регион',
            'new_item_name' => 'Новое имя региона',
            'menu_name' => 'Регион',
        ],
        'description' => 'Для того чтобы распределить офферы по разным страницам, нужно указать им регион', // описание таксономии
        'public' => true,
        'capabilities'          => array(),
        'show_in_menu' => true,
        'hierarchical'          => true,
        'rewrite'               => true,
    ]);
}

// add offers images support
add_theme_support('post-thumbnails');
if (function_exists('add_image_size')) {
    add_image_size('offers-images', 165, 65, true);
}

add_action('wp_ajax_filter', 'offer_filtering'); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action('wp_ajax_nopriv_filter', 'offer_filtering');  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей

function offer_filtering()
{
    $offer_sum = $_POST["offer_sum"];

    $offer_time = $_POST["offer_time"];

    $current_template = $_POST["current_template"];


    if( $current_template == 'russia-page.php'  ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'russia')
                )
            )
        );
    }else if( $current_template == 'crimea-page.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'сrimea')
                )
            )
        );
    }else if( $current_template == 'page1.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page1')
                )
            )
        );
    }else if( $current_template == 'page2.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page2')
                )
            )
        );
    }else if( $current_template == 'page3.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page3')
                )
            )
        );
    }else if( $current_template == 'page4.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page4')
                )
            )
        );
    }else if( $current_template == 'page5.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page5')
                )
            )
        );
    }else if( $current_template == 'page6.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page6')
                )
            )
        );
    }else if( $current_template == 'page7.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page7')
                )
            )
        );
    }else if( $current_template == 'page8.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page8')
                )
            )
        );
    }else if( $current_template == 'page9.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page9')
                )
            )
        );
    }else if( $current_template == 'page10.php' ){
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'region',
                    'field' => 'slug',
                    'terms' => array( 'page10')
                )
            )
        );
    }else{
        $args = array(
            'post_type' => 'offer',
            'numberposts' => 50,
            'category' => 0,
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => 'loan_rating',
            'suppress_filters' => true,
        );
    }

    $offers = get_posts($args);
    $bad_loans = [];

    foreach ($offers as $offer) {

        $loan_time = explode("-", get_field('loan_time', $offer->ID));

        $loan_sum = explode("-", get_field('loan_first_sum', $offer->ID));

        if ((int)$loan_time[0] <= (int)$offer_time and (int)$loan_time[1] >= (int)$offer_time and (int)$loan_sum[0] <= (int)$offer_sum and (int)$loan_sum[1] >= (int)$offer_sum) {

            if( $current_template == 'russia-page.php' ){
                include 'offer1.php';
            }else{
                include 'offer.php';
            }

        } else {
            $bad_loans[] = $offer;
        }
    }

    echo " <div class=\"unavailable\">Результаты, не соответствующие условиям первого кредита</div>";

    foreach ($bad_loans as $offer) {
        if( $current_template == 'russia-page.php' ){
            include 'offer1.php';
        }else{
            include 'offer.php';
        }

    }
    wp_reset_postdata();

    die; // даём понять, что обработчик закончил выполнение
}


function get_current_date()
{
    $arr = [
        'январь',
        'февраль',
        'март',
        'апрель',
        'май',
        'июнь',
        'июль',
        'август',
        'сентябрь',
        'октябрь',
        'ноябрь',
        'декабрь'
    ];

    $month = date('n') - 1;
    return $arr[$month] . ' ' . date('Y');
}
