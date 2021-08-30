<?php
   header("Content-Type: text/html;charset=UTF-8");
   session_start();
   $id = $_SESSION['userid'];
          
   $con = mysqli_connect("localhost:3305", "root", "", "wogur_db") or die("접속 실패하였습니다.");
   $sql = "delete from member where id='$id'";

   unset($_SESSION["userid"]);

   mysqli_query($con, $sql);
   mysqli_close($con);     

   echo "<script>
           alert('탈퇴 처리되었습니다.');
           location.href = 'myhome.php'; 
         </script>";
?>