<?php
$bno = $_GET['bno'];
$page = $_GET['page'];
$id = $_GET['id'];
$pw = $_GET['pw'];

$connect = mysqli_connect('localhost','root','mmission','project3');
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

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">

		<link rel="stylesheet" href="css/board_write.scss" type="text/css">
		<link rel="stylesheet" href="css/board1.scss" type="text/css">
	</head>
	<body>
		<header id="header">
            <div class="inner">
                <div class="header_logo">
                    <a href="main.php"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/logo.png"></a>
                </div>
                    <nav class="header_nav">
                    <ul class="depth1">
                        <li class="theme">
                            <a href="theme.php">테마</a>
                        </li>
                       <li class="branch">
                            <a href="branch.php">지점소개</a>
                        </li>
                        <li class="board">
                            <a href="board.php">공지사항</a>
                        </li>
                        <li class="reservation active">
                            <a href="reservation.php">예약하기</a>
                        </li>
                    </ul>
            	</div>
        </header>

		<div id="board" class="body">
			<section id="title_area">
				<div class="container">
					<h1>공지사항</h1>
					<h4>Notice</h4>
				<div class="line"></div>
		</div>
			</section>
<form name="write_form" method="post" action="update_db.php" onsubmit="return chk_writeform();">
		<section class="board_write">
			<div class="inner container">
				
						<div id="board_write">
						<table class="table">
						<tbody>
							<tr>
							<th>지점</th>
							<td class="left" colspan="3">
								<select name="bno" id="bno" class="selectBranch">
									<option value="">지점선택</option>
									<option value="41">구리점</option>
									<option value="13">구월인천점</option>
									<option value="57">노량진점</option>
									<option value="48">노원점</option>
									<option value="81">뉴안양점</option>
									<option value="84">대구동성로점</option>
									<option value="85">대전 신세계백화점</option>
									<option value="88">대학로점</option>
									<option value="79">동탄점</option>
									<option value="64">부천점</option>
									<option value="45">부평점</option>
									<option value="62">분당야탑점</option>
									<option value="89">서울대입구점</option>
									<option value="87">서현점</option>
									<option value="54">성신여대점</option>
									<option value="77">신림2호점</option>
									<option value="86">아산점</option>
									<option value="44">여수점</option>
									<option value="61">의정부점</option>
									<option value="35">잠실1호점</option>
									<option value="67">잠실2호점</option>
									<option value="69">종각점</option>
									<option value="14">천안1호점</option>
									<option value="74">천안2호점</option>
									<option value="70">청주점</option>
									<option value="80">평택점</option>
								</select>
							</td>
							</tr>
						<tr>
							<th>제목</th>
							<td class="left" colspan="3">
								<input type="text" class="title" name="ftitle" id="ftitle"
								value="<?php echo $title_board; ?>">
							</td>
						</tr>

						<tr>
							<th>작성자</th>
							<td class="left">
								<input type="text" class="name" name="fname" id="fname"
								value="<?php echo $name; ?>">
							</td>
						</tr>

						<tr>
							<th>내용</th>
							<td class="left" colspan="3">
								<textarea name="fwrite" id="fwrite" rows="5" cols="33"><?php echo $write_board; ?></textarea>
							</td>
						</tr>

						<tr>
							<th>파일 선택</th>
							<td class="left" colspan="3">
								<input type="file" name="" placeholder="">
							</td>
						</tr>
						</tbody>
						</table>
						</div>
							<div class="btn_group center">
								<input type="button" name="btn_save" class="btn gray" value=" 수정하기 " onclick="chk_writeform();">
								<input type="button" onclick="location.href='board.php?page=<?php echo $page; ?>&id=<?php echo $id; ?>&pw=<?php echo $pw; ?>' "class="btn gray" name="ret" id="ret" value=" 다시작성 ">
							</div>
					<input type="hidden" name="page" value='<?php echo $page; ?>'>
					<input type="hidden" name="bno" value='<?php echo $bno; ?>'>
					<input type="hidden" name="id" value='<?php echo $id; ?>'>
					<input type="hidden" name="pw" value='<?php echo $pw; ?>'>
			</div>
		</section>
	</div>
</form>

			<footer id="footer">
                <section class="footer_top">
                    <div class="inner container">
                        <ul class="footer_list">
                            <li><a href="/privacy/personal.php">개인정보취급방침</a></li>
                            <li><a href="/privacy/agreement.php">이용약관</a></li>
                            <li><a href="/branch">지점소개</a></li>
                            <li><a href="http://unreal-company.co.kr">프랜차이즈 가맹문의</a></li>
                        </ul>
                        </div>
                </section>
                <section class="footer_bottom">
                    <div class="inner container">
                        <div class="site_info"> 
                            <ul class="site_info_1">
                                <li><span>상호명</span> 현생탈출</li>
                                <li><span>주소</span> 경기도 성남시 중원구 광명로 377</li>
                            </ul>
                            <ul class="site_info_2">
                               <li><span>(주)현생탈출컴퍼니</span> </li>
                               <li><span> 사업자등록번호</span> 111-22-33333</li>
                               <li><span> 통신판매업 신고 </span> 2023-신구대-412호 </li>
                               <!-- 190926 요청에 따라 연락 이메일 교체 -->
                                <li><span>대표전화</span> 1800.6777  &nbsp;&nbsp;  / &nbsp;&nbsp;  E-mail shingucompany@naver.com<!--info@shingucompany.co.kr--></li>
                            </ul>
                            <div class="copyright">Copyright ⓒ Escape from the Present. All rights reserved.</div>
                        </div>
                    </div>
                </section>
            </footer>

<script type="text/javascript">
	function chk_writeform() {
		if(write_form.ftitle.value=="") {
			alert('제목을 입력하세요.');
			write_form.ftitle.focus();
			return false;
		} else if(write_form.fname.value=="") {
			alert('작성자 이름을 입력하세요.');
			write_form.fname.focus();
			return false;
		} else if(write_form.fwrite.value=="") {     
			alert('내용을 입력하세요.');
			write_form.fwrite.focus();
			return false;
		} else {
			write_form.action = "update_db.php";
			write_form.submit();
		}
	}
</script>

	</body>
</html>