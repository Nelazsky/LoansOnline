<?php
define('WP_CACHE', true);
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'credit_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Nn)99F|FK%AS-PJ2$,:[jjI8eG0or16B%JicO+4$Y52cPJS;0HgM|!|AX=L!=#ow' );
define( 'SECURE_AUTH_KEY',  'l}L^n|J5kqWu^HC1#bi.l7Ln4o$T9QI5~BSHt6;P?m+n_<qaw$k+z$GP2<nmXo!0' );
define( 'LOGGED_IN_KEY',    'sY8h<Xt;.9{m]YnqQ#aM,ouv8*2CjUXRrNNX+NI;RPN0mDEu/f;,jObl}_Tdw?}3' );
define( 'NONCE_KEY',        'VzHWi7GFgo|B5lUj-Od1j@GaC;chPF)`>>2Pc;xBX4;6b)Op`D:gE9Wm~w{{ R&?' );
define( 'AUTH_SALT',        'lo{g?op#|PN.Op]7|r]6o3x8c0qKd/sf}WN=d~_ !h~R&0K],!LL;?};p(!e_X`e' );
define( 'SECURE_AUTH_SALT', 'uwXx.k+DP`Kd]md%U]--V{B;u1poXj&2;&d.07e`K}-C:Kgj)17^b5f&4DK5}R;=' );
define( 'LOGGED_IN_SALT',   '+pc,Z&WqXn?BYPC[ygywWCc0s|Ds%RFc:T$|GWHvw<v-_8ApeK7a6}nBNDKTcZNs' );
define( 'NONCE_SALT',       'V]8LzDj/ucPnKSCGaZgX&|B0bHsJE->$a>KM egQ1}thq7ElUk3p*tC+jG|9w/7 ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
