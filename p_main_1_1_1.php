<?
session_start();
if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
else $id = "";

$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
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
	<? print ("담당 과목 : " .$sdtinfo[1] ."<br><br>"); ?>
	<a href="p_index_1_1_1.html"><input type="submit" value="수강 인원 조회" style="font-size:20px"></a>
	<a href="p_index_1_2.html"><input type="submit" value="휴강 등록 및 취소" style="font-size:20px"></a>
	<a href="p_index_1_3.html"><input type="submit" value="보강일 등록 및 취소" style="font-size:20px"></a>
          <div class="cd1" >
            <div class="cd2">
<br>
                  <h4 class="cd4"> 강의관리 </h4><br>
                <p class="cd5">
		<? 
		session_start();
		if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
		else $id = "";

		$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
		mysql_select_db("BachelorManagement", $connect);
		$Sinfo = "SELECT * FROM user, class where Pid='$id' and user.id=class.id";
		$result = mysql_query($Sinfo, $connect);

		while($row = mysql_fetch_array($result)){
		  print("학생 정보 : ");
		  print ($row[name] ." | ");
		  print ($row[department] ." | ");
		  print ($row[email] ." | ");
		  print ($row[phone] ." | ");
		  print $row[address];
		  print("<br>");
		}
			?>
	    </p>
<br>
              </div>
            </div>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>