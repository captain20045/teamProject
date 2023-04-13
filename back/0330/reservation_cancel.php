<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <!--<meta http-equiv="refresh" content="2;url=localhost/reservation.php"/>-->
  <title>DB 등록</title>
</head>
<body>
<?php
	$reservation_seq = $_GET['reservation_seq'];
	$reservation_date = $_GET['reservation_date'];
	$reservation_time = $_GET['reservation_time'];
	
	$connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    
	$sql = "delete from p_reservation where reservation_seq = '$reservation_seq'";
	
	$result = mysqli_query($connect,$sql);
	
	if($result){
		echo "데이터 등록 성공<br>";
	}else{
		echo "데이터 등록 실패<br>";
	}
	
	if($reservation_time == "09"){
		$str3 = " booking_possibility_1 = 'Y' ";
	}else if($reservation_time == "11"){
		$str3 = " booking_possibility_2 = 'Y' ";
	}else if($reservation_time == "13"){
		$str3 = " booking_possibility_3 = 'Y' ";
	}else if($reservation_time == "15"){   
		$str3 = " booking_possibility_4 = 'Y' ";
	}else if($reservation_time == "17"){   
		$str3 = " booking_possibility_5 = 'Y' ";
	}else if($reservation_time == "19"){   
		$str3 = " booking_possibility_6 = 'Y' ";
	}else if($reservation_time == "21"){   
		$str3 = " booking_possibility_7 = 'Y' ";
	}else if($reservation_time == "23"){   
		$str3 = " booking_possibility_8 = 'Y' ";
	}
	
	$sql2 = "update p_reservation_status set " . $str3 . " where reservation_status_date = '$reservation_date'";
	
	$result = mysqli_query($connect,$sql2);
	
	if($result){
		echo "데이터 등록 성공<br>";
	}else{
		echo "데이터 등록 실패<br>";
	}
	
	mysqli_close($connect);
?>
</body>
</html>