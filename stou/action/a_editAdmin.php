<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../a_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li class="active"><a href="./admin/a_admin.php">กำหนดสิทธิ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    $user = $_GET["user"];
    $name = $_GET["name"];
    $role = $_GET["role"];
?>
<div class="container">
<h2>ปรับปรุงข้อมูล</h2>
  <form class="form-horizontal" method="post" action="updateAdmin.php" >
  <input type="hidden" id="user" name="user" value="<?php echo $user;  ?>" />
  <div class="panel panel-info">
      <div class="panel-heading">Edit User</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" >User:</label>
      <div class="col-sm-10">
      <label class="control-label col-sm-2" style="text-align: left;" ><?php echo $user; ?></label> 
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">ชื่อ:</label>
      <div class="col-sm-10">
      <label class="control-label col-sm-2" style="text-align: left;" ><?php echo $name; ?></label> 
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="role">สิทธิ์ในระบบ:</label>
      <div class="col-sm-10">
        <select class="form-control" id="role" name="role">
          <?php

            if("A" == $role){
              echo "<option value=\"A\" selected>A</option>";
              echo "<option value=\"C\">C</option>";
            }else{
              echo "<option value=\"A\" selected>A</option>";
              echo "<option value=\"C\">C</option>";
            }
          ?>
        </select>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" name="btnSave">กำหนดสิทธิ์</button>
      <a href="../action/u_del_user.php?user=<?php echo $user. "&action=del"; ?>"><button type="button" class="btn btn-danger" >ลบ User</button></a>
        <a href="../action/u_del_user.php?user=<?php echo $user."&action=reset"; ?>"><button type="button" class="btn btn-info" >รีเซต user</button></a>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.01</span>
<?php include '../include/footer2.php';?>