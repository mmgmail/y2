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
define('DB_NAME', 'y3');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '&<^<@vzrc_HcwtQK$bPQOzjVH)QhQF35<3-H2-V0FzW4v6]({-a/,0-4=##UJjq<');
define('SECURE_AUTH_KEY',  '7#5G;oGl^5S6G;={he95OVL{`SaDFNf% -ZOQ0oH^so>oDcfZDC/D!aS!YCQPL~u');
define('LOGGED_IN_KEY',    'cNOa;9%yLc9i1LT*(PcF0D=Hr+FMgKQE9.a%~AfZFm/!8|Cy-,ftMi(CVHOjO@HB');
define('NONCE_KEY',        '41&@0.;bCJ3qE|Pn^WbiI&(/]i^~oeUW`KFFisi5H3|E3=6^w*FMv+%jI3R}pn[;');
define('AUTH_SALT',        'ap;N)<rZ 50YhnoEt%2.3=(2:,qet}`)sv5_tlRm}47nGJeDh8;i`7tU</1`YzkL');
define('SECURE_AUTH_SALT', 'k<Xi{db^p./17gItHP^lo&!MiN /w;U+{m54%}&9H~r{$KylnnQsS]ZnLf,$Ixo(');
define('LOGGED_IN_SALT',   '~9G j{zpGQ3$8!0y(5%Z#<rnG)}y|A4[c,E._$Vi!+D}r6#wsXLVr8UkS=r[7d-8');
define('NONCE_SALT',       ';rq-FM~MV+2nNp*Tdd#|9wr2.u1LNbbA1Fd *HwL`^^#-yq%366)hpYFG.Sx*}rP');

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
