<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/ahuanaji/domains/aipaiming.ahuanajie.com/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'ahuanaji_ahaj');

/** MySQL数据库用户名 */
define('DB_USER', 'ahuanaji_ahaj');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y]qI+qp^5!yRs(a!uWaB-}:<-3i-[5suD`njK|ud~$U-qd N6*4 7rZto]j2i$9u');
define('SECURE_AUTH_KEY',  'C4rB+V#F:z$zL-X0m*]-+?9sM>Z$pz-H8[^/yuU&/-ZvI|Ko!+/tu8iJ:wgd?BLz');
define('LOGGED_IN_KEY',    '~m5d{}9ez4hWdEV-3OW|x^8?,yU8RI,3e+(+EIhq^J4#Ni|Ra|n4#!Dt5u5})f/g');
define('NONCE_KEY',        'jR:-:e$A%2,)XcLbEf.ti_dG-{VsQOM|biJN`u^9Tue)K=gpF/Bz`ugui2)S*GCi');
define('AUTH_SALT',        'nWa33Ca_Kw`46Jao1!Q)Wwu1c<$d_1+f;w)J}EVP;jS@*04c<70{m4ZjJ~Wg.Uy|');
define('SECURE_AUTH_SALT', 'I4sT$$K_u<)C@-%g [`gaqkGd<IT+;PR&/=@xS/pzFX(sRDWp4>e*0.<9t>-_<.@');
define('LOGGED_IN_SALT',   ')/33_Xf9$o&R>OGC&:0Y7e$Q`5YwU6{+~Nx>a!$?~_yIcHG_ptWfbK2{U};y}OE(');
define('NONCE_SALT',       '{k}#P5Cw# rK`3H}(CHMjo0mrM-gDA*J{k^.>LYpwU[t$+,nh?+@ELOf3 EM9u` ');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'apm_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
