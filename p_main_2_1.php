<?
session_start();
if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
else $id = "";

$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
mysql_select_db("BachelorManagement", $connect);
$check = "SELECT * FROM lecture where id='$id'";
$result = mysql_query($check, $connect);
$sdtinfo = mysql_fetch_array($result);
?>
        <div id="main_img_bar">
            <img src="./img/main_img1.png">
        </div>
        <div id="main_content">

<br><br>

<hr>
<br><br>
  <div id = "thing1" align="center">
	<?php print ("��� ���� : " .$sdtinfo[1] ."<br><br>");?>
          <div class="cd1" >
            <div class="cd2">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> �������� </span></p><br>
	<form action=p_index_2_1.html method=post>
                <p class="cd5">
		<?
		session_start();
		if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
		else $id = "";

		$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
		mysql_select_db("BachelorManagement", $connect);
		$Sinfo = "SELECT DISTINCT * FROM user, grades where grades.Pid='$id' and grades.id=user.id";
		$result = mysql_query($Sinfo, $connect);
		$count = mysql_num_rows($result);

		print("���� �л��� �����ϼ���.<br><br>");
		while($row = mysql_fetch_array($result)){
		  print("�й� : " .$row[id] ."&nbsp;&nbsp;|&nbsp;&nbsp;");
		  print("�̸� : " .$row[name] ."&nbsp;&nbsp;|&nbsp;&nbsp;");
		  print("���� : " .$row[score]);
		  print("<br>");
		}

		$Sid = $_POST['Sid'];
		$score = $_POST['score'];
		print("<br><br>�й� �Է� : <input type=text size=6 name=Sid>");
		print("<br><br>���� �Է� : <input type=text size=6 name=score>");

		$_SESSION['Sid']=$Sid;
		$_SESSION['score']=$score;
		if(isset($_SESSION['Sid'])){
		  $update_s= "UPDATE grades SET score='$score' where Pid='$id' and id='$Sid'";
	      	  $result_s =  mysql_query($update_s, $connect);
	 	}

		print("<br><br><br><input type=submit value='�Ϸ�'>");
		?>
                </p>
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