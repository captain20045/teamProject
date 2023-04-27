<html lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
	<!--<title>SHERLOCK HOLMES - 셜록홈즈 방탈출 게임</title>-->
	<title>SHERLOCK HOLMES - 셜록홈즈 방탈출 게임</title>
	<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
		
	document.title="SHERLOCK HOLMES - 셜록홈즈 방탈출 게임";
	</script>
	<link rel="stylesheet" href="css/main.css">
    
        <meta name="keywords" content="신천 방탈출카페,신림 방탈출카페,홍대 방탈출카페,잠실 방탈출카페,강남 방탈출카페,방탈출카페">
    <meta name="description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 셜록 방탈출 카페">
    <meta property="og:description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 셜록 방탈출 카페">
    <meta name="naver-site-verification" content="90315006b3ecb880974d00ad95d55b4518b7de7b">
        
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="셜록홈즈 방탈출 카페">
    <meta property="og:image" content="http://sherlock-holmes.co.kr/images/main/og.png">
    <meta property="og:url" content="http://sherlock-holmes.co.kr">
    
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
                    <a href="/"><img src="/images/common/header_logo.png"></a>
                </div>
                <nav class="header_nav">
                    <ul class="depth1">
                        <li class="theme">
                            <a href="/theme">테마</a>
                        </li>
                                            <li class="activity">
                            <a href="/activity/activity.php">Activity</a>
                        </li>
                                            <li class="branch">
                            <a href="/branch">지점소개</a>
                        </li>
                        <li class="board">
                            <a href="/board/press.php">게시판</a>
                            <ul class="depth2">
                                <li><a href="/board/press.php">언론속의 셜록홈즈</a></li>
                                <li><a href="/board/event.php">이벤트</a></li>
                                <li><a href="/board/qna.php">지점질문</a></li>
                                <li><a href="/contact">가맹문의</a></li>
                            </ul>
                        </li>
                        
                        <li class="franchise">
                            <!-- <a href="/franchise">프랜차이즈</a> -->
                            <a href="http://unreal-company.co.kr" title="새 창 열기" target="_blank">프랜차이즈</a>
                             <!-- <ul class="depth2">
                                <li><a href="#">Team unreal company</a></li>
                                <li><a href="#">셜록홈즈 가맹본부</a></li>
                                <li><a href="#">About us</a></li>
                            </ul>  -->
                        </li>
                        
                        <li class="reservation active">
                            <a href="/reservation">예약하기</a>
                        </li>
                        <li class="unreal">
                            <a href="http://www.unrealcompany.co.kr" title="새 창 열기" target="_blank">언리얼 컴퍼니</a>
                        </li>
                        <li class="lang">
                            <a href="javascript:void(0);">KOR</a>
                            <ul>
                                <li><a href="#">KOR</a></li>
                                <li><a href="#none">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="m_util">
                    <ul class="lang">
                        <li class="active"><a href="#">KOR</a></li>
                        <li><a href="#none">ENG</a></li>
                    </ul>
                    <div class="m_btns">
                        <a href="javascript:void(0);" class="menu_open">open</a>
                        <a href="javascript:void(0);" class="menu_close">close</a>
                    </div>
                </div>
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
                    
                    
                    <select id="selectBranch"><option value="">지점선택</option><option value="57">노량진점</option><option value="48">노원점</option><option value="88">대학로점</option><option value="89">서울대입구점</option><option value="54">성신여대점</option><option value="77">신림2호점</option><option value="35">잠실1호점</option><option value="67">잠실2호점</option><option value="69">종각점</option></select>
                    
                                    
                    <!--현대극장 선택시 지역선택 노출 없음 -->
                                    
                    <span class="datepicker date">
                        <input type="text" name="res_date" id="res_date" class="ipt black hasDatepicker" autocomplete="off" readonly="">
                        <i class="ico left cal_w"></i>
                    </span>
                </div>
            </div>
    
        </section>
    
        <section class="select_branch_img"></section>
    
        <section class="res_list">	
        
        <div class="info_box"><!-- 개발시 display:none 삭제 -->
            <h5>이벤트</h5>
            <div class="inner"><p><img src="/attach/plupload/o_1euhrue1c15a11bfj1khsc5muh2a.jpg" alt="노량진점-이벤트-수정.jpg" class="txc-image" style="font-size: 9pt; clear: none; float: none;"></p><p></p><p></p></div>
        </div>
        <div class="inner container">
            <ul>
    
                            <li id="theme_ac_186">
                        <h2 class="title">빛과 그림자:화이트의죽음2 &nbsp; <a href="javascript:void(0);" onclick="pop_detail(186);">[자세히 보기]</a></h2>
                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                        </div>
                            <div class="level">
                                <span>공포도</span>
                                                                <i class="ico star_black"></i>
                                                        </div>
                         </div>
                                
                        <div class="row">
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">14:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=16:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">16:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=17:10">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">17:10</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=18:20">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">18:20</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=19:30">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">19:30</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=20:40">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">20:40</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=21:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">21:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                            </div>
                    </li>
                                <li id="theme_ac_283">
                        <h2 class="title">어린왕자 &nbsp; <a href="javascript:void(0);" onclick="pop_detail(283);">[자세히 보기]</a></h2>
                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                        </div>
                            <div class="level">
                                <span>공포도</span>
                                                        </div>
                                                        </div>
                          
                        <div class="row">
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=14:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">14:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=16:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">16:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=17:10">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">17:10</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=18:20">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">18:20</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=19:30">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">19:30</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=20:40">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">20:40</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=283&amp;rdate=20230413&amp;rtime=21:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">21:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                            </div>
                    </li>
                                <li id="theme_ac_308">
                        <h2 class="title">반하셨군요? &nbsp; <a href="javascript:void(0);" onclick="pop_detail(308);">[자세히 보기]</a></h2>
                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                        </div>
                                                        </div>
                                                    
                            <div class="level">
                                <span>공포도</span>
                                                        </div>
                       
                        <div class="row">
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=15:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">15:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=16:10">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">16:10</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=17:20">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">17:20</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=18:30">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">18:30</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=19:40">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">19:40</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=20:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">20:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=308&amp;rdate=20230413&amp;rtime=22:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">22:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                            </div>
                    </li>
                                <li id="theme_ac_297">
                        <h2 class="title">중고로운 평화나라 &nbsp; <a href="javascript:void(0);" onclick="pop_detail(297);">[자세히 보기]</a></h2>
                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                                <i class="ico star_black"></i>
                                                        </div>
                                                        </div>                      
                            <div class="level">
                                <span>공포도</span>
                                                        </div>
                           
                        <div class="row">
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=15:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">15:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=16:10">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">16:10</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=17:20">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">17:20</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=18:30">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">18:30</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=19:40">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">19:40</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=20:50">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">20:50</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                        <div class="col true">
                                    
                                        <!-- 기억을 걷는 시간 아닐경우 처리 -->
                                    
                                                                            <a href="/reservation/res_write.php?bno=57&amp;tno=297&amp;rdate=20230413&amp;rtime=22:00">
                                                                            
                                        <!-- 기억을 걷는 시간 처리 -->
                                        
                                                                            
                                        
                                            <p class="time">22:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                           </div>
                         </div>
                    </li>                
            </ul>
        </div>
        </section>
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
                $(function() {
        $("#selectBranch").on("click", function() {
            $("#inner container").show();
        })
        $("#selectArea").on("click", function() {
            $("#inner container").hide();
        })
    })
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
                        </div>
                </section>
                <section class="footer_bottom">
                    <div class="inner container">
                        <div class="site_info">
                            <a href="/" class="footer_logo"><img src="/images/common/footer_logo.png"></a>
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
    
    
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all">
            <a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev">
                <span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a>
                <a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next">
                    <span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
                    <div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;
                        <span class="ui-datepicker-year">2023</span></div></div>
                        <table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end">
                            <span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span>
                            </th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col">
                                <span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">
                                    Th</span></th><th scope="col"><span title="Friday">Fr</span>
                                    </th><th scope="col" class="ui-datepicker-week-end">
                                        <span title="Saturday">Sa</span>
                                    </th></tr></thead><tbody><tr>
                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled ">
                                       <span class="ui-state-default">1</span></td></tr><tr>
                                      <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">7</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">8</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled ">
                                    <span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td>
                                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td>
                                    <td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td>
                                    <td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">13</a></td>
                                        <td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">15</a></td></tr><tr>
                                        <td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023">
                                        <a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;
                                        </td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>                                         
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>                                             
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month u -datepicker-unselectable ui-state-disabled">&nbsp;</td>
                                        </tr></tbody></table></div></body></html>