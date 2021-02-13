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
        <li><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li ><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
        <li class="active"><a href="../e_news/a_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../admin/a_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>

<form class="form-horizontal" action="./a_news_insert_db.php" method="post">
<div class="container">
  <div class="panel-group">
    
    <div class="panel panel-primary">
      <div class="panel-heading">เพิ่มข่าวประชาสัมพันธ์</div>
        <div class="panel-body">
            <div class="form-group">
              <label class="control-label col-sm-2" for="news_title">หัวข้อ:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="2" id="news_title" name="news_title" style="background-color:#fefbd8;" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="news_content">รายละเอียด:</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" id="news_content"  name="news_content"  required></textarea>
              </div>
               </div>
               <div class="col-sm-4 text-center">
                <a href="../e_news/a_news_search.php"><button type="button" class="btn btn-default">Back</button></a>
                <input type="submit" class="btn btn-info" value="บันทึก">
              </div>
          </div>
      </div>

    </div>
  </div>
</form>

<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.51 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>