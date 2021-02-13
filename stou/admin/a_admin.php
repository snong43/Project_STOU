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
        <li class="active"><a href="../admin/a_course.php">หลักสูตร</a></li>
        <li><a href="../admin/a_train.php">วิชาฝึกอบรม</a></li>
        <li><a href="../admin/a_exam.php">แบบทดสอบ</a></li>
        <li class="active"><a href="../admin/a_admin.php">กำหนดสิทธิ์</a></li>
        <li><a href="../e_exam/a_exam_search.php">คลังข้อสอบ</a></li>
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
?>
<form class="form-horizontal" action="./a_admin.php" method="post">
<div class="container">
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">กำหนดสิทธิ์ผู้ใช้</div>
      <div class="panel-body">
            <div class="form-group">
            <label class="control-label col-sm-2" for="user_id">รหัสวิชา:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="user_id" placeholder="กรอก User ที่ต้องการค้นหา" name="user_id" maxlength="20" >
            </div>
            <p class="control-label col-sm-4 " >กรอก User ที่ต้องการค้นหา </p>
            </div>
            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="BtnSearch">ค้นหา</button>
            </div>
            </div>
      <?php
          if(isset($_POST["BtnSearch"])) {
            $user_id = $_POST["user_id"];
            $StrSQL = "SELECT * FROM user WHERE user like '%$user_id%' order by user ";
            $result = $conn->query($StrSQL);


      if (mysqli_num_rows($result) > 0) {
        echo "<table class=\"table table-hover\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th>";
        echo "user";
        echo "</th>";
        echo "<th>user</th>";
        echo "<th>name</th>";
        echo "<th>role</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>". $row["user"] ."</td>";
          echo "<td>". $row["name"] ."</td>";
          echo "<td>". $row["role"] ."</td>";
          echo "<td><a href=\"../action/a_editAdmin.php?user=". $row["user"]."&name=". $row["name"]."&role=". $row["role"]."\" <button type=\"button\" class=\"btn btn-info\"> แก้ไข </button></a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr>";
        echo "<td colspan=\"3\" class=\"text-center\"> ไม่มีข้อมูล </td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      mysqli_close($conn);
      }
        ?>
      </div>
    </div>
  </div>
</div>
</form>
<?php
  $space = " &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
  $space = $space . $space . $space  . $space  . $space ;
?>
<span class="pull-right">STOU.28 <?php echo $space ?></span>

<?php include '../include/footer2.php';?>