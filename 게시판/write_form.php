<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>글 쓰기 폼 양식</title>
</head>
<body>
<script>
	function chk_writeform() {
		if(write_form.fname.value=="") {
			alert('이름을 입력하세요.');
			write_form.fname.focus();
			return false;
		} else if(write_form.ftitle.value=="") {
			alert('제목을 입력하세요.');
			write_form.ftitle.focus();
			return false;
		} else if(write_form.fwrite.value=="") {     
			alert('내용을 입력하세요.');
			write_form.fwrite.focus();
			return false;
		} else {
			return true;
		}
	}
</script>
<?php
	echo "<br><center><font size=5><b> 글 쓰 기 </b></font><hr>";
	$id = $_POST['id'];
	$pw = $_POST['pw'];
?>
<table width="775" border="0" cellspacing="0" cellpadding="0">
    <form name="list_move" method="get" action="board_list.php">
	<tr>
		<td colspan="5" align="right"> 공지사항>글쓰기</a>&nbsp; </td>
	</tr>
	<tr>
		<td colspan="5" height="5"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="2"></td>
	</tr>
	<tr>
		<td colspan="4" height="2"></td>
	</tr>
	<tr  height="30" bgcolor="#3300CC">
		<td colspan="3"><font color="#FFFFFF">
		<b> &nbsp; 남기고 싶은 글 </b>[빈 칸이 있으면 안됩니다.]</font></td> 
		<td align="right">
		<input type="submit" value="목록보기">&nbsp;&nbsp;
		</td>
	</tr>
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="pw" value="<?php echo $pw; ?>">
    </form>
	<tr>
		<td colspan="4" height="2"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
    <form name="write_form" method="post" action="insert_db.php" onsubmit="return chk_writeform();">
	<tr height="30">
		<td width="140" align="right"><b> 이 름 : &nbsp;</b></td>
		<td width="180">
			<input type="text" name="fname" id="fname" size="12" maxlength="12"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
	<tr height="30">
		<td width="140" align="right"><b> 제 목 : &nbsp;</b></td>
		<td colspan="3">
			<input type="text" name="ftitle" id="ftitle" size="50" maxlength="100">
			(한글 25까지 입력가능)</td>
	</tr>
	<tr height="30" valign="top">
		<td width="140" align="right"><b> 내 용 : &nbsp;</b></td>
		<td colspan="3">
			<textarea cols="60" rows="7" name="fwrite" id="fwrite"> </textarea>
		</td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
	<tr>
		<td colspan="4" height="20">
		<center>
			<input type="submit" name="smt" id="smt" value=" 등록하기 ">
			<input type="reset" name="ret" id="ret" value=" 다시작성 ">
	    </center>
	    </td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="2"></td>
	</tr>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="pw" value="<?php echo $pw; ?>">
    </form>
</table>
</body>
</html>