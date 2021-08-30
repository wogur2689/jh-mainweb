<?php
   header("Content-Type: text/html;charset=UTF-8");
   session_start();
   $id = $_SESSION['userid'];
   $name = $_POST["name"];
   $password = $_POST["pass"];
   $gender = $_POST["gender"];
   $phone1 = $_POST["phone1"];
   $phone2 = $_POST["phone2"];
   $phone3 = $_POST["phone3"];
   $phoneNumber = $phone1."-".$phone2."-".$phone3;
   $email1 = $_POST["email1"];
   $email2 = $_POST["email2"];
   $email = $email1."@".$email2;
   $age = $_POST["age"];
          
    $con = mysqli_connect("localhost:3305", "root", "", "wogur_db") or die("접속 실패하였습니다.");
    $sql = "update member set name='$name', password='$password', gender='$gender', phoneNumber='$phoneNumber', email='$email', age='$age'";
    $sql .="where id='$id'";

    mysqli_query($con, $sql);
    mysqli_close($con);     

    echo "<script> location.href = 'mypage.php'; </script>";
?>