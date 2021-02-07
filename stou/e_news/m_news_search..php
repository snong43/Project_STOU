<?php include '../include/header2.php';?>
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
        <li><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li ><a href="member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
        <li class="active"><a href="../e_news/m_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>

<span class="pull-right">STOU.01</span>
<?php include '../include/footer2.php';?>