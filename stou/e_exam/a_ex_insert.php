<?php include '../include/header2.php';?>
<?php
$user_login = $_SESSION["role"] ;

if(!isset($user_login)){
  header( "location: ../login.php" );
  exit(0);
}

if("A" != $user_login ){
  header( "location: ../m_index.php" );
  exit(0);
}

?>
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
        <li ><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li ><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li class="active"><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/a_news_search.php">ข่าวประชาสัมพันธ์</a></li>
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


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $StrSQL = "SELECT * FROM exam WHERE ex_id like '$sub_id%' order by sub_id desc LIMIT 1";
  $result = $conn->query($StrSQL);
  $default_seq = $sub_id . "001";

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $default_seq = $row["ex_id"]+1 ;
    }
  }

?>




<div class="container">
<form class="form-horizontal" action="./a_ex_insert_db.php" method="post">
    <input type="hidden" id="sub_id" name="sub_id" value="<?php echo $sub_id; ?>" />
    <input type="hidden" id="sub_name" name="sub_name" value="<?php echo $sub_name; ?>" />
    <input type="hidden" id="ex_id" name="ex_id" value="<?php echo $default_seq; ?>" />
  <h2>ข้อสอบ <?php echo $sub_id . " " . $sub_name;  ?></h2>
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">คำถาม </div>
      <div class="panel-body">
        <div class="form-group">
            <label class="control-label col-sm-2" for="ex0">คำถาม:</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="2" id="ex0" name="ex0" style="background-color:#fefbd8;" required></textarea>
            </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ex1">ตัวเลือกที่ 1:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="2" id="ex1"  name="ex1"  required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ex2">ตัวเลือกที่ 2:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="2" id="ex2"   name="ex2" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ex3">ตัวเลือกที่ 3:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="2" id="ex3"  name="ex3" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="ex4">ตัวเลือกที่ 4:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="2" id="ex4"   name="ex4" required></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-4" for="ans">เฉลย:</label>
                <div class="form-group col-sm-4">
                        <select class="input-large form-control"  name="ans" id="ans">
                            <option value="1">ตัวเลือกที่ 1</option>
                            <option value="2">ตัวเลือกที่ 2</option>
                            <option value="3">ตัวเลือกที่ 3</option>
                            <option value="4">ตัวเลือกที่ 4</option>
                        </select>
                    </div>
              <div class="col-sm-4 text-center">
                <a href="../e_exam/a_exam_search.php"><button type="button" class="btn btn-default">Back</button></a>
                <input type="submit" class="btn btn-info" value="บันทึก">
              </div>
            </div>
      </div>
    </div>
  </div>
  </form>

  </div>
  <?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.34 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>