<?php
$bno = $_GET['bno'];
$page = $_GET['page'];
$id = $_GET['id'];
$pw = $_GET['pw'];
$connect = mysqli_connect('localhost','findid','findpw','basic');
if(mysqli_connect_error()) {
    echo "데이터베이스 연결에 실패하였습니다.";
}
/*--- 테이블의 일련번호(bno) 필드명으로 조회  ---*/
$sql = "select name,title_board,write_board,count_board from freeboard_tbl where bno = '$bno' ";
$res = mysqli_query($connect,$sql);

while($row = mysqli_fetch_row($res)){
	$name = $row[0];
    $title_board = $row[1];
	$write_board = $row[2];
	$count_board = $row[3];
}

//역슬래시 제거
$name = stripslashes($name);
$title_board = stripslashes($title_board); 
$write_board = stripslashes($write_board); 

// 특수문자를 html태그로 변환
$name = htmlspecialchars($name);
$title_board = htmlspecialchars($title_board);
$write_board = htmlspecialchars($write_board);

$write_board = nl2br($write_board);   //줄바꿈을 <br> 처리

//조회 카운터 증가
$sql2 = "update freeboard_tbl set count_board = count_board + 1 where bno = '$bno' ";
mysqli_query($connect,$sql2);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title> 글 내용 보기 </title>
    <script>
    function godelete(){
		if(confirm("정말 삭제하시겠습니까?")==true){
			location.href="http://localhost/delete_db.php?bno=<?php echo $_GET['bno']?>&page=<?php echo $_GET['page'];?>"
		}else{
			return;
		}
    }
  </script>
</head>
<br><center><font size=5><b> 글 내용 보기 </b></font><hr>
<table width="775" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="5" align="right"> 공지사항>글 내용 보기</a>&nbsp; </td>
	</tr>
	<tr>
		<td colspan="5" height="5"></td>
	</tr>
<form name="list_move" method="post" action="board_list.php">
	<tr bgcolor="#3300CC">
		<td colspan="4" height="2"></td>
	</tr>
	<tr>
		<td colspan="4" height="2"></td>
	</tr>
	<tr  height="30" bgcolor="#3300CC">
		<td colspan="2"><font color="#FFFFFF">
		<b> &nbsp;※ 글 내용 보기  </b></font></td> 
		<td colspan="2" align="right">
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
	<tr height="30">
		<td width="80" align="right"><b> 이 름 : &nbsp;</b></td>
		<td width="200">
			<?php echo $name; ?></td>
		<td width="400" align="right"><b> 조회수 : &nbsp;</b></td>
		<td width="195">
			<?php echo $count_board; ?></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
	<tr height="30">
		<td width="80" align="right"><b> 제 목 : &nbsp;</b></td>
		<td colspan="3">
			<?php echo $title_board; ?></td>
	</tr>
	<tr>
		<td colspan="4" height="1"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
	<tr>
		<td colspan="4" height="5"></td>
	</tr>
	<tr height="30" valign="top">
		<td width="80" align="right">
			<b> 내 용 : &nbsp;</b></td>
		<td colspan="3">
			<?php echo $write_board; ?></td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
	<tr>
		<td colspan="4" height="2"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="4" height="1"></td>
	</tr>
	<tr>
		<td colspan="4" height="10"></td>
	</tr>
</table>
<table width="775" height="20" border="0" cellspacing="0" cellpadding="0">
<form name="btn_form">
	<tr align="center">
		<td>
<?php
if($id=="admin"&&$pw=="1234"){
?>		
		<input type="button" name="btn_update" class="ahnbutton" value=" 글수정 "
		onclick="location.href='update_form.php?bno= <?php echo $bno; ?>
		&page=<?php echo $page; ?>' ">
		
		<input type="button" name="btn_del" class="ahnbutton" value=" 글삭제 "
		onclick="godelete()">
<?php
}
?>		
		</td>
	</tr>
	<tr>
		<td colspan="2" height="10"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td  colspan="2" height="2"></td>
	</tr>
</form>
</table>
</body>
</html>
