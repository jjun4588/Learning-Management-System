<?php
	session_start();
	if (isset($_SESSION["user_id"])) $user_id = $_SESSION["user_id"];
	else $user_id = "";
	if (isset($_SESSION["user_name"])) $user_name = $_SESSION["user_name"];
	else $user_name="";
?>	

<!-- '�������� Ȩ������ ��� �κ����ν� �޴��ٿ� �α����� ǥ���Ѵ�.' -->
	
<div id="top" style="background:skyblue">
	<h3>
	<a href="p_index.html" style="color:black ; font-size:50px ; font-family:Times" >�л�����ý��� : ����</a>
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
		$logged = "(".$user_name.") ������ ȯ���մϴ�.";
		?>                
			<li><?=$logged?> </li>
			<li> | </li>
			<li><a href="logout.php">�α׾ƿ�</a> </li>
		<?php
			} 
		?>

            </ul>
</div>
<br><br>

	<div id="menu_bar">
	<ul>            
		<li><a href="p_index_1_1.html">���ǰ���</a></li>                
		<li><a href="p_index_2_1.html">��������</a></li>
	</ul>
	</div>