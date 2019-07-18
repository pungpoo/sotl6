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
        include "connect.php" ;
        if (isset($_POST['submit'])) {
            $x=1;
            while($x <= 5) {
                echo "<br> Name:".$_POST['txt'.$x]."<br>";

                $sql = "INSERT INTO tbl_test (`name`) VALUES ('".$_POST['txt'.$x]."')";

                    if ($conn->query($sql) === TRUE) {
                        echo "New record created successfully";
                       
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $x++;
            }
            $conn->close();
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