<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/Admin/Js/index.js"></script>
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<form action="<?php echo U('Admin/WishMan/edit');?>"  method="post">
<table class="table">
<tr>
  <td>ID</td>
  <td> <input readonly="readonly"  value="<?php echo ($wish["id"]); ?>"  name="id" /></td>
</tr>
<tr>
  <td>UNAME</td>
  <td><?php echo ($wish["username"]); ?></td>
</tr>
<tr>
  <td>CONTENT</td>
  <td><input type="text" value="<?php echo ($wish["content"]); ?>" name="content" /></td>
</tr>
</table>
<input type="submit" name="do_submit" value="submit" />
</form>
</body>

</html>