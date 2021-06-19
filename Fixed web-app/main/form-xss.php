
<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div>
        <h3 style="text-align: center;">Hi. Fill the form to proceed to payment portal</h3>
        <br>
        <br>
    </div>
	<div class="container">
    <div class="card">
        <div class="card-header">
            Delivery details
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" id="inputName">
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" id="inputEmail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNumber">Phone Number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                               id="inputNumber">
                    </div>

                </div>
                    <div class="form-group col-md-6">
                        <label for="inputName">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="address" id="inputName">
                    
                    </div>
                        <div class="form-group col-md-6">
                        <label for="inputCompany">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City" id="inputCompany">
                    </div>

                     <div class="form-group col-md-6">
                        <label for="inputCompany">State</label>
                        <input type="text" class="form-control" name="state" placeholder="State" id="inputCompany">
                    </div>

                <div class="form-group col-md-6">
                        <label for="inputNumber">Pin Code</label>
                        <input type="text" class="form-control" name="pincode" placeholder="Pin code"
                               id="inputNumber">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Done!</button>
                <br>
           

            </form>
        </div>
    </div>
    <div class="form-group col-md-6" style="margin-left: 50%">
    <h5>OR</h5>
    <a href="http://localhost:81/web-app/login.html">Login</a>
    </div>
    <br>
</div>
</body>
</html>