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

	<a href="t_index_1_1_1.html"><input type="submit" value="정보조회" style="font-size:20px"></a>
	<a href="t_index_1_1_2.html"><input type="submit" value="과목조회" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 과목조회 </span></p><br>
                <p class="cd5"> 강의 ID를 입력하여 강의하는 교수의 정보를 조회 할 수 있습니다.</p>
<br>
<form method="POST" action="">
<input type="text" name="Code"  placeholder="과목 코드를 입력하세요">
		<input type="submit" value="입력" >

<?php
	$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $connect);
	$check = "SELECT * FROM lecture,user WHERE lecture.Scode = '{$_POST['Code']}' and user.job = '교수' and lecture.id = user.id";
	$result = mysql_query($check, $connect);

	if (mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_assoc($result)) {
	echo "<br><br>"."이름: " . $row["name"]. " | 학과: " . $row["department"]. " | 이메일: " . $row["email"]. " | 전화번호: " . $row["phone"]. " | 주소: " . $row["address"]. " | 강의명: " . $row["Sname"]. " | 과목코드: " . $row["Scode"]. " | 강의실: " . $row["lroom"].  " | 강의시간: " . $row["time"].  " | 수강인원: " . $row["Pnumber"]. "<br>";
		}
	} 
	else {
	echo "<br><br>"."데이터가 없습니다.";
	}

?>
</form>
<br>
              </div>
            </div>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>