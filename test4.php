<?php
// define('SITE_KEY', '6Lf5fLgZAAAAAO9DVwiTXPzRSYH6xbAe_CnEDT8M');
// define('SECRET_KEY', '6Lf5fLgZAAAAALzSnft8RJJtcEncZ0wKykjYVKOl');

// if($_POST){
//     function getCaptcha($SecretKey){
//         $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
//         $Return = json_decode($Response);
//         return $Return;
//     }
//     $Return = getCaptcha($_POST['g-recaptcha-response']);
//     //var_dump($Return);
//     if($Return->success == true && $Return->score > 0.5){
//         echo "Succes!";
//     }else{
//         echo "You are a Robot!!";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReCaptcha V3</title>
    <!-- <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script> -->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</head>
<body>
    <form action="/" method="POST">
        <input type="text" name="name" /><br />
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br >
        <!-- <input type="submit" value="Submit" /> -->
        <button class="g-recaptcha" 
        data-sitekey="6Lf5fLgZAAAAAO9DVwiTXPzRSYH6xbAe_CnEDT8M" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>
    </form>
    <!-- <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
    .then(function(token) {
        console.log(token);
        document.getElementById('g-recaptcha-response').value=token;
    });
    });
    </script> -->
</body>
</html>