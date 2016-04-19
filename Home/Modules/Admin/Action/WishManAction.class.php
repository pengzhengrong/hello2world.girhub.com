<?php

class WishManAction extends CommonAction{

	public function index(){

		import('ORG.Util.Page');
		$total_rows = M('wish')->count();
		$url =  'Admin/WashMan/index';
		// echo $total_rows; exit;
		$page = new Page( $total_rows , 2 ,'',$url);
		// P( $page ); exit;

		$limit = $page->firstRow.','.$page->listRows;
		$rest = M('wish')->order( 'id desc' )->limit( $limit )->select();
		$this->assign('wish',$rest);
		$this->assign('page',$page);
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
		$id = I('id',0,'intval');
		if(  IS_POST   ){
			// echo I('content'); exit;
			$data = array(
				'content'=>I('content') 
				);
			$rest = M('wish')->where("id=$id")->data( $data )->save();
			if( $rest ) {
				$this->success( 'update success',U('Admin/WishMan/index'));
				exit;
			}else {
				$this->error( 'update failed' );
			}
		}		
		$wish = M('wish')->find( $id );
		$this->assign( 'wish' ,$wish);
		$this->display();
	}

}


?>