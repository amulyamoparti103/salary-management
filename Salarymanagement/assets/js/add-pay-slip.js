function printError(elemId, errMsg) {
    document.getElementById(elemId).innerHTML = errMsg;
}
function validateForm() { 
    var employeeId = document.form.employeeId.value;
    var month = document.form.month.value;
    var year = document.form.year.value;
    var leaves = document.form.leaves.value;

    // Defining error variables with a default value
    var employeeIdErr = monthErr = yearErr = leavesErr = true;

    // Validate  employeeName
    if(employeeId == "") {
        printError("employeeIdErr", "Please Select Employee Id");
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
    
    // Validate  leaves
    if(leaves == "") {
        printError("leaveErr", "Please enter Leaves");
    } else {
        // var regex = /^[1-9]\d{2}$/;
        if(leaves>2) {
            printError("leaveErr", "Leaves Must be 0,1 and 2");
        } else{
            printError("leaveErr", "");
            leaveErr = false;
        }
    }
    if((employeeIdErr || monthErr || yearErr || leavesErr) == true) {
        return false;
    }
}

function getName(val){
    $.ajax({
        type:"POST",
        url:"ajax-data.php",
        data:'id='+val,
        // data:{id:id},
        dataType:"JSON",
        success: function(data){
            $("#employeeId").html(data);
            $("#basicpay").text(data.basic);
            $("#da").text(data.da);
            $("#hra").text(data.hra);
            $("#pf").text(data.pf);   
        }
    })
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