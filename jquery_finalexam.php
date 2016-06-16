<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-1</title>
</head>
<body>
	<!--點一下全選後所有checkbox 會全勾，再點一下會全部取消，禁止使用jquery-->
	<input type="button" value="全選"></br>
	1.桌子<input type="checkbox" name="status" value="1"  checked="checked"></br>
	2.椅子<input type="checkbox" name="status" value="2"  checked="checked"></br>
	3.電視<input type="checkbox" name="status" value="3"  checked="checked"></br>
	4.洗衣機<input type="checkbox" name="status" value="4" checked="checked"></br>
	5.廚房<input type="checkbox" name="status" value="5"  checked="checked"></br>
	6.浴室<input type="checkbox" name="status" value="6"   checked="checked"></br>
   <?php
              function  checkbox1(){


$('input[name="status"]:checkbox:gt(0)').change(function () {
	
	if ($('input[name="status"]:gt(0):checked').length == ($('input[name="status"]:checkbox:gt(0)').length)) {
		$('input[name="status"]:checkbox:eq(0)').prop("checked", "checked");
	} else {
		$('input[name="status"]:checkbox:eq(0)').removeAttr("checked");
	}
});
?>
</body>
</body>
</html>