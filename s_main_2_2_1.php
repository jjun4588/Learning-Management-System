       <div id="main_img_bar">
            <img src="./img/main_img1.png">
        </div>
        <div id="main_content">

<br><br>

<hr>
<br><br>
  <div id = "thing1" align="center">

		<table>
		<tr>
		<form action='s_index_2_1.html' method='post'><input type="submit" name = 'l' value="휴학 신청 및 취소" style="font-size:20px"></form>
		&nbsp&nbsp&nbsp
		<form action='s_index_2_2.html' method='post'><input type="submit" name = 's' value="복학 신청 및 취소" style="font-size:20px"></form>
          		</tr>
		</table>

          <div class="cd1" >
 
<br>
                <p class="cd5"> <?  session_start();
			$id = $_SESSION['user_id'];
			$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
			mysql_select_db("BachelorManagement", $connect);			
			$check = "SELECT  id, ustate, state FROM user_state where id='$id' and (ustate='복학' or ustate='휴학');";
			$result = mysql_query($check, $connect);
			$check1 = "UPDATE user_state SET state='복학 신청' where  id='$id';";
			$result1 = mysql_query($check1, $connect);
			$sdtinfo = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
			
			echo("<h3>복학</h3><br>");
			echo ("<form action='s_index_2_2.html' method='post'><table>
				<tr>
					<th width='200px'> ID </td>
					<th width='200px'> 상태 </td>
					<th width='200px'> 신청 및 취소 </td>
				</tr>");
					echo("<tr>
						<td width='200px' align='center'>$sdtinfo[0]</td>
						<td width='200px' align='center'> $sdtinfo[1] </td>
						<td width='200px' align='center'>");
						echo("<input type='submit' name='cancel' value='취소'></td>");	
					echo("</tr>");				
			echo("</table></form>");
?></p>
<br>

          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>