$('#chkDuplicate').click(function () {
    //debugger;
        for (var i = 1; i <= 6; i++) {
            var id = "email_" + i;
            var txtbox = document.getElementById(id);
            if (txtbox) {
                if (txtbox.value != null && txtbox.value.trim() == "") {
                    alert("Serial Number field cannot be empty");
                    return false;
                }
            }
        }
        var allTextBoxes = [];
        $('input[type=text]').each(function () {
            allTextBoxes.push($(this).val())
        });
        var sorted_arr = allTextBoxes.sort();
        for (var i = 0; i < allTextBoxes.length - 1; i++) {
            if (sorted_arr[i + 1] == sorted_arr[i]) {
                alert("Please enter different value in each TextBox.");
                console.log(sorted_arr[i])
                return false;
            }
        }
    });