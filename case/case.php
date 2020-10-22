<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width", inintial-scale="1", shrink-to-fit="no">
		<title>MSS에 오신 것을 환영합니다.</title>
		<link rel="shortcut icon" type="image/x-icon" href="../img/icon.png">
		<!--부트스트랩 css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
				<a href="../main.php" class="navbar-brand">MSS</a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarMenu">
					<ul class="navbar-nav ml-auto">
						<?php 
						if( (!isset($_SESSION['id'])) && (!isset($_SESSION['name'])) ){
							echo '	<li class="nav-item">
										<a href="../login/login.html" class="nav-link">로그인</a>
									</li>
									<li class="nav-item">
										<a href="../signup/signup.html" class="nav-link">회원가입</a>
									</li>';
							} 
							else {
							echo '	<li class="nav-item">
										<a href="../login/logout.php" class="nav-link">로그아웃</a>
										</li>';
						} ?>
					</ul>
				</div>
			</nav>
			<!--로고 이미지-->
			<div style="background-color: gray; text-align: center"><a href="../main.php">
				<img src="../img/mainbanner.png" width="1350" height="200" alt="MSS"></a></div>
		</header>
<!------------------------------------------header end------------------------------------------>
<!------------------------------------------content------------------------------------------>
		<content>
			<div class="container my-container" style="margin-top: 30px;  margin-bottom: 30px; width: 900px">
				<div class="row my-row alert alert-secondary">
					<div class="col-md-6 col-sm-6 my-col">
						<div class="img" style="text-align: center">
							<img src="img/casemain.png" alt="casemain" width="300" height="300">
						</div>
					</div>
					<div class="col-md-6 col-sm-6 my-col">
						<div class="info" style="text-align: right">
							<h2 class="prdname" style="margin-top: 30px">명함 카드 케이스</h2>
							<s style="color: #FF9090">5,000원</s>
							<h4>4,500원</h4>
							<h5>수량
								<select name="deptType1" id="deptType1" data-native-menu="false" data-mini="true" data-inline="true" tabindex="-1">
									<option> 1 </option>
									<option> 2 </option>
									<option> 3 </option>
									<option> 4 </option>
									<option> 5 </option>
								</select>
							</h5>
							<p style="color: gray">택배비 3000원</p>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal">장바구니</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#demoModal">바로구매</button>
						</div>
						<div class="modal" id="demoModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h2 class="modal-title">죄송합니다.</h2>
										<button type="button" class="close" data-dismiss="modal">
											<span>&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>본 기능은 구현되지 않은 기능입니다.</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal">닫기</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!------------------------------------------detail------------------------------------------>
			<div class="container detail alert alert-secondary" style="text-align: center;  width: 780px">
				<div class="container my-container">
					<h3>상세설명</h3>
					<hr class="mb-3">
				</div>
				<img src="img/casedetail.png" width="700" alt="casedetail">
			</div>
<!------------------------------------------other product------------------------------------------>
			<div class="container alert alert-secondary" style="text-align: center">
				<h4>다른상품</h4>
				<hr class="mb-3">
				<div class="row my-row">
						<div class="col-md-2 col-sm-2 my-col">
							<a href="../mugcup/mugcup.php"><img src="../mugcup/img/mugmain.png" width="180" height="180" alt="mugcup"></a>
						</div>
						<div class="col-md-2 col-sm-2 my-col">
							<a href="../frame/frame.php"><img src="../frame/img/framemain.png" width="180" height="180" alt="frame"></a>
						</div>
					</div>
				</div>
			</div>
<!------------------------------------------review------------------------------------------>
			<div class="container">
				<div class="row">
					<?php 
						if( (!isset($_SESSION['id'])) && (!isset($_SESSION['name'])) ){
							}
							else {
							echo '	<div class="col-md-12">
										<h4>리뷰 작성</h4>
										<textarea class="form-control" placeholder="간단히 리뷰를 입력해주세요." cols="30" rows="5"></textarea><br>
										<button type="button" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#demoModal">작성완료</button>
									</div>';
						} ?>
				</div>
				<div class="row alert alert-secondary" style="margin-top: 10px">
					<div class="col-md-12">
						<div class="userComments">
							<h4>Reviews</h4>
							<br>
							<div class="comment">
								<div class="user">민규태 <span class="time">2020-10-14</span></div>
								<div class="userComment">Review</div>
							</div>
							<hr class="mb-3">
							<div class="comment">
								<div class="user">민규태 <span class="time">2020-10-13</span></div>
								<div class="userComment">review</div>
							</div>
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
							<br>
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
		<!--부트스트랩 js-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>