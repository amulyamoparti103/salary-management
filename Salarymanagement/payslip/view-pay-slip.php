<link rel="stylesheet" href="../assets/css/view-pay-slip.css">

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<div class="container">
    <form class="form-group" id="form" name="form">
        <h2>View Pay Slip</h2>
        <div class="row col-lg-12 form_view">
            <div class="col-sm-12 my-2">
                <label for="employeeName">Employee Name</label>
                <select for="name" class="form-control" id="employeeName" name="empployeeName">
                    <option></option>
                    <option value="--select--">--select--</option>
                </select>
                <p id="employeeIdErr"></p>
            </div>
            <div class="col-sm-6 my-2">
                <label>Month</label>
                <select for="month" class="form-control" id="month" name="month">
                    <option></option>
                    <option value="month">Month</option>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april ">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
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
            <div class="col-md-12 add-btn">
                <button type="submit" class="btn btn-primary" onclick="return validateForm()">Generate Pay Slip</button>
            </div>
        </div>
    </form>
</div>
    <!----------------======================================================================
    Table To Diplay The Pay Slip ================================================----------->
    <table border=1 width="500px">
        <tr>
            <th colspan="1">Employee Id</th>
            <td colspan="1">e002</td>
        </tr>
        <tr>
            <th colspan="1">Name</th>
            <td colspan="1">Amulya</td>
        </tr>
        <tr>
            <th colspan="1">Date of Join</th>
            <td colspan="1">05-06-2020</td>
        </tr>
        <tr>
            <th colspan="2" class="earn">EARNINGS</th>
        </tr>
        <tr>
            <th>Basic Pay</th>
            <td>5000</td>
        </tr>
        <tr>
            <th>Dearness Allowance</th>
            <td>344</td>
        </tr>
        <tr>
            <th>House Rent Allowance</th>
            <td>345</td>
        </tr>
        <tr>
            <th colspan="2" class="earn">DEDUCTIONS</th>
        </tr>
        <tr>
            <th>Provident Fund</th>
            <td>123</td>
        </tr>
        <tr>
            <th class="earn">NET SALARY</th>
            <td><b>5678</b></td>
        </tr>
        </tr>
    </table>
<script src="../assets/js/view-pay-slip.js"></script>