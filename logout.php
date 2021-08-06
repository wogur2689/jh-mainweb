<?php
  header("Content-Type: text/html;charset=UTF-8");
  session_start();
  unset($_SESSION["name"]);
  
  echo("
       <script>
      	 window.alert('로그아웃 완료되었습니다.')
          location.href = 'myhome.php';
         </script>
       ");
?>