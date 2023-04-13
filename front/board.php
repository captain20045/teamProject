<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="css/board.css" type="text/css">
<link rel="stylesheet" href="css/board1.css" type="text/css">

</head>
<body>
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
				    	<span class="ipt_right addon"><button type="submit" class="btn orange"><i class="ico zoom_black"></i></button></span>
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
							<td class="left title"><a href="/board/press_view.php?no=22&amp;s_keyword=&amp;s_where=&amp;start=0">서포터즈 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">3967</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="/board/press_view.php?no=18&amp;s_keyword=&amp;s_where=&amp;start=0">테마 기획 콘테스트 안내</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">4701</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="/board/press_view.php?no=17&amp;s_keyword=&amp;s_where=&amp;start=0"> 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.08</td>
							<td class="view">4246</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="/board/press_view.php?no=16&amp;s_keyword=&amp;s_where=&amp;start=0">1차 방탈출 문화 진흥 모집 공고</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">4266</td>
						</tr>

						<tr>
							<td class="num">공지</td>
							<td class="left title"><a href="/board/press_view.php?no=1&amp;s_keyword=&amp;s_where=&amp;start=0">방탈출 카페로 벤처기업 인증 획득</a></td>
							<td class="name">관리자</td>
							<td class="date">2000.00.00</td>
							<td class="view">3424</td>
						</tr>

						
					</tbody>
				</table>
			</div>
			<div class="pagination">
				<ul class="pc">
                <li class="num active"><span>1</span></li>
                <li class="num">
                    <a href="/board/press.php?start=10&amp;s_keyword=&amp;s_where=">2</a>
                </li>
    </ul>				
		<div class="mobile">
			<span>페이지</span>
			<select class="select_page select_link">
		<option value="/board/press.php?start=0&amp;s_keyword=&amp;s_where=" selected="">1</option>
        <option value="/board/press.php?start=10&amp;s_keyword=&amp;s_where=">2</option>
			</select>
			<span> / 2</span>

		<a href="#nopage" class="btn prev">PREV</a><span class="now_page">1</span>
        <a href="/board/press.php?start=10&amp;s_keyword=&amp;s_where=" class="btn next">NEXT</a>
		</div>
		</div>
	</div>
	</section>
</div>

<script type="text/javascript">
	$(function(){
		
	});
</script>
</body></html>