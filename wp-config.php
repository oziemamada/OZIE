<?php
/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'shirts');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'shirts');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '+xtE77Lnv');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']tN9M#; U?o=@M&:Hsc$an5=w,T468[*)]r]jR]U3c_O;2noHqDiZ~aAWZ&= #{~');
define('SECURE_AUTH_KEY',  '.n3USh<C{]hp,Y*/vx5-ks5U/IZcLY]WE?G|b!;sX`$w3m@;^LDOzfdWaRs#f[KG');
define('LOGGED_IN_KEY',    '{;/{J0Oj{Y%IVAabZ|SLeF)=$]:.&Pnz)Xs7Z5bAUvg/-~b}*~IUZ$9-6S+aTSh}');
define('NONCE_KEY',        '}Rho$({D/|m,*_ZpQKp.-^;O0EQaE)jjo&3+a57lM}wzOaPY&yg0nV@-pf>rg?/7');
define('AUTH_SALT',        '?sPI..TUhOobw1]`A=^:|jiqqc8WVjJePYl-a8iD`]`q<dLEgj`2Y/Ct.dkj=qCy');
define('SECURE_AUTH_SALT', 'e%[$FSo0||l<4}ccN,[}Ko$Z-6Y!&xL|[ -Ag.-VDPEr~g=e9k-}6$h1)`~9hadU');
define('LOGGED_IN_SALT',   '3sFB0Fk]}#7DN=fWytT+9nP2}E|<y.qWGZQcJiUZV-4N+O$I+jV`;.Z(np1#D~@c');
define('NONCE_SALT',       '^h^*8<=-CcrsLQ6nT=;*8/EkFwm=m(U:Mg!$#@=4;lG21qM;<nZICu|R|e^$e@W)');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);
$_SERVER['SERVER_NAME'] = $_SERVER['HTTP_X_FORWARDED_SERVER'];
$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_SERVER'];
/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
