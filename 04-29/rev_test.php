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

    <script>
		function change1(){
			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectRegion.value = obj[i].value;
			    }
		    }
			document.f3.submit();
		}
		
		function change2(){
			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectRegion.value= obj[i].value;
			    }
		    }
			
			var obj2 = document.getElementById("classname2");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.selectBranch.value= obj2[i].value;
			    }
		    }
			document.f3.submit();
		}

		function change3(){

			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectRegion.value= obj[i].value;
			    }
		    }
			
			var obj2 = document.getElementById("classname2");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.selectBranch.value= obj2[i].value;
			    }
		    }

			var obj3 = document.getElementById("testDate");
			for (i=0;i<obj3.length;i++ ){
				if(obj3[i].selected){
					document.f3.selectDate.value= obj3[i].value;
			    }
		    }
			document.f3.submit();
		}
    </script>

    </head>
    <body>
    <form name="f3" method="POST" action="rev_test.php">
    <?php  
       $_POST['selectRegion'] =  isset($_POST['selectRegion']) ? $_POST['selectRegion'] : '';
       $_POST['selectBranch'] =  isset($_POST['selectBranch']) ? $_POST['selectBranch'] : '';
       $_POST['selectDate'] =  isset($_POST['selectDate']) ? $_POST['selectDate'] : ''; 
    ?>

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

<?php
    $date = $_POST['selectDate'];
	if(strlen($date) == 0){	
		$date = date('y-m-d');
	}else{
		$date = $_POST['selectDate'];
	}
	
	$region_seq = $_POST['selectRegion'];
	if(strlen($region_seq) == 0){	
		$region_seq = 1;
	}else{
		$region_seq = $_POST['selectRegion'];
	}
	
	$branch_seq = $_POST['selectBranch'];
	if(strlen($branch_seq) == 0){	
		$branch_seq = 1;
	}else{
		$branch_seq = $_POST['selectBranch'];
	}
	
?>	

<?php
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result2 = mysqli_query($connect, "SELECT region_seq,region_name FROM p_region");
?>	
    <select name="classname1" id="classname1" onchange="change1()">
<?php
    while($data = mysqli_fetch_array($result2)){
		if($data['region_seq'] == $region_seq){
?>
		    <option value="<?= $data['region_seq'] ?>"selected><?= $data['region_name'] ?>
<?php
        }else{
?>
		    <option value="<?= $data['region_seq'] ?>"><?= $data['region_name'] ?>
<?php		
		}
	}
?>	
	</select>
               
<?php	
	$result3 = mysqli_query($connect, "SELECT branch_seq, region_seq, branch_name FROM p_branch where region_seq=$region_seq");
?>	
    <select name="classname2" id="classname2" onchange="change2()">
<?php
    while($data = mysqli_fetch_array($result3)){
		if($data['branch_seq'] == $branch_seq){
?>
		    <option value="<?php echo $data['branch_seq']; ?>" selected><?php echo $data['branch_name']; ?>
<?php
        }else{
?>
		    <option value="<?php echo $data['branch_seq']; ?>"><?php echo $data['branch_name']; ?>
<?php		
		}
	}
?>	
	</select>                    
                   
	<span class="datepicker date">
<?php
	$v_testDate = $_POST [ "testDate" ];

	if (! empty ( $v_testDate )){
		$newTestDate = new DateTime( $v_testDate );
		$dayInt = $newTestDate ->format( "w" );
		$day = [ "일" , "월" , "화" , "수" , "목" , "금" , "토" ];
	}
?>
	<form method = "POST" action = "<?php echo $_SERVER [ 'PHP_SELF' ] ?>" >
	<input onchange="change3()" type = "date" name = "testDate" id = "testDate" value =<?php echo $v_testDate ?> > 
	</form>
            </span>
        </div>
    </div>
    
        </section>
    

        <section class="select_branch_img"></section>



        <section class="res_list">	
        
        <div class="info_box">
            <h5>이벤트</h5>
            <div class="inner"><p><img src="/attach/plupload/o_1euhrue1c15a11bfj1khsc5muh2a.jpg" alt="노량진점-이벤트-수정.jpg" class="txc-image" style="font-size: 9pt; clear: none; float: none;"></p><p></p><p></p></div>
        </div>



        <div class="inner container">
            <ul>
