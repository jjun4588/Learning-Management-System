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
	<a href="p_index_1_1_1.html"><input type="submit" value="���� �ο� ��ȸ" style="font-size:20px"></a>
	<a href="p_index_1_2.html"><input type="submit" value="�ް� ��� �� ���" style="font-size:20px"></a>
	<a href="p_index_1_3.html"><input type="submit" value="������ ��� �� ���" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
                  <h4 class="cd4"> ���ǰ��� </h4><br>
	<form action=p_index_1_3.html method=post>
                <p class="cd5">
		<?
		session_start();
		if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
		else $id = "";

		$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
		mysql_select_db("BachelorManagement", $connect);
		$Sinfo = "SELECT * FROM lecture, lecture_state where lecture_state.clecture='regist' and lecture.id='$id' and lecture.Scode=lecture_state.Scode";
		$result = mysql_query($Sinfo, $connect);
		$count = mysql_num_rows($result);

		$slecture = $_POST['slecture'];
		$stime = $_POST['stime'];
		if($count == 1){
		  $_SESSION['slecture']=$slecture;
		  if(isset($_SESSION['slecture'])){
		    $update_l = "UPDATE lecture_state SET slecture='$slecture' where Pid='$id'";
	      	    $result_l =  mysql_query($update_l, $connect);
		    $update_t = "UPDATE lecture_state SET stime='$stime' where Pid='$id'";
		    $result_t =  mysql_query($update_t, $connect);
		  }

		print("���� ���<input type=radio name=slecture value='regist'>&nbsp;");
		print("��¥ �Է�<input type=text size=6 name=stime>&nbsp;&nbsp;");
		print("|");
		print("&nbsp;&nbsp;���� ���<input type=radio name=slecture value=NULL>&nbsp;");
		print("������ �ʱ�ȭ<input type=checkbox name=stime value=NULL>");
   		print("<br><br><br><input type=submit value='�Ϸ�'>");
		}
		else{
		  print("�ް��� ������ �����ϴ�.<br>");
		}
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