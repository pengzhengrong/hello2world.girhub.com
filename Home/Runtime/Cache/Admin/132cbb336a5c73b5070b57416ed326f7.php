<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//Ddiv XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/Ddiv/xhtml1-transitional.ddiv">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" href="__PUBLIC__/Admin/Css/public.css" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/Admin/Js/login.js"></script>
		<script type="text/javascript">
			var code_url = "<?php echo U('/Admin/Login/verify','','');?>";
		</script>
	</head>
	<body>
		<div  class="wrap">
			<?php if(is_array($rest)): foreach($rest as $key=>$v): ?><div class="modules">
					<p>
						<input type="checkbox"  name="role_id[]" value="{v.id}" />
						<strong style="font-size: 20px; color: #333"><?php echo ($v["name"]); ?>(<?php echo ($v["remark"]); ?>) </strong>
					</p>
				<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$action): ?><div class="action">
						<p>
							<input type="checkbox"  name="role_id[]" value="$action.id}" />
							<?php echo ($action["name"]); ?>(<?php echo ($action["remark"]); ?>)
						</p>
					<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><div class="method">
							<input type="checkbox"  name="role_id[]" value="$action.id}" />
							<?php echo ($method["name"]); ?>(<?php echo ($method["remark"]); ?>)
						</div><?php endforeach; endif; ?>
					</div><?php endforeach; endif; ?>
				</div><?php endforeach; endif; ?>

		</div>
	</body>
</html>