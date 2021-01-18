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
      <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">ปฏิทิน</a></li>
        <li><a href="member/m_course.php">สนใจเรียน</a></li>
        <li><a href="member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="member/m_info.php">ส่วนตัว</a></li>
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
    $sub_id = $_GET["sub_id"];
    $sub_name = $_GET["sub_name"];
    $grade = $_GET["grade"];
    $user_login = $_SESSION["user"];
?>
<div class="container">    
  <div class="row">
    <div class="col-sm-12"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">แก้ไขข้อมูลการลงทะเบียนเรียน</div>
        <div class="panel-body">
    <form class="form-horizontal" action="upGrade.php" method="post">
      <input type="hidden" id="sub_id" name="sub_id" value="<?php echo $sub_id;?>" />
    <div class="form-group">
      <label class="control-label col-sm-2">ชุดวิชา :</label>
      <label class="control-label col-sm-10" style="text-align: left !important">  <?php echo $_GET["sub_id"] . " " .  $_GET["sub_name"] ; ?></label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="term_no">ภาคเรียน :</label>
      <div class="col-sm-1">          
      <select class="form-control" id="term_no" name="term_no">
        <?php
            if($term_no == "1"){
                echo "<option value=\"1\" selected>1</option>";

            }else{
                echo "<option value=\"1\">1</option>";

            }
            if($term_no == "2"){
                echo "<option value=\"2\" selected>2</option>";

            }else{
                echo "<option value=\"2\">2</option>";

            }
            if($term_no == "3"){
                echo "<option value=\"3\" selected>3</option>";

            }else{
                echo "<option value=\"3\">3</option>";

            }
        ?>
      </select>
      </div>
      <label class="control-label col-sm-1" for="term_year">/</label>
      <div class="col-sm-2">          
      <select class="form-control" id="term_year" name="term_year">
      <?php  
        if($term_year == "2564"){
            echo "<option value=\"2564\" selected>2564</option>";

        }else{
            echo "<option value=\"2564\">2564</option>";

        }

        if($term_year == "2563"){
            echo "<option value=\"2563\" selected>2563</option>";

        }else{
            echo "<option value=\"2563\">2563</option>";

        }

        if($term_year == "2562"){
            echo "<option value=\"2562\" selected>2562</option>";

        }else{
            echo "<option value=\"2562\">2562</option>";

        }

        if($term_year == "2561"){
            echo "<option value=\"2561\" selected>2561</option>";

        }else{
            echo "<option value=\"2561\">2561</option>";

        }


        if($term_year == "2560"){
            echo "<option value=\"2560\" selected>2560</option>";

        }else{
            echo "<option value=\"2560\">2560</option>";

        }


        if($term_year == "2559"){
            echo "<option value=\"2559\" selected>2559</option>";

        }else{
            echo "<option value=\"2559\">2559</option>";

        }


        if($term_year == "2558"){
            echo "<option value=\"2558\" selected>2558</option>";

        }else{
            echo "<option value=\"2558\">2558</option>";

        }


        if($term_year == "2557"){
            echo "<option value=\"2557\" selected>2557</option>";

        }else{
            echo "<option value=\"2557\">2557</option>";

        }


        if($term_year == "2556"){
            echo "<option value=\"2556\" selected>2556</option>";

        }else{
            echo "<option value=\"2556\">2556</option>";

        }
    

        if($term_year == "2555"){
            echo "<option value=\"2555\" selected>2555</option>";

        }else{
            echo "<option value=\"2555\">2555</option>";

        }


        if($term_year == "2554"){
            echo "<option value=\"2554\" selected>2554</option>";
        }else{
            echo "<option value=\"2554\">2554</option>";

        }


        if($term_year == "2553"){
            echo "<option value=\"2553\" selected>2553</option>";

        }else{
            echo "<option value=\"2553\">2553</option>";

        }

        
        if($term_year == "2552"){
            echo "<option value=\"2552\" selected>2552</option>";
        }else{
            echo "<option value=\"2552\">2552</option>";
        }

        
        if($term_year == "2551"){
            echo "<option value=\"2551\" selected>2551</option>";
        }else{
            echo "<option value=\"2551\">2551</option>";
        }

        
        if($term_year == "2550"){
            echo "<option value=\"2550\" selected>2550</option>";
        }else{
            echo "<option value=\"2550\">2550</option>";
        }
        ?>
      </select>
      </div>
      <label class="control-label col-sm-2" for="grade">ผลการเรียน :</label>
      <div class="col-sm-1">          
      <select class="form-control" id="grade" name="grade">

      <?php
            $gra = array("I", "U", "U*", "S","S*","H","H*");

            for ($x = 0; $x < count($gra); $x++) {
                if($gra[$x] == $grade){
                   echo "<option value=\"". $gra[$x] ."\" selected>". $gra[$x] ."</option>";

                }else{
                    echo "<option value=\"". $gra[$x] ."\">". $gra[$x] ."</option>";

                }
              }
      ?>
      </select>
      </div>
      <label class="control-label col-sm-3" > </label>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">บันทึกผลการเรียน</button>  <a href="delGrade.php?sub_id=<?php echo $sub_id;?>"><button type="button" class="btn btn-danger">ลบรายการนี้</button></a>
      </div>
    </div>
  </form>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>
<span class="pull-right">STOU.AC08</span><h3>Online</h3><h1>Test</h1>

<?php include '../include/footer2.php';?>