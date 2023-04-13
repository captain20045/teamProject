<!DOCTYPE html>

<html>

<body> 
<?php
	$box1="13";
	$no="예약불가";
	$yes="예약가능";
	if($box1=="13"){
?>
		<button type="button" onclick="alert('Hello World!')"><?= $yes ?></button>
<?php		
	}else{
?>
		<button type="button" onclick="alert('Hello World!')" disabled><?= $no ?></button>
<?php
	}
?>



</body>

</html>