<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'tambovskiymed' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mk ,F&4Pu$PC3,Q6$7&BP1gIg>jaA]Rtk]L(ki>t7|Z3{l<a*Q%:o&?U5$`bzLMI' );
define( 'SECURE_AUTH_KEY',  ']G!x[8SbY;Gpv@v1r=O;]*MgU8z-lWg4o*jC]2+>2Ow,(lV*.yk_@iDSevEd$zr^' );
define( 'LOGGED_IN_KEY',    '`ER:])6V>cI/V`7l>nW` *TwsUTMdiX>R[6`s<3jhX87)AR*>f><Aw98,Gb1Q2hb' );
define( 'NONCE_KEY',        'v(U@32>b1?N2T=?tpO b@ON]8y;u!ykl8;zP]O>:[}>rH;b5UG;{y1c.[km7Zd^a' );
define( 'AUTH_SALT',        'g/|60%@LLb;quA-fVLjn^;-ubA@vT?xL;-. :g{O#S.QKz&S2{R8=rtx(k()_|~%' );
define( 'SECURE_AUTH_SALT', 'L6_$2{,K{1RqsK;eU9YP/kJf!ejWKvR0@x0aW_h=)lL1=@9|P-eV9oh!L_yt{;uk' );
define( 'LOGGED_IN_SALT',   'b&[T_iD5qbV0DG2<3,CA mm|Q}|kL`3 1h?.1UAR)nv2YDw-B^:yT$XqR)jh }gN' );
define( 'NONCE_SALT',       ':JA[*U8H]z$+Za6w5URWe}ctQ@@3j,$#6+v)WUmmI}(cF.>o?th5?]fE?V6:0.eb' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'tm_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
