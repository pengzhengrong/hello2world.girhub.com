<?php

Class UserRelationModel  extends RelationModel{

	protected $tableName = 'user';

	protected $_link = array(
		'role' => array(
			'mapping_type' => 'MANY_TO_MANY',
			'foreign_key' => 'user_id',
			'relation_foreign_key' => 'role_id',
			'relation_table' => 'think_role_user'
			)
		);


}

?>

