// Register 1
$(document).ready(function(){
    $('#email_1').blur(function(){
       var value1 = $(this).val(); 
       liveCheckEmail(value1);
    });
 });
 
 function liveCheckEmail(val) {
     $.post('check_email_group.php',{'email_1':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_1').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
            //  $('#check_email_1').html("<span style='color:green; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้สามารถใช้ได้ </span>");
             $('#check_email_1').html("<span style='color:green; font-weight:bold;'></span>");

             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

 $(document).ready(function(){
    $('#email_2').blur(function(){
       var value2 = $(this).val(); 
       liveCheckEmail2(value2);
    });
 });
 
 function liveCheckEmail2(val) {
     $.post('check_email_group.php',{'email_2':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_2').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_2').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

 $(document).ready(function(){
    $('#email_3').blur(function(){
       var value3 = $(this).val(); 
       liveCheckEmail3(value3);
    });
 });
 
 function liveCheckEmail3(val) {
     $.post('check_email_group.php',{'email_2':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_3').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_3').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_4').blur(function(){
       var value4 = $(this).val(); 
       liveCheckEmail4(value4);
    });
 });
 
 function liveCheckEmail4(val) {
     $.post('check_email_group.php',{'email_4':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_4').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_4').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_5').blur(function(){
       var value5 = $(this).val(); 
       liveCheckEmail5(value5);
    });
 });
 
 function liveCheckEmail5(val) {
     $.post('check_email_group.php',{'email_5':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_5').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_5').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
 $(document).ready(function(){
    $('#email_6').blur(function(){
       var value6 = $(this).val(); 
       liveCheckEmail6(value6);
    });
 });
 
 function liveCheckEmail6(val) {
     $.post('check_email_group.php',{'email_6':val}, function(data){
         if(data == "Found") {
            alert("Email นี้มีผู้ใช้ในระบบแล้ว");
             $('#check_email_6').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email_6').html("<span style='color:green; font-weight:bold;'></span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }
