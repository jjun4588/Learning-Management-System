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
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> ������ȸ </span></p><br>
                <p><span style="border-bottom: 12px solid #dcf1fb; padding: 0 0 0 0.2em;"> �й��� �Է��Ͽ� �Է��� �й��� �ش��ϴ� �л��� ������ ��ȸ �� �� �ֽ��ϴ�. </span></p>
	&nbsp;
<br>
<form method="POST" action="">
<input type="text" name="SID"  placeholder="�л�ID(�й�)�� �Է��ϼ���">
		<input type="submit" value="�Է�" >
<?php
	$connect=mysql_connect('localhost','insik','123456')or die("mySQL ���� ���� Error!");
	mysql_select_db("BachelorManagement", $connect);
	$check = "SELECT * FROM user,user_state WHERE user.id='{$_POST['SID']}'and user_state.id='{$_POST['SID']}'";
	$result = mysql_query($check, $connect);

	if (mysql_num_rows($result) > 0 ) {
	while($row=mysql_fetch_array($result)) {
	echo "<br><br>"."�̸� : " . $row["name"]. " | �а� : " . $row["department"]. " | �̸��� : " . $row["email"]. " | ��ȭ��ȣ : " . $row["phone"]. " | �ּ� : " . $row["address"]. " | �޺��� ���� : " . $row["ustate"]. "<br>";
		}
	} 
	else {
	echo "<br><br>"."�����Ͱ� �����ϴ�.";
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