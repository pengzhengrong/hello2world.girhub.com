<?php

class IndexAction extends CommonAction{

	public function index(){
		$this->display();
	}

	public function delete(){
		$id = I('id','','intval');
		$rest = M('wish')->delete( $id );	
		if( $rest ){
			$this->success('delete success'.$id);
		}else{
			$this->error( 'delete failed '.$id);
		}
		$this->redirect( 'Admin/WishMan/index' );
	}

	public function edit(){
		$id = I('id','','intval');
		$wish = M('wish')->find( $id );
		$this->assign( 'wish' ,$wish);
		$this->display('/WishMan_edit');
	}



}


?>