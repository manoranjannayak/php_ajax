
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form>
	<table>
		<tr>
			<td>Password:</td>
			<td><input type="text" name="password" id="pass"></td>
		</tr>
		<tr>
			<td>Retype Passsword:</td>
			<td><input type="text" value="" name="repassword" id="repass"><img src="" class="tick"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>
<script>
jQuery(document).ready(function(){
	$("#repass").change(function(){

		var value_repass = $(this).val();
		var value_pass = $('#pass').val();

		$.ajax({
			url:'php/retype.php',
			type: 'post',
			data: { 'action': 'recheckpassword', 'value' : value_repass, 'value_pass' :value_pass },
			success: function(data){
				if(data=='ok'){
					$(".tick").attr('src', '/php/tick.png');
				}
			}

		})
	});
});
</script>
</body>
</html>

