<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<link rel="stylesheet" href="css/board.css" type="text/css">
			<link rel="stylesheet" href="css/board1.scss" type="text/css">
			<!-- <link rel="stylesheet" href="css/test1.css" type="text/css"> -->
	
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
						<h1>게시판</h1>
						<h4>공지사항</h4>
					<div class="line"></div>
				</div>
			</section>

		<section class="board_list">
			<div class="inner container">
				<div id="board_tab">
					<ul>
						<li class="active"><a href="/board/press.php">공지사항</a></li>
					</ul>			
            	</div>
					<div id="board_top">
						<div class="board_info">
							Total:<span>13</span>, page:<span>1/2</span>
						</div>
						<form method="get" action="/board/press.php" name="frm" id="frm">
							<div class="board_search">
								<div class="ipt_group">
									<span class="ipt_left">
										<select name="s_where" id="s_where">
											<option value="">전체</option>
											<option value="subject">제목</option>
											<option value="contents">내용</option>
										</select>
									</span>
				    					<input type="text" class="ipt" name="s_keyword" id="s_keyword" value="">
				    					<span class="ipt_right addon">
											<button type="submit" class="btn orange">
												<img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/search.png" class="ico_zoom_black"></i>
											</button>
									</span>
								</div>
							
					</div>
						</form>
			</div>
			<div id="board_list">
				<table class="table">
					<colgroup>
						<col class="num" width="10%">
						<col width="">
						<col width="100px">
						<col width="150px">
						<col class="view" width="10%">
					</colgroup>
					<thead>
						<tr>
							<th class="num">No.</th>
							<th>제목</th>
							<th>작성자</th>
							<th>등록일</th>
							<th class="view">조회</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="">서포터즈 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">3967</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="">테마 기획 콘테스트 안내</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">4701</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href=""> 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.08</td>
							<td class="view">4246</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="">1차 방탈출 문화 진흥 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">4266</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="">방탈출 카페로 벤처기업 인증 획득</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">3424</td>
						</tr>

						
					</tbody>
				</table>
			</div>
			<div class="btn_group right">
				<a href="board_write.php" class="btn black"><i class="ico left cal"></i>글쓰기</a>
			</div>
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
<script type="text/javascript">
	$(function(){
		
	});
</script>
</body>
</html>