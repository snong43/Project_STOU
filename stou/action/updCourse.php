
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


$sub_id = $_POST["sub_id"];
$sub_name = $_POST["sub_name"];
$term_no = $_POST["term_no"];
$term_all = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stou";

if("12" == "$term_no" ){
    $term_all = "Y";
}else{
    $term_all = "N";
}



$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$StrSQL = "UPDATE subject  SET  sub_name =  '$sub_name' , "  .
            " term_no =  '$term_no' , " .
            " term_all =  '$term_all'  " .
            " WHERE sub_id = '$sub_id'";

 //           echo " <br> SQL = <br>" . $StrSQL;

            if ($conn->query($StrSQL) === TRUE) {
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-success\">";
                     echo "<div class=\"panel-heading text-center\"> Update Success</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "แก้ไขข้อมูลเรียบร้อยแล้ว<br>  <br>";
                        echo "<a href=\"../admin/a_course.php\"><button type=\"button\" class=\"btn btn-primary\">ไปหน้าชุดวิชาเรียน</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";
              } else {
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-danger\">";
                     echo "<div class=\"panel-heading text-center\"> Update Fail</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "ปรับปรุงข้อมูลผิดพลาด<br>  <br>". $conn->error;
                        echo "<a href=\"../admin/a_course.php\"><button type=\"button\" class=\"btn btn-primary\">ไปหน้าชุดวิชาเรียน</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";



              }

$conn->close();
?>
<?php include '../include/footer2.php';?>