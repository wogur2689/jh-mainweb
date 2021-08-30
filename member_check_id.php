<?php
    header("Content-Type: text/html;charset=UTF-8");
    //회원가입 시 입력한 id값을 받아옴
    $id = $_GET["id"];
    //아이디없을때
    if(!$id)
    {
        echo "<p>아이디를 입력해주세요.</p>";
    }
    //아이디있을떄
    else{
    $con = mysqli_connect("localhost:3305", "root", "", "wogur_db");
    $sql = "SELECT id FROM member WHERE id='".$id."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    //아이디중복X
        if($row<1)
            {
    ?>
        <script>
            alert("사용가능한 아이디입니다.");
            location.href="membership_form.html";
        </script>
    <?php
            }
        //아이디중복O
        else{
    ?>     
        <script>
             alert("중복된 아이디입니다.");
            location.href="membership_form.html";
        </script>
    <?php
            }
        }   
?>
