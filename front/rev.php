<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
    <title>Cube Escape</title>
    <script language="javascript">
    document.title="Cube Escape Game";
    </script>
    <link rel="stylesheet" href="css/main.css">
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
    
        <meta name="keywords" content="신천 방탈출카페,신림 방탈출카페,홍대 방탈출카페,잠실 방탈출카페,강남 방탈출카페,방탈출카페">
    <meta name="description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 큐브 방탈출 카페">
    <meta property="og:description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 셜록 방탈출 카페">
    <meta name="naver-site-verification" content="90315006b3ecb880974d00ad95d55b4518b7de7b">
        
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cube Escape Game 카페">
 
    <link rel="stylesheet" href="/css/privacy.css" type="text/css">
	<link rel="stylesheet" href="/css/jquery-ui.css" type="text/css">
	<link rel="stylesheet" href="/css/slick.css" type="text/css">
	<link rel="stylesheet" href="/css/default.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css?v1812211743" type="text/css">
	<script type="text/javascript" src="/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.form.min.js"></script>
	<script type="text/javascript" src="/js/jquery.tweenmax.js"></script>
	<script type="text/javascript" src="/js/slick.min.js"></script>
	<script type="text/javascript" src="/js/common.js"></script>
    </head>
    <body>
        <header id="header">
            <div class="inner">
                <div class="header_logo">
                    <a href="/"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/logo.png"></a>
                </div>
                <nav class="header_nav">
                    <ul class="depth1">
                        <li class="theme">
                            <a href="/theme">테마</a>
                        </li>
                       <li class="branch">
                            <a href="/branch">지점소개</a>
                        </li>
                        <li class="board">
                            <a href="/board/press.php">공지사항</a>
                        </li>
                        <li class="reservation active">
                            <a href="/reservation">예약하기</a>
                        </li>
            </div>
        </header>
	
	<div id="reservation" class="body">
		<section id="title_area">
			<div class="container">
				<h1>예약하기</h1>
				<h4>Reservation</h4>
				<div class="line"></div>
	
				<ul class="linkArea">
					<li><a href="/reservation/res_info.php">예약확인</a></li>
					<li><a href="/reservation/res_info.php">예약취소</a></li>
				</ul>
				<div class="selectArea">
				
					<!--현대극장 선택시 지역선택 노출 없음 -->
								
					<select id="selectArea">
						<option value="">지역선택</option>
												<option value="1">서울특별시</option>
												<option value="9">경기도</option>
												<option value="4">인천광역시</option>
												<option value="12">충청 대전 세종</option>
												<option value="13">전라 광주</option>
												<option value="17">제주 강원</option>
												<option value="15">경상도</option>
										</select>
					
					
					<select id="selectBranch" disabled><option value="">지점선택</option>
						

					</select>
										
									
					<!--현대극장 선택시 지역선택 노출 없음 -->
									
					<span class="datepicker date">
						<input type="text" name="res_date" id="res_date" class="ipt black hasDatepicker" autocomplete="off" readonly="">
						<i class="ico left cal_w"></i>
					</span>
				</div>
			</div>
	
		</section>
	
		<section class="select_branch_img"><div class="inner container"><img src="/images/reservation/select_branch.png"></div></section>
	
		<section class="res_list"></section>
	
	</div>
	
	<script>
	
		$('#selectArea').change(function(){
			var o='<option value="">지점선택</option>';
			if($("#selectArea option:selected").val()==''){
				$('#selectBranch').attr("disabled",true);
			} else {
				$('#selectBranch').attr("disabled",false);
			}
			var a=$(this).val();

			if(a ==='1'){
				o += '<option value="11">노원점</op tion><option value="12">서울대점</option><option value="13">성신여대점</option>';
				
	     	}
			if(a ==='9'){ 
				o += '<option value="21">모란역점</op tion><option value="22">수원여대점</option><option value="23">미사역점</option>';
			}
			if(a ==='4'){
				o += '<option value="31">부천점</option><option value="32">인하대점</option><option value="33">인천점</option>';
			}
			if(a ==='12'){
				o += '<option value="41">대전점</option><option value="42">세종점</option><option value="43">천안점</option>';
			}
			if(a ==='13'){
				o += '<option value="51">광주점</option><option value="52">충장로점</option><option value="53">전주점</option>';
			}
			if(a ==='17'){
				o += '<option value="61">제주점</option><option value="62">강릉점</option><option value="63">춘천점</option>';
			}
			if(a ==="15"){
				o += '<option value="71">대구점</option><option value="72>창원점</option><option value="73">부산점</option>';
			}
			$('#selectBranch').html(o);
		});
	</script>
		
	
	
		<footer id="footer">
			<section class="footer_top">
				<div class="inner container">
					<ul class="footer_list">
						<li><a href="/privacy/personal.php">개인정보취급방침</a></li>
						<li><a href="/privacy/agreement.php">이용약관</a></li>
						<li><a href="/branch">지점소개</a></li>
						<li><a href="http://unreal-company.co.kr">프랜차이즈 가맹문의</a></li>
					</ul>
					<button type="button" class="btn_top" style="visibility: hidden;">BACK TO TOP</button>
				</div>
			</section>
			<section class="footer_bottom">
				<div class="inner container">
					<div class="site_info">
						<a href="/" class="footer_logo"><img src="/images/common/footer_logo.png"></a>
						<ul class="site_info_1">
							<li><span>상호명</span> 셜록홈즈</li>
							<li><span>주소</span> 경기도 안양시 동안구 시민대로327번길 11-41 언리얼컴퍼니</li>
						</ul>
						<ul class="site_info_2">
						   <li><span>(주)언리얼컴퍼니</span> </li>
						   <li><span> 사업자등록번호</span> 848-81-00487</li>
						   <li><span> 통신판매업 신고 </span> 2022-안양동안-1103호 </li>
						   <!-- 190926 요청에 따라 연락 이메일 교체 -->
							<li><span>대표전화</span> 1800.6777  &nbsp;&nbsp;  / &nbsp;&nbsp;  E-mail unrealcompany@naver.com<!--info@unrealcompany.co.kr--></li>
						</ul>
						<div class="copyright">Copyright ⓒ The Team Sherlock-Hormes. All rights reserved.</div>
					</div>
					<!-- <div class="bank_info">
						<p>신한은행 / 예금주 : 권충도 </p>
						<div class="acount_num">
							<img src="/images/common/bank_logo.png">
							1104470884800
						</div>
					</div> -->
				</div>
			</section>
		</footer>
	</body>
</html>

	
	