<?php
session_start();
if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];

	$connect=mysql_connect('localhost','insik','123456')or die("mySQL ���� ���� Error!");
	mysql_select_db("BachelorManagement", $connect);
	$query = "select sum(Sgrades),avg(score) from grades where id=$user_id";
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

	<a href="s_index_3_1.html"><input type="submit" value="���������ȸ" style="font-size:20px"></a>
	<a href="s_index_3_2.html"><input type="submit" value="�������������ȸ" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> �������� �����ȸ </span></p><br>
                <p style="font-size: 23px; font-weight: bold; color: indianred; text-shadow: 1px 1px 1.2px midnightblue;"> �������� �������� : 6 �̻� | �������� ���ɼ��� : 4 �̻� </p><br>

	<?php

	$con=mysql_connect('localhost','insik','123456')or die("mySQL ���� ���� Error!");
	mysql_select_db("BachelorManagement", $con);
	$que = "select * from egraduate";
	$res = mysql_query($que,$con);
	$anr = mysql_fetch_row($res);

	if($ans[0]>=$anr[0] and $ans[1]>=$anr[1])
	{ 
	echo $user_name."���� "."<b>�������� ���</b>"." �Դϴ�. <br><br>";
	echo "���� �� ������ : ".$ans[0]." �Դϴ�. <br>";
	echo "���� ��� ������ : ".$ans[1]." �Դϴ�. <br>";
	}
	else
	{ 
	echo $user_name."���� "."<b>�������� ����� �ƴմϴ�. </b><br><br>";
	echo "���� �� ������ : ".$ans[0]." �Դϴ�. <br>";
	echo "���� ��� ������ : ".$ans[1]." �Դϴ�. <br>";
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