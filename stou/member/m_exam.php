<?php include '../include/header2.php';?>
<script>

    function validate(){
      var math = $('input[name="math"]:checked').val(); ;
      var sci = $('input[name="sci"]:checked').val(); ;
      var online = $('input[name="online"]:checked').val(); ;
      var write_exam = $('input[name="write_exam"]:checked').val(); ;
      var train = $('input[name="train"]:checked').val(); ;

      console.log("math = " + math);
      console.log("sci = " + sci);
      console.log("online = " + online);
      console.log("write_exam = " + write_exam);
      console.log("train = " + train);


      if(math == undefined ||sci == undefined ||online == undefined ||write_exam == undefined ||train == undefined  ){
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
      <a class="navbar-brand" href="../m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">ปฏิทิน</a></li>
        <li><a href="../member/m_course.php">สนใจเรียน</a></li>
        <li><a href="../member/m_day_train.php">วิชาอบรม</a></li>
        <li class="active"><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../member/m_info.php">ส่วนตัว</a></li>
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
  <div class="panel panel-primary">
      <div class="panel-heading">1.ชอบคณิตศาสตร์<span id="sp_math" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="math" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="math" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">2.ชอบวิทยาศาสตร์<span id="sp_sci" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="sci" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="sci" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">3.ชอบทำงานส่งออนไลน์<span id="sp_online" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="online" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="online" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">4.ชอบเขียนข้อสอบอัตนัย<span id="sp_write_exam" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
    <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="write_exam" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="write_exam" value="N">ไม่ชอบ</label>
        </div>
      </div>
    </div>
    <div class="panel panel-primary">
      <div class="panel-heading">5.สามารถลางานเข้าอบรมได้บ่อยๆ<span id="sp_train" style="color: red; display:none">กรุณาเลือกคำตอบ (...)</span></div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="train" value="Y">ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="train" value="N">ไม่ชอบ</label>
        </div>
      </div> 
    </div>



    <br>
    <div class="container text-center">
      <button type="button" class="btn btn-success " onclick="validate();">ตรวจสอบสาขาวิชาที่เหมาะที่จะเรียน</button>
    </div>
    <br>



  </div>
</div>
</form>
<span class="pull-right">STOU.31</span>
<?php include '../include/footer2.php';?>
