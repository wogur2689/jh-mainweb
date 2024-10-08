<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>sweet my home</title>
	<link rel="stylesheet" type="text/css" href="css/board_list.css?after">
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
			<h3> 게시판 목록 </h3>
			<ul>
				<li class="board_header">
					<span class="col1">번호</span>
					<span class="col2">제목</span>
					<span class="col3">글쓴이</span>
					<span class="col4">첨부파일</span>
					<span class="col5">등록일</span>
					<span class="col6">조회</span>
				</li>
			<?php
				if(isset($_GET["page"]))
					$page = $_GET["page"];
				else
					$page = 1;
				$con = mysqli_connect('localhost:3305', 'root', '', 'wogur_db') or die("접속 실패하였습니다.");
				$sql = "select * from board order by num desc"; 
				$result = mysqli_query($con, $sql);
				$total_record = mysqli_num_rows($result); //전체 글 수
				$scale = 10;
				//전체 페이지 수($total_page) 계산
				if ($total_record % $scale == 0)     
					$total_page = floor($total_record/$scale);      
				else
					$total_page = floor($total_record/$scale) + 1;  
				// 표시할 페이지($page)에 따라 $start 계산  
				$start = ($page - 1) * $scale;      
				$number = $total_record - $start;
			   	for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
			   	{
				    mysqli_data_seek($result, $i);
				    // 가져올 레코드로 위치(포인터) 이동
				    $row = mysqli_fetch_array($result);
				    // 하나의 레코드 가져오기
					$num         = $row["num"];
					$id          = $row["id"];
					$name        = $row["name"];
					$subject     = $row["subject"];
				    $regist_day  = $row["regist_day"];
				    $hit         = $row["hit"];
				    if ($row["file_name"])
				    	$file_image = "<img src='images/file.gif'>";
				    else
				      	$file_image = "X";
					?>
					<li class="board_lists">
						<span class="col1"><?=$number?></span>
						<span class="col2"><a class="title" href="board_view.php?num=<?=$num?>&page=<?=$page?>"><?=$subject?></a></span>
						<span class="col3"><?=$id?></span>
						<span class="col4"><?=$file_image?></span>
						<span class="col5"><?=$regist_day?></span>
						<span class="col6"><?=$hit?></span>
					</li>	
				<?php
		   	   		$number--;
		 		}
		   		mysqli_close($con);
				?>
			    </ul>
			<ul id="page_num"> 	
			<?php
			if ($total_page>=2 && $page >= 2)	
			{
				$new_page = $page-1;
				echo "<li><a href='board_list.php?page=$new_page'>◀ 이전</a> </li>";
			}		
			else 
				echo "<li>&nbsp;</li>";

		   	// 게시판 목록 하단에 페이지 링크 번호 출력
		   	for ($i=1; $i<=$total_page; $i++)
		   	{
				if ($page == $i)     // 현재 페이지 번호 링크 안함
				{
					echo "<li><b> $i 페이지</b></li>";
				}
				else
				{
					echo "<li><a href='board_list.php?page=$i'> $i 페이지</a><li>";
				}
		   	}
		   	if ($total_page>=2 && $page != $total_page)		
		   	{
				$new_page = $page+1;	
				echo "<li> <a href='board_list.php?page=$new_page'>다음 ▶</a> </li>";
			}
			else 
				echo "<li>&nbsp;</li>";
		?>
		</ul> <!-- page -->	    	
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