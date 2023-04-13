<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <!--<meta http-equiv="refresh" content="2;url=localhost/reservation.php"/>-->
  <title>DB 등록</title>
</head>
<body>
<?php
	$branch_seq = "1";
	$theme_seq = "1";
	$YY = date("Y");
	$MM = date("m");
	$DD = date("d");
	$dat = $YY . "-" . $MM . "-" . $DD;
	$register_date = $dat;
	$reservation_date = "2023-03-22";
	$reservation_time = "13";
	$play_time = "120";
	$theme_name = "방탈출";
	$customer_name = "홍길동";
	$customer_phone_number = "010-1234-5678";
	$booked_member = "3";
	$price = "20000";
	$purchase_way = "카드결제";
	$tmin = "2";
	$tmax = "6";
	
	$connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    
	$sql = "insert into p_reservation(branch_seq,theme_seq,register_date,reservation_date,reservation_time,play_time,theme_name,customer_name,customer_phone_number,booked_member,price,purchase_way) values($branch_seq,$theme_seq,'$register_date','$reservation_date','$reservation_time','$play_time','$theme_name','$customer_name','$customer_phone_number',$booked_member,$price,'$purchase_way')";
	
	$result = mysqli_query($connect,$sql);
	
	if($result){
		echo "데이터 등록 성공<br>";
	}else{
		echo "데이터 등록 실패<br>";
	}
    
    mysqli_close($connect);

?>
</body>
</html>