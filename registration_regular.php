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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
    @media (min-width: 992px) {
      section {
        padding-top: 150px !important;
        /* margin-top: 120px; */
      }
    }
    @media (max-width: 991px) {
      section {
        padding-top: 150px !important;
        /* margin-top: 120px; */
      }
    }
    @media (min-width: 320px) and (max-width: 480px) {
  
  section {
    padding-top: 80px;
  }
  
}
  </style>
</head>

<body id="page-top">
  <a id="button"></a>
  <?php  include "navbar.html";?>
  <?php  include "connect.php"; ?>
  <?php  include "workshop_count2.php"; ?>
  <section class="bg-light mb-4" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Regular Registration</h5>
            <div class="card-body font-weight-bold">
              <div><a href="registration_group.php" class="btn btn-success mb-3">ลงทะเบียนแบบกลุ่ม(สำหรับ 6 ท่าน)</a>
              </div>
              <form class="form" id="regisForm" name="regisForm" action="check_regis.php" method="post">
                <div class="form-row ">
                  <div class="form-group col-md-4">
                    <label for="title">คำนำหน้าชื่อ (Title)<red>*</red></label>
                    <input class="form-control" list="title" id="title_name" name="title" placeholder="โปรดระบุ">
                    <datalist id="title">
                      <option value="นาย (Mr.)">
                      <option value="นาง (Mrs.)">
                      <option value="นางสาว (Ms.)">
                      <option value="ดร. (Dr.)">
                      <option value="อ.ดร. (Lect.Dr.)">
                      <option value="ผศ.ดร. (Asst. Prof. Dr.)">
                      <option value="ผศ. (Asst. Prof.)">
                      <option value="รศ.ดร. (Assoc. Prof .Dr.)">
                      <option value="รศ. (Assoc. Prof.)">
                      <option value="ศ.ดร. (Prof. Dr.)">
                      <option value="ศ. (Prof.)">
                      <option value="อื่นๆ โปรดระบุ (Other, Please specify)">
                    </datalist>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fname_th">ชื่อ (Name)<red>*</red></label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="ชื่อ(Name)" required
                      oninvalid="this.setCustomValidity('กรุณาระบุชื่อ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lname_th">นามสกุล (Surname)<red>*</red></label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="นามสกุล(Surname)"
                      required oninvalid="this.setCustomValidity('กรุณาระบุนามสกุล')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="gender">เพศ (Gender)<red>*</red></label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="M">ชาย (Male)</option>
                      <option value="F">หญิง (Female)</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="age">อายุ (Age)<red>*</red></label>
                    <input type="number" class="form-control" max="99" id="age" name="age" placeholder="อายุ (Age)"
                      required oninvalid="this.setCustomValidity('กรุณาตรวจสอบอายุ')" oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="nationality">สัญชาติ (Nationality)<red>*</red></label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                      placeholder="สัญชาติ (Nationality)">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="email">E-mail<red>*</red></label>
                    <span id="check_email"></span>
                    <input type="email" class="form-control" id="email" name="email"
                      placeholder="Please provide the current e-mail address." required
                      oninvalid="this.setCustomValidity('กรุณาตรวจสอบ E-mail')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="phone">เบอร์โทรศัพท์ (Phone Number)<red>*</red></label>
                    <input type="number" class="form-control" id="phone" name="phone"
                      placeholder="Please provide the contact phone number." required
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="emergency_phone">เบอร์โทรศัพท์ในกรณีฉุกเฉิน (Emergency Contact Phone Number)</label>
                    <input type="number" class="form-control" id="emergency_phone" name="emergency_phone"
                      placeholder="Please provide the emergency contact phone number."
                      oninvalid="this.setCustomValidity('กรุณาระบุเบอร์โทรศัพท์ ใส่เฉพาะตัวเลขเท่านั้น')"
                      oninput="setCustomValidity('')">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="grad-from">หน่วยงานต้นสังกัด (Affiliation)<red>*</red></label>
                    <input type="text" class="form-control" id="affiliation" name="affiliation"
                      placeholder="หน่วยงานต้นสังกัด  (Affiliation)" required
                      oninvalid="this.setCustomValidity('กรุณาระบุหน่วยงานต้นสังกัด')" oninput="setCustomValidity('')">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="grad-from">ที่อยู่ของหน่วยงาน (Affiliation Address)<red>*</red></label>
                    <textarea class="form-control" id="adds" name="affiliation_address" rows="3"
                      placeholder="ที่อยู่ของหน่วยงาน (Affiliation Address)"></textarea>
                  </div>
                </div>

               <!-- Billing -->
                <div class="form-row">
                  <div class="form-group col-12">
                    <label>รายละเอียดในการออกใบเสร็จ (Billing Information)</label>
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="billing1" name="billing_info" class="custom-control-input" value="1"
                          checked>
                        <label class="custom-control-label" for="billing1">ใช้ชื่อและที่อยู่ของต้นสังกัด(Affiliation's
                          name
                          and address)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="billing2" name="billing_info" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="billing2">อื่นๆ โปรดระบุ (Others, Please
                          specify)</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row pl-4" id="billing_detail">
                  <div class="form-group col-md-12">
                    <textarea class="form-control" id="billing_address" name="billing_address" rows="3"
                      placeholder="ระบุรายละเอียดในการออกใบเสร็จ (Billing Information)" value=" "></textarea>
                  </div>
                </div>
                <div class="form-row ">
                  <div class="form-group col-6 mt-2">
                    <label>อาหาร (Food)</label>
                    <div class="pl-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food1" name="food" class="custom-control-input" value="1" checked>
                        <label class="custom-control-label" for="food1" id="food_normal" >ทั่วไป (Not Specific)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food2" name="food" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="food2">มังสวิรัติ (Vegetarian)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food3" name="food" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="food3">ฮาลาล (Halal)</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="food4" name="food" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="food4">อื่นๆ โปรดระบุ (Others)</label>
                        <input type="text" class="form-control" name="food_other" id="food_other">
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-6  mt-2">
                    <label for="food_allergy">แพ้อาหาร(ถ้ามี) / Food Allergy(If applicable)</label>
                    <input type="text" class="form-control" id="food_allergy" name="food_allergy"
                      placeholder="ระบุอาหารที่แพ้ (Please specify all food allergies)">
                  </div>
                </div>
                <!-- Workshop -->
                <div class="form-row  mt-2">
                  <div class="form-group col-12 gray mt-2">
                    <div class="form-row pl-3" style="margin-bottom: -10px;">
                      <label class="mt-1">Workshop ที่ต้องการเข้าร่วม</label>
                      <label class="mt-1 "><a href="workshop.php" class="url-blue"
                          target="_blank">(ดูรายละเอียดเพิ่มเติม)</a></label><br>
                    </div>
                    <div class="form-row pl-3">
                      <label class="text-muted mt-1">I will attend workshop</label>
                      <label class="mt-1"><a href="workshop.php" class="url-blue" target="_blank">(More
                          Details)</a></label>
                    </div>
                    <!-- Day 1 -->
                    <div class="form-group ml-3">
                      <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (13.00 - 14.30
                        น.)</label><br>
                      <label class=" text-muted">Thursday 30 April, 2020 (13.00 - 14.30 hr.)</label>
                      <div class="custom-control  custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day1_1" name="workshop_day1"
                          value="w1">
                        <label class="custom-control-label" for="workshop_day1_1">Workshop 1 : Design Thinking <span
                            class="badge badge-warning">เหลือที่นั่งอีก
                            <?php echo $workshop_balance_w1;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control  custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day1_2" name="workshop_day1"
                          value="w2">
                        <label class="custom-control-label" for="workshop_day1_2">Workshop 2 : Research to
                          Innovation <span class="badge badge-warning">เหลือที่นั่งอีก
                          <?php echo $workshop_balance_w2;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day1_3" name="workshop_day1"
                          value="w3">
                        <label class="custom-control-label" for="workshop_day1_3">Workshop 3 : Contemplative
                          education: Learn Unlearn and Relearn <span class="badge badge-warning">เหลือที่นั่งอีก
                          <?php echo $workshop_balance_w3;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day1_4" name="workshop_day1"
                          value="w4">
                        <label class="custom-control-label" for="workshop_day1_4">Workshop 4 : Development and
                          Implementation-Game design-Board game <span class="badge badge-warning">เหลือที่นั่งอีก
                          <?php echo $workshop_balance_w4;?> 
                          ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day1_5" name="workshop_day1"
                          value="wn">
                        <label class="custom-control-label" for="workshop_day1_5">ไม่เข้าร่วม Workshop</label>
                      </div>
                    </div>
                    <!-- Day 2 -->
                    <div class="form-group ml-3">
                      <label style="margin-bottom: -5px;">วันพฤหัสบดีที่ 30 เมษายน พ.ศ. 2563 (14.45 - 16.00
                        น.)</label><br>
                      <label class=" text-muted">Thursday 30 April, 2020 (14.45 - 16.00 hr.)</label>
                      <div class="custom-control  custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_1" name="workshop_day2"
                          value="w5">
                        <label class="custom-control-label" for="workshop_day2_1">Workshop 5 : เนรมิตห้องเรียน 4.0
                          ด้วยเครื่องมือดิจิทัล <span class="badge badge-warning">เหลือที่นั่งอีก
                            
                          <?php echo $workshop_balance_w5;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_2" name="workshop_day2"
                          value="w6">
                        <label class="custom-control-label" for="workshop_day2_2">Workshop 6 : Micro mastery:
                          ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง “ความเก่งทีละเล็กทีละน้อย <span
                            class="badge badge-warning">เหลือที่นั่งอีก 
                            <?php echo $workshop_balance_w6;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_3" name="workshop_day2"
                          value="w7">
                        <label class="custom-control-label" for="workshop_day2_3">Workshop 7 :
                          วิจัยจัดการเรียนการสอน <span class="badge badge-warning">เหลือที่นั่งอีก
                          <?php echo $workshop_balance_w7;?>
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_4" name="workshop_day2"
                          value="w8">
                        <label class="custom-control-label" for="workshop_day2_4">Workshop 8 :
                          สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning <span
                            class="badge badge-warning">เหลือที่นั่งอีก
                            <?php echo $workshop_balance_w8;?>
                         
                            ที่</span></label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="workshop_day2_5" name="workshop_day2"
                          value="wn">
                        <label class="custom-control-label" for="workshop_day2_5">ไม่เข้าร่วม Workshop</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
                <div class="form-row pay-rate">
                  <div class="form-group col-md-8">
                    <label>อัตราค่าลงทะเบียน</label>
                    <!-- Group of material radios - option 1 -->
                    <div class="pl-3">
                      <div class="custom-control">
                        <label>- Early Bird 2,500 บาท <sup class="bg-danger border-radius">**Active Now**</sup> </label>
                      </div>
                      <div class="custom-control">
                        <label>- Regular 3,000 บาท</label>
                      </div>
                      <div class="custom-control">
                        <label>- Group (สำหรับผู้ลงทะเบียน 6 ท่าน) 16,000 บาท </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Regis fee -->
            </div>
            <!-- <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-5 col-4 offset-4"
              value="ยืนยันการลงทะเบียน"> -->
            <!-- preview -->
            <input type="button" name="btn" value="ตรวจสอบข้อมูล" id="submitBtn" data-toggle="modal"
              data-target="#confirm-submit" class="btn btn-success mb-3 col-4 offset-4" />
            <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
              aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    ข้อมูลการลงทะเบียนของท่าน
                  </div>
                  <div class="modal-body">
                    <label ><b>ชื่อ-นามสกุล (Name-Surname) </b>: <span class="badge badge-info" id="preview_name"></span></label><br>
                    <label ><b>E-mail </b>: <span class="badge badge-info" id="preview_mail"></span></label><br>
                    <label ><b>เบอร์โทรศัพท์ (Phone Number) </b>: <span class="badge badge-info" id="preview_phone"></span></label><br>
                    <label ><b>หน่วยงานต้นสังกัด (Affiliation) </b>: <span class="badge badge-info" id="preview_affiliation"></span></label><br>
                    <label ><b>ที่อยู่ในการออกใบเสร็จ (Billing Information) </b>: <br><span class="badge badge-info" id="preview_bill_info"></span></label><br>
                    <label ><b>อาหาร (Food) </b>: <script> </script> <span class="badge badge-info" id="preview_food"></span></label><br>
                    <label ><b>แพ้อาหาร(Food Allergy) </b>: <span class="badge badge-info" id="preview_food_allergy"></span></label><br>
                    <label ><b>Workshop 30 April, 2020 (13.00 - 14.30 hr.)</b>: <span class="badge badge-info" id="preview_workshop_day1"></span></label><br>
                    <label ><b>Workshop 30 April, 2020 (14.45 - 16.00 hr.)</b>: <span class="badge badge-info" id="preview_workshop_day2"></span></label><br>
                    <label ><b>ค่าลงทะเบียน </b>: <span class="badge badge-info" id="">Early Bird 2,500 บาท</span></label><br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <!-- <a href="#" id="submit" class="btn btn-success success">Submit</a> -->
                    <input type="submit" name="submit" id="btnsubmit" class="btn btn-success"
              value="ยืนยันการลงทะเบียน">
                  </div>
                </div>
              </div>
            </div>
            <!-- preview -->

            </form>
          </div>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis.js"></script>
  <script src="js/preview.js"></script>
  <script type="text/javascript">
    function checkeng() {
      var obj = document.getElementById("fname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;
      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }
      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('fname_eng').value = "";
        obj.focus()

        return false
      }
      return true
    }

    function checkeng2() {
      var obj = document.getElementById("lname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;

      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }

      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('lname_eng').value = "";
        obj.focus()
        return false
      }
      return true
    }

    $("#food_other").hide();
    $(document).ready(function () {
      $("#food1").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food2").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food3").click(function () {
        $("#food_other").hide();
        $("#food_other").val("");
      });
      $("#food4").click(function () {
        $("#food_other").show();
      });
    })


    $("#billing_detail").hide();
    $(document).ready(function () {
      $("#billing1").click(function () {
        $("#billing_detail").hide();
        $("#billing_address").val("");
      });
      $("#billing2").click(function () {
        $("#billing_detail").show();
      });
    })

  </script>
</body>

</html>