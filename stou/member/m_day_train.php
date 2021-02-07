<?php include '../include/header2.php';?>
<style>
.table-hover tbody tr:hover td {
    background: aqua;
}
</style>
<script>
  function validate(){

    var rad = getRadioValue("user_study");

    if(rad == undefined){
      $("#myModal").modal()

    }else{
      document.getElementById("m_day").submit();

    }

  }


  function getRadioValue(theRadioGroup)
{
    var elements = document.getElementsByName(theRadioGroup);
    for (var i = 0, l = elements.length; i < l; i++)
    {
        if (elements[i].checked)
        {
            return elements[i].value;
        }
    }
}

</script>

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
      <li><a href="https://www.stou.ac.th/offices/ore/rere/goto/calendar">ปฏิทิน</a></li>
        <li><a href="../member/m_course.php">สนใจเรียน</a></li>
        <li class="active"><a href="../member/m_day_train.php">วิชาอบรม</a></li>
        <li><a href="../member/m_exam.php">ทดสอบตัวเอง</a></li>
        <li><a href="../member/m_grade.php">บันทึกผลการเรียน</a></li>
        <li><a href="../e_exam/m_exam_search.php">คลังข้อสอบ</a></li>
        <li><a href="../e_news/m_news_search.php">ข่าวประชาสัมพันธ์</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../member/m_info.php"><img src="../img/person.png" width="32px" hegiht="32px">เกี่ยวกับ <?php echo $_SESSION["user"] ; ?></a> </li>
        <li><a href="../logout.php"><img src="../img/out.png" width="32px" hegiht="32px"> Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>

<form class="form-horizontal" action="../action/mDescAction.php" method="post" id="m_day">



<div class="container">
  
  <div class="panel-group">

  <div class="panel panel-primary">

  <div class="panel-heading">ข้อมูลการวิชาอบรม</div>

  <div class="panel-body">


  <table class="table table-striped table-hover ">
    <tbody>
          <tr>
              <td> 
                <div class="radio">
                  <label><input type="radio" name="user_study" value="01" >สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา</label>
                </div>
              </td>
              <td>
                <div class="radio">
                  <label><input type="radio" name="user_study" value="02">สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="radio">
                    <label><input type="radio" name="user_study" value="03">สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน</label>
                  </div>
              </td>
              <td>
                <div class="radio">
                    <label><input type="radio" name="user_study" value="04">สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ</label>
                  </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="radio">
                    <label><input type="radio" name="user_study" value="05">สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์</label>
                  </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="06">สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="07">สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="08">สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="09">สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="10">สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="11">สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="12">สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="13">สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="14">สาขาวิชาวิทยาการจัดการ - การจัดการ</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="15">สาขาวิชาวิทยาการจัดการ - การเงิน</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="16">สาขาวิชาวิทยาการจัดการ - การตลาด</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="17">สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="18">สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="19">สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="20">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="21">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="22">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="23">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="24">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="25">สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="26">สาขาวิชานิติศาสตร์</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="27">สาขาวิชานิเทศศาสตร์</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="28">สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="29">สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="30">สาขาวิชาวิทยาศาสตร์สุขภาพ - แพทย์แผนไทย</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="31">สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="32">สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="33">สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="34">สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="35">สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์</label>
                </div>
              </td>
              <td>
              <div class="radio">
                  <label><input type="radio" name="user_study" value="36"> สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ</label>
                </div>
              </td>
            </tr>
    </tbody>
  </table>
            
  </div>
    </div>
    <br>
             <div class="container text-center">
               <button type="button" class="btn btn-success " onclick="validate();">รายละเอียดวิชาอบรม</button>
             </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">รายละเอียดวิชาฝึกอบรม</h4>
        </div>
        <div class="modal-body">
          <p>โปรดเรื่องสาขาวิชา</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิดหน้าต่าง</button>
        </div>
      </div>
      
    </div>
  </div>



</div>

</form>


<span class="pull-right">STOU.34</span>

<?php include '../include/footer2.php';?>

