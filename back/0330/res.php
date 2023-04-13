<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
    <!--<title>SHERLOCK HOLMES - 셜록홈즈 방탈출 게임</title>-->
    <title>SHERLOCK HOLMES - 셜록홈즈 방탈출 게임</title>
    <script language="javascript">
    document.title="SHERLOCK HOLMES - 셜록홈즈 방탈출 게임";
    </script>
     <link rel="stylesheet" href="main.css">
    
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
    
        <?
        $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }

    $YY = date("Y");
	$MM = date("m");
	$DD = date("d");
	$dat = $YY . "-" . $MM . "-" . $DD;
	$register_date = $dat;

	$now_time = date("H:i:s");
?>



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
            <div class="inner"><p><br></p><p style="line-height: 2;"><span 0);"="" 0,="" rgb(0,="" gothic";="" malgun="" style="font-size: 14pt;"><span 0);"="" 0,="" rgb(0,="" gothic";="" malgun="" style="font-size: 14pt;"><b><span style="background-color: rgb(255, 187, 0); color: rgb(0, 0, 0);">01</span><span style="color: rgb(0, 0, 0);">&nbsp;이달의 생일자 할인&nbsp;</span></b></span><b style="font-size: 14pt;"><span style="color: rgb(0, 0, 0);">(한달 내내/신분증 지참)</span></b></span></p><p style="line-height: 2;"><span 0);"="" 0,="" rgb(0,="" gothic";="" malgun="" style="font-size: 14pt;"><b><span style="background-color: rgb(255, 187, 0); color: rgb(0, 0, 0);">02</span><span style="color: rgb(0, 0, 0);">&nbsp;유애나 팬클럽 할인&nbsp;</span></b></span><b style="font-size: 14pt;"><span style="color: rgb(0, 0, 0);">(신분증, 팬클럽 카드)</span></b></p><p style="line-height: 2;"><span 0);"="" 0,="" rgb(0,="" gothic";="" malgun="" style="font-size: 14pt;"><b><span style="background-color: rgb(255, 187, 0); color: rgb(0, 0, 0);">03</span><span style="color: rgb(0, 0, 0);">&nbsp;</span></b></span><b style="font-size: 18.6667px;"><span style="color: rgb(0, 0, 0);">초, 중, 고등학생&nbsp;할인&nbsp;</span></b><b style="font-size: 18.6667px;"><span style="color: rgb(0, 0, 0);">(학생증 제시)</span></b></p><p style="line-height: 2;"><span 0);"="" 0,="" rgb(0,="" gothic";="" malgun="" style="font-size: 14pt;"><b><span style="background-color: rgb(255, 187, 0); color: rgb(0, 0, 0);">04</span><span style="color: rgb(0, 0, 0);">&nbsp;체험활동/단체 영업시간 외 전화 문의 환영</span></b></span></p><p style="line-height: 2;"><b style="font-size: 18.6667px;"><span style="background-color: rgb(255, 187, 0); color: rgb(0, 0, 0);">05</span><span style="color: rgb(0, 0, 0);">&nbsp;11/18~12/20 수능생 할인 이벤트&nbsp;</span></b></p><p style="line-height: 2;"><b style="font-size: 18.6667px;"><span style="color: rgb(0, 0, 0);">(평일 수험증 지참 시 추가 할인)</span></b></p></div>
        </div>
        <div class="inner container">
            <ul>
    
                            <li id="theme_ac_289">
                        <h2 class="title">황금 감옥 : 와캄 &nbsp; <a href="javascript:void(0);" onclick="pop_detail(289);">[자세히 보기]</a></h2>
           
                        <div class="row">
                                                        <div class="col true">
                  
                                            <a href="/reservation/res_write.php?bno=48&amp;tno=289&amp;rdate=20230330&amp;rtime=12:00">
                                                                            
                                            <p class="time">12:00</p>
                                            <p class="state">예약가능</p>
                                        </a>
                                    </div>
                                                    
                                                 
                                                    
                                                  
                                                  
                                                   
                                            </div>
                    </li>
                               
                            
                               
                
            </ul>
        </div>
    <script type="text/javascript">
    <!--
    /*$(function() {
        });*/
    
    function pop_detail(code) {
    
        var branch_no = '48';
        
        popFn.show("ajax", {
            url: "/reservation/pop_detail.php",
            data: {code:code,branch_no:branch_no},
            onLoad : function() {
                var wW = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                if(767 < wW) { //PC
                    $("#pop_info .img").hover(function() {
                        $(this).addClass("active");
                    },function() {
                        $(this).removeClass("active");
                    });
                }else{
                    $("#pop_info .img").click(function() {
                        if(!$(this).hasClass("active")){
                            $("#pop_info .img").removeClass("active");
                            $(this).addClass("active");
                        }else{
                            $("#pop_info .img").removeClass("active");
                        }
    
                    });
                }
                $("#pop_info .close").click(function() {
                    popFn.hide($('#pop_info'));
                });
            }
        });
    }
    //-->
    
    
    function messsage_move(url){
        alert('기억을 걷는 시간 테마는\n현재 안드로이드 기종으로만\n플레이가 가능하십니다.\n아이폰 버전은 추후 개발 될\n예정입니다.\n감사합니다.');
        location.href = url;
    }
    </script>
    </section>
    
    </div>
    
    <script type="text/javascript">
        $(function(){
            $("#res_date").datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0,
                
                onSelect: function(dateText) {
    
                    var sido = $("#selectArea").val();
                    var bno = $("#selectBranch").val();
                    var date = dateText;
    
                    res_schedule(sido, bno, date, "");
    
                }
            }).datepicker("setDate", new Date());
    
            $("#selectArea").change(function() {
                $.get("process.php?Mode=getBranch&sido=" + $(this).val() ,function(data,status){
    
                    $("#selectBranch").html(data);
    
                    var sido = $("#selectArea").val();
                    var bno = $("#selectBranch").val();
                    var date = $("#res_date").val();
    
                    res_schedule(sido, bno, date, "");
                });
            });
    
            $("#selectBranch").change(function() {
                var sido = $("#selectArea").val();
                var bno = $("#selectBranch").val();
                var date = $("#res_date").val();
    
                res_schedule(sido, bno, date, "");
            });
    
                });
    
        function res_schedule(sido, bno, date, tno) {
    
            if(sido && bno && date){
    
                $(".select_branch_img").empty();
    
                var params = {'sido':sido, 'bno':bno, 'date':date, 'tno':tno};
                
                if(bno=='73'){
                    
                                $.ajax({
                       url : "/reservation/res_schedule2.php",
                       type : "get",
                       dataType : "html",
                       data : params,
                       success : function(data){
                           $(".res_list").html(data);
                       },
                       error : function(a,b,c){
                           alert(c);
                       }
                   });
                   
                } else {
                    
                                $.ajax({
                       url : "/reservation/res_schedule.php",
                       type : "get",
                       dataType : "html",
                       data : params,
                       success : function(data){
                           $(".res_list").html(data);
                       },
                       error : function(a,b,c){
                           alert(c);
                       }
                   });
                }
                
    
                
                // 기묘한 이야기 팝업스토어 2019-07-07 까지만 운용되도록 처리.
                if(bno=='68') {
                    $("#res_date").datepicker( "option", "maxDate", '2019-07-07' );
                }else{
                    $("#res_date").datepicker( "option", "maxDate", '' );
                }
    
            }else{
    
                $(".res_list").empty();
                $(".select_branch_img").html("<div class='inner container'><img src='/images/reservation/select_branch.png'></div>");
    
            }
        }
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
                    <ul class="sns">
                        <li><a href="#"><img src="/images/common/ico_facebook.png" alt="facebook"></a></li>
                        <li><a href="#"><img src="/images/common/ico_blogger.png" alt="blogger"></a></li>
                        <li><a href="#"><img src="/images/common/ico_twitter.png" alt="twitter"></a></li>
                        <li><a href="#"><img src="/images/common/ico_youtube.png" alt="youtube"></a></li>
                        <li><a href="#"><img src="/images/common/ico_instagram.png" alt="instagram"></a></li>
                    </ul>
                </div>
            </section>
        </footer>
    
    
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">21</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">22</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">23</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">24</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">27</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">28</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">29</span></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="2" data-year="2023"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2023"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></body></html>