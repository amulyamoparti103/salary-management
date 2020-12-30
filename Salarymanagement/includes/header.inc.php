<?php
require_once('config.inc.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Salary Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- For add employee stylesheet -->
    <link rel="stylesheet" href="../assets/css/add-employee.css">

    <!-- For Pay slip -->
    <link rel="stylesheet" href="../assets/css/add-pay-slip.css">
    <link rel="stylesheet" href="../assets/css/edit-pay-slip.css">
    <link rel="stylesheet" href="../assets/css/view-pay-slip.css">

</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Gowebez</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Employee
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>/employee/add.php">Add Employee</a>
                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>/employee/list.php">View Employee</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Payslip
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>/payslip/add-pay-slip.php">Add Payslip</a>
                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>/payslip/edit-pay-slip.php">Edit Payslip</a>
                        <a class="dropdown-item" href="<?php echo SITE_URL; ?>/payslip/view-pay-slip.php">View Payslip</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>   
                </ul>
               <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo SITE_URL; ?>/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav> 
</body>
</html>