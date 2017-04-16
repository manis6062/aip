<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	/*
	|--------------------------------------------------------------------------
	| File and Directory Modes
	|--------------------------------------------------------------------------
	|
	| These prefs are used when checking and setting modes when working
	| with the file system.  The defaults are fine on servers with proper
	| security, but you may wish (or even need) to change the values in
	| certain environments (Apache running a separate process for each
	| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
	| always be used to set the mode correctly.
	|
	*/
	define('FILE_READ_MODE', 0644);
	define('FILE_WRITE_MODE', 0666);
	define('DIR_READ_MODE', 0755);
	define('DIR_WRITE_MODE', 0777);

	/*
	|--------------------------------------------------------------------------
	| File Stream Modes
	|--------------------------------------------------------------------------
	|
	| These modes are used when working with fopen()/popen()
	|
	*/

	define('FOPEN_READ', 'rb');
	define('FOPEN_READ_WRITE', 'r+b');
	define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
	define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
	define('FOPEN_WRITE_CREATE', 'ab');
	define('FOPEN_READ_WRITE_CREATE', 'a+b');
	define('FOPEN_WRITE_CREATE_STRICT', 'xb');
	define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');


	/* End of file constants.php */
	/* Location: ./application/config/constants.php */
	require_once(BASEPATH . 'database/DB.php');
	$db =& DB();

	$query = $db->get('theme_option');
	$themeoption = $query->row();
	if ($themeoption) {
		define('SITE_NAME', $themeoption->title);
		define('SITE_INFO', $themeoption->caption);
		define('email', 'info@tejtech.biz');
	} else {
		define('SITE_NAME', 'Name');
		define('SITE_INFO', 'Name');
		define('email', 'info@tejtech.biz');
	}
	define('POWERED', 'Cybernetics Technology');
	define('CRTD_DT', '2014');
	define('POWERED_URL', 'http://www.cyberneticstechnology.com');
	define('URL', 'http://' . $_SERVER['SERVER_NAME']);
	define('USER_ID', 'airborntv_admin_userid');
	define('AUTHS', 'authorities');
	define('NAME', 'first_last_name');
	define('CAPTCHA', 'captchaWord');
	define('ROLES', 'roles');
	define('ROLE_ID', 'current_role_id');
	define('ROLE_NAME', 'current_role_name');
	define('ROLE_LABEL', 'current_role_label');
	define('ADMIN_AUTH_AFFILIATEID', 'airborntv_admin_affiliateid');
	define('ADMIN_AUTH_USERNAME', 'airborntv_admin_username');
	define('ADMIN_AUTH_NAMEUSER', 'airborntv_admin_nameuser');
	define('ADMIN_AUTH_TYPE', 'airborntv_admin_type');
	define('ADMIN_AUTH_USERID_DOMAIN', 'airborntv_admin_userid_domain');
	define('ADMIN_AUTH_USERID_SUPER', 'airborntv_admin_userid_super');
	define('ADMIN_AUTH_ROLE', 'role_id_session');
	define('ADMIN_PATH', 'administrator/');
	define('ADMIN_CSS', 'style/backend/');
	define('ADMIN_JS', 'js/admin/');
	define('BOOTSTRAP_JS', URL . '/americancpn/js/admin/bootstrap-3.3.5-dist/js/bootstrap.min.js');
	define('BOOTSTRAP_CSS', URL . '/americancpn/js/admin/bootstrap-3.3.5-dist/css/bootstrap.min.css');
	define('BOOTSTRAP_EDITABLE_CSS', URL . '/americancpn/js/admin/bootstrap3-editable/css/bootstrap-editable.css');
	define('BOOTSTRAP_EDITABLE_JS', URL . '/americancpn/js/admin/bootstrap3-editable/js/bootstrap-editable.js');
	define('JQUERY_JS', URL . '/americancpn/js/jquery.min.js');
	define('BOOTSTRAP_DATATABLE_CSS', '//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css');
	define('ADMINLTE_CSS', URL . '/americancpn/js/admin/AdminLTE/AdminLTE.min.css');
	define('ALLSKINS_CSS', URL . '/americancpn/js/admin/AdminLTE/_all-skins.min.css');
	define('PRODUCT_IMAGE_PATH', './uploads/products/');
	define('PUB_IMAGE_PATH', './uploads/home_publication/');
	define('SOCIAL_IMAGE_PATH', './uploads/social/');
	define('POLL_IMAGE_PATH', './uploads/poll/');
	define('CHARACTER_IMAGE_PATH', './uploads/character/');
	define('CARTOON_IMAGE_PATH', './uploads/cartoon/');
	define('CLIENT_IMAGE_PATH', './uploads/client/');
	define('PUBLICATION_PATH', './uploads/publication/');
	define('PORTFOLIO_IMAGE_PATH', './uploads/portfolio/');
	define('GALLERY_IMAGE_PATH', './uploads/gallery/');
	define('THEME_OPTION_IMAGE_PATH', './uploads/theme/');
	define('TEAM_PATH', './uploads/team/');
	define('CROP_PATH', 'http://localhost/emcheppav/application/helpers/');
	define('GALLERY_PATH', 'http://localhost/emcheppav/uploads/products/');
	define('BANNER_IMAGE_PATH', './uploads/banner/');
	define('SUPER_ADMIN', 'super_admin');
	define('ADMIN', 'admin');
	define('SUPER_BROKER', 'super_broker');
	define('BROKER', 'broker');
	define('REFERRER', 'referrer');
	define('CLIENT', 'client');
	define('OWNER', 'owner');

	define('EMAILSENDER', 'info@americacpn.com');

	define('PAYPALACCOUNT', 'pradhan7@yahoo.com');
	define('REFERRERCHARGE', '10');




