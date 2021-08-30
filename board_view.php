<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>sweet my home</title>
	<link rel="stylesheet" type="text/css" href="css/board_view.css?after">
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
		</ul>
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
							<a href="myhome.php">Home</a>
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
        <div id="contents-board">
		<h2>내용보기</h2>
        <?php
            $num  = $_GET["num"];
            $page  = $_GET["page"];
            $con = mysqli_connect("localhost", "root", "", "wogur_db");
            $sql = "select * from board where num=$num";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            $id      = $row["id"];
            $name      = $row["name"];
            $regist_day = $row["regist_day"];
            $subject    = $row["subject"];
            $content    = $row["content"];
            $file_name    = $row["file_name"];
            $file_type    = $row["file_type"];
            $file_copied  = $row["file_copied"];
            $hit          = $row["hit"];
            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br>", $content);

            $new_hit = $hit + 1;
            $sql = "update board set hit=$new_hit where num=$num";   
            mysqli_query($con, $sql);
        ?>		
	    <ul id="view_content">
			<li>
				<span class="col"><b>제목 :</b> <?=$subject?></span>
				<span class="col"><b>작성자 :</b> <?=$id?></span>
                <span class="col"><b>날짜 :</b> <?=$regist_day?></span>
                <span class="col"><b>첨부파일 :</b>
                <?php
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "data/".$real_name;
						$file_size = filesize($file_path);

						echo "$file_name ($file_size Byte)
			       		<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a>";
			           	}
				?>
               </span>
			</li>
			<li class="col_content">
                <b>내용 :</b><div class="col_card"><?=$content?></div>
			</li>		
	    </ul>
				<button class="gle" onclick="location.href='board_list.php?page=<?=$page?>'">목록</button>
				<button class="gle" onclick="location.href='board_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button>
				<button class="gle" onclick="location.href='board_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button>
				<button class="gle" onclick="location.href='board_form.php'">글쓰기</button>
		</div>  <!-- board_box -->
		<div id="footer" align="center">
		<h2>제목을 클릭하시면 게시물을 보실 수 있습니다. <br>이용해주셔서 감사합니다!</h2>
		<input type="button" value="홈페이지 닫기" onclick="window.close()">
		<p>제작자: 길재혁</p>
	</div>
</div>

</body>
</html>