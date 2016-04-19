<?php

class CommonAction extends Action{

	public function _initialize(){
		// dump( $_SESSION ,'','');
		// echo session('verify');
		if( !$_SESSION['uid'] ){
			$this->redirect('/Admin/Login/index');
		}
		$handle = strpos( ACTION_NAME , '_' )>0?1:0;
		$noAuth = in_array( MODULE_NAME, explode( ',', C('NOT_AUTH_MODULE'))) 
			|| in_array( ACTION_NAME , explode( ',', C('NOT_AUTH_ACTION')) )
			|| $handle;
		// p( $rest );die;
		// var_dump( $noAuth );
		if( C('USER_AUTH_ON' ) && !$noAuth  ){
			import('ORG/Util/RBAC');
			// echo GROUP_NAME;
			$rest = RBAC::AccessDecision(GROUP_NAME);
			// var_dump( $rest );
			$rest || $this->error('NO MISSION');
			
		}
	}

}


?>