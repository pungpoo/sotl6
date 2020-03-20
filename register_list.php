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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css" />
    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <a id="button"></a>
    <?php include "navbar.html"; ?>
    <?php include "connect.php"; ?>
    <?php 
        // $register_all = $conn->query("SELECT count(*) FROM register where regis_payment_status != 9 order by id asc");
        $register_all = "SELECT count(*) FROM register where regis_payment_status != 9 order by id asc"; 
        $result = $conn->prepare($register_all); 
        $result->execute(); 
        $number_of_register = $result->fetchColumn(); 
        //echo $number_of_register;
        $register_paid = "SELECT count(*) FROM register where regis_payment_status = 1 order by id asc"; 
        $result_paid = $conn->prepare($register_paid); 
        $result_paid->execute(); 
        $number_of_paid = $result_paid->fetchColumn(); 
        //echo $number_of_paid;

        $register_wait_pay = "SELECT count(*) FROM register where regis_payment_status = 0 order by id asc"; 
        $result_wait_pay = $conn->prepare($register_wait_pay); 
        $result_wait_pay->execute(); 
        $number_of_wait_pay = $result_wait_pay->fetchColumn(); 
        //echo $number_of_wait_pay;
    ?>
    <section id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 mx-auto">
                    <div class="card mb-2">
                        <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - รายชื่อผู้ลงทะเบียน</h5>
                        <div class="card-body font-weight-bold">
                            <div class="row mx-auto p-2">
                                <div class="col-md-3 bg-primary m-1 text-center border-radius">ผู้ลงทะเบียน
                                    <br><?php echo $number_of_register; ?></div>
                                <div class="col-md-3 bg-info m-1 text-center border-radius">ชำระเงินแล้ว
                                    <br><?php echo $number_of_paid; ?> </div>
                                <div class="col-md-3 bg-warning m-1 text-center border-radius">รอชำระเงิน
                                    <br><?php echo $number_of_wait_pay; ?> </div>
                            </div>
                            <div class="col-md-12">
                            <div class="col-md-3  m-1 text-center border-radius">
                                <button type="button" class="btn btn-lg btn-info mb-2" data-toggle="modal" data-target="#exampleModal">
                                    ดูรายชื่อ workshop
                                </button>
                            </div>
                                <table id="table_register" class="table table-responsive display responsive no-wrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ลำดับ</th>
                                            <th class="text-center">รหัสลงทะเบียน</th>
                                            <th class="text-center">ชื่อ-สกุล</th>
                                            <th class="text-center">สังกัด</th>
                                            <th class="text-center">วันที่ลงทะเบียน</th>
                                            <th class="text-center">Workshop

                                                <!-- <a class=" badge badge-info" data-toggle="modal" data-target="#exampleModal" >ดูรายชื่อ workshop</a></th> -->
                                            <th class="text-center">สถานะ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         include ("datethai.php");
                                            $i=1;
                                            $stmt = $conn->query("SELECT id,regis_title_name,regis_name,regis_lastname,regis_affiliation,regis_workshop_day1,regis_workshop_day2,regis_date,regis_payment_status FROM register where regis_payment_status != 9 order by id asc");
                                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            $title = explode(" ",$row['regis_title_name']);
                                            $title = $title[0];

                                            // Date Format
                                          

                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $i;?>
                                            </td>
                                            <td class="text-center"><?php 
                                                $register_number = sprintf('%04d',$row['id']);
                                                echo $register_number;?>
                                            </td>
                                            <td><?php echo  $title.$row['regis_name']." ".$row['regis_lastname'];?></td>
                                            <td><?php echo $row['regis_affiliation'];?></td>
                                            <td><?php echo regis_date($row['regis_date']);?> </td>
                                            <td class="text-center">
                                                <?php echo $row['regis_workshop_day1'].",".$row['regis_workshop_day2'] ;?>
                                            </td>
                                            <?php 
                                                if ($row['regis_payment_status'] == 0) {
                                                    echo "<td class='text-center mt-2  badge badge-warning'>รอชำระเงิน</td>";
                                                }elseif ($row['regis_payment_status'] == 1) {
                                                    echo "<td class='text-center mt-2  badge badge-info'>ชำระเงินแล้ว</td>";
                                                }
                                            ?>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div>
        </div> -->
    </section>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">SoTL6 - WORKSHOP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <div class="col-md-12 mark4 mb-2">
                            <h5 class="section-heading pt-2">วันที่ 30 กรกฎาคม 2563 (เวลา 13.00 - 14.30 น.)</h5>
                        </div>
                    </div>
                    <div class="row ml-4 mb-4">
                        <div class="col-12">
                            <h6>Workshop1 : Design Thinking</h6>
                        </div>
                        <p class="text-muted ml-3">ผู้ช่วยศาสตราจารย์ ดร. สุธารัตน์ โชติกประคัลภ์ และ อ. นัดดาวดี
                            นุ่มนาค </p>
                        <p class="text-muted ml-3">ฝ่ายวิชาบูรณาการ หมวดวิชาศึกษาทั่วไป มหาวิทยาลัยเกษตรศาสตร์ </p>
                        <div class="col-12">
                            <h6>Workshop2 : Research to Innovation</h6>
                        </div>
                        <p class="text-muted ml-3">ผู้ช่วยศาสตราจารย์ ดร. วรพันธ์ คู่สกุลนิรันดร์</p>
                        <p class="text-muted ml-3">คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยมหิดล</p>
                        <div class="col-12">
                            <h6>Workshop3 : Contemplative education: Learn Unlearn and Relearn</h6>
                        </div>
                        <p class="text-muted ml-3">รองศาสตราจารย์ นายแพทย์ชัชวาลย์ ศิลปกิจ</p>
                        <p class="text-muted ml-3">ผู้อำนวยการศูนย์จิตตปัญญาศึกษา มหาวิทยาลัยมหิดล</p>
                        <div class="col-12">
                            <h6>Workshop4 : Development and Implementation-Game design-Board game</h6>
                        </div>
                        <p class="text-muted ml-3">รองศาสตราจารย์ นายแพทย์ชัชวาลย์ ศิลปกิจ</p>
                        <p class="text-muted ml-3">หัวหน้าภาควิชาเศรษฐศาสตร์เกษตรและทรัพยากร
                            มหาวิทยาลัยเกษตรศาสตร์
                        </p>
                    </div>
                    <!-- day 2 -->
                    <div class="row mb-2">
                        <div class="col-md-12 mark4 mb-2">
                            <h5 class="section-heading  pt-2">วันที่ 31 กรกฎาคม 2563 (เวลา 14.45 - 16.00 น.)</h5>
                        </div>
                    </div>
                    <div class="row ml-4 ">
                        <div class="col-12">
                            <h6>Workshop5 : เนรมิตห้องเรียน 4.0 ด้วยเครื่องมือดิจิทัล</h6>
                        </div>
                        <p class="text-muted ml-3">ดร. กุลชัย กุลตวนิช </p>
                        <p class="text-muted ml-3">ผู้ช่วยคณบดีคณะเทคโนโลยีการเกษตร
                            สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</p>
                        <div class="col-12">
                            <h6>Workshop6 : Micro mastery: ประสบการณ์การพัฒนาการเรียนรู้เพื่อสร้าง
                                “ความเก่งทีละเล็กทีละน้อย</h6>
                        </div>
                        <p class="text-muted ml-3">ดร. ก้องกาญจน์ กาญจนพนัง</p>
                        <p class="text-muted ml-3">คณะศิลปศาสตร์ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</p>

                        <div class="col-12">
                            <h6>Workshop7 : วิจัยจัดการเรียนการสอน</h6>
                        </div>
                        <p class="text-muted ml-3">ผู้ช่วยศาสตราจารย์ ดร. จิตต์ภิญญา ชุมสาย ณ อยุธยา</p>
                        <p class="text-muted ml-3">ผู้อำนวยการสำนักนวัตกรรมการเรียนรู้ มหาวิทยาลัยศรีนครินทรวิโรฒ</p>
                        <div class="col-12">
                            <h6>Workshop8 : สร้างห้องเรียนแห่งอนาคตด้วยเทคโนโลยี iPad และ Personalization of Learning
                            </h6>
                        </div>
                        <p class="text-muted ml-3">คุณปัญชสา เชาวน์ชูเวชช </p>
                        <p class="text-muted ml-3">Apple Professional Learning Provider UFicon Co., Ltd.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.html"; ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/agency.min.js"></script>
    <script src="js/top_page.js"></script>
    <script src="js/check_regis.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_register').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "columnDefs": [{
                        "width": "5%",
                        "targets": 0
                    },
                    {
                        "width": "5%",
                        "targets": 1
                    },
                    {
                        "width": "20%",
                        "targets": 2
                    },
                    {
                        "width": "25%",
                        "targets": 3
                    }, {
                        "width": "10%",
                        "targets": 4
                    },
                    {
                        "width": "10%",
                        "targets": 5
                    },
                    {
                        "width": "5%",
                        "targets": 6
                    }
                ],
                "pageLength": 20,
                stateSave: true
            });
        });
    </script>
</body>

</html>