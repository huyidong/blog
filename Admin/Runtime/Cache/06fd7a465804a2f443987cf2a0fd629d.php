<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#D6D6D6">
  <tr>
    <td height="27" colspan="7" background="__PUBLIC__/admin/images/tbg.gif" bgcolor="#E7E7E7">
    	<table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="24%" style="padding-left:10px;"><b>管理员帐号</b> </td>
          <td width="76%" align="right"><b>
          	<a href="__GROUP__/Users/add"><u>增加管理员</u></a>
          	|
          	<a href="__GROUP__/Role/index"><u>角色管理</u></a>
          	</b>
          </td>
        </tr>
      </table>
     </td>
  </tr>
  <tr bgcolor="#FBFCE2">
    <td width="10%" height="24" align="center">登录ID</td>
    <td width="8%" align="center">角色</td>
    <td width="15%" align="center">创建时间</td>
    <td width="15%" align="center">最后登录时间</td>
    <td width="10%" align="center">登陆IP</td>
    <td width="5%" align="center">状态</td>
    <td width="25%" align="center">操作项</td>
  </tr>
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';">
    <td ><?php echo ($data["username"]); ?></td>
    <td ><?php if(($data["role"]) == ""): ?>未分配<?php else: echo ($data["role"]); endif; ?></td>
    <td><?php echo (date("Y-m-d H:i:s",$data["createtime"])); ?></td>
    <td><?php if(($data["logintime"]) == "0"): ?>暂无<?php else: echo (date("Y-m-d H:i:s",$data["logintime"])); endif; ?></td>
    <td><?php if(($data["loginip"]) == ""): ?>暂无<?php else: echo ($data["loginip"]); endif; ?></td>
    <td><?php if(($data["status"]) == "1"): ?><img src="__PUBLIC__/admin/images/ok.png"/><?php else: ?><img src="__PUBLIC__/admin/images/no.png"/><?php endif; ?></td>
   <td>
	   <?php if($data["uid"] != 1): ?><a href='__URL__/edit/uid/<?php echo ($data["uid"]); ?>'><u>编辑</u></a> |<?php endif; ?>
       <?php if($data["uid"] != 1): if($data["status"] == 1): ?><a href='__URL__/updown/uid/<?php echo ($data["uid"]); ?>/isup/0'><u>禁用</u></a><?php else: ?><a href='__URL__/updown/uid/<?php echo ($data["uid"]); ?>/isup/1'><u>启用</u></a><?php endif; ?> |<?php endif; ?>
     <?php if($data["uid"] != 1): ?><a href='__URL__/del/uid/<?php echo ($data["uid"]); ?>'><u>删除</u></a> |<?php endif; ?>
     <a href='__GROUP__/Article/index/username/<?php echo ($data["username"]); ?>'><u>博文[<?php echo ($data["arcnum"]); ?>]</u></a>　
    </td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <tr bgcolor="#F9FCEF">
    <td height="24" colspan="7" align="center" valign="top" id="pages">
    	<?php echo ($page); ?>
    </td>
  </tr>
</table>
</body>
</html>