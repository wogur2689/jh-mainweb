<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$phone1 = $_POST["phone1"];
	$phone2 = $_POST["phone2"];
	$phone3 = $_POST["phone3"];
	$phoneNumber = $phone1."-".$phone2."-".$phone3;
	$email1 = $_POST["email1"];
	$email2 = $_POST["email2"];
	$email = $email1."@".$email2;
	$age = $age;
	if($email1 == null || $email2 == "선택") {
		$email = null;
	}
	if($age == null) {
		$age = null;
	}

	$connect = mysqli_connect('localhost:3305', 'root', '', 'wogur_db') or die("접속 실패하였습니다.");

	$sql = "insert into member(id, name, password, gender, phoneNumber, email, age)"; 
	$sql .= "values('$id','$name','$password','$gender' ,'$phoneNumber', '$email', '$age')"; 

	$ret = mysqli_query($connect, $sql);
	mysqli_close($connect);

	if($ret){
			echo "<script> window.alert('회원가입이 완료 되었습니다.'); 
							location.href = 'myhome.php'; 
				</script>";

	}
	else {
			echo "<script> 
				window.alert('회원가입에 실패하였습니다.'); 
				location.href = 'membership_form.php'; 
			</script>";
	}
?>