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
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li class="active"><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<?php
    $course_id = $_GET["course_id"];
    $course_name = $_GET["course_name"];
    $en = $_GET["en"];
    $math = $_GET["math"];
    $sci = $_GET["sci"];
    $write = $_GET["write_exam"];
    $train = $_GET["train"];
    $m_edu = $_GET["m_edu"];
?>
<div class="container">
<h2>กำหนดแบบทดสอบ</h2>
  <form class="form-horizontal" action="updExam.php" method="post">
    <input type="hidden" id="course_id" name="course_id" value="<?php echo $course_id; ?>" />
  <div class="panel panel-info">
      <div class="panel-heading">แบบทดสอบ</div>
      <div class="panel-body">
      <div class="form-group">
      <label class="control-label col-sm-2" >สาขาวิชา:</label>
      <div class="col-sm-4">
        <label class="control-label" ><?php echo $course_name ?></label>
      </div>
    </div>
<?php
      echo "<div class=\"form-group\">";
      echo "<label for=\"math\" class=\"control-label col-sm-2\" >ชอบคณิตศาสตร์:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"math\" name=\"math\" >";
      if($math == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "<label for=\"en\" class=\"control-label col-sm-2\" >ชอบภาษาอังกฤษ:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"en\" name=\"en\" >";
      if($en == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "</div>";
      echo "<div class=\"form-group\">";
      echo "<label for=\"sci\" class=\"control-label col-sm-2\" >ชอบวิทยาศาสตร์:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"sci\" name=\"sci\" >";
      if($sci == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "<label for=\"m_edu\" class=\"control-label col-sm-2\" >มีวุฒิการศึกษา:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"m_edu\" name=\"m_edu\" >";
      if($m_edu == "3"){
          echo "  <option value=\"3\" selected>มัธยมศึกษาตอนต้น</option>";
          echo "  <option value=\"6\">มัธยมศึกษาตอนปลาย</option>";
          echo "  <option value=\"9\">ประกาศนียบัตรขั้นสูง (ปวส)</option>";
          echo "  <option value=\"12\">ปริญญาตรี</option>";

      }elseif($m_edu == "6"){
          echo "  <option value=\"3\" >มัธยมศึกษาตอนต้น</option>";
          echo "  <option value=\"6\" selected>มัธยมศึกษาตอนปลาย</option>";
          echo "  <option value=\"9\">ประกาศนียบัตรขั้นสูง (ปวส)</option>";
          echo "  <option value=\"12\">ปริญญาตรี</option>";
      }elseif($m_edu == "9"){
          echo "  <option value=\"3\" >มัธยมศึกษาตอนต้น</option>";
          echo "  <option value=\"6\">มัธยมศึกษาตอนปลาย</option>";
          echo "  <option value=\"9\" selected>ประกาศนียบัตรขั้นสูง (ปวส)</option>";
          echo "  <option value=\"12\">ปริญญาตรี</option>";
      }else{
          echo "  <option value=\"3\" >มัธยมศึกษาตอนต้น</option>";
          echo "  <option value=\"6\">มัธยมศึกษาตอนปลาย</option>";
          echo "  <option value=\"9\">ประกาศนียบัตรขั้นสูง (ปวส)</option>";
          echo "  <option value=\"12\ selected\">ปริญญาตรี</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "</div>";
      echo "<div class=\"form-group\">";
      echo "<label for=\"train\" class=\"control-label col-sm-2\" >เข้าค่ายฝึกอบรมบ่อย:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"train\" name=\"train\" >";
      if($train == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "<label for=\"write_exam\" class=\"control-label col-sm-2\" >ชอบข้อสอบเขียนอัตนัย:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"write_exam\" name=\"write_exam\" >";
      if($write_exam == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "</div>";
      echo "<div class=\"form-group\">";
      echo "<label for=\"online\" class=\"control-label col-sm-2\" >มีงานส่งออนไลน์:</label>";
      echo "<div class=\"col-sm-4\">";
      echo "<select class=\"form-control\" id=\"online\" name=\"online\" >";
      if($online == "Y"){
          echo "  <option value=\"Y\" selected>Y</option>";
          echo "  <option value=\"N\">N</option>";
      }else{
          echo "  <option value=\"Y\">Y</option>";
          echo "  <option value=\"N\" selected>N</option>";
      }
      echo "</select>";
      echo "</div>";
      echo "<label class=\"control-label col-sm-2\" ></label>";
      echo "<div class=\"col-sm-4\">";

      echo "</div>";
      echo "</div>";
?>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">บันทึกแบบทดสอบ</button>
      </div>
    </div>
      </div>
    </div>
  </form>
</div>
</div><br>
<br><br>
<span class="pull-right">STOU.AC15</span>
<?php include '../include/footer2.php';?>