<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="__PUBLIC__/admin/style/base.css" rel="stylesheet" type="text/css" />
<link href='__PUBLIC__/admin/style/tb-box.css' rel='stylesheet' type='text/css' />
<link href='__PUBLIC__/editor/themes/default/default.css' rel='stylesheet' type='text/css' />
<script type="text/javascript" language="javascript" src="__PUBLIC__/common/jquery/jquery.js"></script>
<script type="text/javascript" language="javascript" src="__PUBLIC__/admin/js/common.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="__PUBLIC__/editor/kindeditor.js"></script>
<script type="text/javascript" language="javascript" charset="utf-8" src="__PUBLIC__/editor/lang/zh_CN.js"></script>
<script type="text/javascript" language="javascript">
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('#contentid');
		K('#uploadid').click(function() {
			editor.loadPlugin('image', function() {
				editor.plugin.imageDialog({
					imageUrl : K('#picid').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#picid').val(url);
						editor.hideDialog();
							}
						});
					});
				});
	});
</script>
</head>
<body topmargin="8">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="60%" height="30"><IMG height=14 src="__PUBLIC__/admin/images/book1.gif" width=20>&nbsp;<a href="__GROUP__/Article/index"><u>博文列表</u></a> &gt;&gt; 新增博文(<font color="red">注：红色字为必填项</font>)</td>
    </tr>
  </table>

<form name="form1" action="__URL__/addsave" enctype="multipart/form-data" method="post">
  <table width="98%"  border="0" align="center" cellpadding="2" cellspacing="2" id="needset" style="border:1px solid #cfcfcf;background:#ffffff;">
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="90">&nbsp;<font color="red">博文标题：</font></td>
            <td width='300' ><input name="title" type="text" id="title" value="" style="width:250px" /></td>
            <td width="90">&nbsp;博文作者：</td>
            <td width="200"><input name="username" type="text" id="writer" style="width:70px" value="<?php echo ($username); ?>" readonly="readonly"/>(注：无需手动添加)</td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td  width="90">&nbsp;自定义属性：</td>
            <td align="left">
            	<input id="propertyh" class="np" type="checkbox" value="h" name="property[]">热门(h)
				<input id="propertyc" class="np" type="checkbox" value="c" name="property[]">推荐(c)
            </td>
          </tr>
        </table>
       </td>
    </tr>
    
    <tr id="pictable">
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="90"> &nbsp;缩 略 图：</td>
            <td width="560">
            	<table width="100%" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <td height="30">
                  <input name="pic" type="text" id="picid" style="width:240px" />
                  <input type="button"  value="上传图片" style="width:70px;cursor:pointer;" id="uploadid"/>                 
                  </td>
                </tr>
              </table>
             </td>
            <td width="150" align="center">
            <div id='divpicview' class='divpre'></div>
            </td>
          </tr>
        </table></td>
    </tr>
    
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;<font color="red">博文栏目：</font></td>
          <td>
       <span id='typeidct'>
       <select name='colid' id='typeid' style='width:240px'>
       	<option value='0'>请选择栏目...</option>
        <?php echo ($collist); ?>
       </select>
		</span>
	</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;博文来源：</td>
          <td width="448"><input type='text' name="source" id="sourceid" style="width:50%" value="" /></td>
          <td>排序:<input name="ord" id="orderid" value="50" style="width:25px" type="text"/></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
      	<table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;关键字：</td>
          <td width="448"><input type='text' name="keyword" id="keywordid" style="width:95%" value="" /></td>
          <td>(注：多个用","分开,关键字即是Tag标签)</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="24" colspan="5" class="bline">
      <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="90">&nbsp;内容摘要：</td>
          <td width="449"><textarea name="description" rows="5" id="descriptionid" style="width:80%;height:50px"></textarea></td>
          <td width="261">&nbsp;</td>
        </tr>
      </table>
      </td>
  </tr>
  
    <tr>
      <td height="28" colspan="2" bgcolor="#F9FCEF" class="bline2">
      	<div style='float:left;line-height:28px;'>&nbsp;<strong><font color="red">博文内容：</font></strong></div>
      </td>
    </tr>
    
    <tr>
      <td width="100%" id="arcBody" align="center">
       <textarea name="content" id="contentid"  style="width:950px;height:400px;" class="required" ></textarea>
	    </td>
      
    </tr>
  </table>

  
   <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#F9FCEF" style="border:1px solid #cfcfcf;border-top:none;">
   <tr height="35">
    <td width="100%" align="center"><input name="imageField" type="image" src="__PUBLIC__/admin/images/button_save.gif" width="60" height="22" class="np" border="0"  style="cursor:pointer;"/>
       <img src="__PUBLIC__/admin/images/button_reset.gif" width="60" height="22" border="0" onClick="location.reload();" style="cursor:pointer;"/>
    </td>
   </tr>
</table>
</form>
</body>
</html>