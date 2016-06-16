<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>2-2</title>
</head>
<body>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<script type='text/javascript'>
			var xhr;
			function run_ajax(){
				//create new XMLHttpRequest object
				//if using IE5/6 to set xhr object, it should use some try/catch to handle the condition
				xhr = new XMLHttpRequest();
				if(xhr.overrideMimeType){
					xhr.overrideMimeType('text/xml');
				}

				//set onready state and call getData()
				xhr.onreadystatechange = getData;

				//set ajax para. & header encoded
				xhr.open('post','form_ajax.php',true);
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

				//get a,b value & send request
				a = document.getElementById('a').value;
				b = document.getElementById('b').value;
				xhr.send('a='+a+'&b='+b);
			}

			//define getData function
			function getData(){
				if(xhr.readyState == 4){//get all responsed data
					if(xhr.status == 200){
						document.getElementById('show').innerHTML = xhr.responseText;
					}
				}
			}
		</script>
	<form>
	<!--此為範例 請自行修改-->
		<select name="ccount">
　			<option value="Taipei">台北市</option>
			<option value="Tainan">台南市</option>
　			<option value="Kaohsiung">高雄市</option>
		</select>
		<select name="area">
			
		</select>
	</form>
	<!--3-3題-->縣市+區域<input type="text" id="address"></br>
	<!--加分題(需chrome可用)--><input type="button" value="下載">
</body>
</body>
</html>


