$(document).ready(function(){
    $('#email').blur(function(){
       var value = $(this).val(); 
       liveCheckEmail(value);
    });
 });
 
 function liveCheckEmail(val) {
     $.post('check_email.php',{'email':val}, function(data){
         if(data == "Found") {
            // alert("Email นี้มีผู้ใช้ในระบบแล้ว");
            // confirm("Email นี้มีผู้ใช้ในระบบแล้ว หากท่านต้องการจะสมัครโดยใช้ Email นี้ให้กด OK");

            // JS-Confirm
            
            $.confirm({
                boxWidth:'400px;',
                title: '**แจ้งเตือน**',
                content: 'Email นี้มีผู้ใช้ในระบบแล้ว หากท่านต้องการจะสมัครโดยใช้ Email นี้ให้กด CONFIRM เพื่อ Update สถานะการลงทะเบียน',
                buttons: {
                    confirm: function () {
                        $.alert('การตรวจสอบข้อมูลการลงทะเบียนอาจใช้เวลาซักครู่ เมื่อ Update สถานะการลงทะเบียนแล้วจะมี Email แจ้งกลับไป'); 
                        // location.href = 'https://craftpip.github.io/jquery-confirm/#jquery-fn';
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    },
                    // somethingElse: {
                    //     text: 'Something else',
                    //     btnClass: 'btn-blue',
                    //     keys: ['enter', 'shift'],
                    //     action: function(){
                    //         $.alert('Something else?');
                    //     }
                    // }
                }
            });

            // ***********************

             $('#check_email').html("<span style='color:red; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้มีผู้ใช้ในระบบแล้ว</span>");
             $("#btnsubmit").attr("disabled", true);
         } else {
             $('#check_email').html("<span style='color:green; font-weight:bold;'>&nbsp;&nbsp;&nbsp; Email นี้สามารถใช้ได้ </span>");
             $('#btnsubmit').attr("disabled", false);	
         }
     }).fail(function(xhr, ajaxOptions, throwError) {
     alert(throwError);
     });
 }

