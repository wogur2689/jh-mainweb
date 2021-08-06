<?php
	$id = $_POST["id"];
	$pass = $_POST["password"];
	$con = mysqli_connect('localhost:3305', 'root', '', 'wogur_db') or die("접속 실패하였습니다.");

	$sql = "select * from member where id='$id'"; 


	$ret = mysqli_query($con, $sql);
	mysqli_close($con);

	$num_match = mysqli_num_rows($ret);

   if(!$num_match) 
   {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             history.go(-1)
           </script>
         ");
    }
    else
    {
        $row = mysqli_fetch_array($ret);
        $db_pass = $row["password"];


        if($pass != $db_pass)
        {
           echo("
              <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
              </script>
           ");
           exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["name"];

            echo("
              <script>
                location.href = 'myhome.php';
              </script>
            ");
        }
     }        
?>