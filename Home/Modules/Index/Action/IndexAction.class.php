<?php

class IndexAction extends Action{

	public function index(){
		$rest = M('wish')->select();
		// print_r( $rest );
		$this->assign( 'wish', $rest );
		$this->display( );
	}

	public function add(){
		$data = array(
			'username' => I('username'),
			'content' => I('content'),
			'time' => time()
			);
		// $id = M('wish')->save( $data );
		M('wish')->data( $data )->add();
		U('/Index/Index/index','','',true);
	}
}


?>