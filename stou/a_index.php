<?php include 'include/main_header.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./a_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./admin/a_course.php">หลักสูตร</a></li>
        <li><a href="./admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="./admin/a_exam.php">แบบทดสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./admin/a_info.php"><img src="img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
  <div class="row">
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">หลักสูตร</div>
        <div class="panel-body"><a href="./admin/a_course.php"><img src="img/course.png" class="img-responsive" style="width:100%" alt="หลักสูตร"></a></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">วิชาฝึกอบรม</div>
        <div class="panel-body"><a href="./admin/a_train.php"><img src="img/record.png" class="img-responsive" style="width:100%" alt="วิชาฝึกอบรม"></a></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">แบบทดสอบ</div>
        <div class="panel-body"><a href="./admin/a_exam.php"><img src="img/exam.png" class="img-responsive" style="width:100%" alt="แบบทดสอบ"></a></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4"> 
    </div>
  </div>
</div>
<span class="pull-right">STOU.35</span>
<?php include 'include/main_footer.php';?>