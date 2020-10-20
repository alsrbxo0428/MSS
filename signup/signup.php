<?php
	header("Content-Type: text/html; charset=UTF-8");

	$conn = new mysqli("localhost", "alsrbxo0428", "rbxo0428!", "alsrbxo0428");
	mysqli_query($conn,'SET NAMES utf8');

	$name		 = $_POST['name'];
	$id			 = $_POST['id'];
	$password	 = $_POST['password'];

	$sql = "insert into member (name, id, password) values ('$name', '$id', '$password')";
	$res = $conn->query($sql);

	echo "<script>location.href='../login/login.html';</script>";
?>