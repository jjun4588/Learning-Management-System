<?
session_start();
		
$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$job = $_POST['job'];


if($id==null || $pw==null || $name==null || $email==null || $phone==null || $address==null || $job==null){
  echo "<center>빈 칸을 모두 입력해주세요.</center><br>";
  echo "<center><a href=signup.html>다시 입력하기</center></a>";
  exit();
}

$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
mysql_select_db("BachelorManagement", $connect);
$check = "SELECT * FROM user where id='$id'";
$result = mysql_query($check, $connect);
$count = mysql_num_rows($result);

if($count == 1) {
    $signup_1 = "UPDATE user SET name='$name' where id=$id";
    $signup_2 = "UPDATE user SET email='$email' where id=$id";
    $signup_3 = "UPDATE user SET phone='$phone' where id=$id";
    $signup_4 = "UPDATE user SET address='$address' where id=$id";
    $result_1 = mysql_query($signup_1, $connect);
    $result_2 = mysql_query($signup_2, $connect);
    $result_3 = mysql_query($signup_3, $connect);
    $result_4 = mysql_query($signup_4, $connect);
  }
  else{
    echo "<center>일치하는 아이디와 비밀번호가 없습니다</center><br>";
    echo "<center><a href=signup.html>다시 입력하기</center></a>";
    exit();
  }

if($signup_1 && $signup_2 && $signup_3 && $signup_4){
  if($job=="학생"){
    $check1 = "INSERT INTO user_state values('$id', '재학', NULL);";
    $result1 = mysql_query($check1, $connect);
  }
  echo "<center>회원정보 입력 성공<br><br>";
  echo "<a href=login.html>로그인 화면으로(세션유지)</a><br><br>";
  echo "<a href=logout.php>로그아웃(세션파괴)</center></a>";
}
?>
