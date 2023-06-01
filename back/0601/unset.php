<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['pw']);
		echo " <script>
	         location.replace('board.php');
	       </script> ";
?>