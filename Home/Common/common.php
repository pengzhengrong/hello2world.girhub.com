<?php

function  p( $param ) {

	if( is_array( $param )){
		dump( $param ); 
		return;
	}
	echo $param."<br />";

}

function node_merge ( $node , $access = null , $pid=0) {

	$arr  = array();
	foreach ($node as $key => $value) {
		if( is_array( $access )){
			$value['access'] = in_array($value['id'], $access )?1:0;
		}
		if( $value['pid'] == $pid ){
			$value['child'] = node_merge( $node , $access ,$value['id'] );
			$arr[] = $value;
		}
	}
	return $arr;
}

function explode_arr( $node_id ){
		return explode( '_' , $node_id);
	}

function version() {
	return '1.0';
}

function my_log( $key='' , $value=null ) {
	$value = empty($value)?$key:$value;
	@error_log( "\n $key=".$value  ,3 , '/tmp/pzrlog.log');
}

function baiduAccount(){
	echo '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4ba405b74f3d75d598dd66cda9c22c4f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
';
}

?>