<?php
		$a="Y";
		$b="Y";
		$c="Y";
		$d="Y";
		$e="Y";
		$f="Y";
		$g="Y";
		$h="Y";
		
		$reservation_status_date = $_POST [ "testDate" ];
		
		$sql = "select reservation_status_date, booking_possibility_1, booking_possibility_2, booking_possibility_3, booking_possibility_4, booking_possibility_5, booking_possibility_6, booking_possibility_7, booking_possibility_8 from p_reservation_status where reservation_status_date='$reservation_status_date' and region_seq=$region_seq and branch_seq=$branch_seq";

		$result = mysqli_query($connect,$sql);

		while($rows = mysqli_fetch_row($result)){
			$reservation_status_date=$rows[0];
			$a=$rows[1];
			$b=$rows[2];
			$c=$rows[3];
			$d=$rows[4];
			$e=$rows[5];
			$f=$rows[6];
			$g=$rows[7];
			$h=$rows[8];
		}
		
		$box1="09";
		$box2="11";
		$box3="13";
		$box4="15";
		$box5="17";
		$box6="19";
		$box7="21";
		$box8="23";
		$no="예약불가";
		$yes="예약가능";
		
		$YY = (int)date("Y");
		$MM = date("m");
		$DD = date("d");
		$AA = $MM.$DD;
		$calc = (int)$AA;
		
		$str1 = (int)substr($reservation_status_date, 0, 4); 
		$str2 = substr($reservation_status_date, 5, 2); 
		$str3 = substr($reservation_status_date, 8, 2); 
		$str4 = $str2.$str3;
		$str5 = (int)$str4;
		
		if($str5<$calc){
			$HH="24";
		}else if($str5>$calc){
			$HH="08";
		}else if($str5==$calc){
			$HH=date("H");
		}
		
		
    $result1 = mysqli_query($connect, "SELECT theme_number, branch_seq from p_theme GROUP by theme_number,branch_seq having branch_seq = $branch_seq");
    while($data = mysqli_fetch_array($result1)){
		$theme=$data[0];
		$branch=$data[1];

        
        $result2 = mysqli_query($connect, "SELECT theme_name, theme_level, theme_scare from p_theme where theme_number=$theme");
        if($data2 = mysqli_fetch_array($result2)){
?>
    
                    <li id="theme_ac_186">
                        <h2 class="title"> &nbsp;<?= $data2['theme_name'] ?> <a href="javascript:void(0);" onclick="pop_detail(186);">[자세히 보기]</a></h2>

                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
                                       <?= $data2['theme_level'] ?>
                            </div>

                            
                            <div class="level">
                                <span>공포도</span>
                                    <?= $data2['theme_scare'] ?>
                            </div>
							
							
						<div class="row">
						
							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box1 && $a=='Y'){
						?>
										<?= $box1 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box1 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 
							
							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box2 && $b=='Y'){
						?>
										<?= $box2 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box2 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box3 && $c=='Y'){
						?>
										<?= $box3 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box3 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box4 && $d=='Y'){
						?>
										<?= $box4 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box4 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box5 && $e=='Y'){
						?>
										<?= $box5 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box5 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box6 && $f=='Y'){
						?>
										<?= $box6 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box6 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box7 && $g=='Y'){
						?>
										<?= $box7 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box7 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 

							<div class="col true">
								<a href="/reservation/res_write.php?bno=57&amp;tno=186&amp;rdate=20230413&amp;rtime=14:50">
									<p class="time">
						<?php
									if($HH<$box8 && $h=='Y'){
						?>
										<?= $box8 ?>:00
						<?php		
									}else{
						?>
										<option disabled><?= $box8 ?>:00</option>
						<?php
									}
						?>
									</p>
								</a>
							</div> 	
							
						</div>
 
<?php
        }
	}
?>            
   
</li>
</ul>
</div>
</section>
<input type="hidden" name="selectRegion">
<input type="hidden" name="selectBranch">
<input type="hidden" name="selectDate">
</form>

<?php
    mysqli_close($connect); 
?>

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
    
    
    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">April</span>&nbsp;<span class="ui-datepicker-year">2023</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th><th scope="col"><span title="Monday">Mo</span></th><th scope="col"><span title="Tuesday">Tu</span></th><th scope="col"><span title="Wednesday">We</span></th><th scope="col"><span title="Thursday">Th</span></th><th scope="col"><span title="Friday">Fr</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td></tr><tr><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#">13</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">14</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">15</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">16</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">17</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">18</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">19</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">20</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">21</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">22</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">24</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">25</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">26</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">28</a></td><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">29</a></td></tr><tr><td class=" ui-datepicker-week-end " data-handler="selectDay" data-event="click" data-month="3" data-year="2023"><a class="ui-state-default" href="#">30</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;
</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>
