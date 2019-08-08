<?php 
    include "connect.php";

    if (isset($_POST["submit"])) {
        $title_name_eng = $_POST["title_name_eng"];
        $academic_position = $_POST["academic_position"];
        $manage_position = $_POST["manage_position"];
        $fname_eng = $_POST["fname_eng"];
        $lname_eng = $_POST["lname_eng"];
        $fname_th = $_POST["fname_th"];
        $lname_th = $_POST["lname_th"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $affiliation = $_POST["affiliation"];
        $workplace = $_POST["workplace"];
        $food = $_POST["food"];
        $regis_group = "0";
        $regis_payment_rate = "1";

        $stmt = $conn->prepare("INSERT INTO register (
            regis_title_name, 
            regis_academic_position, 
            regis_manage_position,
            regis_eng_name,
            regis_eng_lastname,
            regis_th_name,
            regis_th_lastname,
            regis_gender,
            regis_age,
            regis_nationality,
            regis_mail,
            regis_tel,
            regis_affiliation,
            regis_workpace,
            regis_food,
            regis_group,
            regis_payment_rate
            ) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam('1', $title_name_eng);
        $stmt->bindParam('2', $academic_position);
        $stmt->bindParam('3', $manage_position);
        $stmt->bindParam('4', $fname_eng);
        $stmt->bindParam('5', $lname_eng);
        $stmt->bindParam('6', $fname_th);
        $stmt->bindParam('7', $lname_th);
        $stmt->bindParam('8', $gender);
        $stmt->bindParam('9', $age);
        $stmt->bindParam('10', $nationality);
        $stmt->bindParam('11', $email);
        $stmt->bindParam('12', $phone);
        $stmt->bindParam('13', $affiliation);
        $stmt->bindParam('14', $workplace);
        $stmt->bindParam('15', $food);
        $stmt->bindParam('16', $regis_group);
        $stmt->bindParam('17', $regis_payment_rate);
            try {
                $stmt->execute();
                // echo "New records created successfully";
                echo "<script>
					window.location='index.php';
					alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว กรุณาเข้าสู่ระบบ');
					</script>";
            } catch (Exception $exc) {
                    echo $exc->getTraceAsString();
                }
    }
?>
