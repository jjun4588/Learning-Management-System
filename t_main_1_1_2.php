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

	<a href="t_index_1_1_1.html"><input type="submit" value="������ȸ" style="font-size:20px"></a>
	<a href="t_index_1_1_2.html"><input type="submit" value="������ȸ" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> ������ȸ </span></p><br>
                <p class="cd5"> ���� ID�� �Է��Ͽ� �����ϴ� ������ ������ ��ȸ �� �� �ֽ��ϴ�.</p>
<br>
<form method="POST" action="">
<input type="text" name="Code"  placeholder="���� �ڵ带 �Է��ϼ���">
		<input type="submit" value="�Է�" >

<?php
	$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� Error!");
	mysql_select_db("BachelorManagement", $connect);
	$check = "SELECT * FROM lecture,user WHERE lecture.Scode = '{$_POST['Code']}' and user.job = '����' and lecture.id = user.id";
	$result = mysql_query($check, $connect);

	if (mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_assoc($result)) {
	echo "<br><br>"."�̸�: " . $row["name"]. " | �а�: " . $row["department"]. " | �̸���: " . $row["email"]. " | ��ȭ��ȣ: " . $row["phone"]. " | �ּ�: " . $row["address"]. " | ���Ǹ�: " . $row["Sname"]. " | �����ڵ�: " . $row["Scode"]. " | ���ǽ�: " . $row["lroom"].  " | ���ǽð�: " . $row["time"].  " | �����ο�: " . $row["Pnumber"]. "<br>";
		}
	} 
	else {
	echo "<br><br>"."�����Ͱ� �����ϴ�.";
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