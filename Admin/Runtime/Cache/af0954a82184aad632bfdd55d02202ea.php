<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/admin/style/base.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6">
  <tr> 
    <td height="28" colspan="6" background="__PUBLIC__/admin/images/tbg.gif">
    	<table width='96%' cellpadding='0' cellspacing='0'>
    		<tr>
    		<td width='20%' style="padding-left:10px;"><b>模型管理</b></td>
        <td align='right'>
    	  <!--<a href="__GROUP__/Model/add" class='np coolbg'>增加新模型</a>-->
        </td>
      </tr>
     </table>
    </td>
  </tr>
  <tr align="center" bgcolor="#FBFCE2" height="28"> 
      <td>id号</td>
      <td>模型名称</td>
      <td>标识名</td>
      <td>状态</td>
      <td>系统</td>
      <td>管理操作</td>
   </tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#FFFFFF" height="24" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
        <td><?php echo ($data["mid"]); ?></td>
        <td>
        <?php echo ($data["mname"]); ?>
        </td>
        <td><?php echo ($data["maction"]); ?></td>
        <td><?php if(($data["status"]) == "1"): ?>启用<?php else: ?>禁用<?php endif; ?></td>
        <td><?php if(($data["issystem"]) == "1"): ?>系统<?php else: ?>扩展<?php endif; ?></td>
        <td>
         <!--[<a href='#'>编辑</a>]-->
         [<?php if(($data["status"]) == "1"): ?><a href='__URL__/updown/mid/<?php echo ($data["mid"]); ?>/isup/0'>禁用</a><?php else: ?><a href='__URL__/updown/mid/<?php echo ($data["mid"]); ?>/isup/1'>启用</a><?php endif; ?>]
         <!--[<a href='#'>删除</a>]  -->
         
		    </td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
     <tr align="center" bgcolor="#F9FCEF" height="28"> 
      <td colspan="6" id="pages">
      	<?php echo ($page); ?>
      </td>
     </tr>
     
   </table>

</body>
</html>