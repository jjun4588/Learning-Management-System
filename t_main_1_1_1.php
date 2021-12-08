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
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 정보조회 </span></p><br>
	<p class="cd5"> 교수의 아이디를 입력해서 교수를 조회 할 수 있습니다. </p>
	&nbsp;
<br>
<form method="POST" action="">
<input type="text" name="PID"  placeholder="교수ID를 입력하세요">
		<input type="submit" value="입력" >
<?php
	$connect=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $connect);
	$check = "SELECT * FROM user WHERE id='{$_POST['PID']}' and job = '교수'";
	$result = mysql_query($check, $connect);

	if (mysql_num_rows($result) > 0 ) {
	while($row=mysql_fetch_array($result)) {
	echo "<br><br>"."이름 : " . $row["name"]. " | 학과 : " . $row["department"]. " | 이메일 : " . $row["email"]. " | 주소 : " . $row["address"]. "<br>";
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