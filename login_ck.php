<?
session_start();
if(!isset($_SESSION['user_id'])){
  $id = $_POST['id'];
  $pw = $_POST['pw'];
}
if (isset($_SESSION['user_job'])) {
   $job = $_SESSION['user_job'];
}
$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
mysql_select_db("BachelorManagement", $connect);
$check = "SELECT * FROM user where id='$id'";
$result = mysql_query($check, $connect);
$sdtinfo = mysql_fetch_array($result);
$_SESSION['user_id']=$sdtinfo[0];
$_SESSION['user_pw']=$sdtinfo[1];
$_SESSION['user_name']=$sdtinfo[2];
$_SESSION['user_department']=$sdtinfo[3];
$_SESSION['user_email']=$sdtinfo[4];
$_SESSION['user_phone']=$sdtinfo[5];
      if($sdtinfo[2]==NULL&&$sdtinfo[3]==NULL&&$sdtinfo[4]==NULL&&$sdtinfo[5]==NULL){
        echo "<center>회원정보가 존재하지 않습니다.<br>";
        echo "<a href=signup.html>회원가입 화면으로</a><br>";
        echo "<a href=login.html>로그인 화면으로</a></center>";
        session_destroy(); 
      }
      else{
		if($sdtinfo[1]!=$pw && $sdtinfo[0]!=$id){
 			 echo "<center>아이디와 비밀번호를 입력하세요.<br>";
 			 echo "<a href=signup.html>회원가입 화면으로</a><br>";
  			echo "<a href=login.html>로그인 화면으로</a></center>";
   		}
		else if($sdtinfo[1]!=$pw){
       		echo "<center>비밀번호를 입력하지 않았거나 틀렸습니다.<br>";
      		echo "<a href=signup.html>회원가입 화면으로</a><br>";
       		echo "<a href=login.html>로그인 화면으로</a></center>";
		}
		else{
 			if ($sdtinfo[7] == "학생") {
 				 echo "<center>로그인에 성공하였습니다.<br><br><br>";
				 echo "<a href=s_index.html>(학생) 학사관리 시스템 들어가기</a></center>"; 
			}
			else if ($sdtinfo[7] == "교수") {
  				echo "<center>로그인에 성공하였습니다.<br><br><br>";
				echo "<a href=p_index.html>(교수) 학사관리 시스템 들어가기</a></center>"; 
			}
  			else if ($sdtinfo[7] == "조교") {
  				echo "<center>로그인에 성공하였습니다.<br><br><br>";
  				echo "<a href=t_index.html>(조교) 학사관리 시스템 들어가기</a></center>";
			}
			else if ($sdtinfo[7] == "행정") {
				echo "<center>로그인에 성공하였습니다.<br><br><br>";
				echo "<a href=a_index.html>(행정) 학사관리 시스템 들어가기</a></center>";
			}
    	 }
     }
?>