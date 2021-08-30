<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sweet my home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css?after">
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
						<a href="membership_form.html"> 회원가입</a>
					</div>
		<?php
			}
		?>
		</div>
		<div align="center" id="contents-Timetable">
		<table border="1"> 
		<caption id="2a2a"><strong><h2>나의 학교 시간표.</h2></strong></caption>
		<tr>
			<th></th>
			<td style="Color:red;">월</td>
			<td style="Color:orange;">화</td>
			<td style="Color:yellow;">수</td>
			<td style="Color:green;">목</td>
			<td style="Color:blue;">금</td>
		</tr>
		<tr>
			<th>9:00~10:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;"></td>
			<td style="Color:yellow;" rowspan="10"> <h3>공강이요.</h3></td>
			<td style="Color:green;" rowspan="4">C언어<br>애플리케이션</td>
			<td style="Color:blue;"></td>
		</tr>
		<tr>
			<th>10:00~11:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;"></td>
			<td style="Color:blue;" rowspan="3">웹서버<br>프로그래밍</td>
		</tr>
		<tr>
			<th>11:00~12:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;" rowspan="2">백세시대의<br>부자학</td>
		</tr>
		<tr>
			<th>12:00~13:00</th>
			<td style="Color:red;"></td>
		</tr>
		<tr>
			<th>13:00~14:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;" rowspan="4">지능형<br>시스템설계<br>(종합설계)</td>
			<td style="Color:green;"></td>
			<td style="Color:blue;"></td>
		</tr>
		<tr>
			<th>14:00~15:00</th>
			<td style="Color:red;" rowspan="3">지능형<br>소프트웨어<br>프로그래밍</td>
			<td style="Color:green;"></td>
			<td style="Color:blue;" rowspan="3">스마트앱<br>프로젝트</td>
		</tr>
		<tr>
			<th>15:00~16:00</th>
			<td style="Color:green;"></td>
		</tr>
		<tr>
			<th>16:00~17:00</th>
			<td style="Color:green;"></td>
		</tr>
		<tr>
			<th>17:00~18:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;">진로지도</td>
			<td style="Color:green;"></td>
			<td style="Color:blue;"></td>
		</tr>
		<tr>
			<th>18:00~19:00</th>
			<td style="Color:red;"></td>
			<td style="Color:orange;"></td>
			<td style="Color:green;"></td>
			<td style="Color:blue;"></td>
		</tr>
		</table>
		</div>  <!--end of contents-Timetable-->
		
		<div id="sidebar-weather">
		<IFRAME src=http://www.nalsee.com/nalsee/menu.html?id=jm5686 WIDTH=100% HEIGHT=100% frameborder=no scrolling=no></iframe>
		</div>
		
	
		<div id="contents-resume">
			<h2 align="center">코로나 현황(누적)</h2>
			<div class="covid">
				<span class="covid_19">치료중</span>
				<span class="covid_19">격리해제</span>
				<span class="covid_19">사망자</span>
				<span class="covid_19">확진자</span>
				<span class="covid_19" style="border-right: none;">기준일</span>
			</div>
			<div class="covid_data">
			<?php
			$ch = curl_init();
			$url = 'http://openapi.data.go.kr/openapi/service/rest/Covid19/getCovid19InfStateJson'; /*URL*/
			$queryParams = '?' . urlencode('ServiceKey') .'='.'5bYn08E59pd5Ra6rf2mgWSJkpQLh2ZF0aZzOnORHR8EUjgNfhPPmzujWj7aYKJyD0H4cPXj3A05r043diJ%2BIaA%3D%3D'; /*Service Key*/
			$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
			$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('1'); /**/
			$queryParams .= '&' . urlencode('startCreateDt') . '=' . urlencode(date("Ymd")); /**/
			$queryParams .= '&' . urlencode('endCreateDt') . '=' . urlencode(date("Ymd")); /**/

			curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
			$response = curl_exec($ch);
			curl_close($ch);

			echo $response;
			
			?>
			</div>
			<!--
 			<table border="1">
		 	  <caption><strong>홈페이지 제작자 소 개 서</strong></caption>
		  	    <tr>
		  	     <th rowspan="5">인<br>적<br>사<br>항</th>
		  	     <th colspan="2" rowspan="5"> <img src="나.jpg" width="70"height="80" alt="사진"></th>
		  	     <th rowspan="3">성<br><br>명</th>
		  	     <th>한 글</th>
		  	     <th>길 재 혁</th>
		  	     <th>업무/지역</th>
		  	     <th colspan="3">동양미래대학교</th>
		  	    </tr>
		  	    <tr>
		  	     <th>영 문</th>
		 	     <th>GIL, JAE-HYEOK</th>
		  	     <th>주민등록번호</th>
		  	     <th colspan="3">****** - *******</th>
		  	   </tr>
		  	   <tr>
		  	     <th>한 자</th>
		  	     <th>吉 在 赫</th>
		  	     <th>성 별</th>
		  	     <th>남</th>
		  	     <th>연령</th>
		  	     <th>23</th>
		 	   </tr>
		 	   <tr>
			     <th colspan="2">현 주 소<br>(실거주지)</th>
			     <th colspan="5">서울</th>
			   </tr>
			   <tr>
			     <th colspan="2">전화번호<br>(휴 대 폰)</th>
			     <th>010-****-****</th>
			     <th>E - Mail</th>
			     <th colspan="3">dongyang@dy.ac.kr</th>
			   </tr>
			</table>	
		-->
		</div>
		<div class="sidebar-Timer">
		<b>스톱워치</b>
            <strong>
                <span id="hour">00</span>
                <span>:</span>
                <span id="minute">00</span>
                <span>:</span>
                <span id="second">00</span>
                <span>.</span>
                <span id="teMilli">00</span>
            </strong>
            <button id="btnsta">시작</button>
            <button id="btnsto">멈춤</button>
            <button id="btnres">초기화</button>
		</div>	
		<script type="text/javascript">
        let h = 0; //시 
        let m = 0; //분
        let s = 0; //초
        let t = 0; //밀리
        let saveH = document.getElementById("hour"); //현재 시
        let saveM = document.getElementById("minute"); //현재 분
        let saveS = document.getElementById("second"); //현재 초
        let saveT = document.getElementById("teMilli"); //현재 밀리
        let btnStart = document.getElementById("btnsta"); //시작버튼
        let btnStop = document.getElementById("btnsto"); //멈춤버튼
        let btnReset = document.getElementById("btnres"); //초기화버튼
        let intervalId;

        btnStart.onclick = function() {
           clearInterval(intervalId)
           intervalId = setInterval(operateTimer, 10) 
        }
        btnStop.onclick = function() {
           clearInterval(intervalId)
        }
        btnReset.onclick = function() {
           clearInterval(intervalId)
           h = 0; m = 0; s = 0; t = 0;
           saveH.textContent = "00";
           saveM.textContent = "00";
           saveS.textContent = "00";
           saveT.textContent = "00";
        }
        function operateTimer() {
            t++;
            console.log(t);
            saveT.textContent = t > 9 ? t : '0' + t;
            if(t > 99){
                s++;
                saveS.textContent = s > 9 ? s : '0' + s;
                t = 0;
                saveT.textContent = "00";
            }
            if(s > 59){
                m++;
                saveM.textContent = m > 9 ? m : '0' + m;
                s = 0;
                saveS.textContent = "00";
            }
            if(m > 59){
                h++;
                saveH.textContent = h > 9 ? h : '0' + h;
                m = 0;
                saveM.textContent = "00";
            }
        }
    	</script>
		
		<div id="contents-gugudan" align="center">
			<h5>구구단</h5>
			<table border='1' width='1000px'>
			<tr bgcolor='#ccccc' align='center'>
				<td>2단</td>
				<td>3단</td>
				<td>4단</td>
				<td>5단</td>
				<td>6단</td>
				<td>7단</td>
				<td>8단</td>
				<td>9단</td>
			</tr>
			<?php
				for($b=1; $b<=9; $b++) {
					echo "<tr align=center'>";
	  				for($a=2; $a<=9; $a++) {
	  					$c=$a*$b;
	  					echo "<td>{$a}X{$b}=$c</td>";
	  				}
					echo"</tr>";
				}
			?>
			</table>
		</div>  <!--end of gugudan--> 
	<div id="footer" align="center">
		<h2>이용해주셔서 감사합니다!</h2>
		<input type="button" value="홈페이지 닫기" onclick="window.close()">
		<p>제작자: 길재혁</p>
	</div>
</div>

</body>
</html>