<html lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script language="javascript">
  document.title="SHERLOCK HOLMES - 셜록홈즈 방탈출 게임";
  </script>
  <link rel="stylesheet" href="css/point.css">
  <!--<link rel="stylesheet" href="style.css"> -->
  <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
  </head>
  <body>
    
  
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
        <form method="get" action="" name="frm" id="frm">
           <select id="selectArea">
            <option value="">지역선택</option>
                        <option value="1">서울특별시</option>
                        <option value="9">경기도</option>
                        <option value="4">인천광역시</option>
                        <option value="12">충청 대전 세종</option>
                        <option value="13">전라 광주</option>
                        <option value="17">제주 강원</option>
                        <option value="15">경상도</option>
                    </select>
          <select name="s_no" id="s_no" class="jumpselect">
            <option value="">지점선택</option>
            <script>
   

            $('#selectArea').change(function(){
                var o='<option value="">지점선택</option>';
                if($("#selectArea option:selected").val()==''){
                    $('#selectBranch').attr("disabled",true);
                } else {
                    $('#selectBranch').attr("disabled",false);
                }
                var a=$(this).val();
    
                if(a ==='1'){
                    o += '<option value="11">노원점</op tion><option value="12">서울대점</option><option value="13">성신여대점</option>';
                    
                 }
                if(a ==='9'){ 
                    o += '<option value="21">모란역점</op tion><option value="22">수원여대점</option><option value="23">미사역점</option>';
                }
                if(a ==='4'){
                    o += '<option value="31">부천점</option><option value="32">인하대점</option><option value="33">인천점</option>';
                }
                if(a ==='12'){
                    o += '<option value="41">대전점</option><option value="42">세종점</option><option value="43">천안점</option>';
                }
                if(a ==='13'){
                    o += '<option value="51">광주점</option><option value="52">충장로점</option><option value="53">전주점</option>';
                }
                if(a ==='17'){
                    o += '<option value="61">제주점</option><option value="62">강릉점</option><option value="63">춘천점</option>';
                }
                if(a ==="15"){
                    o += '<option value="71">대구점</option><option value="72>창원점</option><option value="73">부산점</option>';
                }
                $('#selectBranch').html(o);
            });
        </script>

          </select>
        </form>
        </div>

        <div class="row list">
            <div class="col s3">
               <div class="img">
                <img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/guli.jpg">             
              </div>
               <div class="tit">구리점</div>
                 <div class="btns center">
                      <a href="point1.php?branch_seq=10" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/incheon.jpg"></div>
               <div class="tit">구월인천점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/noryangjin.png"></div>
               <div class="tit">노량진점</div>
                 <div class="btns center">
                      <a href="point1.php?branch_seq=1" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>
            
            <div class="col s3">
              <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/nowon.jpg"></div>
              <div class="tit">노원점</div>
                <div class="btns center">
                     <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                     <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                 </div>
           </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/anyang.png"></div>
               <div class="tit">안양점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

       <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/daegu.jpg"></div>
               <div class="tit">대구동성로점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

       <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/daejeon.jpg"></div>
               <div class="tit">대전 신세계백화점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/university.jpg"></div>
               <div class="tit">대학로점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/dongtan.jpg"></div>
               <div class="tit">동탄점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/bucheon.jpg"></div>
               <div class="tit">부천점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/bupyeong.jpg"></div>
               <div class="tit">부평점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>

        <div class="col s3">
               <div class="img"><img src="https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/yatap.jpg"></div>
               <div class="tit">구분당야탑점</div>
                 <div class="btns center">
                      <a href="" class="btn"><i class="ico left zoom_black"></i>지점소개</a>          
                      <a href="" class="btn"><i class="ico left cal_black"></i>예약하기</a>
                  </div>
            </div>
       
             </div>
          </div>
        </div>
    
    </section>
  </div>
  </body>
  </html>
