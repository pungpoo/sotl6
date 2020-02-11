<!DOCTYPE html>
<html lang="en">

<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="padding-left: 100px; padding-top: 100px;">

<form name="frm1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
        <?php 
        for ($i=0; $i < 3; $i++) { 
            echo '<input type="text" name="name[]">';
        }
        ?>
        <input type="submit" name="submit" value="OK">
</form>

<?php
if (isset($_POST["submit"])) {
        echo "Value : <br>";
    //   echo $_POST["name"][2];
    // $arr = $_POST["name[]"] ;
      foreach ($_POST["name[]"]  as $value) 
      {
        echo $value;
      }
    //   print_r($_POST["name"]) ;
}

?>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>