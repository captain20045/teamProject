<?php
$bno = $_GET['bno'];
$page = $_GET['page'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
<title> 글 삭제 </title>
<script>
	function passwd_chk() { 
			passwd_form.action = "delete_db.php"; //비밀번호 입력 시
			passwd_form.submit();                         
	}
</script>
</head>
<body><center>
<br><font size=4><b> 등록한 글 삭제 </b><center><hr><br>
<table align="center" border="1" cellspacing="0" cellpadding="0" width="200">
<form name="passwd_form" method="post">
<input type="hidden" name="page" value="<?php echo $page; ?>">
<input type="hidden" name="bno" value="<?php echo $bno; ?>">
</form>
<table border="0" width="200" height="50" align="center">
<form name="btn_form">
<tr><td align="center">
	<input type="button" name="btn_delete" class="ahnbutton" 
	value=" 삭제 " onclick="passwd_chk()">
	<input type="button" name="btn_cancel" class="ahnbutton" 
	value=" 취소 " onclick="history.back()">
	</td>
</tr>
</form>
</table>
</body>
</html>