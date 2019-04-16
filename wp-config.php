<?php
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
define( 'DB_NAME', 'wp_dev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'W@)Vc0rFkq+FDfiqRV<0b]#OFL8`FB$X5a[-r7/.%j|yjfUrge[oz|M.ca)jy(S{' );
define( 'SECURE_AUTH_KEY',  'tFbzZwgDP?^7o<Q r/kRKpC`q?nr[bm+NIdD{VO~clgOea~c4e}FJ(+XF{!y&RNY' );
define( 'LOGGED_IN_KEY',    '.vUT}N2kltkZ=))/ >*aO>{+-Sws<eL&7&Q:)KMAu7_A])=VM5qXxH2QH>sb&%VR' );
define( 'NONCE_KEY',        'zML?<(?QoeZx{ 8dz3ks6Dy`L(RzJDczZ;7 l<rTy>.ASo8f]LVf%yGV*NDO1}Au' );
define( 'AUTH_SALT',        '_/h@Zi:#sS;(,@pL_O,E2m+ft}*FqdmY63_k9(;dFZDWhH)1fBT!~1EIsPZ1U*tN' );
define( 'SECURE_AUTH_SALT', '$0>G{wFey=R^kh.bY<qxqoXzUUzngW-mAB[uPU)/HxUa6_phj8Ryqmb)qV*72Jyc' );
define( 'LOGGED_IN_SALT',   'W1Fe (%c^d>oiXwF]>><fYB 0wFr3J 9QXdoE[;oCWa`MJuJ6}W{wuQx<I9ZV>`3' );
define( 'NONCE_SALT',       'VB``UA:PriSQH=HMh YU rJ))a0/:zGecCnZhuE8%Sy6XeW5i3bRmGmz)Q2t9-x@' );

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
