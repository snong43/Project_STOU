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
      <li class="active"><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li ><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li><a href="./admin/a_admin.php">กำหนดสิทธิ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<h2>เพิ่มชุดวิชา</h2>
  <form class="form-horizontal" action="insert_course.php" method="post">
  <div class="panel panel-info">
      <div class="panel-heading">New Course</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" for="sub_id">รหัสชุดวิชา:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sub_id" placeholder="Enter Subject ID" name="sub_id" maxlength="5" minlength="5">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="">ชื่อวิชา:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sub_name" placeholder="Enter Subject Name" name="sub_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="term_no">เปิดภาคเรียน:</label>
      <div class="col-sm-10">
        <select class="form-control" id="term_no" name="term_no">
            <option value="1">1</option>
            <option value="1">2</option>
            <option value="12">ทุกเทอม</option>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="btnSave">บันทึกชุดวิชาเรียน</button>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.02</span>
<?php include '../include/footer2.php';?>