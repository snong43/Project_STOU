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
        <li><a href="./admin/a_course.php">หลักสูตร</a></li>
        <li><a href="./admin/a_member.php">ข้อมูลสมาชิก</a></li>




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
$user_login = $_SESSION["user"];

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


?>







<form class="form-horizontal" action="./a_course.php" method="post">

<div class="container">
  <div class="panel-group">



    <div class="panel panel-info">
      <div class="panel-heading">เพิ่มข้อมูลการลงทะเบียน</div>
      <div class="panel-body">
      
      
            <div class="form-group">
            <label class="control-label col-sm-2" for="course_id">รหัสวิชา:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="course_id" placeholder="รหัสชุดวิชา กรอกเฉพาะตัวเลขเท่านั้น อย่างน้อย 2 ตัวเลขขึ้นไป" name="course_id" maxlength="5" minlength="2">
            </div>
            <p class="control-label col-sm-4 " >** กรอกอย่างน้อยตัวเลข 2 ตัวขึ้นไป เช่น 10, 111, 9610  </p>

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
        echo "<th>";
   
        echo "รหัสวิชา";
        echo "</th>";
        echo "<th>ชื่อวิชา</th>";
        echo "<th>";
        echo "<div class=\"form-group\">";        
        echo "<div class=\"col-sm-offset-2 col-sm-10\">";
        echo "<a href=\"../action/addCourse.php\"><button type=\"button\" class=\"btn btn-success\" >เพิ่มชุดวิชาใหม่</button></a>";
        echo "</div>";
        echo "</div>";
        echo "ปรับปรุงข้อมูล";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>". $row["sub_id"] ."</td>";
          echo "<td>". $row["sub_name"] ."</td>";
          echo "<td><a href=\"../action/u_course.php?sub_id=". $row["sub_id"]."&sub_name=". $row["sub_name"]."&term_no=". $row["term_no"]."\" <button type=\"button\" class=\"btn btn-info\"> แก้ไข </button></a></td>";
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










<?php include '../include/footer2.php';?>