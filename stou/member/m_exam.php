<?php include '../include/header2.php';?>
<script>

    function validate(){
      var m_edu = $('input[name="m_edu"]:checked').val(); ;
      var age25 = $('input[name="age25"]:checked').val(); ;
      var en = $('input[name="en"]:checked').val(); ;
      var math = $('input[name="math"]:checked').val(); ;
      var sci = $('input[name="sci"]:checked').val(); ;
      var online = $('input[name="online"]:checked').val(); ;
      var write_exam = $('input[name="write_exam"]:checked').val(); ;
      var train = $('input[name="train"]:checked').val(); ;

      console.log("m_edu = " + m_edu);
      console.log("age25 = " + age25);
      console.log("en = " + en);
      console.log("math = " + math);
      console.log("sci = " + sci);
      console.log("online = " + online);
      console.log("write_exam = " + write_exam);
      console.log("train = " + train);


      if(m_edu == undefined || age25 == undefined ||en == undefined ||math == undefined ||sci == undefined ||online == undefined ||write_exam == undefined ||train == undefined  ){
         
         if(m_edu == undefined ){
          document.getElementById("sp_m_edu").style.display = "block";
         }else{
          document.getElementById("sp_m_edu").style.display = "none";
         }
         
         if(age25 == undefined ){
          document.getElementById("sp_age25").style.display = "block";
         }else{
          document.getElementById("sp_age25").style.display = "none";

         }
         if(en == undefined ){
          document.getElementById("sp_en").style.display = "block";
          }else{
            document.getElementById("sp_en").style.display = "none";

         }
         if(math == undefined ){
          document.getElementById("sp_math").style.display = "block";
        }else{
          document.getElementById("sp_math").style.display = "none";

          }
         if(sci == undefined ){
          document.getElementById("sp_sci").style.display = "block";
        }else{
          document.getElementById("sp_sci").style.display = "none";

          }
         if(online == undefined ){
          document.getElementById("sp_online").style.display = "block";
        }else{
          document.getElementById("sp_online").style.display = "none";

          }
         if(write_exam == undefined ){
          document.getElementById("sp_write_exam").style.display = "block";
        }else{
          document.getElementById("sp_write_exam").style.display = "none";

          }
          if(train == undefined ){
            document.getElementById("sp_train").style.display = "block";
            }else{
            document.getElementById("sp_train").style.display = "none";
            }
         }else{
        document.getElementById("sp_math").style.display = "none";
        document.getElementById("sp_m_edu").style.display = "none";
        document.getElementById("sp_age25").style.display = "none";
        document.getElementById("sp_en").style.display = "none";
        document.getElementById("sp_sci").style.display = "none";
        document.getElementById("sp_online").style.display = "none";
        document.getElementById("sp_write_exam").style.display = "none";
        document.getElementById("sp_train").style.display = "none";
        document.getElementById("examForm").submit();
      }
    }

</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/">ปฏิทิน</a></li>
        <li><a href="#">สนใจเรียน</a></li>
        <li><a href="#">กิจกรรม</a></li>
        <li><a href="./member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="#">ทดสอบตัวเอง</a></li>
        <li><a href="#">ติดต่อ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<form method="post" action="../action/chkExam.php" id="examForm" >
<div class="container">
  <h2>ทดสอบเบื้องต้น เรียนอะไรดี ใน มสธ</h2>
  <div class="panel-group">
  <div class="panel panel-warning">
      <div class="panel-heading">1.มีวุฒิการศึกษาใด <span id="sp_m_edu" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
        <div class="radio">
          <label><input type="radio" name="m_edu" value="3" >มัธยมศึกษาตอนต้น</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="m_edu" value="6">มัธยมศึกษาตอนปลาย</label>
        </div>
        <div class="radio ">
          <label><input type="radio" name="m_edu" value="9">ประกาศนีบัตรขั้นสูง (ปวส)</label>
        </div>
        <div class="radio ">
          <label><input type="radio" name="m_edu" value="12" >ปริญญาตรี</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">2.อายุ<span id="sp_age25" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="age25" value="Y"  required>น้อยกว่า 25 ปี</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="age25" value="N"  required>ตั้งแต่ 25 ปีขึ้นไป</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">3.ชอบภาษาอังกฤษ<span id="sp_en" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="en" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="en" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">4.ชอบคณิตศาสตร์<span id="sp_math" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="math" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="math" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">5.ชอบวิทยาศาสตร์<span id="sp_sci" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="sci" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="sci" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">6.ชอบทำงานส่งออนไลน์<span id="sp_online" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="online" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="online" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">7.ชอบเขียนข้อสอบอัตนัย<span id="sp_write_exam" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
    <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="write_exam" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="write_exam" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-warning">
      <div class="panel-heading">8.สามารถลางานเข้าอบรมได้บ่อยๆ<span id="sp_train" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="train" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="train" value="N">ไม่ชอบ</label>
        </div>
      </div> 
    </div>
    <div>
    </div>
<br>
<div class="container text-center">
  <button type="button" class="btn btn-primary " onclick="validate();">ตรวจสอบสาขาวิชาที่เหมาะที่จะเรียน</button>
</div>
<br>
</form>
<?php include '../include/footer2.php';?>