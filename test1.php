<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php
        include ("connect_test.php");

        if (isset($_POST['submit'])) {
            $x=1;
           $y=5;
            while($x <= 5) {
                echo "<br> Name:".$_POST['txt'.$x]."<br>";

                $sql = $conn->prepare("INSERT INTO tbl_test (`name`)  VALUES (?)");
                $sql->bindParam(1,$_POST['txt'.$x]);
                $sql->execute();

                if ($x==$y) {
                        
                        echo "<script>
                       
                        alert('คุณได้ลงทะเบียนเรียบร้อยแล้ว');
                        </script>";
                    }


                // $sql = "INSERT INTO tbl_test (`name`) VALUES ('".$_POST['txt'.$x]."')";

                    // if (!empty($sql)) {
                    //     echo "New record created successfully";
                       
                    // } else {
                    //     echo "Error: " . $sql . "<br>" . $conn->error;
                    // }
                    $x++;
            }
            
        } 
    ?>
    <form action=" " method="post" name="frm1">
        <input type="text" name="txt1">
        <input type="text" name="txt2">
        <input type="text" name="txt3">
        <input type="text" name="txt4">
        <input type="text" name="txt5">
        <input type="submit" name="submit" value="OK">
</form>

</body>

</html>