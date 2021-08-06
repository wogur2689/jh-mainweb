<?
	session_start();
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>myhome회원가입!</title>
	<link href="myhome.css" rel="stylesheet">
	<script>
		function check_id() {
			window.open("check_id.php?id="document.membership_form.id.value,"IDcheck","left=200,top=200.width=200,height=60,scrollbars=no,resizable=yes");
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
		<h4 class="header_text">회원가입!</h4>
	</div>
	<div class="contents_member">
	 <h3> ▶회원가입</h3>
	  <form neme="membership_form" method="post" action="membership_insert.php">
		<table border="1px" width="740px" cellspacing="1" cellpadding="6">
			<tr>
				<td align="right">* 아이디 :</td>
				<td style="border-right:0;"><input type="text" size="15" minlength="4" maxlength="10" name="id" value="guest" autofocus require>
				<small style="color:red;">4~10자리 이내의 문자와 숫자</small>
				</td>
				<td id="id_DISTINCT" align="center">
						<a href="#"><img src="images/DISTINCT.jpg" width="120px" onclick="check_id()"></a>
				</td>
			</tr>
			<tr>
				<td align="right">* 이름 :</td>
				<td colspan="2"><input type="text" size="15" maxlength="5" name="name" require></td>
			</tr>
			<tr>
				<td align="right">* 비밀번호 :</td>
				<td colspan="2"><input type="password" size="15" minlength="4" maxlength="10" name="password" value="1234" require></td>
			</tr>
			<tr>
				<td align="right">* 성별 :</td>
				<td colspan="2"><input type="radio" name="gender" value="M" checked require>남
				<input type="radio" name="gender" value="F">여</td>
			</tr>
			<tr>
				<td align="right">* 전화번호 :</td>
				<td colspan="2"><select name="phone1">
						<option>선택</option>
						<option value="010">010</option>
						<option value="011">011</option>
					</select>-
				<input type="text" size="4" maxlength="4" name="phone2" require>-
				<input type="text" size="4" maxlength="4" name="phone3" require></td>
			</tr>
			<tr>
				<td align="right"> 이메일 :</td>
				<td colspan="2">
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
				<td align="right"> 나이 :</td>
				<td colspan="2">
					<input type="text" size="10" name="age">
				</td>
		</table>
	<br>
	<table width="740px">
	<tr>
		<td align="center">
		<div class="contents_member_finish">
			<input type="submit" value="확인">
			<input type="reset" value="초기화">
		</div>
		</td>
	</tr>
	</table>
	</form>
	</div>

	<div id="sidebar-comhal">	
		<h3>이책은 어떠신가요?</h3>
		<img src="images/gilbut.jpg" width="100px" height="130px">
		<dl>
	  	  	<dt>이건 어떠세요?</dt>
	  	  	<dd>책제목: 2021 시나공<br> 
	  	  	컴퓨터활용능력 1급실기</dd>
	  	  	<dd>가격:36000원</dd>
	 		<dd>출판사:길벗</dd>
		</dl>
	</div>
	<div id="Toggi">
		<img src="images/ToGGi.jpg" width="1050px" height="500px">
	</div>
</div>
</body>
</html>

