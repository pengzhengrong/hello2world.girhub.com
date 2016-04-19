<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Admin/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
<?php echo baiduAccount();?>
</head>
<body>
<table class="table">
<tr>
  <th>ID</th>
  <th>UNAME</th>
  <th>CONTENT</th>
  <th>TIME</th>
  <th>OPERATOR</th>
</tr>
<?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
    <td><?php echo ($v["id"]); ?></td>
    <td><?php echo ($v["username"]); ?></td>
    <td><?php echo ($v["content"]); ?></td>
    <td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
    <td><a  href="<?php echo U('Admin/WishMan/delete',array('id'=>$v['id']));?>">DELETE</a>|
             <a  href="<?php echo U('Admin/WishMan/edit',array('id'=>$v['id']));?>">EDIT</a>
    </td>
  </tr><?php endforeach; endif; ?>
</table>
<?php echo ($page->show()); ?>

</body>

</html>