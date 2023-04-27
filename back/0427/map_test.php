<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3419.402726742018!2d127.26062291903735!3d37.41019102409123!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cab797a34ae85%3A0x7300f0d37ff3bc06!2z7J2066eI7Yq4IOqyveq4sOq0keyjvOygkA!5e0!3m2!1sko!2skr!4v1682332727570!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!-- 실제 사용할 코드  -->

<?php
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result = mysqli_query($connect, "SELECT branch_map FROM p_branch where branch_seq=1");
	$count = mysqli_num_fields($result);


while($data = mysqli_fetch_array($result)){
?>
		    
<iframe src="<?= $data['branch_map'] ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php
}
?>

<!-- 여기까지 -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.806064367405!2d126.94193881202207!3d37.512491971936086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9f67c6d76753%3A0x54897c1fae804a36!2z7IWc66Gd7ZmI7KaI64W465-J7KeE7KCQ!5e0!3m2!1sko!2skr!4v1682516670775!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</body>
</html>