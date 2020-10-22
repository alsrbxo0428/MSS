<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width", inintial-scale="1", shrink-to-fit="no">
		<title>MSS에 오신 것을 환영합니다.</title>
		<link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
<!------------------------------------------css------------------------------------------>
		<!--bootstrap css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<!--bxSlider css-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<!------------------------------------------css end------------------------------------------>
<!------------------------------------------javascript------------------------------------------>
		<!--bootstrap js-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<!--bxSlider js-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

		<script>
			$(document).ready(function() {
				$('.slider').bxSlider({
					auto:true,
					pause:5000,
					responsive:false,
					touchEnabled:false
				});
			});
		</script>
<!------------------------------------------javascript end------------------------------------------>
	</head>
	<body>
<!------------------------------------------header------------------------------------------>
		<header>
		<?php
			header("Content-Type: text/html; charset=UTF8");
			session_start();
		?>
			<!--내비게이션바-->
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<a href="main.php" class="navbar-brand">MSS</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav ml-auto">
						<?php 
						if( (!isset($_SESSION['id'])) && (!isset($_SESSION['name'])) ){
							echo '	<li class="nav-item">
										<a href="login/login.html" class="nav-link">로그인</a>
									</li>
									<li class="nav-item">
										<a href="signup/signup.html" class="nav-link">회원가입</a>
									</li>';
							} 
							else {
							echo '	<li class="nav-item">
										<a href="login/logout.php" class="nav-link">로그아웃</a>
										</li>';
						} ?>
					</ul>
				</div>
			</nav>
			<!--로고 이미지-->
			<div style="background-color: gray; text-align: center"><a href="main.php">
			<img src="img/mainbanner.png" width="1350" height="200" alt="MSS"></a></div>
		</header>
<!------------------------------------------header end------------------------------------------>
<!------------------------------------------content------------------------------------------>
		<content>
			<div class="container my-container alert alert-secondary" style="text-align: center; margin-top: 15px">
				<h5>진행중인 행사</h5>
				<hr class="mb-3">
<!------------------------------------------bxSlider------------------------------------------>
				<div class="slider">
					<div><img src="./img/event_01.png"></div>
					<div><img src="./img/event_02.png"></div>
					<div><img src="./img/event_03.png"></div>
					<div><img src="./img/event_04.png"></div>
				</div>
<!------------------------------------------bxSlider end------------------------------------------>
			</div>
			<div class="container my-container alert alert-secondary" style="text-align: center; margin-top: 15px">
					<h4 style="margin: 10px"><strong>전체상품</strong></h4>
					<div class="row my-row" style="margin-top: 30px">
						<div class="col-md-4 col-sm-6 my-col">
							<div class="img">
								<a href="mugcup/mugcup.php"><img src="mugcup/img/mugmain.png" width="260" height="260" alt="mugcup"></a>
							</div>
							<div style="margin: auto">
								<a href="mugcup/mugcup.php" style="color: black">백자 무지 머그컵</a>
								<br><s style="color: #FF9090">5,000원</s>
								<h4>4,500원</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 my-col">
							<div class="img">
								<a href="case/case.php"><img src="case/img/casemain.png" width="260" height="260" alt="case"></a>
							</div>
							<div style="margin: auto">
								<a href="case/case.php" style="color: black">명함 카드 케이스</a>
								<br><s style="color: #FF9090">5,000원</s>
								<h4>4,500원</h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 my-col">
							<div class="img">
								<a href="frame/frame.php"><img src="frame/img/framemain.png" width="260" height="260" alt="frame"></a>
							</div>
							<div style="margin: auto">
								<a href="frame/frame.php" style="color: black">액자</a>
								<br><s style="color: #FF9090">5,000원</s>
								<h4>4,500원</h4>
							</div>
						</div>
					</div>
			</div>
		</content>
<!------------------------------------------content end------------------------------------------>
<!------------------------------------------footer------------------------------------------>
		<footer style="font-size: 15px; text-align: center">
			<div style="background-color: gray;">
				<div class="container my-container">
					<div class="row my-row">
						<div class="col-md-4 col-sm-6 my-col" style="margin-top: 10px; margin-bottom: 10px">
							<br>
							<h3><a href="https://www.kopo.ac.kr/incheon/content.do?menu=7235" style="color: black">인천폴리텍 정보통신과</a></h3>
							<h4>2학년B반 웹쇼핑몰팀</h4>
						</div>
						<div class="col-md-4 col-sm-6 my-col" style="margin-top: 10px; margin-bottom: 10px">
							<strong>프로젝트 팀원</strong>
							<li>1702100971 민규태</li>
							<li><a href="https://github.com/alsrbxo0428/MSS" style="color: black">프로젝트 소스파일</a></li>
							<strong>도움주신 분들</strong>
							<li>상품 이미지 - 서연범</li>
							<li>웹 디자인 조언 - 신재혁</li>
						</div>
						<div class="col-md-4 col-sm-6 my-col" style="margin-top: 10px; margin-bottom: 10px">
							<strong>프로젝트에 사용</strong>
							<li>코드에디터 - <a href="https://www.sublimetext.com/" style="color: black">Sublime Text3</a></li>
							<li>css, js - <a href="https://getbootstrap.com/" style="color: black">Bootstrap</a>, <a href="https://bxslider.com/" style="color: black">bxSlider</a></li>
							<li>로고 및 배너 제작 - <a href="https://www.miricanvas.com/" style="color: black">미리캔버스</a></li>
							<li>웹 호스팅 - <a href="https://www.dothome.co.kr/index.php" style="color: black">닷홈</a></li>
							<li>FTP설정 - <a href="https://filezilla-project.org/" style="color: black">Filezilla</a></li>
						</div>
					</div>
				</div>
			</div>
		</footer>
<!------------------------------------------footer end------------------------------------------>
		<h3 style="text-align: center; margin-top: 5px">한국폴리텍2대학 인천캠퍼스<br>2학년B반 웹 쇼핑몰 프로젝트</h3>
	</body>
</html>