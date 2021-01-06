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
        <li class="active"><a href="./m_index.php">Home</a></li>
        <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/">ปฏิทิน</a></li>
        <li><a href="#">สนใจเรียน</a></li>
        <li><a href="#">กิจกรรม</a></li>
        <li><a href="#">บันทึกผลการเรียน</a></li>

        <li><a href="#">ทดสอบตัวเอง</a></li>
        <li><a href="#">ติดต่อ</a></li>



      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
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

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>







<form class="form-horizontal" action="./m_grade.php" method="post">

<div class="container">
  <div class="panel-group">



    <div class="panel panel-info">
      <div class="panel-heading">เพิ่มข้อมูลการลงทะเบียน</div>
      <div class="panel-body">
      
      
            <div class="form-group">
            <label class="control-label col-sm-2" for="course_id">รหัสวิชา:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="course_id" placeholder="รหัสชุดวิชา" name="course_id" maxlength="5" minlength="2">
            </div>
            </div>

            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="BtnSearch">ค้นหา</button>
            </div>
            </div>


         
      <?php
          if(isset($_POST["BtnSearch"])) {
        


        $course = $_POST["course_id"];

    //    echo "course = " . $course;

        $StrSQL = "SELECT * FROM subject WHERE sub_id like '%$course%'";
      $result = $conn->query($StrSQL);


      if (mysqli_num_rows($result) > 0) {

        echo "<table class=\"table table-hover\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th>รหัสวิชา</th>";
        echo "<th>ชื่อวิชา</th>";
        echo "<th>เพิ่มชุดวิชา</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>". $row["sub_id"] ."</td>";
          echo "<td>". $row["sub_name"] ."</td>";
          echo "<td><a href=\"../action/addGrade.php?sub_id=". $row["sub_id"]."&sub_name=". $row["sub_name"]."\" <button type=\"button\" class=\"btn btn-info\"> เพิ่ม </button></td></a>";
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
















<div class="container">
  <div class="panel-group">

    <div class="panel panel-primary">
      <div class="panel-heading">ข้อมูลการลงทะเบียนเรียน</div>
      <div class="panel-body">
      
      
      
      <table class="table table-striped">
    <thead>
      <tr>
        <th>ภาคเรียน</th>
        <th>รหัสชุดวิชา</th>
        <th>ชื่อชุดวิชา</th>
        <th>เกรด</th>
        <th>ดำเนินการ</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>Doe</td>

      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>Doe</td>
        <td>Doe</td>

      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>Doe</td>
        <td>Doe</td>

      </tr>
    </tbody>
  </table>
      
      
      </div>
    </div>

    



 
  </div>
</div>

















<?php include '../include/footer2.php';?>