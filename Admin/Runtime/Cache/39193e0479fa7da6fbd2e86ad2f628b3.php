<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="__PUBLIC__/editor/kindeditor.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="__PUBLIC__/editor/lang/zh_CN.js"></script>
<script type="text/javascript" language="javascript">
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('#contentid');
	});
</script>
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#cfcfcf">
<tr>
    <td height="19" background="__PUBLIC__/admin/images/tbg.gif" style="padding-left:10px;">
    	<b><a href="__URL__/index"><u>单页列表</u></a></b>&gt;&gt;增加新页面
    </td>
</tr>
<tr>
    <td height="200" bgcolor="#FFFFFF" valign="top">
    <form action="__URL__/addsave" method="post" name="form1">
	<table width="100%" border="0" cellspacing="4" cellpadding="2">  
          <tr> 
            <td width="15%" height="24" align="center">标题：</td>
            <td> 
              <input name="title" type="text" id="titleid" size="30">
            </td>
          </tr>
          <tr> 
            <td height="24" align="center">关键字：</td>
            <td><input name="keyword" type="text" id="keywords" size="30">
              (多个关键字请用","分开)</td>
          </tr>
          <tr> 
            <td height="24" align="center">摘要信息：</td>
            <td><textarea name="description" cols="50" id="descriptionid" style="height:70px"></textarea>
            (100字左右)</td>
          </tr>
          
          
          <!--<tr>
            <td height="24" align="center">模板文件名：</td>
            <td><input name="sptpl" type="text" id="template" value="{tpl}/singlepage.html" size="30"></td>
          </tr>-->
          <tr> 
            <td height="24" colspan="2" bgcolor="#FBFCE2" align="center">单页内容：</td>
          </tr>
          <tr> 
            <td height="80" colspan="2" align="center"> 
              <textarea name="content" id="contentid"  style="width:950px;height:400px;" class="required" ></textarea>           
	        </td>
          </tr>
          <tr> 
            <td  align="center" colspan="2">
			   <input name="imageField" type="image" src="__PUBLIC__/admin/images/button_ok.gif" class="np" width="60" height="22" border="0">
			   &nbsp;
			   <img src="__PUBLIC__/admin/images/button_reset.gif" width="60" height="22" border="0" onClick="location.reload();" style="cursor:pointer;"/>
			    </td>
          </tr>        
      </table>
      </form>
    </td>
</tr>
</table>
</body>
</html>