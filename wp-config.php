<?php
/**
 * The base configurations of the WordPress.
 *
 * ���̃t�@�C���́AMySQL�A�e�[�u���ړ����A�閧���A����AABSPATH �̐ݒ���܂݂܂��B
 * ���ڂ������� {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php �̕ҏW} ���Q�Ƃ��Ă��������BMySQL �̐ݒ���̓z�X�e�B���O�������ł��܂��B
 *
 * ���̃t�@�C���̓C���X�g�[������ wp-config.php �쐬�E�B�U�[�h�����p���܂��B
 * �E�B�U�[�h������A���̃t�@�C���� "wp-config.php" �Ƃ������O�ŃR�s�[���Ē��ڕҏW���l��
 * ���͂��Ă����܂��܂���B
 *
 * @package WordPress
 */

// ����: 
// Windows �� "������" �ł��̃t�@�C����ҏW���Ȃ��ł������� !
// ���Ȃ��g����e�L�X�g�G�f�B�^
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 �Q��)
// ���g�p���A�K�� UTF-8 �� BOM �Ȃ� (UTF-8N) �ŕۑ����Ă��������B

// ** MySQL �ݒ� - ������̏��̓z�X�e�B���O�悩����肵�Ă��������B ** //
/** WordPress �̂��߂̃f�[�^�x�[�X�� */
define('DB_NAME', 'shirts');

/** MySQL �f�[�^�x�[�X�̃��[�U�[�� */
define('DB_USER', 'shirts');

/** MySQL �f�[�^�x�[�X�̃p�X���[�h */
define('DB_PASSWORD', '+xtE77Lnv');

/** MySQL �̃z�X�g�� */
define('DB_HOST', 'localhost');

/** �f�[�^�x�[�X�̃e�[�u�����쐬����ۂ̃f�[�^�x�[�X�̃L�����N�^�[�Z�b�g */
define('DB_CHARSET', 'utf8');

/** �f�[�^�x�[�X�̏ƍ����� (�قƂ�ǂ̏ꍇ�ύX����K�v�͂���܂���) */
define('DB_COLLATE', '');

/**#@+
 * �F�ؗp���j�[�N�L�[
 *
 * ���ꂼ����قȂ郆�j�[�N (���) �ȕ�����ɕύX���Ă��������B
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org �̔閧���T�[�r�X} �Ŏ����������邱�Ƃ��ł��܂��B
 * ��ł��ł��ύX���āA�����̂��ׂĂ� cookie �𖳌��ɂł��܂��B����ɂ��A���ׂẴ��[�U�[�������I�ɍă��O�C�������邱�ƂɂȂ�܂��B
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
 * WordPress �f�[�^�x�[�X�e�[�u���̐ړ���
 *
 * ���ꂼ��Ƀ��j�[�N (���) �Ȑړ�����^���邱�Ƃň�̃f�[�^�x�[�X�ɕ����� WordPress ��
 * �C���X�g�[�����邱�Ƃ��ł��܂��B���p�p�����Ɖ����݂̂��g�p���Ă��������B
 */
$table_prefix  = 'wp_';

/**
 * ���[�J������ - ���̃p�b�P�[�W�ł͏����l�Ƃ��� 'ja' (���{�� UTF-8) ���ݒ肳��Ă��܂��B
 *
 * WordPress �̃��[�J�������ݒ肵�܂��B�ݒ肵������ɑΉ����� MO �t�@�C����
 * wp-content/languages �ɃC���X�g�[������Ă���K�v������܂��B�Ⴆ�� de_DE.mo ��
 * wp-content/languages �ɃC���X�g�[���� WPLANG �� 'de_DE' �ɐݒ肷�邱�ƂŃh�C�c�ꂪ�T�|�[�g����܂��B
 */
define('WPLANG', 'ja');

/**
 * �J���҂�: WordPress �f�o�b�O���[�h
 *
 * ���̒l�� true �ɂ���ƁA�J�����ɒ��� (notice) ��\�����܂��B
 * �e�[�}����уv���O�C���̊J���҂ɂ́A���̊J�����ɂ����Ă��� WP_DEBUG ���g�p���邱�Ƃ������������܂��B
 */
define('WP_DEBUG', false);
$_SERVER['SERVER_NAME'] = $_SERVER['HTTP_X_FORWARDED_SERVER'];
$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_SERVER'];
/* �ҏW���K�v�Ȃ̂͂����܂łł� ! WordPress �Ńu���O�����y���݂��������B */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
