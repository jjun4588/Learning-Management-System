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
		<form action='s_index_2_1.html' method='post'><input type="submit" name = 'l' value="���� ��û �� ���" style="font-size:20px"></form>
		&nbsp&nbsp&nbsp
		<form action='s_index_2_2.html' method='post'><input type="submit" name = 's' value="���� ��û �� ���" style="font-size:20px"></form>
          		</tr>
		</table>

          <div class="cd1" >
 
<br>
                <p class="cd5"> <?  session_start();
			$id = $_SESSION['user_id'];
			$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
			mysql_select_db("BachelorManagement", $connect);			
			$check = "SELECT  id, ustate, state FROM user_state where id='$id' and (ustate='����' or ustate='����');";
			$result = mysql_query($check, $connect);
			$check1 = "UPDATE user_state SET state='���� ��û' where  id='$id';";
			$result1 = mysql_query($check1, $connect);
			$sdtinfo = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
			
			echo("<h3>����</h3><br>");
			echo ("<form action='s_index_2_2.html' method='post'><table>
				<tr>
					<th width='200px'> ID </td>
					<th width='200px'> ���� </td>
					<th width='200px'> ��û �� ��� </td>
				</tr>");
					echo("<tr>
						<td width='200px' align='center'>$sdtinfo[0]</td>
						<td width='200px' align='center'> $sdtinfo[1] </td>
						<td width='200px' align='center'>");
						echo("<input type='submit' name='cancel' value='���'></td>");	
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