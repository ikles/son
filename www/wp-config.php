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
define('DB_NAME', 'son');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'X@Rz1ia&;D%g$O#q7DP.6x}k(=,r Q{Qq]]_s@+};I7;Ih?hmSbX`vhl$S@>o)UZ');
define('SECURE_AUTH_KEY',  'k`Lc+r4}Hnyt%;x8*jXk!bb X |1$$c0!%kv]&S2Zm,dnAv,)P&j:nVwyL5ZKs:K');
define('LOGGED_IN_KEY',    ']5Qf Na@5Qe?)Qd5_R$nc}JL-)G_t+!?HG3RN@/%yDEld~fBj+d1<F>$Q:$jzqKH');
define('NONCE_KEY',        'RF#BZ^[^Uy}>T;sn^Q^+;u1<w}J#:Ee4AJf,u$90[!gEy{z[QJ ^=,p:~5)re-~F');
define('AUTH_SALT',        '5_[v03=wuRz.QZHQ|6Mg!F(P&,/9kI=A,F:5CLpU|k#ju>=JP03cG.N(c8.K:# k');
define('SECURE_AUTH_SALT', '#Y?E}n s2TR6@2C*o ~tB7f]3?vkr]Y4iJpy.;WA=gdjn(VqNueI@t%d8G]<=$;N');
define('LOGGED_IN_SALT',   'V]|vb]4U?9;K~fjZ]VV[svcV~Q |W`5QfZ{Emlm-Vbq?]S8]UsmSGmK@}m)7YZA@');
define('NONCE_SALT',       'mu(;C<Ao^EZfhKrS*;dR6E?$2p3b;tp8H*6g1)IxBn 6Z;EzMN8|}+b78!|}3BW/');

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
