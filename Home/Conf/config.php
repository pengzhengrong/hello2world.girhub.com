<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_MODE' => 1,
	'APP_GROUP_PATH' =>'Modules',
	'APP_GROUP_LIST' => 'Index,Admin',
	'DEFAULT_GROUP' => 'Index',
	'TMPL_FILE_DEPR' => '_',
	'DB_HOST'=>'127.0.0.1',
	'DB_NAME' =>'test',
	'DB_USER' => 'root',
	'DB_PWD' => '',
	'DB_PREFIX' => '',
	'SHOW_PAGE_TRACE' =>true,
	'version' => '1.0',
	'RBAC_SUPERADMIN' => 'admin',
	'ADMIN_AUTH_KEY' => 'superadmin',
	'USER_AUTH_ON' => true,
	'USER_AUTH_TYPE' => 2,
	'USER_AUTH_KEY' => 'uid',
	'NOT_AUTH_MODULE' => 'Login,Index',
	'NOT_AUTH_ACTION' => 'logout',
	'RBAC_ROLE_TABLE' => 'think_role',
	'RBAC_USER_TABLE' => 'think_role_user',
	'RBAC_ACCESS_TABLE' => 'think_access',
	'RBAC_NODE_TABLE' => 'think_node'

);
?>