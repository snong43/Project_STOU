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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    $sub_id = $_GET["sub_id"];
    $sub_name = $_GET["sub_name"];
    $term_no = $_GET["term_no"];
?>
<div class="container">
<h2>ปรับปรุงข้อมูล</h2>
  <form class="form-horizontal" action="updCourse.php" method="post">
  <input type="hidden" id="sub_id" name="sub_id" value="<?php echo $sub_id;  ?>" />
  <div class="panel panel-info">
      <div class="panel-heading">Edit Course</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" >รหัสชุดวิชา:</label>
      <div class="col-sm-10">
      <label class="control-label col-sm-2" style="text-align: left;" ><?php echo $sub_id; ?></label> 
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="sub_name">ชื่อวิชา:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sub_name" placeholder="Enter Subject Name" name="sub_name" value= "<?php echo $sub_name; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="term_no">เปิดภาคเรียน:</label>
      <div class="col-sm-10">
        <select class="form-control" id="term_no" name="term_no">
          <?php

            if("1" == $term_no){
              echo "<option value=\"1\" selected>1</option>";
            }else{
              echo "<option value=\"1\">1</option>";
            }

            if("12" == $term_no){
              echo "<option value=\"12\" selected>2</option>";
            }else{
              echo "<option value=\"12\">2</option>";
            }

            if("2" == $term_no){
              echo "<option value=\"2\" selected>ทุกเทอม</option>";
            }else{
              echo "<option value=\"2\">ทุกเทอม</option>";
            }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="btnSave">บันทึกชุดวิชาเรียน</button>
        <a href="../action/u_del_course.php?sub_id=<?php echo $sub_id; ?>"><button type="button" class="btn btn-danger" name="btnSave">ลบชุดวิชา</button></a>
        <a href="../action/u_train.php?sub_id=<?php echo $sub_id; ?>&sub_name=<?php echo $sub_name; ?>"><button type="button" class="btn btn-success" >ชุดวิชาฝึกอบรม</button></a>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.AC13</span>
<?php include '../include/footer2.php';?>