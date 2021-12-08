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
	<?php print ("담당 과목 : " .$sdtinfo[1] ."<br><br>");?>
	<a href="p_index_1_1_1.html"><input type="submit" value="수강 인원 조회" style="font-size:20px"></a>
	<a href="p_index_1_2.html"><input type="submit" value="휴강 등록 및 취소" style="font-size:20px"></a>
	<a href="p_index_1_3.html"><input type="submit" value="보강일 등록 및 취소" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
                  <h4 class="cd4"> 강의관리 </h4><br>
	<form action=p_index_1_2.html method=post>
                <p class="cd5">
		<?
		session_start();
		if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
		else $id = "";

		$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
		mysql_select_db("BachelorManagement", $connect);
		$Sinfo = "SELECT * FROM lecture, lecture_state where lecture.id='$id' and lecture.Scode=lecture_state.Scode";
		$result = mysql_query($Sinfo, $connect);
		$count = mysql_num_rows($result);

		$clecture = $_POST['clecture'];
		if($count == 1){
		  $_SESSION['clecture']=$clecture;
		  if(isset($_SESSION['clecture'])){
		    $update = "UPDATE lecture_state SET clecture='$clecture' where Pid='$id'";
		    $result_u =  mysql_query($update, $connect);
		  }
		}

		print("휴강 등록<input type=radio name=clecture value='regist'>&nbsp;&nbsp;"); 
		print("휴강 취소<input type=radio name=clecture value=NULL>");
   		print("<br><br><br><input type=submit value='완료'>");
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