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
define('DB_NAME', 'sklep');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G4IE|aZ)c1`ea[X{?{VzFX2K7RyJ3h;yP%D=/)6R3=Wx.(kHKJ1F#~;4>J8=phr|');
define('SECURE_AUTH_KEY',  't,1m80mw.P`*z.v]{rlEDNR+<NC(u985^}1|IE<0MW-rA.fdBmABi5v9[Kt2 9P*');
define('LOGGED_IN_KEY',    '}Xi@Z{P/:BMzIxQl8`;_Kj^p7w7zT7^I5BBdCi1}-VrL/`JEV=Rai!A;Dc{ZSml(');
define('NONCE_KEY',        'La:#_Q/d_ *O;lcS{Y9p|MK/Xbfk=H#?)1e9|={&odeanpnENJc=5G^ 8%ZX(yP9');
define('AUTH_SALT',        'f8(#|1Z|p$xPf2<CT=fjexd@L9`!h/EBRPc=w*:rTpA]USk7T2XP5cd}kNJbz:PZ');
define('SECURE_AUTH_SALT', 'iM15Akp}vzZH!Tt(e[mWN+U;{5|w~/~Y&_4TKs)hvQ}1fh8}]).-A(d^5<?NoEsC');
define('LOGGED_IN_SALT',   '3))h;>v0`eL53[uP]a!Z!j=QhL#N9=T{VBFc;jAPp<!p4A7!<;}I]C-iZ^-5&!NT');
define('NONCE_SALT',       '6[ _?#iy!z?dO_R3Wz 1ql(P[^_)>Yp|KUvi/[3A=e@,[,_WG{{-W?4;?T+ww?Z_');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
