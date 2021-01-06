<?php include 'include/main_header.php';?>



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
        <li class="active"><a href="#">Home</a></li>
      </ul> 
    </div>
  </div>
</nav>

<div class="container">
<h2>สมัครสมาชิกใหม่</h2>
  <form class="form-horizontal" action="action/registerAction.php" method="post">



  <div class="panel panel-info">
      <div class="panel-heading">New Member</div>
      <div class="panel-body">
      
      

      <div class="form-group">
      <label class="control-label col-sm-2" for="user_login">ชื่อผู้ใช้:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_login" placeholder="Enter User Login" name="user_login">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_pwd">รหัสผ่าน:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="user_pwd" placeholder="Enter User Password" name="user_pwd">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_id">รหัสนักศึกษา:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="user_id" placeholder="Enter STOU ID" name="user_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">ชื่อ-นามสกุล:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="user_name" placeholder="Enter Name" name="user_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_email">อีเมลล์:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="user_email" placeholder="Enter Email" name="user_email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user_study">สาขาวิชาที่เรียน:</label>
      <div class="col-sm-10">          
        <div class="form-group col-sm-12">
                <select class="input-large form-control"  name="user_study" id="user_study">
                    <option value="">เลือกสาขาวิชา</option>
                    <option value="01">01 : สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา</option>
                    <option value="02">02 : สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป</option>
                    <option value="03">03 : สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน</option>
                    <option value="04">04 : สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ</option>
                    <option value="05">05 : สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์</option>
                    <option value="06">06 : สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว</option>
                    <option value="07">07 : สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย</option>
                    <option value="08">08 : สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา</option>
                    <option value="09">09 : สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต</option>
                    <option value="10">10 : สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา</option>
                    <option value="11">11 : สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง</option>
                    <option value="12">12 : สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ</option>
                    <option value="13">13 : สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง</option>
                    <option value="14">14 : สาขาวิชาวิทยาการจัดการ - การจัดการ</option>
                    <option value="15">15 : สาขาวิชาวิทยาการจัดการ - การเงิน</option>
                    <option value="16">16 : สาขาวิชาวิทยาการจัดการ - การตลาด</option>
                    <option value="17">17 : สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว</option>
                    <option value="18">18 : สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต</option>
                    <option value="19">19 : สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต</option>
                    <option value="20">20 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร</option>
                    <option value="21">21 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม</option>
                    <option value="22">22 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช</option>
                    <option value="23">23 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์</option>
                    <option value="24">24 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร</option>
                    <option value="25">25 : สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์</option>
                    <option value="26">26 : สาขาวิชานิติศาสตร์	</option>
                    <option value="27">27 : สาขาวิชานิเทศศาสตร์</option>
                    <option value="28">28 : สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน</option>
                    <option value="29">29 : สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย</option>
                    <option value="30">30 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร</option>
                    <option value="31">31 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์</option>
                    <option value="32">32 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม</option>
                    <option value="33">33 : สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์</option>
                    <option value="34">34 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์</option>
                    <option value="35">35 : สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ</option>
                    <option value="36">36 : โครงการสัมฤทธิบัตร</option>
                    <option value="37">37 : ผู้สนใจเรียน</option>
                </select>
            </div>
      </div>
    </div>


    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
  
        <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
      </div>
    </div>






      </div>
    </div>


 
  </form>
</div>

</div><br>

<br><br>

<?php include 'include/footer.php';?>