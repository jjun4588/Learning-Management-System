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
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 성적확인 </span></p><br>
                <p class="cd5"> <?php
			session_start();
			if (isset($_SESSION["user_id"])) $id = $_SESSION["user_id"];
			else $id = "";

			$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
			mysql_select_db("BachelorManagement", $connect);
			$check = "SELECT * FROM grades where id='$id'";
			$result = mysql_query($check, $connect);

			$sum = 0;
			$count = 0;
			while($row = mysql_fetch_array($result)){
			  print ("과목명 : " .$row[Sname] ."<br>"); 
			  if($row[score] == null){
			    print("점수 : 미입력<br>");
			    $count = 0;
			    $nonscore = 1;
			  }
			  else{
			    print ("점수 : " .$row[score] ."<br>");
			    $count++;
			    $sum = $sum + (float)$row[score];
			  }
			}
			if($nonscore == 1){
			  print("<br>성적 입력이 끝나지 않아 평균을 낼 수 없습니다.<br>");
			}
			else{
			  $avg = $sum / $count;
			  print("<br>평균 : " .$avg);
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