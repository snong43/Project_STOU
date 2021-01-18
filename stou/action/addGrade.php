<?php include '../include/header2.php';?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="./m_index.php"> รอบรู้ มสธ </a>
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
        <li><a href="./member/m_info.php"><img src="img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="./logout.php"><img src="img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">    
  <div class="row">
    <div class="col-sm-12"> 
      <div class="panel panel-primary">
        <div class="panel-heading text-center">เพิ่มข้อมูลการลงทะเบียนเรียน</div>
        <div class="panel-body">
        <form class="form-horizontal" action="insert_grade.php">
        <input type="hidden" id="sub_id" name="sub_id" value="<?php echo $_GET["sub_id"];  ?>" />
        <input type="hidden" id="sub_name" name="sub_name" value="<?php echo $_GET["sub_name"];  ?>" />
    <div class="form-group">
      <label class="control-label col-sm-2">ชุดวิชา :</label>
      <label class="control-label col-sm-10" style="text-align: left !important">  <?php echo $_GET["sub_id"] . " " .  $_GET["sub_name"] ; ?></label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="term_no">ภาคเรียน :</label>
      <div class="col-sm-1">          
      <select class="form-control" id="term_no" name="term_no">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
      </select>
      </div>
      <label class="control-label col-sm-1" for="term_year">/</label>
      <div class="col-sm-2">          
      <select class="form-control" id="term_year" name="term_year">
        <option value="2564">2564</option>
        <option value="2563">2563</option>
        <option value="2562">2562</option>
        <option value="2561">2561</option>
        <option value="2560">2560</option>
        <option value="2559">2559</option>
        <option value="2558">2558</option>
        <option value="2557">2557</option>
        <option value="2556">2556</option>
        <option value="2555">2555</option>
        <option value="2554">2554</option>
        <option value="2553">2553</option>
        <option value="2552">2552</option>
        <option value="2551">2551</option>
        <option value="2550">2550</option>
      </select>
      </div>
      <label class="control-label col-sm-2" for="grade">ผลการเรียน :</label>
      <div class="col-sm-1">          
      <select class="form-control" id="grade" name="grade">
        <option value="I">I</option>
        <option value="U*">U*</option>
        <option value="U">U</option>
        <option value="S">S</option>
        <option value="S*">S*</option>
        <option value="H">H</option>
        <option value="H*">H*</option>
      </select>
      </div>
      <label class="control-label col-sm-3" > </label>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">บันทึกผลการเรียน</button>
      </div>
    </div>
  </form>
        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>
<span class="pull-right">STOU.AC02</span><h3>Online</h3><h1>Test</h1>
<?php include '../include/footer2.php';?>