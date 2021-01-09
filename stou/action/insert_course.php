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
 

        echo "term_no =" . "$term_no";
        echo "sub_name =" . "$sub_name";
        echo "term_no =" . "$term_no";

        if("12" == "$term_no"){
            $term_all = "Y";
        }else{
            $term_all = "N";
        }

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stou";


        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $StrSQL = "SELECT * FROM subject WHERE sub_id = '$sub_id'";
        $result = $conn->query($StrSQL);



        if ($result->num_rows == 0) {
            $StrSQL = "INSERT INTO subject (sub_id, sub_name, term_no, term_all )
            VALUES ('$sub_id', '$sub_name', '$term_no', '$term_all')";
            
            if ($conn->query($StrSQL) === TRUE) {
                    // forward
                    $conn->close();

                    header( "location: ../admin/a_course.php" );
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
                        echo "<a href=\"./acddCourse\"><button type=\"button\" class=\"btn btn-primary\">ชุดวิชา</button></a>";
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
                    echo "<a href=\"./addCourse.php\"><button type=\"button\" class=\"btn btn-primary\">ชุดวิชา</button></a>";
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




<?php include '../include/footer2.php';?>