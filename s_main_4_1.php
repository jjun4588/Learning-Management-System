<?php
session_start();

if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];

	$connect=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $connect);
	$query = "select * from grades where id=$user_id";
	$result = mysql_query($query,$connect);
	$ans = mysql_fetch_row($result);
?>

        <div id="main_img_bar">
            <img src="./img/main_img1.png">
        </div>
        <div id="main_content">

<br><br>

<hr>
<br><br>
  <div id = "thing1" align="center">

          <div class="cd1" >
            <div class="cd2">
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 수강과목 목록 </span></p><br><br>
                <p><span style="border-bottom: 12px solid #dcf1fb; padding: 0 0 0 0.2em;"> <?php echo"$user_name"; ?>님의 수강과목 목록입니다. </span></p><br><br>

	<?php
	session_start();
	$connect=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $connect);
	$query = "select * from grades where id=$user_id";
	$result = mysql_query($query,$connect);

	$a=0;

	#while문으로 한줄한줄 변수에 저장하기
	while($ans=mysql_fetch_array($result)) {
	$Sname[$a]=$ans[4];
	$a=$a+1;
	}

	#검색된 행(변수 a) 만큼 반복
	for($d=0;$d<$a;$d++){

	#수강과목 출력 
	echo "과목명 : ".$Sname[$d]."<br>";
	}
	?>


<br>
              </div>
            </div>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>