<?php
	session_start();
	if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
	else $user_id = "";
	if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
	else $user_name="";
?>	

<!-- '조교전용 홈페이지 상단 부분으로써 메뉴바와 로그인을 표시한다.' -->
	
<div id="top" style="background:skyblue">
	<h3>
	<a href="t_index.html" style="color:black ; font-size:50px ; font-family:Times" >학사관리시스템 : 조교</a>
	</h3>
		</div>
		<div style="background:skyblue"> 
		<a> </a>
		</div>
		<div style="background:skyblue"> 
		<a> </a>
		</div>
		<div id="top_menu">
            <ul>  
		<?php
			if($user_id) {
		$logged = "(".$user_name.") 조교님 환영합니다.";
		?>                
			<li><?=$logged?> </li>
			<li> | </li>
			<li><a href="logout.php">로그아웃</a> </li>
		<?php
			} 
		?>

            </ul>
</div>
<br><br>

	<div id="menu_bar">
	<ul>            
		<li><a href="t_index_1_1.html">교수관리</a></li>                
		<li><a href="t_index_2_1.html">학생관리</a></li>
	</ul>
	</div>