<?php include '../include/header2.php';?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
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
        $term_no = $_GET["term_no"];
        $term_year = $_GET["term_year"];
        $term_grade = $_GET["grade"];
        $sub_id = $_GET["sub_id"];
        $sub_name = $_GET["sub_name"];
        $user_login = $_SESSION["user"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stou";

        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $StrSQL = "SELECT * FROM grade WHERE user = '$user_login' and sub_id = '$sub_id'";
        $result = $conn->query($StrSQL);

        if ($result->num_rows == 0) {
            $StrSQL = "INSERT INTO grade (user, sub_id, sub_name, term_no, term_year, grade)
            VALUES ('$user_login', '$sub_id', '$sub_name', '$term_no', '$term_year','$term_grade')";
            
            if ($conn->query($StrSQL) === TRUE) {
                    // forward
                    $conn->close();
                    header( "location: ../member/m_grade.php" );
                    exit(0);
            } else {
                // error
                echo "<div class=\"container\">" ;    
                echo "<div class=\"row\">";
                echo "<div class=\"col-sm-4\"></div>";
                  echo "<div class=\"col-sm-4\">"; 
                   echo "<div class=\"panel panel-danger\">";
                     echo "<div class=\"panel-heading text-center\">เพิ่มข้อมูลเกิดข้อผิดพลาด</div>";
                       echo "<div class=\"panel-body text-center\">";
                        echo "ข้อผิดพลาด<br> ไม่สามารถเพิ่มชุดวิชาได้เกิดข้อผิดพลาดบางประการ <br>". $conn->error."<br>";
                        echo "<a href=\"../member/m_grade.php\"><button type=\"button\" class=\"btn btn-primary\">ผลการเรียน</button></a>";
                        echo "</div>";
                      echo "<div class=\"panel-footer\"></div>";
                   echo "</div>";
                  echo "</div>";
              echo "<div class=\"col-sm-4\"></div>";
              echo "</div>";
              echo "</div>";
              $conn->close();
            } 
        }else{
          
            echo "<div class=\"container\">" ;    
            echo "<div class=\"row\">";
            echo "<div class=\"col-sm-4\"></div>";
              echo "<div class=\"col-sm-4\">"; 
               echo "<div class=\"panel panel-danger\">";
                 echo "<div class=\"panel-heading text-center\">เพิ่มข้อมูลเกิดข้อผิดพลาด</div>";
                   echo "<div class=\"panel-body text-center\">";
                    echo "ข้อผิดพลาด<br> ชุดวิชานี้มีอยู่แล้ว <br>ไม่สามารถเพิ่มชุดวิชานี้ได้ <br>". $conn->error."<br>";
                    echo "<a href=\"../member/m_grade.php\"><button type=\"button\" class=\"btn btn-primary\">ผลการเรียน</button></a>";
                    echo "</div>";
                  echo "<div class=\"panel-footer\"></div>";
               echo "</div>";
              echo "</div>";
          echo "<div class=\"col-sm-4\"></div>";
          echo "</div>";
          echo "</div>";
          $conn->close();
        }
?>
<span class="pull-right">STOU.AC11</span><h3>Online</h3><h1>Test</h1>

<?php include '../include/footer2.php';?>