<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
</head>
<body leftmargin="8" topmargin="8" background='__PUBLIC__/admin/images/allbg.gif' onLoad="">
  

<form name="form1">
<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#CFCFCF" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7" >
	<td height="28" colspan="8" background="__PUBLIC__/admin/images/tbg.gif" style="padding-left:10px;">
	<strong>留言管理</strong>
	</td>
</tr>
<tr align="center" bgcolor="#FBFCE2" height="25">
	<td width="6%">ID</td>
	<td width="5%">回复状态</td>
	<td width="20%">留言内容</td>
	<td width="8%">留言人</td>
    <td width="10%">留言时间</td>
    <td width="10%">IP</td>
    <td width="12%">Email</td>
	<td width="10%">操作</td>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr align='center' bgcolor="#FFFFFF" height="26" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';">
	<td>
    	<?php echo ($data["id"]); ?>
	</td>
	<td>
		<?php if(($data["ischeck"]) == "1"): ?><img src="__PUBLIC__/admin/images/ok.png"/><?php else: ?><img src="__PUBLIC__/admin/images/no.png"/><?php endif; ?>
	</td>
	<td title="<?php echo ($data["fullcontent"]); ?>"><?php echo ($data["content"]); ?></td>
	<td><?php echo ($data["writer"]); ?></td>
    <td><?php echo (date("Y-m-d H:i:s",$data["time"])); ?></td>
    <td><?php echo ($data["ip"]); ?></td>
    <td><?php echo ($data["email"]); ?></td>
	<td>
		<a href="__GROUP__/Feedback/reply/id/<?php echo ($data["id"]); ?>"><img src="__PUBLIC__/admin/images/reply.png" title="回复" alt="回复"></a>
    <a href="__URL__/del/id/<?php echo ($data["id"]); ?>"><img src="__PUBLIC__/admin/images/gtk-del.png" title="删除" alt="删除"></a>
	</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<!--<tr bgcolor="#ffffff">
<td height="36" colspan="10">
	&nbsp;
	<a href="javascript:selOrNoSel('feedid')" class="coolbg">全选/反选</a>
	<a href="" class="coolbg">&nbsp;删除&nbsp;</a>
</td>
</tr>-->

<tr align="right" bgcolor="#F9FCEF">
	<td height="36" colspan="8" align="center" id="pages">
		<?php echo ($page); ?>
	</td>
</tr>
</table>
</form>
<!--  搜索表单  -->
<!--<form name='form2' action='' method='post' id="form2">
<table width='98%'  border='0' cellpadding='1' cellspacing='1' bgcolor='#cfcfcf' align="center" style="margin-top:8px">
  <tr bgcolor='#EEF4EA'>
    <td background='__PUBLIC__/admin/images/wbg.gif' align='center'>
      <table border='0' cellpadding='0' cellspacing='0' height="32">
        <tr>
          <td width='160'>
          <select name='cid' style='width:150px'>
          <option value='0'>选择栏目...</option>
          	
          </select>
        </td >
        <td nowrap>
          关键字：
        </td>
        <td width='130'>
          	<input type='text' name='keyword' value='' style='width:120px' />
        </td>
       <td>
          <input name="imageField" type="image" src="__PUBLIC__/admin/images/button_search.gif" width="60" height="22" border="0" class="np" />
       </td>
      </tr>
     </table>
   </td>
  </tr>
</table>
</form>-->

</body>
</html>