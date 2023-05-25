<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
    <title>Cube Escape</title>
    <script language="javascript">
    document.title="Cube Escape Game";
    </script>
    <link rel="stylesheet" href="css/main.css">
    
    <meta name="description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 큐브 방탈출 카페">
    <meta property="og:description" content="강남,홍대,잠실,노량진,신림 등 전국 40호점 국내최대 큐브 방탈출 카페">
    <meta name="naver-site-verification" content="90315006b3ecb880974d00ad95d55b4518b7de7b">
        
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cube Escape Game 카페">
 
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script>
		function change1(){
			var obj = document.getElementById("selRegion");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectedRegion.value = obj[i].value;
			    }
		    }
			document.f3.submit();
		}
		
		function change2(){
			var obj = document.getElementById("selRegion");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectedRegion.value= obj[i].value;
			    }
		    }

			var obj2 = document.getElementById("selBranch");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.selectedBranch.value= obj2[i].value;
			    }
		    }
			document.f3.submit();
		}

		function change3(){
            
			var obj = document.getElementById("selRegion");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectedRegion.value= obj[i].value;
			    }
		    }
			
			var obj2 = document.getElementById("selBranch");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.selectedBranch.value= obj2[i].value;
			    }
		    }

			var obj3 = document.getElementById("selDate");
			for (i=0;i<obj3.length;i++ ){
				if(obj3[i].selected){
					document.f3.selectedDate.value= obj3[i].value;
			    }
		    }
			document.f3.submit();
		}
    </script>

    </head>
    <body>
    <form name="f3" method="POST" action="reservation.php">
    <?php  
       $_POST['selectedRegion'] =  isset($_POST['selectedRegion']) ? $_POST['selectedRegion'] : '';
       $_POST['selectedBranch'] =  isset($_POST['selectedBranch']) ? $_POST['selectedBranch'] : '';
       $_POST['selectedDate'] =  isset($_POST['selectedDate']) ? $_POST['selectedDate'] : '';
       $_POST['selDate'] =  isset($_POST['selDate']) ? $_POST['selDate'] : date("Y-m-d");
        
    ?>








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
    
    <div id="reservation" class="body">
        <section id="title_area">
            <div class="container">
                <h1>예약하기</h1>
                <h4>Reservation</h4>
                <div class="line"></div>
    
                <ul class="linkArea">
                    <li><a href="rev_check.php">예약확인</a></li>
                    <li><a href="rev_check.php">예약취소</a></li>
                </ul>

                
                <div class="selectArea">
                
                
                                


<?php
/*
    $date = $_POST['selectedDate'];
	if(strlen($date) == 0){	
		$date = date('Y-m-d');
	}else{
		$date = $_POST['selectedDate'];
	}
*/	
	$region_seq = $_POST['selectedRegion'];
	if(strlen($region_seq) == 0){	
		$region_seq = 0;
	}else{
		$region_seq = $_POST['selectedRegion'];
	}
	
	$branch_seq = $_POST['selectedBranch'];
	if(strlen($branch_seq) == 0){	
		$branch_seq = 0;
	}else{
		$branch_seq = $_POST['selectedBranch'];
	}
?>


<?php
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result2 = mysqli_query($connect, "SELECT region_seq,region_name FROM p_region");
?>	



    <select name="selRegion" id="selRegion" onchange="change1()">
        <option value=0>----지역선택----</option>
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
    <select name="selBranch" id="selBranch" onchange="change2()">
        <option value=0>----지점선택----</option>
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

    $selectedDate = $_POST [ "selDate" ];
    
?>
	            <form method = "POST" action = "<?php echo $_SERVER [ 'PHP_SELF' ] ?>" >
	                <input onchange="change3()" type = "date" name = "selDate" id = "selDate" value =<?php echo $selectedDate ?> > 
	            </form>
            </span>
        </div>
    </div>
        </section>
<?php

?>


        <section class="select_branch_img"></section>



        <section class="res_list">	
        
        <div class="info_box">
            <h5>이벤트</h5>
        </div>



        <div class="inner container">
            <ul>
