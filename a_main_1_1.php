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
<br><br>
  <div id = "thing1" align="center">

              <div class="cd3">
<br>
                  <h4 class="cd4"> 성적 조회 할 학생의 학번 입력 </h4>
              <form action="a_index_1_2.html" method="POST">
	      <input type="text" name="id" onkeypress="JavaScript:press(this.form)"> 
		<br><br><input type="submit" value="검색">
	  </form>
<br><br><br>
          </div>

  </div>
</hr>

<hr></hr>
<br><br>
<footer> <?php include "footer.php";?> </footer>