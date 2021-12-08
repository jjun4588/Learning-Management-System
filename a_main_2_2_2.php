
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
		<form action='a_index_2_1.html' method='post'><input type="submit" name = 'l' value="휴학 조회" style="font-size:20px"></form>
		&nbsp&nbsp&nbsp
		<form action='a_index_2_2.html' method='post'><input type="submit" name = 's' value="복학 조회" style="font-size:20px"></form>
          		</tr>
		</table>

          <div class="cd1" >
 
<br>
                <p class="cd5"> <?
			$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
			mysql_select_db("BachelorManagement", $connect);
			$check = "SELECT id FROM user_state;";
			$result1 = mysql_query($check, $connect);
			$sdtinfo1 = mysql_fetch_array($result1);
			$count1 = mysql_num_rows($result1);	
			$id1 = $_POST['cancel'];	
			for($i=0; $i<$count1; $i++){
				if("취소".$i==$id1){
					$id = $sdtinfo1[0];
					break;
				}
				$sdtinfo1 = mysql_fetch_array($result1);
			}	
			$check1 = "UPDATE user_state SET state='휴학 등록 완료' where id=$id";
			$check2 = "UPDATE user_state SET ustate='휴학' where id=$id";
			$result1 = mysql_query($check1, $connect);
			$result2 = mysql_query($check2, $connect);		
			$check = "SELECT  id, ustate, state FROM user_state where ustate='복학' or ustate='휴학';";
			$result = mysql_query($check, $connect);
			$sdtinfo = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
			
			echo("<h3>복학</h3><br>");
			echo ("<form action='a_index_2_2_1.html' method='post'><table>
				<tr>
					<th width='200px'> ID </td>
					<th width='200px'> 상태 </td>
					<th width='200px'> 등록 및 취소 </td>
				</tr>");
			      	for($i=0;$i<$count;$i++){
					if($sdtinfo[2]=='복학 신청' || $sdtinfo[2]=='복학 등록 완료'){
						echo("<tr>
							<td width='200px' align='center'>$sdtinfo[0]</td>
							<td width='200px' align='center'> $sdtinfo[1] </td>
							<td width='200px' align='center'>");
							if($sdtinfo[1]=='휴학'){			
								echo("<input type='submit' name='sub' value = '등록$i'></td>");	
							}
							else{	
								echo("<input type='submit' name='cancel' value='취소$i'></td>");	
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

	

