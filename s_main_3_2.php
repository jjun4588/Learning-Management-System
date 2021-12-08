<?php
session_start();
if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];

	$connect=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
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

	<a href="s_index_3_1.html"><input type="submit" value="졸업요건조회" style="font-size:20px"></a>
	<a href="s_index_3_2.html"><input type="submit" value="조기졸업요건조회" style="font-size:20px"></a>

          <div class="cd1" >
            <div class="cd2">
<br>
              <div class="cd3">
<br>
                  <p><span style="background: linear-gradient(to right, #ffa7a3, #5673bd); padding: 0.43em 1em; font-size: 19px; border-radius: 3px; color: #ffffff;"> 조기졸업 요건조회 </span></p><br>
                <p style="font-size: 23px; font-weight: bold; color: indianred; text-shadow: 1px 1px 1.2px midnightblue;"> 조기졸업 가능학점 : 6 이상 | 조기졸업 가능성적 : 4 이상 </p><br>

	<?php

	$con=mysql_connect('localhost','insik','123456')or die("mySQL 서버 연결 Error!");
	mysql_select_db("BachelorManagement", $con);
	$que = "select * from egraduate";
	$res = mysql_query($que,$con);
	$anr = mysql_fetch_row($res);

	if($ans[0]>=$anr[0] and $ans[1]>=$anr[1])
	{ 
	echo $user_name."님은 "."<b>조기졸업 대상</b>"." 입니다. <br><br>";
	echo "현재 총 학점은 : ".$ans[0]." 입니다. <br>";
	echo "현재 평균 성적은 : ".$ans[1]." 입니다. <br>";
	}
	else
	{ 
	echo $user_name."님은 "."<b>조기졸업 대상이 아닙니다. </b><br><br>";
	echo "현재 총 학점은 : ".$ans[0]." 입니다. <br>";
	echo "현재 평균 성적은 : ".$ans[1]." 입니다. <br>";
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