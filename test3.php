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


    
    <?php include "connect.php" ; 
    
    $register_number = 10;
    $register_number = sprintf('%04d',$register_number);
    print $register_number;
    ?>
    
    <div class="form-group col-md-6">
                    <label for="province">จังหวัด<red>*</red></label>
                    <select class="form-control" id="country" name="province">
                      <option value="">เลือกจังหวัด</option>
                      <?php 
                            // $sql ="SELECT province_name_th FROM tbl_province ";
                            // $stmt = $conn->query($sql);
                         $stmt = $conn->query("SELECT province_name_th FROM tbl_province");
                          //$province = $stmt->fetch();
                            $i=1;
                            // $thSQL= "SELECT id,country_id,country_name_en FROM tbl_province order by id asc";
                            // $thQuery= $conn->query($thSQL) or die($conn->error);
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

                            //echo("<option value='$thARR[country_id]'>$thARR[country_name_en]</option>");
                            echo("<option value='$row[province_name_th]'>$row[province_name_th]</option>");
                                $i++;
                            }
                      ?>
                    </select>
                  </div>

</body>

</html>