<?php
 
    $result = mysqli_query($connect, "SELECT theme_number, branch_seq from p_theme GROUP by theme_number,branch_seq having branch_seq = $branch_seq");
        $f = 0;     // 아래 sql문에서 limit 사용할때 사용
        $l = $f+1;  // $f+1값이 사용 안되서 변수 하나 더 선언


    while($data = mysqli_fetch_array($result)){
        
        $result2 = mysqli_query($connect, "SELECT theme_name, theme_level, theme_scare, theme_people from p_theme group by theme_number,branch_seq having branch_seq=$branch_seq limit $f,$l ");
        if($data2 = mysqli_fetch_array($result2)){
?>
    
                    <li id="theme_ac_186">
                        <h2 class="title"> &nbsp;<?= $data2['theme_name'] ?> <a href="javascript:void(0);" onclick="pop_detail(186);">[자세히 보기]</a></h2>

                        <div class="info">
                            <div class="level">
                                <span>난이도:</span>
<?php
        for($i=0;$i<$data2['theme_level'];$i++){
?>
                                <img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/ico_star_black.png"></img>
<?php
        }
?>
                            </div>

                            
                            <div class="level">
                                <span>공포도</span>
<?php
        for($i=0;$i<$data2['theme_scare'];$i++){
?>                                
                                <img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/ico_star_black.png"></img>
                                
<?php
        }
?>
                            </div>

                            <div class="level">
                                <span>인원</span>
                                    <?= $data2['theme_people'] ?>
                            </div>
                         <div class="real_row">
<?php
        }
        
        $theme_number =  $data['theme_number'];  //sql문에 안들어가서 변수로 선언
        $result3 = mysqli_query($connect, "SELECT DATE_FORMAT(theme_start,'%H:%i') as theme_start , theme_number FROM p_theme where branch_seq = $branch_seq and theme_number = $theme_number order by theme_start");
        
        $st = 0; 
        ?>
                            <div class="row">
<?php
        while($data = mysqli_fetch_array($result3)){
            $theme_number =  $data['theme_number'];

            for($i=0; $i<8;$i++){   //예약정보 없으면 예약 가능한 상태로 만든다
                $r[$i] = "Y";
            }

        $result4 = mysqli_query($connect, "SELECT * from p_reservation_status where reservation_status_date='$selectedDate' and branch_seq=$branch_seq and theme_number=$theme_number");
        while($data3 = mysqli_fetch_array($result4)){

            $r[0] = $data3['booking_possibility_1'];
            $r[1] = $data3['booking_possibility_2'];
            $r[2] = $data3['booking_possibility_3'];
            $r[3] = $data3['booking_possibility_4'];
            $r[4] = $data3['booking_possibility_5'];
            $r[5] = $data3['booking_possibility_6'];
            $r[6] = $data3['booking_possibility_7'];
            $r[7] = $data3['booking_possibility_8'];
        }
        

        $now = date("Y-m-d H:i")."<br>";
        $rev = $selectedDate." ".$data['theme_start'];     

        if($rev < $now){   //시간이 지나면 예약 불가로 지정
             $r[$st] = "N";
        }


        if($r[$st] == "Y"){
?>
<!-- 조건 지역,지점,날짜,테마번호 가 조건에 맞으면 "예약가능 버튼"/ 예약되어있으면 "예약 불가능 버튼" -->               
           
                    

                          
                                    <div class="col true">
                                                <a href="rev.php?branch_seq=<?=$branch_seq?>&theme_number=<?=$theme_number?>&selectedDate=<?=$selectedDate?>&theme_start=<?=$data['theme_start']?>&st=<?= $st ?>">
                                            
                                            <p class="time"><?= $data['theme_start'] ?></p>
                                            <p class="state">예약가능</p>
                                            <?php $st++?>
                                        </a>
                                    </div>
                                    
                           
                        
<?php
        }else if($r[$st] == "N"){
?>
                           
                                    <div class="col false">
                                          <div>
                                            <p class="time"><?= $data['theme_start'] ?></p>
                                            <p class="state">예약불가</p>
                                            <?php $st++?>
                                        </div>  
                                    </div>
                                    
                            
<?php
        }

            }
        
?>
                            </div>
                        </div>
                    </li>
<?php 
        $f++;
    }
?>

                </ul>
        </div>
        </section>

        <input type="hidden" name="selectedRegion">
        <input type="hidden" name="selectedBranch">
        <input type="hidden" name="selectedDate">
</form>

<?php
    mysqli_close($connect); 
?>



<footer id="footer">
                <section class="footer_top">
                    <div class="inner container">
                        <ul class="footer_list">
                            <li><a href="#">개인정보취급방침</a></li>
                            <li><a href="#">이용약관</a></li>
                            <li><a href="branch.php">지점소개</a></li>
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
                               <li><span> 통신판매업 신고 </span> 2023-신구대-212호 </li>
                               <!-- 190926 요청에 따라 연락 이메일 교체 -->
                                <li><span>대표전화</span> 1111.2222  &nbsp;&nbsp;  / &nbsp;&nbsp;  E-mail shingucompany@naver.com<!--info@shingucompany.co.kr--></li>
                            </ul>
                            <div class="copyright">Copyright ⓒ Escape from the Present. All rights reserved.</div>
                        </div>
                            
                </section>
            </footer>
    </body></html>
    
