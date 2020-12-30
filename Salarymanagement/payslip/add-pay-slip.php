<?php
    require_once("../includes/config.inc.php");
?>
<link rel="stylesheet" href="../assets/css/add-pay-slip.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --> -->

<div class="container">
    <form class="form-group" id="form" name="form">
        <h2>Add Pay Slip</h2>
        <div class="row col-lg-12 jumbotron">
            <div class="col-sm-6 my-2">
                <label for="employeeId">Employee Id</label>
                <select for="id" class="form-control" id="employeeId" name="employeeId" onChange="getName(this.value);">
                    <option value="">Select</option>
                    <?php 
                    $query = "SELECT id,name FROM employee";
                    $result = mysqli_query($connection,$query);
                    while ($row = $result->fetch_assoc()){
                    ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    <?php } ?>
                </select>
                <p id="employeeIdErr"></p>
            </div>
            <div class="col-sm-6 my-2">
                <label>Month</label>
                <select for="month" class="form-control" id="month" name="month">
                    <option></option>
                    <option value="31">January</option>
                    <option value="29">February</option>
                    <option value="31">March</option>
                    <option value="30">April</option>
                    <option value="31">May</option>
                    <option value="30">June</option>
                    <option value=31>July</option>
                    <option value="31">August</option>
                    <option value="30">September</option>
                    <option value="31">October</option>
                    <option value="30">November</option>
                    <option value="31">December</option>
                </select>
                <p id="monthErr"></p>
            </div>
            <div class="col-sm-6 my-2">
                <label>Year</label>
                <select for="year" class="form-control" id="year" name="year">
                    <option></option>
                    <option value="2020">2020</option>
                </select>
                <p id="yearErr"></p>
            </div>
            <div class="col-sm-6 my-2">
                <label>Leaves</label>    
                <input type="number" name="leaves" id="leaves" class="form-control" placeholder="Leaves">
                <p id="leaveErr"></p>
            </div>
            <div class="col-sm-6 my-2">
                <label>Working Days</label>
                <input type="text" name="days" id="days" class="form-control" placeholder="Working Days">
            </div>
            <div class="col-sm-6 my-2">
                <label>Basic pay</label>    
                <input type="text" name="basicPay" id="basicPay" class="form-control" placeholder="Basic Pay">

            </div>
        
            <div class="col-sm-3 my-2">
                <label>DA</label>    
                <input type="text" name="da" id="da" class="form-control" placeholder="Dearness Allowance">
            </div>
            <div class="col-sm-3 my-2">
                <label>HRA</label>    
                <input type="text" name="hra" id="hra" class="form-control" placeholder="House Rent Allowance">
            </div>
            <div class="col-sm-3 my-2">
                <label>PF</label>    
                <input type="text" name="pf" id="pf" class="form-control" placeholder="Provident Fund">
            </div>
            <div class="col-sm-3 my-2">
                <label>Net Salary</label>    
                <input type="text" name="net" id="net" class="form-control" placeholder="Net Salary">
            </div>
            <div class="col-md-12 add-btn">
                <button type="submit" class="btn btn-primary" onclick="return validateForm()">Add Pay Slip Details</button>
            </div>
        </div>
    </form>
</div>
<script src="../assets/js/add-pay-slip.js"></script>
