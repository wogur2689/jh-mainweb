<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>sweet my home</title>
	<link href="css/board_form.css" type="text/css" rel="stylesheet">
	<script>
  	function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
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

	<div id="contents">		
		<strong>게시판 작성시 주의사항</strong>
		<p>
			1. 타인을 비방하는 행위, 선동하는 게시글은 삭제처리<br>
			2. 건전한 작성 부탁드립니다.
		</p>
		<form method=get action="https://www.google.com/search" target="_blank" accept-charset="utf-8" onsubmit="emulAcceptCharset(this)">
		<b>Google 검색 :</b> <input type=text name=q size=60 maxlength=50 placeholder="Google search" style="text-align:center; font-size:15px;">
		<button type="submit" style="width:80px; height:25px; bakground:#4d90fe; color=:#ffffff font-size:14px;">검 색</button>
		</form>
	</div>
		<div id="sidebar-loginbox">
		<?php 
			session_start();
			if(isset($_SESSION["userid"])) 
				$userid = $_SESSION["userid"];
			else 
				$userid = " ";
			$logged ="".$userid."님 환영합니다.";
			if($userid != " ") {
		?>
						<p>
							<?=$logged?>
						</p>
						<div class="login_tema_after">
							<a href="board_list.php">게시판</a>
						</div>
						<div class="login_tema_after">
						<a href="mypage.php">내정보</a>
						</div>
						<div class="login_tema_after">
						<a href="logout.php">로그아웃</a>
						</div>
		<?php
			} else { 
		?>
					<div class="login_tema_before">
						<a href="login.html">로그인</a>
					</div>
					<div class="login_tema_before">
						<a href="membership_form.php"> 회원가입</a>
					</div>
		<?php
			}
		?>
		</div>
		<div align="center" id="contents-board">
			<h3 id="board_title">
	    		 글 수정하기
			</h3>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "root", "", "wogur_db");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$name       = $row["name"];
	$subject    = $row["subject"];
	$content    = $row["content"];		
	$file_name  = $row["file_name"];
?>
	    <form  name="board_form" method="post" action="board_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">이름 : </span>
					<span class="col2"><?=$userid?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" class="subject" type="text" value="<?=$subject?>"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content" class="content"><?=$content?></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일 : </span>
			        <span class="col2"><?=$file_name?><input type="file" name="upfile"></span>
			    </li>
	    	    </ul>
				<button class="gle" type="button" onclick="check_input()">수정하기</button>
				<button class="gle" type="button" onclick="location.href='board_list.php'">목록</button>
	    </form>
	</div> <!-- board_box -->
		<div id="footer" align="center">
		<IFRAME src=http://www.nalsee.com/nalsee/menu.html?id=jm5686 WIDTH=100% HEIGHT=100% frameborder=no scrolling=no></iframe>
		<h2>이용해주셔서 감사합니다!</h2>
		<input type="button" value="홈페이지 닫기" onclick="window.close()">
		<p>제작자: 길재혁</p>
		</div>
</body>
</html>
