<?php

add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('offer', [
        'label' => null,
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
// 'publicly_queryable'  => null, // зависит от public
// 'exclude_from_search' => null, // зависит от public
// 'show_ui'             => null, // зависит от public
// 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => true, // показывать ли в меню адмнки
// 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => 4,
        'menu_icon' => null,
//'capability_type'   => 'post',
//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => [
            'title',
            //'editor',
            'thumbnail',
            'custom-fields',
            //'page-attributes',
            //'post-formats'
        ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ]);
}

// add offers images support
add_theme_support('post-thumbnails');
if (function_exists('add_image_size')) {
    add_image_size('offers-images', 165, 65, true);
}
?>