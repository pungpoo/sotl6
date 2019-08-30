<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Test</h1>
    <?php
        include "connect.php" ;
        if (isset($_POST['submit'])) {
                $stmt = $conn->prepare("SELECT id, regis_mail,  FROM register");
                $stmt->execute();
            
            // echo $_POST['email'][2];
            // echo "Submited";
            $i = 0;
            foreach($_POST['email'] as $value ) {
                echo $_POST['email'][$i];
                echo "<br />";
                print $i.":".$value;
                echo "<br />";
                $i++;
            }
        } 
    ?>
    <form action=" " method="post" name="frm1">
        <input type="email" id="email[]" name="email[]" placeholder="1">
        <input type="email" id="email[]" name="email[]" placeholder="2">
        <input type="email" id="email[]" name="email[]" placeholder="3">
        <input type="submit" name="submit" value="OK">
    </form>
</body>

</html>