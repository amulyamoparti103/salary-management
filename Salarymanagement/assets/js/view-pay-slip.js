function printError(elemId, errMsg) {
    document.getElementById(elemId).innerHTML = errMsg;
}
function validateForm() { 
    var employeeId = document.form.employeeId.value;
    var month = document.form.month.value;
    var year = document.form.year.value;
    
    // Defining error variables with a default value
    var employeeIdErr = monthErr = yearErr  = true;

    // Validate  employeeId
    if(employeeId == "") {
        printError("employeeIdErr", "Please Select Employee id");
    } else {
        printError("employeeIdErr", "");
        employeeIdErr = false;
    }

    // Validate  Month
    if(month == "") {
        printError("monthErr", "Please Select Month");
    } else {
        printError("monthErr", "");
        monthErr = false;
    }

    // Validate  Year
    if(year == "") {
        printError("yearErr", "Please Select Year");
    } else {
        printError("yearErr", "");
        yearErr = false;
    }
    
    if((employeeIdErr || monthErr || yearErr) == true) {
        return false;
    }
}

// $(document).ready(function(){
//     alert("welcome");
//     $("#form").click(function(){
//       var employeeId = $('#employeeId').val();
//       var month = $('#month').val();
//       var year = $('#year').val();
//       var leaves = $('#leaves').val();
//       var data= "employeeId"+ employeeId+ "&month"+month+ "&year"+year+ "&leaves"+leaves;
//       $.ajax({
//         method: "POST",
//         data:data,
//         success: function(data)
//         {
//           $("#reg_result").html(data);
//         }
//       });
//     });
// }); 