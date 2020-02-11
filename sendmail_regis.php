<?php 
// include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->CharSet = "utf-8";  
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sotl6.2020@gmail.com';                     // SMTP username
    $mail->Password   = '024419729';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sotl6.2020@gmail.com', 'SOTL6');
    $mail->addAddress($email);
    //$mail->addAddress('pungpoo23@gmail.com');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/img/test.png');    // Optional name

    // Content
    $mail->isHTML(true);       
     $mail->AddEmbeddedImage('img/header-bg.jpg', 'sotl6');                           // Set email format to HTML
    $mail->Subject = 'SOTL6 ยืนยันการลงทะเบียน';
    $mail->Body    = '<h2>เรียนคุณ'.$fname." ".$lname.'</h2>';
    $mail->Body    .= '<p><font size ="3px">ขอบคุณสำหรับการลงทะเบียนเข้าร่วมงานสัมนาวิชาการ <br>เรื่องการวิจัยเพื่อพัฒนาการเรียนการสอน ครั้งที่ 6 (SoTL6)</font></p>';
    $mail->Body    .= '<img src="cid:sotl6" style="width: 60%;">';
    $mail->Body    .= '<p><font size ="3px">รหัสการลงทะเบียนของคุณคือ <b>'.$register_number.'</b> ( **โปรดจำรหัสของท่านเพื่อใช้ในการลงทะเบียนในวันงาน)</font></p>';
    $mail->Body    .= '<p><font size ="3px">ค่าลงทะเบียน <b>2,500</b> บาท <br> ชำระค่าลงทะเบียนผ่านทางบัญชีเงินฝากออมทรัพย์ 
    <br>ธนาคารไทยพาณิชย์ <br>เลขบัญชี  <b>333-285913-1</b>
    <br>ชื่อบัญชี <b>การวิจัยเพื่อพัฒนาการเรียนการสอน ครั้งที่ 6 (RDI for Disruptive Education : การวิจัย พัฒนาและนวัตกรรมในยุคการพลิกฝันทางการศึกษา)</b></font>
    <br><font size ="3px" color="red">โปรดชำระเงินก่อนวันที่ 20 กุมภาพันธ์ 2563 สำหรับอัตราค่าลงทะเบียนแบบ Early Bird 
    <br>**หากชำระเงินหลังจากวันที่ 20 กุมภาพันธ์ 2563 อัตราค่าลงทะเบียนจะเป็น 3,000 บาท</font></p>';
    $mail->Body    .= '<p><font size ="3px">แจ้งหลักฐานการชำระเงินของท่าน พร้อมทั้งแจ้งชื่อ-นามสกุล ที่ลงทะเบียนในระบบมาที่ <b>E-mail : sotl6.2020@gmail.com</b> หรือ <b>FAX : 0-2441-0479</b></font></p>';
    $mail->Body    .= '<p><font size ="3px"><b>ขอแสดงความนับถือ</b></font></p>';
    $mail->Body    .= '<p><font size ="2px">คณะผู้จัดงาน</font></p>';
    $mail->Body    .= '<p><font size ="2px">สถาบันนวัตกรรมการเรียนรู้ มหาวิทยาลัยมหิดล<br>sotl6.2020@gmail.com<br>โทรศัพท์ : 0-2441-9729<br>มือถือ : 08-6320-5925 <br>FAX : 0-2441-0479  </font> </p>';


    //$mail->send();
    if($mail->send())
    {
        // $sql_sendmail="UPDATE `user` SET `user_sendmail_status` = 1 where `USER_ID` = '$id' ";
        // $result_sendmail = mysqli_query($con,$sql_sendmail);
        // echo 'การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Inbox ใน Email';
        // header( "Location: index.php" );
         echo "<script>
                    alert('การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Email ของท่าน');
                    window.location='index.php';
				</script>";
    }
    // echo 'การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Inbox ใน Email';
    // header( "Location: index.php" );
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

