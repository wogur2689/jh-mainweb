<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>sweet my home</title>
	<link href="myhome.css" rel="stylesheet">
</head>
<body>
<div align="center">
	<a href="https://www.naver.com" style="color:black;" target="_blank">네이버</a> |
	<a href="https://www.daum.net"  style="color:black;" target="_blank">다음</a> |
	<a href="https://www.youtube.com" style="color:black;" target="_blank">유튜브</a> |
	<a href="https://www.facebook.com" style="color:black;" target="_blank">페이스북</a> |
	<a href="http://www.dongyang.ac.kr" style="color:black;" target="_blank">동양미래대학교</a> |
	<a href="http://www.kosaf.go.kr" style="color:black;" target="_blank">한국장학재단</a> |
	<a href="http://www.google.co.kr" style="color:black;" target="_blank">구글</a> |
	<a href="http://www.itsdong.com" style="color:black;" target="_blank">아이티동스쿨</a> |
	<a href="http://www.codeit.kr" style="color:black;" target="_blank">코드잇</a> |
	<a href="http://www.instagram.com" style="color:black;" target="_blank">인스타그램</a> |
	<a href="http://license.korcham.net" style="color:black;" target="_blank">대한상공회의소 자격평가사업단</a> |
	<a href="http://www.kakaocorp.com/service/KakaoTalk?lang=ko" style="color:black;" target="_blank">카카오톡</a> |
	<a href="http://line.me" style="color:black;" target="_blank">라인</a> |
	<a href="http://twitter.com" style="color:black;" target="_blank">트위터</a> |
	<a href="http://www.zoom.us" style="color:black;" target="_blank">ZOOM</a> 
</div>
<div id="container">

	<div id="header">
		<h1 class="header_text">sweet my home.</h1>
		<h4 class="header_text">게시판!</h4>
	</div>

	<div id="contents" align="center">
		<form method=get action="https://www.google.com/search" target="_blank" accept-charset="utf-8" onsubmit="emulAcceptCharset(this)">
		<b>Google 검색 :</b> <input type=text name=q size=20 maxlength=50 placeholder="Google search" style="text-align:center; font-size:15px;">
		<button type="submit" style="width:80px; height:25px; bakground:#4d90fe; color=:#ffffff font-size:14px;">검 색</button>
		</form>
	</div>
		<div id="sidebar-loginbox">
		<?php 
			session_start();
			if(isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
			else $userid = " ";
			$logged ="".$userid."님 환영합니다.";
			if($userid != " ") {
		?>
					<p><?=$logged?></p>
					<p>
						<a href="board_list.php">게시판</a>
						<a href="#">마이페이지</a>
						<a href="logout.php">로그아웃</a></p>
		<?php
			} else { 
		?>
					<a href="login.html">로그인</a>
					<a href="membership_form.php"> 회원가입</a>
		<?php
			}
		?>
		</div>
		<div align="center" id="contents-board">
			<h3 id="board_title">
	    		게시판 > 글 쓰기
		</h3>
	    <form  name="board_form" method="post" action="board_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$userid?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='board_list.php'">목록</button></li>
			</ul>
	    </form>


		</div>  <!--end of contents-Timetable-->
		
		<div id="sidebar-weather">
		<IFRAME src=http://www.nalsee.com/nalsee/menu.html?id=jm5686 WIDTH=100% HEIGHT=100% frameborder=no scrolling=no></iframe>
		</div>

		<div id="footer" align="center">
		<h2>이용해주셔서 감사합니다!</h2>
		<input type="button" value="홈페이지 닫기" onclick="window.close()">
		<p>제작자: 길재혁</p>
	</div>
</div>

</body>
</html>