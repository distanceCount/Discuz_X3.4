<?php



if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title' => '登录管理中心',
	'login_username' => '用户名',
	'login_password' => '密　码',

	'submit' => '提交',
	'forcesecques' => '必填项',


	'login_tips' => '学习BBS后台管理',
	'login_nosecques' => '您还没有使用安全登录，请在个人中心设置您的安全提问后，再访问管理中心。您可以 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">点击这里</a> 进入安全提问的设置。',

	'login_cplock' => '您的管理面板已经锁定! <br>请在<b> {ltime} </b>秒以后重新访问管理中心',
	'login_user_lock' => '由于您的登录密码错误次数过多,本次登录请求已经被拒绝. 请 15 分钟后重新尝试',
	'login_cp_noaccess' => '<b>管理中心(或此项操作)尚未对您开放</b><br><br>您的此次操作已经记录, 请勿非法尝试',
	'noaccess' => '后台管理权限(或此项操作)尚未对您开放, 请联系站点管理员',


);

?>