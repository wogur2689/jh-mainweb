<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sweet my home</title>
	<link rel="stylesheet" type="text/css" href="css/mypage.css?after">
</head>
<body>
<div id="link">
        <a href="https://www.naver.com" target="_blank">네이버</a> |
        <a href="https://www.daum.net" target="_blank">다음</a> |
        <a href="https://www.youtube.com" target="_blank">유튜브</a> |
        <a href="https://www.facebook.com" target="_blank">페이스북</a> |
        <a href="http://www.dongyang.ac.kr" target="_blank">동양미래대학교</a> |
        <a href="http://www.kosaf.go.kr" target="_blank">한국장학재단</a> |
        <a href="http://www.google.co.kr" target="_blank">구글</a> |
        <a href="http://www.codeit.kr" target="_blank">코드잇</a> |
        <a href="http://www.instagram.com" target="_blank">인스타그램</a> |
        <a href="http://www.kakaocorp.com/service/KakaoTalk?lang=ko" target="_blank">카카오톡</a> |
        <a href="http://line.me" target="_blank">라인</a> |
        <a href="http://twitter.com" target="_blank">트위터</a> |
        <a href="http://www.zoom.us" target="_blank">ZOOM</a> |
        <a href="https://github.com" target="_blank">github</a> |
        <a href="https://comento.kr" target="_blank">코멘토</a> |
        <a href="https://www.comcbt.com" target="_blank">cbt</a> |
        <a href="https://www.codingworldnews.com" target="_blank">코딩월드뉴스</a>
    </div>
<div id="container">
	<div id="header">
		<h1 class="header_text">sweet my home.</h1>
		<h4 class="header_text">안녕하세요!</h4>
	</div>
		<div id="contents" align="center">
			<img src="images/covid-19.jpg" width="780" height="100"><br>
			<form method=get action="https://www.google.com/search" target="_blank" accept-charset="utf-8" onsubmit="emulAcceptCharset(this)">
			<b>Google 검색 :</b> <input type=text name=q size=20 maxlength=50 placeholder="Google search" style="text-align:center; font-size:15px;">
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
						<a href="myhome.php">홈으로</a>
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
						<a href="membership_form.html">회원가입</a>
					</div>
		<?php
			}
		?>
		</div>
		<div id="contents-data">
            <h2>내 정보</h2>
            <?php
                $connect = mysqli_connect('localhost:3305', 'root', '', 'wogur_db') or die("접속 실패하였습니다.");
                $sql = "select * from member where id='$userid'";   
                $ret = mysqli_query($connect, $sql);
                $row = mysqli_fetch_array($ret);

                $id = $row["id"];
                $name = $row["name"];
                $password = $row["password"];
                $gender = $row["gender"];      
                $phoneNumber = $row["phoneNumber"];
                $email = $row["email"];
                $age = $row["age"];
	            mysqli_close($connect);
            ?>
            <form name="change" method="POST" action="mypage_update.php">
                <table>
                    <tr>
                        <td>
                            <span class="data">
                                아이디
                            </span>
                        </td>
                        <td>
                            <input type="text" name="id" placeholder="수정 불가능합니다." readonly="true">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                이름
                            </span>
                        </td>    
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                비밀번호
                            </span>
                        </td>
                        <td>
                            <input type="password" name="pass" placeholder="비밀번호를 입력하세요.">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                성별
                            </span>
                        </td>
                        <td>
                            <input type="radio" name="gender" value="M" checked require>남
                            <input type="radio" name="gender" value="F">여
                        </td>    
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                전화번호
                            </span>
                        </td>
                        <td>
                            <select name="phone1">
                                <option>선택</option>
                                <option value="010">010</option>
                                <option value="011">011</option>
                            </select>-
                            <input type="text" size="4" maxlength="4" name="phone2" require>-
                            <input type="text" size="4" maxlength="4" name="phone3" require>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                이메일
                            </span>
                        </td>
                        <td>
                            <input type="text" size="10" name="email1">
                            @
                            <select name="email2"> 
                                <option>선택</option>
                                <option value="naver.com">naver.com</option>
                                <option value="daum.com">daum.com</option>
                                <option value="gmail.com">google.com</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="data">
                                나이
                            </span>
                        </td>
                        <td>
                            <input type="text" size="10" name="age">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="수정하기!">
                            <input type="reset" value="리셋하기!">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="footer" align="center">
		<h2>이용해주셔서 감사합니다!</h2>
		<input type="button" value="홈페이지 닫기" onclick="window.close()">
		<p>제작자: 길재혁</p>
	</div>
</div>

</body>
</html>