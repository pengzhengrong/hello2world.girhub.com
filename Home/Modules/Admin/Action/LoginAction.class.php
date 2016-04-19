<?php

class LoginAction extends Action{

	public function index(){
		$this->display();
	}

	public function handle(){
		$where = array(
			'username' => I('username'),
			'passwd' => I('passwd',0,'md5'),
			'lock' => 0
			);
		$field = array( 'id','username' );
		$rest = M('user')->field( $field )->where( $where )->find();
		$rest || $this->error('username or passwd has wrong');
		$code = session('verify');
		$input_code = I('code' , '' , 'md5');
		( $code == $input_code  ) || $this->error( 'code failed' );
		session('uid', $rest['id'] );
		session('uname', $rest['username'] );
		if( $rest['username']==C('RBAC_SUPERADMIN') ){
			session(C('ADMIN_AUTH_KEY') ,true );
		}
		import('ORG/Util/RBAC');
		RBAC::saveAccessList();
		// p( $_SESSION ) ; die;
		$this->redirect('Admin/Index/index');
	}

	public function logout(){
		session_unset( $_SESSION );
		session_destroy( $_SESSION );
		U('Admin/Login/index','','',true);
	}

	public function verify(){
		import( 'ORG/Util/Image');
		Image::buildImageVerify();
	}

}


?>