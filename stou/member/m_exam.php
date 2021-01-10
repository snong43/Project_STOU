<?php include '../include/header2.php';?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./m_index.php">Home</a></li>
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





<div class="container">
  <h2>ทดสอบเบื้องต้น เรียนอะไรดี ใน มสธ</h2>
  <div class="panel-group">
  <div class="panel panel-warning">
      <div class="panel-heading">1.มีวุฒิการศึกษาใด</div>
      <div class="panel-body">
        <div class="radio">
          <label><input type="radio" name="m_edu" >มัธยมศึกษาตอนต้น</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="m_edu">มัธยมศึกษาตอนปลาย</label>
        </div>
        <div class="radio ">
          <label><input type="radio" name="m_edu" >ประกาศนีบัตรขั้นสูง (ปวส)</label>
        </div>
        <div class="radio ">
          <label><input type="radio" name="m_edu" >ปริญญาตรี</label>
        </div>
      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">2.อายุ</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="age25">น้อยกว่า 25 ปี</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="age25">ตั้งแต่ 25 ปีขึ้นไป</label>
        </div>

      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">3.ชอบภาษาอังกฤษ</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="en" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="en">ไม่ชอบ</label>
        </div>

      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">4.ชอบคณิตศาสตร์</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="math" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="math">ไม่ชอบ</label>
        </div>
  
      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">5.ชอบวิทยาศาสตร์</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="sci" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="sci">ไม่ชอบ</label>
        </div>
 
      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">6.ชอบทำงานส่งออนไลน์</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="online" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="online">ไม่ชอบ</label>
        </div>
 
      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">7.ชอบเขียนข้อสอบอัตนัย</div>
    <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="write_exam" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="write_exam">ไม่ชอบ</label>
        </div>
 
      </div>
    </div>

    <div class="panel panel-warning">
      <div class="panel-heading">8.สามารถลางานเข้าอบรมได้บ่อยๆ</div>
      <div class="panel-body">
      <div class="radio">
          <label><input type="radio" name="train" >ชอบ</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="train">ไม่ชอบ</label>
        </div>
 
      </div>
    </div>




<?php include '../include/footer2.php';?>