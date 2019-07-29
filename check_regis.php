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

        $stmt = $conn->prepare("INSERT INTO MyGuests (
            firstname, 
            lastname, 
            email
            ) 
        VALUES (:firstname, :lastname, :email)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            echo "New records created successfully";
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
      

        }
?>
