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

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "stou";
  $user_login = $_SESSION["user"];

  $conn = new mysqli($servername, $username, $password, $dbname);
  mysqli_set_charset($conn,"utf8");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $StrSQL = "SELECT * FROM news order by news_date desc";
    $result = $conn->query($StrSQL);

?>
<form class="form-horizontal" >
<div class="container">
  <div class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">ข่าวประชาสัมพันธ์</div>
      <div class="panel-body">
      <a href="./a_news_insert.php"><button type="button" class="btn btn-info">เพิ่มข่าวประชาสัมพันธ์</button></a></br>
      <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>new_id</th>
        <th>news_title</th>
        <th>news_content</th>
        <th>news_date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php

          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>". $row["news_id"] ."</td>";
              echo "<td>". $row["news_title"] ."</td>";
              echo "<td>". $row["news_content"] ."</td>";
              echo "<td>". $row["news_date"] ."</td>";
              echo "<td><a href=\"./a_news_edit.php?news_id=". $row["news_id"] ."&news_title=". $row["news_title"] ."&news_content=".$row["news_content"]."\"><button type=\"button\" class=\"btn btn-success\">ปรับปรุงประกาศ</button></a>&nbsp;&nbsp;";
              echo "<a href=\"./a_news_del.php?news_id=". $row["news_id"] ."\"><button type=\"button\" class=\"btn btn-danger\">ลบประกาศ</button></a></td>";
              echo "</tr>";
            }
          }else{
              echo "<tr>";
              echo "<td colspan=\"5\" class=\"text-center\">";
              echo "ไม่มีข่าวสาร";
              echo "</td>";
              echo "</tr>";
          }

      ?>

 
    </tbody>
  </table>

        
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
<span class="pull-right">STOU.52 <?php echo $space ?></span>
<?php include '../include/footer2.php';?>