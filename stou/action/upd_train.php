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
      <li><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li class="active"><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
  $sub_id = $_GET["sub_id"];
  $sub_name = $_GET["sub_name"];
  $course_id = $_GET["course_id"];
  $course_name = $_GET["course_name"];
  $train_day = $_GET["train_day"];
?>
<div class="container">
<h2>วิชาฝึกอบรม</h2>
  <form class="form-horizontal" action="update_train.php" method="post">
    <input type="hidden" id="sub_id" name="sub_id" value="<?php echo $sub_id ?>" />
    <input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id ?>" />
  <div class="panel panel-info">
      <div class="panel-heading">ปรับปรุงวิชาอบรม</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" >ชุดวิชา:</label>
      <div class="col-sm-10">
      <label class="control-label"><?php echo $sub_id . " ". $sub_name ;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >สาขาวิชา:</label>
      <div class="col-sm-10">
      <label class="control-label"><?php echo $course_name ;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="train_day">จำนวนวันอบรม:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="train_day" placeholder="Enter days to train" name="train_day" value="<?php echo $train_day; ?>">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary"> บันทึก</button>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.18</span>

<?php include '../include/footer2.php';?>