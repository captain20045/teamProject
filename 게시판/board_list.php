<?php
$page = $_GET['page'];
$id = $_GET['id'];
$pw = $_GET['pw'];
$connect = mysqli_connect('localhost','findid','findpw','basic');
if(mysqli_connect_error()) {
    echo "데이터베이스 연결에 실패하였습니다.";
}

/* --- 자유 게시판의 목록 보기  --- */
if($page == ""){
	$page = 1;                          //페이지 번호가 없으면 페이지번호를 1
}
$view_num = 5;                          //화면에 표시되는 글 목록의 수
$page_num = 3;                          //페이지 링크의 개수
$offset = $view_num * ($page - 1);      //한 페이지에 시작하는 글의 번호
 
$sql = "select count(*) from freeboard_tbl";   //전체 레코드의 개수 구하기
$res = mysqli_query($connect,$sql);

while($row = mysqli_fetch_row($res)){
	$total_no = $row[0];            
}
//전체 레코드의 수를 페이지당 레코드의 수로 나눈 값 올림
$total_page = ceil($total_no / $view_num);   
$cur_num = $total_no - $view_num * ($page - 1);  //현재 레코드의 번호 설정

//테이블에서 목록을 쿼리문으로 가져오기
$sql2 = "select bno,title_board,name,insert_day,count_board from freeboard_tbl order by bno desc limit $offset, $view_num"; 
                                                                                               //limit 시작위치,반환갯수
$res2 = mysqli_query($connect,$sql2);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title> 공지사항 목록 </title></head>
<body>
<br><center><font size=5><b> 공지사항 </b></font><hr>

<table width="800" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td colspan="5" align="right"> 공지사항>글목록</a>&nbsp; </td>
	</tr>
	<tr>
		<td colspan="5" height="5"></td>
	</tr>
	<tr bgcolor="#3300CC">
		<td colspan="5" height="2"></td>
	</tr>
	<tr>
		<td colspan="5" height="2"></td>
	</tr>
	<tr bgcolor="#3300CC" height="30">
		<td width="60" align="center"><b><font color="#FFFFFF">번호</font></b></td>
		<td width="450" align="center">	<b><font color="#FFFFFF">제목</font></b></td>
		<td width="80" align="center"><b><font color="#FFFFFF">작성자</font></b></td>
		<td width="150" align="center"><b><font color="#FFFFFF">등록 일자</font></b></td>
		<td width="60" align="center"><b><font color="#FFFFFF">조회</font></b></td>
	</tr>
	<tr>
		<td colspan="5" height="5"></td>
	</tr>
	<tr>

<?php
/* ---  테이블에 작성된 필드명 배치   --- */
while($row2 = mysqli_fetch_row($res2)) {
	echo "
		<tr height='25'>
			<td align='center'> $cur_num </td>
			<td>
			<a href='board_view.php?bno={$row2[0]}&page={$page}&id={$id}&pw={$pw}'>$row2[1]</a></td>
			<td align='center'> $row2[2] </td>
			<td align='center'> $row2[3] </td>
			<td align='center'> $row2[4] </td>
		</tr>
		<tr>
			<td colspan='5' height='1'></td>
		</tr> ";
	$cur_num--;
}
?>
	<tr>
		<td colspan="5" height="20"></td>
	</tr>
	<tr height="25">
		<td colspan="5" align="center">
<?php
//$view_num     화면에 표시되는 글 목록의 수
//$page_num     페이지 링크의 개수
//$total_no     전체 글 개수
//$total_page   전체 페이지 수
//$total_block  페이지 링크의 개수 만큼을 블럭으로 하는 총 블럭 수
//$block        현재 블럭

$total_block = ceil($total_page / $page_num);
$block = ceil($page / $page_num);              //현재의 블록
$first = ($block - 1) * $page_num;             //페이지 블록의 시작하는 첫 페이지 
$last = $block * $page_num;                    //페이지 블록의 끝 페이지
 
if($block >= $total_block) {
	$last = $total_page;
}
if($block > 1) {
	echo "[<a href='board_list.php?page=1'>처음</a>]&nbsp;&nbsp;";  //첫 페이지
}
if($page > 1) {
	$go_page = $page - 1;
	echo "[<a href='board_list.php?page=$go_page'>◀</a>]&nbsp;&nbsp;";
}
for($page_link=$first+1; $page_link <= $last; $page_link++) {
	// [1] [2] [3] ... 각 페이지 표시
	if($page_link == $page) {
		echo " <font color='red'><b> {$page_link}</b></font> &nbsp;";
	} else {
		echo "[<a href='board_list.php?page=$page_link'>$page_link</a>]&nbsp;";
	}
}
if($total_page > $page) {          //다음 페이지로 이동
	$go_page = $page + 1;
	echo "&nbsp;[<a href='board_list.php?page=$go_page'>▶</a>]";
}
if($block < $total_block) {
	echo "&nbsp;[<a href='board_list.php?page=$total_page'>끝</a>]";
}
mysqli_close($connect);
?>
		</td>
	</tr>
</table>
<table width="800" align="center" border="0" cellspacing="0" cellpadding="0">
	<tr height="10"><td></td>
	</tr>
	<tr bgcolor="#3300CC" height="1">
		<td colspan="5"></td>
	</tr>
	<tr>
		<td colspan="5" height="3"></td>
	</tr>
	<tr><td colspan="3">&nbsp;
		<? echo "[ 전체 : {$total_no} 건 ]"; ?></td>
	<form name="write_botton" method="post" action="write_form.php">
		<td width="100" align="right">
<?php
if($id=="admin"&&$pw=="1234"){
?>
		<input type="submit" name="submit" value=" 글쓰기 ">&nbsp;&nbsp;
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="hidden" name="pw" value="<?php echo $pw; ?>">
<?php
}
?>
		</td>
	</form>
	</tr>
	<tr>
		<td colspan="5" height="1"></td>
	</tr>
	<tr><td height="3"></td></tr>
	<tr bgcolor="#3300CC" height="2">
		<td colspan="5"></td>
	</tr>
</table>
</body>
</html>
