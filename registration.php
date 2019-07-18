<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SOTL6</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
  <?php include "navbar.html"; ?>

  <section class="bg-light" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-10 offset-1" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Regular Registration</h5>
            <div class="card-body font-weight-bold">
              <div><a href="registration_group.php" class="btn btn-success mb-3">ลงทะเบียนแบบกลุ่ม(สำหรับ 5 ท่าน)</a></div>
              <form class="form" id="createStudent" name="createStudent" action="check_regis.php" method="post">
                
                <div class="form-row ">
                  <div class="form-group col-md-4">
                    <label for="title_name_eng">คำนำหน้าชื่อ (Title)*</label>
                    <select class="form-control" id="title_name_eng" name="title_name_eng">
                      <option value="0">เลือก</option>
                      <option value="1">นาย/Mr.</option>
                      <option value="2">นาง/Miss</option>
                      <option value="3">นางสาว/Mrs.</option>
                      <option value="4">ดร./Dr.</option>
                    </select>
                  </div>
                  <!-- ตำแหน่งวิชาการ -->
                  <div class="form-group col-md-4">
                    <label for="title_name_eng">ตำแหน่งทางวิชาการ</label>
                    <select class="form-control" id="title_name_eng" name="title_name_eng">
                      <option value="0">ไม่ระบุ</option>
                      <option value="1">อาจารย์</option>
                      <option value="2">ผศ.</option>
                      <option value="3">รศ.</option>
                      <option value="4">ศ.</option>
                    </select>
                  </div>
                  <!-- ตำแหน่งบริหาร -->
                  <div class="form-group col-md-4">
                    <label for="title_name_eng">ตำแหน่งบริหาร</label>
                    <input type="text" class="form-control" id="fname_eng" name="fname_eng" placeholder="ตำแหน่งบริหาร">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_eng">ชื่อ (Eng)*</label>
                    <input type="text" class="form-control" id="fname_eng" name="fname_eng"
                      placeholder="ชื่อ(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')"
                      oninput="setCustomValidity('')" autocomplete="off">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_eng">นามสกุล (Eng)*</label>
                    <input type="text" class="form-control" id="lname_eng" name="lname_eng"
                      placeholder="นามสกุล(ภาษาอังกฤษ)" required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')"
                      oninput="setCustomValidity('')" autocomplete="off">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_th">ชื่อ (ไทย)*</label>
                    <input type="text" class="form-control" id="fname_th" name="fname_th" placeholder="ชื่อ(ภาษาไทย)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')"
                      autocomplete="off">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_th">นามสกุล (ไทย)*</label>
                    <input type="text" class="form-control" id="lname_th" name="lname_th" placeholder="นามสกุล(ภาษาไทย)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')"
                      autocomplete="off">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="gender">เพศ*</label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="M">ชาย</option>
                      <option value="F">หญิง</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="age">อายุ*</label>
                    <input type="number" class="form-control" max="99" id="age" name="age" placeholder="อายุ" required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nationality">สัญชาติ*</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="สัญชาติ">
                  </div>
                  <!-- <div class="form-group col-md-4">
                    <label for="hbd">วัน-เดือน-ปี เกิด</label>
                    <input type="date" data-date="" class="form-control" id="hbd" name="hbd">
                  </div> -->
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail*</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')"
                      autocomplete="off">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="phone">โทรศัพท์*</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="โทรศัพท์" required
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์')" oninput="setCustomValidity('')"
                      autocomplete="off">
                  </div>
                </div>
                <!-- ที่อยู่ -->
                <!-- <div class="bg-light p-2">
                  <div class="form-row ">
                    <label for="adds">ที่อยู่</label>
                  </div>
                  <div class="form-row">
                    <div class="form-group  col-md-6">
                      <input type="text" class="form-control" id="add_number" name="add_number" placeholder="เลขที่">
                    </div>
                    <div class="form-group  col-md-6">
                      <input type="text" class="form-control" id="add_road" name="add_road" placeholder="ถนน">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group  col-md-6">
                      <input type="text" class="form-control" id="add_sub_district" name="add_sub_district"
                        placeholder="แขวง/ตำบล">
                    </div>
                    <div class="form-group  col-md-6">
                      <input type="text" class="form-control" id="add_district" name="add_district"
                        placeholder="เขต/อำเภอ">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group  col-md-6">
                      <select class="form-control" name="add_proviance" id="add_proviance">
                        <option value="" selected="selected">เลือกจังหวัด</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <input type="text" class="form-control" id="add_district" name="add_district"
                        placeholder="รหัสไปรษณีย์">
                    </div>
                  </div>
                </div> -->
                <!-- end ที่อยู่ -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="grad-from">หน่วยงานต้นสังกัด*</label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation"
                      placeholder="หน่วยงานต้นสังกัด" required
                      oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')"
                      autocomplete="off">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                    <input type="text" class="form-control" id="workplace" name="workplace"
                      placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)" autocomplete="off">
                  </div>
                </div>
                <div class="form-row bg-light ">
                  <div class="form-group col-md-6">
                    <label>อาหาร</label>
                    <!-- Group of material radios - option 1 -->
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food1" name="food" class="custom-control-input" checked>
                        <label class="custom-control-label" for="food1">ทั่วไป</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food2" name="food" class="custom-control-input">
                        <label class="custom-control-label" for="food2">มังสวิรัติ</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food3" name="food" class="custom-control-input">
                        <label class="custom-control-label" for="food3">ฮาลาล</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
                <div class="form-row bg-info mt-3">
                  <div class="form-group col-md-6">
                    <label>อัตราค่าลงทะเบียน</label>
                    <!-- Group of material radios - option 1 -->
                    <div class="pl-3">
                      <div class="custom-control">
                        <label>- Early Bird</label>
                      </div>
                      <div class="custom-control">
                        <label>- Regular</label>
                      </div>
                      <div class="custom-control">
                        <label>- group</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
            </div>
            <input type="submit" name="submit" class="btn btn-success mb-5 col-4 offset-4" value="ยืนยันการลงทะเบียน">
            </form>
            
          </div>
          <!-- <div class="form-group">
              <label for="adds">ที่อยู่</label>
              <textarea class="form-control" id="adds" name="adds" rows="5"
                placeholder="ที่อยู่ที่ปัจจุบันที่สามารถติดต่อได้" value=" "></textarea>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="grad-from">สถานศึกษาที่จบ</label>
                <input type="text" class="form-control" id="grad-from" name="grad-from" placeholder="สถานศึกษาที่จบ"
                  value=" ">
              </div>
              <div class="form-group col-md-6">
                <label for="workplace">สถานที่ทำงานปัจจุบัน</label>
                <input type="text" class="form-control" id="workplace" name="workplace" placeholder="สถานที่ทำงานปัจจุบัน(ถ้ามี)">
              </div>
            </div> -->
          <!-- <input type="hidden" name="aa" value="1"> -->

        </div>

      </div>
    </div>
    </div>
    </div>
  </section>
  <!-- Footer -->
  <?php 
  include "footer.html";
  ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
</body>

</html>