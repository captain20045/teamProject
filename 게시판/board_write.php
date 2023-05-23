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

		<section class="board_write">
			<div class="inner container">
				<form name="tx_editor_form" id="tx_editor_form" action="process.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="Mode" value="qnaWrite">
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
								<input type="text" class="title" >
							</td>
						</tr>

						<tr>
							<th>작성자</th>
							<td class="left">
								<input type="text" class="name">
							</td>
						</tr>

						<tr>
							<th>내용</th>
							<td class="left" colspan="3">
								<textarea id="text" name="ipt" rows="5" cols="33"></textarea>
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
								<a href="board.php" class="btn gray">확인</a>
								<a href="" class="btn gray2">취소</a>
							</div>
				</form>
			</div>
		</section>
</div>

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


	</body>
</html>