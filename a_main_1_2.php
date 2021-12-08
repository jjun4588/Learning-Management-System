<script>
	function press(f){
		if(f.keyCode==13){
			formname.submit();
		}
	}
</script>
        <div id="main_img_bar">
            <img src="./img/main_img1.png">
        </div>
        <div id="main_content">

<br><br>

<hr>
<br>
	<form action="a_index_1_2.html" method="POST" align="center">
	      학번 입력 <input type="text" name="id" onkeypress="JavaScript:press(this.form)"> <input type="submit" value="검색">
	  </form>
<br>	
  <div id = "thing1" align="center">
                <p class="cd5">  <?$connect = mysql_connect('localhost', 'insik', '123456') or die("mySQL 서버 연결 실패!");
			mysql_select_db("BachelorManagement", $connect);
			$_id = $_POST['id'];
			$check = "SELECT  Sname, Sgrades, score FROM grades where id='$_id';";
			$result = mysql_query($check, $connect);
			$sdtinfo = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
		if($count >=1){
			echo("<h3>".$_id."의 성적</h3><br>");
			echo ("<table>
				<tr>
					<th width='200px'> 강의명 </td>
					<th width='200px'> 학점 </td>
					<th width='200px'> 성적 </td>
				</tr>");
			      for($i=0;$i<$count;$i++){
				echo("<tr>
					<td width='200px' align='center'> $sdtinfo[0] </td>
					<td width='200px' align='center'> $sdtinfo[1] </td>
					<td width='200px' align='center'> $sdtinfo[2] </td>
				</tr>");
				$sdtinfo = mysql_fetch_array($result);
			      }
		}
		else{
			echo("해당하는 ID의 학생이 없습니다!!");
		}
			echo("</table>");
?> </p>
<br>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>