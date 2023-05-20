<?php
$bno = $_GET['bno'];
$page = $_GET['page'];
$id = $_GET['id'];
$pw = $_GET['pw'];

$connect = mysqli_connect('localhost','root','','project3');
if(mysqli_connect_error()) {
    echo "데이터베이스 연결에 실패하였습니다.";
}

/*--- 테이블의 일련번호(bno) 필드명으로 조회  ---*/
$sql = "select name,title_board,write_board from freeboard_tbl where bno = '$bno' ";

$res = mysqli_query($connect,$sql);

while($row = mysqli_fetch_row($res)){
	$name = $row[0];
    $title_board = $row[1];
	$write_board = $row[2];
}

//역슬래시 제거
$name = stripslashes($name);
$title_board = stripslashes($title_board); 
$write_board = stripslashes($write_board); 

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title> 글 수정 폼 양식 </title>
</head>
<body>

<script>
	function chk_writeform() {
		if(write_form.fname.value=="") {
			alert('이름을 입력하세요.');
			write_form.fname.focus();
			return;
		} else if(write_form.ftitle.value=="") {
			alert('제목을 입력하세요.');
			write_form.ftitle.focus();
			return;
		} else if(write_form.fwrite.value=="") {
			alert('내용을 입력하세요.');
			write_form.fwrite.focus();
			return;
		} else {
			write_form.action = "update_db.php";
			write_form.submit();
		}
	}
</script>

<br><center><font size=5><b> 글 수 정 </b></font><hr>
<table width="775" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="5" align="right"> 공지사항>글수정</a>&nbsp; </td>
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
<form name="list_move" method="post" action="board_list.php">
	<tr  height="30" bgcolor="#3300CC">
		<td colspan="3"><font color="#FFFFFF">
		<b> &nbsp; 남기고 싶은 글 </b>[빈 칸이 있으면 안됩니다.]</font></td> 
		<td align="right">
		<input type="submit" name="submit" value=" 목록보기 ">&nbsp;&nbsp;
		</td>
	</tr>
</form>
	<tr>
		<td colspan="4" height="2"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>

<form name="write_form" method="post">
<input type="hidden" name="page" value='<?php echo $page; ?>'>
<input type="hidden" name="bno" value='<?php echo $bno; ?>'>
<input type="hidden" name="id" value='<?php echo $id; ?>'>
<input type="hidden" name="pw" value='<?php echo $pw; ?>'>

	<tr height="30">
		<td width="140" align="right"><b> 이 름 : &nbsp;</b></td>
		<td width="180">
			<input type="text" name="fname" id="fname" size="12" 
				maxlength="12" value="<?php echo $name; ?>"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
	<tr height="30">
		<td width="140" align="right"><b> 제 목 : &nbsp;</b></td>
		<td colspan="3">
			<input type="text" name="ftitle" id="ftitle" size="50"
				maxlength="100" value='<?php echo $title_board; ?>'>
			</td>
	</tr>
	<tr height="30" valign="top">
		<td width="140" align="right"><b> 내 용 : &nbsp;</b></td>
		<td colspan="3">
			<textarea cols="60" rows="7" name="fwrite" id="fwrite">
			<?php echo $write_board; ?></textarea></td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
</form>
</table>
<table width="775" border="0">
<form name="btn_form">
	<tr>
		<td colspan="4" height="20"><center>
		<input type="button" name="btn_save" class="ahngutton" value=" 수정하기 "
		onclick="chk_writeform();">
		<input type="button" name="btn_center" class="ahngutton" value=" 취소하기 "
		onclick="location.href='board_list.php?page=<?php echo $page; ?>&id=<?php echo $id; ?>&pw=<?php echo $pw; ?>' ">
	</center></td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="2"></td>
	</tr>
</form>
</table>
</body>
</html>