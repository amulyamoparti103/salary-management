<?php
    require_once("../includes/config.inc.php");

    if(isset($_POST['employeeId']) && !empty($_POST['employeeId'])){
        $employeeId = $_POST['employeeId'];
    }
    // $employeeId = $_POST['employeeId'];
    $query_basic = "SELECT * FROM employee WHERE id = '".$_POST['employeeId']."'";
    $basic = mysqli_query($connection,$query_basic);
    while ($row = $basic->fetch_assoc()){
        // echo $row['basic_pay'];
        // print_r($row);
        // $val = JSON_ENCODE($row);
        // $("#basicpay").html($("#id option:selected").text());
        $data['basic'] = $row['basic_pay'];
        $data['da'] = $row['da'];
        $data['hra'] = $row['hra'];
        $data['pf'] = $row['pf'];
    }
        echo JSON_ENCODE($data);
?>