
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
		<form action='a_index_2_1.html' method='post'><input type="submit" name = 'l' value="���� ��ȸ" style="font-size:20px"></form>
		&nbsp&nbsp&nbsp
		<form action='a_index_2_2.html' method='post'><input type="submit" name = 's' value="���� ��ȸ" style="font-size:20px"></form>
          		</tr>
		</table>

          <div class="cd1" >
 
<br>
                <p class="cd5"> <?
			$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL ���� ���� ����!");
			mysql_select_db("BachelorManagement", $connect);
			$check = "SELECT id FROM user_state;";
			$result1 = mysql_query($check, $connect);
			$sdtinfo1 = mysql_fetch_array($result1);
			$count1 = mysql_num_rows($result1);	
			$id1 = $_POST['cancel'];	
			for($i=0; $i<$count1; $i++){
				if("���".$i==$id1){
					$id = $sdtinfo1[0];
					break;
				}
				$sdtinfo1 = mysql_fetch_array($result1);
			}	
			$check1 = "UPDATE user_state SET state='���� ��� �Ϸ�' where id=$id";
			$check2 = "UPDATE user_state SET ustate='����' where id=$id";
			$result1 = mysql_query($check1, $connect);
			$result2 = mysql_query($check2, $connect);		
			$check = "SELECT  id, ustate, state FROM user_state where ustate='����' or ustate='����';";
			$result = mysql_query($check, $connect);
			$sdtinfo = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
			
			echo("<h3>����</h3><br>");
			echo ("<form action='a_index_2_2_1.html' method='post'><table>
				<tr>
					<th width='200px'> ID </td>
					<th width='200px'> ���� </td>
					<th width='200px'> ��� �� ��� </td>
				</tr>");
			      	for($i=0;$i<$count;$i++){
					if($sdtinfo[2]=='���� ��û' || $sdtinfo[2]=='���� ��� �Ϸ�'){
						echo("<tr>
							<td width='200px' align='center'>$sdtinfo[0]</td>
							<td width='200px' align='center'> $sdtinfo[1] </td>
							<td width='200px' align='center'>");
							if($sdtinfo[1]=='����'){			
								echo("<input type='submit' name='sub' value = '���$i'></td>");	
							}
							else{	
								echo("<input type='submit' name='cancel' value='���$i'></td>");	
							}
						echo("</tr>");
						$sdtinfo = mysql_fetch_array($result);
					}
					$sdtinfo = mysql_fetch_array($result);
				}
			echo("</table></form>");
?></p>
<br>

          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>

	

