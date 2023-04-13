<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>콘텐츠 목록</title>
    <script>
		function change1(){
			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.h.value= obj[i].value;
			    }
		    }
			document.f3.submit();
		}
		
		function change2(){
			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.h.value= obj[i].value;
			    }
		    }
			
			var obj2 = document.getElementById("classname2");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.h2.value= obj2[i].value;
			    }
		    }
			document.f3.submit();
		}

		function change3(){

			var obj = document.getElementById("classname1");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.h.value= obj[i].value;
			    }
		    }
			
			var obj2 = document.getElementById("classname2");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.h2.value= obj2[i].value;
			    }
		    }

			var obj3 = document.getElementById("testDate");
			for (i=0;i<obj3.length;i++ ){
				if(obj3[i].selected){
					document.f3.h3.value= obj3[i].value;
			    }
		    }
			document.f3.submit();
		}
    </script>
</head>
<body>
<form name="f3" method="POST" action="reservation_page1.php">
<?php
    $date = $_POST['h3'];
	if(strlen($date) == 0){	
		$date = date('y-m-d');
	}else{
		$date = $_POST['h3'];
	}
	
	$region_seq = $_POST['h'];
	if(strlen($region_seq) == 0){	
		$region_seq = 1;
	}else{
		$region_seq = $_POST['h'];
	}
	
	$branch_seq = $_POST['h2'];
	if(strlen($branch_seq) == 0){	
		$branch_seq = 1;
	}else{
		$branch_seq = $_POST['h2'];
	}
	
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result = mysqli_query($connect, "SELECT region_seq,region_name FROM p_region where region_seq=$region_seq");
	$count = mysqli_num_fields($result);
?>	
  <table style="width:90%">
      <tr>
	  <td align="left" colspan="2">콘텐츠분류
<?php
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result2 = mysqli_query($connect, "SELECT region_seq,region_name FROM p_region");
?>	
    &nbsp;<select name="classname1" id="classname1" onchange="change1()">
<?php
    while($data = mysqli_fetch_array($result2)){
		if($data['region_seq'] == $region_seq){
?>
		    <option value="<?php echo $data['region_seq']; ?>"selected><?php echo $data['region_name']; ?>
<?php
        }else{
?>
		    <option value="<?php echo $data['region_seq']; ?>"><?php echo $data['region_name']; ?>
<?php		
		}
	}
?>	
	</select>
<?php	
	$result3 = mysqli_query($connect, "SELECT branch_seq, region_seq, branch_name FROM p_branch where region_seq=$region_seq");
?>	
    &nbsp;<select name="classname2" id="classname2" onchange="change2()">
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
	
<?php
	$v_testDate = $_POST [ "testDate" ];

	if (! empty ( $v_testDate )){
		$newTestDate = new DateTime( $v_testDate );
		$dayInt = $newTestDate ->format( "w" );
		$day = [ "일" , "월" , "화" , "수" , "목" , "금" , "토" ];
	}
?>
	<form method = "POST" action = "<?php echo $_SERVER [ 'PHP_SELF' ];?>" >
	<input onchange="change3()" type = "date" name = "testDate" id = "testDate" value =<?php echo $v_testDate ?> > 
	<!-- <input type = "submit" value = "조회" /> -->
	<br><br>
	</form>




<?php	
	$a="Y";
	$b="Y";
	$c="Y";
	$d="Y";
	$e="Y";
	$f="Y";
	$g="Y";
	$h="Y";
	
	$YY = (int)date("Y");
	$MM = date("m");
	$DD = date("d");
	$AA = $MM.$DD;
	$calc = (int)$AA;
	
	$reservation_status_date = $_POST [ "testDate" ];

	$connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
	
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
	echo $reservation_status_date;
	$str1 = (int)substr($reservation_status_date, 0, 4); 
	$str2 = substr($reservation_status_date, 5, 2); 
	$str3 = substr($reservation_status_date, 8, 2); 
	$str4 = $str2.$str3;
	$str5 = (int)$str4;
	
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
	
	if($str5<$calc){
		$HH="24";
	}else if($str5>$calc){
		$HH="08";
	}else if($str5==$calc){
		$HH=date("H");
	}

	if($HH<$box1 && $a=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=09&reservation_status_date=<?=$reservation_status_date ?>'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}

	if($HH<$box2 && $b=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=11'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}

	if($HH<$box3 && $c=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=13'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box4 && $d=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=15'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box5 && $e=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=17'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box6 && $f=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=19'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box7 && $g=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=21'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	if($HH<$box8 && $h=='Y'){
?>
		<button type="button" onclick="window.location.href='http://localhost/reservation_page2.php?reservation_time=23'"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" disabled><?= $no ?></button>
<?php
	}
	
	mysqli_close($connect);
?>
	  </td>
	</tr>
  </table>
  <input type="hidden" name="h">
  <input type="hidden" name="h2">  
  <input type="hidden" name="h3">
</form>
</body>
</html>