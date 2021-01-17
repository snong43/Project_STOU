<?php include '../include/header2.php';?>

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


  <iframe src="https://www.stou.ac.th/offices/ore/rere/goto/calendar" style="top:0;left: 0;width:80%;height: 80%; position: absolute; border: none"></iframe>
<span class="pull-right">STOU.ME05</span><h3>Online</h3><h1>Test</h1>

<?php include '../include/footer2.php';?>