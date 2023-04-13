<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <!--<meta http-equiv="refresh" content="2;url=localhost/reservation.php"/>-->
  <title>DB 등록</title>
</head>
<body>
	<table style="width:90%">
    <tr>
	  <th bgcolor="#FFEECC">고객명</th>
	  <th bgcolor="#FFEECC">예약날짜</th>
	  <th bgcolor="#FFEECC">예약시간</th>
	  <th bgcolor="#FFEECC">테마</th>
	  <th bgcolor="#FFEECC">가격</th>
	  <th bgcolor="#FFEECC">결제방식</th>
	</tr>
<?php
	$connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
	$customer_phone_number="010-1234-5678";
	$cancel="예약취소";
	
	$sql = "select reservation_seq, customer_name, reservation_date, reservation_time, theme_name, price, purchase_way from p_reservation where customer_phone_number='$customer_phone_number'";

	$result = mysqli_query($connect,$sql);

    while($rows = mysqli_fetch_row($result)){
		echo "<tr>";
		for($a = 1;$a < 7;$a++){
			echo "<td align=\"center\">$rows[$a]</td>";
        } 
		echo "<td align=\"center\"><a href=\"http://localhost/reservation_cancel.php?reservation_seq={$rows[0]}&reservation_date={$rows[2]}&reservation_time={$rows[3]}\">$cancel</a></td>";
		echo "</tr>";
    }
    mysqli_close($connect);
?>
	</table>
</body>
</html>