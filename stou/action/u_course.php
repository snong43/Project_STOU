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
        <li><a href="../m_index.php">Home</a></li>
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/">ปฏิทิน</a></li>
        <li><a href="#">สนใจเรียน</a></li>
        <li><a href="#">กิจกรรม</a></li>
        <li><a href="./member/m_grade.php">บันทึกผลการเรียน</a></li>

        <li><a href="#">ทดสอบตัวเอง</a></li>
        <li><a href="#">ติดต่อ</a></li>



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


    echo "sub_id =" . $sub_id . "<br>" ;
    echo "sub_name =" . $sub_name . "<br>" ;
    echo "term_no =" . $term_no . "<br>" ;





?>
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





<?php include '../include/footer2.php';?>