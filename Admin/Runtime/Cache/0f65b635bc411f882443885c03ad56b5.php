<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#cfcfcf">
  <tr>
   <td height="28" background="__PUBLIC__/admin/images/tbg.gif" colspan="7" style="padding-left:10px;">
    <div style="float:left">
    <b>单页管理</b>
    </div>
    <div style="float:right">
     [<a href="__URL__/add"><u>增加一个页面</u></a>]
    </div>
	 </td>
  </tr>
  <tr align="center" bgcolor="#FBFCE2" height="24">  
      <td width="6%">ID</td>
      <td width="30%">单页标题</td>
      <td width="11%">点击量</td>
      <td width="12%">发布人</td>
      <td width="15%">修改时间</td>
      <td width="21%">管理操作</td>
   </tr>
   <form name='form1'>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align="center" bgcolor="#FFFFFF" height="24" onMouseMove="javascript:this.bgColor='#FCFDEE';" 
    	onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
    	  
        <td><?php echo ($data["sgid"]); ?></td>
        <td><a href='__URL__/edit/sgid/<?php echo ($data["sgid"]); ?>'><?php echo ($data["title"]); ?></a></td>
        <td><?php echo ($data["click"]); ?></td>
        <td><?php echo ($data["username"]); ?></td>
        <td><?php echo (date("Y-m-d H:i:s",$data["updatetime"])); ?></td>
        <td>
          	<a href='__URL__/edit/sgid/<?php echo ($data["sgid"]); ?>'><img src="__PUBLIC__/admin/images/gtk-edit.png" title="编辑" alt="编辑" /></a>&nbsp;
		        <a href='__URL__/del/sgid/<?php echo ($data["sgid"]); ?>'><img src="__PUBLIC__/admin/images/gtk-del.png" title="删除" alt="删除" /></a>
		    </td>
     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	   </form>
      <tr align="center" bgcolor="#F9FCEF" height="24"> 
       <td colspan="7" id="pages">
      	<?php echo ($page); ?>
      </td>
     </tr>
   </table>
   </td>
</tr>
</table>
</body>
</html>