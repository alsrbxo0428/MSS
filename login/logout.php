<?php
	session_start();
	$session=session_destroy();
	if($session){
		echo "<script>location.href='../main.php';</script>";
	}
?>