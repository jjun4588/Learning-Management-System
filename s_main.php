<?php
	session_start();
	if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
	if (isset($_SESSION["user_pw"])) $user_pw = $_SESSION["user_pw"];
	if (isset($_SESSION["user_email"])) $user_email = $_SESSION["user_email"];
	if (isset($_SESSION["user_phone"])) $user_phone = $_SESSION["user_phone"];
	if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
?>
<!-- '학생전용 header 아래의 메인 페이지' -->

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
              <img class="picture1" src="./img/s_main.jpg" alt="1">
              <div class="cd3">
<br>
                  <h4 class="cd4"> 어서오세요 </h4><br>
                <p class="cd5"> 학생 전용 메인 페이지입니다. </p><br>

	※ 회원정보 ※ <br><br>
	이름 : <?=$user_name?><br>
	아이디 : <?=$user_id?><br>
	비밀번호 : <?=$user_pw?><br>
	이메일 : <?=$user_email?><br>
	전화번호 : <?=$user_phone?><br>

<br>
              </div>
            </div>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>