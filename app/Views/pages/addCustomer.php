<?php echo view('templates/header') ?>
<div class="container">
    <div class="card mt-2">
        <div class="card-header">
            <h2 class="text-center">ADD CUSTOMER</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="/">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="firstName" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="mobileNumber">Mobile Number</label>
                    <input type="number" class="form-control" name="mobile_no" id="mobileNumber" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender">
                        <option>---Select---</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="takenAmount">Amount Taken</label>
                            <input type="number" class="form-control" name="taken_amount" id="takenAmount" placeholder="Amount Taken">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="interest">Interest</label>
                            <input type="number" class="form-control" name="interest" id="inetrest" placeholder="Interest">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="startDate">Start Date</label>
                            <input id="datepicker" class="form-control" name="start_date" placeholder="Start Date" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="endDate">End Date</label>
                            <input class="form-control" name="end_date" id="datepicker1" placeholder="End Date">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    
</script>
<?php echo view('templates/footer') ?>