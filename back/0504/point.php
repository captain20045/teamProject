<html lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script language="javascript">
  document.title="SHERLOCK HOLMES - 셜록홈즈 방탈출 게임";
  </script>
  <link rel="stylesheet" href="css/point.css">
  <!--<link rel="stylesheet" href="style.css"> -->
  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  
  </head>
        <script>

		function change1(){
			var obj = document.getElementById("selRegion");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectedRegion.value = obj[i].value;
			    }
		    }
			document.f3.submit();
		}
		
		function change2(){
			var obj = document.getElementById("selRegion");
			for (i=0;i<obj.length;i++ ){
				if(obj[i].selected){
					document.f3.selectedRegion.value= obj[i].value;
			    }
		    }

			var obj2 = document.getElementById("selBranch");
			for (i=0;i<obj2.length;i++ ){
				if(obj2[i].selected){
					document.f3.selectedBranch.value= obj2[i].value;
			    }
		    }
			document.f3.submit();
		}
        </script>
  <body>
    <?php  
       $_POST['selectedRegion'] =  isset($_POST['selectedRegion']) ? $_POST['selectedRegion'] : '';
       $_POST['selectedBranch'] =  isset($_POST['selectedBranch']) ? $_POST['selectedBranch'] : '';
	?>
  
  <div id="branch" class="body">
    <section id="title_area">
      <div class="container">
        <h1>지점소개</h1>
        <h4>Branch Office</h4>
        <div class="line"></div>
      </div>
    </section>
  
    <section class="branch_list">
      <div class="inner container">
        <div class="selectArea">
        <form method="POST" action="point.php" name="f3">
<?php
	$region_seq = $_POST['selectedRegion'];
	if(strlen($region_seq) == 0){	
		$region_seq = 0;
	}else{
		$region_seq = $_POST['selectedRegion'];
	}
	
	$branch_seq = $_POST['selectedBranch'];
	if(strlen($branch_seq) == 0){	
		$branch_seq = 0;
	}else{
		$branch_seq = $_POST['selectedBranch'];
	}
?>




<?php
    $connect = mysqli_connect('localhost','root','','project3');
    if(mysqli_connect_error()) {
        echo "데이터베이스 연결에 실패하였습니다.";
    }
    $result2 = mysqli_query($connect, "SELECT region_seq,region_name FROM p_region");
?>	
    <select name="selRegion" id="selRegion" onchange="change1()">
        <option value=0>----지역선택----</option>
<?php
    while($data = mysqli_fetch_array($result2)){
		if($data['region_seq'] == $region_seq){
?>
		    <option value="<?= $data['region_seq'] ?>"selected><?= $data['region_name'] ?>
<?php
        }else{
?>
		    <option value="<?= $data['region_seq'] ?>"><?= $data['region_name'] ?>
<?php		
		}
	}
?>	
	</select>
               
<?php	
	$result3 = mysqli_query($connect, "SELECT branch_seq, region_seq, branch_name FROM p_branch where region_seq=$region_seq");
?>	
    <select name="selBranch" id="selBranch" onchange="change2()">
        <option value=0>----지점선택----</option>
<?php
    while($data = mysqli_fetch_array($result3)){
		if($data['branch_seq'] == $branch_seq){
?>
		    <option value="<?php echo $data['branch_seq']; ?>" selected><?php echo $data['branch_name']; ?>
<?php
        }else{
?>
		    <option value="<?php echo $data['branch_seq']; ?>"><?php echo $data['branch_name']; ?>
<?php		
		}
	}
?>	
	</select> 
		<input type="hidden" name="selectedRegion">
        <input type="hidden" name="selectedBranch">
</form>


        </form>
        </div>
<?php
    $result = mysqli_query($connect, "SELECT region_seq, branch_seq, branch_picture, branch_name from p_branch");
?>



        <div class="row list">
<?php

		    while($data = mysqli_fetch_array($result)){
				if($region_seq == 0){
?>
				<div class="col s3">
               <div class="img">
                        <img src="<?= $data['branch_picture'] ?>">           
              </div>
               <div class="tit"><?= $data['branch_name'] ?></div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

<?php					
				}					
				else if($region_seq == $data['region_seq']){
					if($branch_seq == 0){
					
?>
			
            <div class="col s3">
               <div class="img">
                        <img src="<?= $data['branch_picture'] ?>">           
              </div>
               <div class="tit"><?= $data['branch_name'] ?></div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>
<?php
					}
				else if($branch_seq == $data['branch_seq']){
?>
					            <div class="col s3">
               <div class="img">
                        <img src="<?= $data['branch_picture'] ?>">           
              </div>
               <div class="tit"><?= $data['branch_name'] ?></div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>
<?php
					}
				}
			}
			mysqli_close($connect); 
?>

        
       
             </div>
			 
          </div>
        </div>
    
    </section>
  </div>
  </body>
  </html>
