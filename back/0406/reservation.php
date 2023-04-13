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
	$reservation_date = "2023-04-01";
	$reservation_time = "09";
	$play_time = "120";
	$theme_name = "방탈출";
	$customer_name = "홍길동";
	$customer_phone_number = "010-1234-5678";
	$booked_member = "3";
	$price = "20000";
	$purchase_way = "카드결제";
	
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
	
	$sql2 = "select count(*) from p_reservation_status where reservation_status_date = '$reservation_date'";
	$result = mysqli_query($connect,$sql2);
	$list = mysqli_num_rows($result);
	
	if(!$list){
		$count = 0;
	}else{
		while($rows = mysqli_fetch_row($result)){
			$count = $rows[0];
		}
	}
	
	if($reservation_time == "09"){
		$booking_possibility_1 = "N";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "11"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "N";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "13"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "N";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "15"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "N";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "17"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "N";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "19"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "N";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "21"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "N";
		$booking_possibility_8 = "Y";
	}else if ($reservation_time == "23"){
		$booking_possibility_1 = "Y";
		$booking_possibility_2 = "Y";
		$booking_possibility_3 = "Y";
		$booking_possibility_4 = "Y";
		$booking_possibility_5 = "Y";
		$booking_possibility_6 = "Y";
		$booking_possibility_7 = "Y";
		$booking_possibility_8 = "N";
	}

	if($reservation_time == "09"){
		$str3 = " booking_possibility_1 = 'N' ";
	}else if($reservation_time == "11"){
		$str3 = " booking_possibility_2 = 'N' ";
	}else if($reservation_time == "13"){
		$str3 = " booking_possibility_3 = 'N' ";
	}else if($reservation_time == "15"){
		$str3 = " booking_possibility_4 = 'N' ";
	}else if($reservation_time == "17"){
		$str3 = " booking_possibility_5 = 'N' ";
	}else if($reservation_time == "19"){
		$str3 = " booking_possibility_6 = 'N' ";
	}else if($reservation_time == "21"){
		$str3 = " booking_possibility_7 = 'N' ";
	}else if($reservation_time == "23"){
		$str3 = " booking_possibility_8 = 'N' ";
	}
	

	if($count == 0){
		
		$sql3 = "insert into p_reservation_status(reservation_status_date, theme_seq, booking_possibility_1, booking_possibility_2, booking_possibility_3, booking_possibility_4, booking_possibility_5, booking_possibility_6, booking_possibility_7, booking_possibility_8) values('$reservation_date',1,'$booking_possibility_1','$booking_possibility_2','$booking_possibility_3','$booking_possibility_4','$booking_possibility_5','$booking_possibility_6','$booking_possibility_7','$booking_possibility_8')";
		
	}else{
		$sql3 = "update p_reservation_status set " . $str3 . " where reservation_status_date = '$reservation_date'";
	}
   
	$result = mysqli_query($connect,$sql3);
	
	if($result){
		echo "데이터 등록 성공<br>";
	}else{
		echo "데이터 등록 실패<br>";
	}	

    mysqli_close($connect);

?>
</body>
</html>