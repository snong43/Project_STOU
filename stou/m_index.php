<?php include 'include/main_header.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">ปฏิทิน</a></li>
        <li><a href="member/m_course.php">สนใจเรียน</a></li>
        <li><a href="member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="member/m_grade.php">บันทึกผลการเรียน</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">        
        <li><a href="./member/m_info.php"><img src="img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">ปฏิทิน</div>
        <div class="panel-body">
          <a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">
            <img src="img/calendar.png" class="img-responsive"  style="width:100%" alt="Image">
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">สนใจเรียน</div>
        <div class="panel-body"><a href="member/m_course.php"><img src="img/course.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">วิชาอบรม</div>
        <div class="panel-body"><a href="member/m_day_train.php"><img src="img/them.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
  </div>
</div>
<div class="container">    
    <div class="col-sm-4"> 
      <div class="panel panel-info">
        <div class="panel-heading text-center">ทดสอบตัวเอง</div>
        <div class="panel-body"><a href="member/m_exam.php"><img src="img/exam.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-info">
        <div class="panel-heading text-center">บันทึกผลการเรียน</div>
        <div class="panel-body"><a href="member/m_grade.php"><img src="img/record.png" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
  <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading text-center">ส่วนตัว</div>
        <div class="panel-body"><a href="member/m_info.php"><img src="img/person.png" class="img-responsive"  style="width:100%" alt="Image"></a></div>
      </div>
    </div>
</div>
<br>
<span class="pull-right">STOU.42</span>
<?php include 'include/main_footer.php';?>