<?php
	header("Content-Type: text/html; charset=UTF-8");
	session_start();

	$conn = new mysqli("localhost", "alsrbxo0428", "rbxo0428!", "alsrbxo0428");
	mysqli_query($conn,'SET NAMES utf8');

	$id			 = $_POST['id'];
	$password	 = $_POST['password'];

	$sql = "select * from member where id = '$id' and password = '$password'";
	$res = $conn->query($sql);

	if($res -> num_rows > 0) {
		$_SESSION['id'] = $id;
		$_SESSION['password'] = $password;
		$_SESSION['name'] = $name;

		echo "<script>location.href='../main.php';</script>";

	}
	else {
		echo "	<script>alert('아이디와 비밀번호를 확인해주세요.');</script>
				<script>location.href='login.html';</script>";
	}
?>