<?php
session_start();

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
<br>
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 정보조회 </span></p><br>
                <p><span style="border-bottom: 12px solid #dcf1fb; padding: 0 0 0 0.2em;"> 학번을 입력하여 입력한 학번에 해당하는 학생의 정보를 조회 할 수 있습니다. </span></p>
	&nbsp;
<br>
<form method="POST" action="">
<input type="text" name="SID"  placeholder="학생ID(학번)를 입력하세요">
		<input type="submit" value="입력" >
<?php
	$connect=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $connect);
	$check = "SELECT * FROM user,user_state WHERE user.id='{$_POST['SID']}'and user_state.id='{$_POST['SID']}'";
	$result = mysql_query($check, $connect);

	if (mysql_num_rows($result) > 0 ) {
	while($row=mysql_fetch_array($result)) {
	echo "<br><br>"."이름 : " . $row["name"]. " | 학과 : " . $row["department"]. " | 이메일 : " . $row["email"]. " | 전화번호 : " . $row["phone"]. " | 주소 : " . $row["address"]. " | 휴복학 상태 : " . $row["ustate"]. "<br>";
		}
	} 
	else {
	echo "<br><br>"."데이터가 없습니다.";
	}

?>
              </div>
            </div>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>