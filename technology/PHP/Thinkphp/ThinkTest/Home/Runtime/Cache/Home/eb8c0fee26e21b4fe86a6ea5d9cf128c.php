<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ajax</title>

<script type="text/javascript" src="Home/Public/js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="Home/Public/js/function.js"></script>
<script type="text/javascript">
	
	
	
	function add() {
		var ul = "?s=/Home/Index/ajaxAdd";
		var content = document.getElementById('content');
		
		//提交的地址，post传入的参数
		$.post(ul,{id:'aa',name:'zz'},function(obj){
			alert(obj.data[0].name);
			alert(obj.status);
		});	
		
		
	}
	
</script>
</head>
<body>
	
	
	
<div style="display:block;color:red;width:100px;height:100px;" id="content" ></div>


<form action="?s=/Index/ajax" method="post" accept-charset="utf-8">
	<p>账号：<input type="text" name="user" /></p>
	<p>密码：<input type="text" name="pass" /></p>
	<p><input type="button" name="send" value="提交" onclick="add()"/></p>
</form>



</body>
</html>