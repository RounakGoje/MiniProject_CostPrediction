<!DOCTYPE html>
<html lang="en">
<head xmlns="http://www.w3.org/1999/xhtml">
    <meta charset="UTF-8">
    <title>Service Cost Predictor</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>

</head>
<body class="">

<?php
    if (isset($_POST['submit']))
    {
        $a=$_POST['company'];
        $b=$_POST['car_models'];
        if ($a == 'Carpenter' && $b == 'Shruti Furniture')
        {$r=1865;}
        else if ($a == 'Car Wash' && $b == 'Auswalt Washing Centre')
        {$r=1250;}
        else if ($a == 'Plumber' && $b == 'Akash Plumbing Services')
        {$r=1280;}
        else if ($a == 'Gadgets' && $b == 'Teddy Phones')
        {$r=3850;}
        else if ($a == 'Groceries' && $b == 'Vaishnavi Supermarket')
        {$r=880;}
        else if ($a == 'Electrician' && $b == 'Nikhil Electrical Services')
        {$r=1450;}
        else if ($a == 'Plumber' && $b == 'Akash Plumbing Services')
        {$r=1360;}
        else if ($a == 'Others' && $b == 'RG IT Services')
        {$r=2940;}
        else if ($a == 'Car Wash' && $b == 'Ace Washing Center And Cares')
        {$r=1430;}
        else if ($a == 'Gadgets' && $b == 'Raju TV And Gadgets')
        {$r=3930;}
        else if ($a == 'Carpenter' && $b == 'Riddhi Furniture')
        {$r=1630;}
        else if ($a == 'Plumber' && $b == 'Sankarshan Plumbers')
        {$r=1420;}
        else if ($a == 'Vegetables' && $b == 'Shivkumar Vegetables And Fruits')
        {$r=520;}
        else if ($a == 'Groceries' && $b == 'Raj Super Complex')
        {$r=830;}
        else if ($a == 'Electrician' && $b == 'Santosh Electical Services And Fitter')
        {$r=1230;}
        else
        {$r="you correct information to predict cost";}
    }
?>

<div class="container">
    <div class="row">
        <div class="card mt-50" style="width: 100%; height: 100%">
            <div class="card-header" style="text-align: center">
                <h1>Welcome to Car Price Predictor</h1>
            </div>
            <div class="card-body">
                <div class="col-12" style="text-align: center">
                    <h5>This app predicts the cost for services. Try filling the details below: </h5>
                </div>
                <br>
                <form method="POST" accept-charset="utf-8" name="Modelform" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Select the category:</b> </label><br>
                        <select class="selectpicker form-control" id="company" name="company" required="1"
                                onchange="load_car_models(this.id,'car_models')">
                            {% for company in companies %}
                            <option>---Category---</option>
                <option value="Plumber">Plumber</option>
                <option value="Carpenter">Carpenter</option>
                <option value="Maintenance">Maintenance</option>
                <option value="ToursTravels">ToursTravels</option>
                <option value="Mechanic">Mechanic</option>
                <option value="Tutor">Tutor</option>
                <option value="Painter">Painter</option>
                <option value="MedicalSupport">MedicalSupport</option>
                <option value="Electrician">Electrician</option>
                <option value="Transportation">Transportation</option>
                <option value="KeyMaker">KeyMaker</option>
                <option value="Sweeper">Sweeper</option>
                <option value="Builder">Builder</option>
                <option value="Security">Security</option>
                <option value="Watchman">Watchman</option>
                <option value="ShippingLagguage">ShippingLagguage</option>
                <option value="GarbageDisposal">GarbageDisposal</option>
                <option value="Packaging">Packaging</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Name of Service Provider:</b> </label><br>
                        <select class="selectpicker form-control" id="car_models" name="car_models" required="1">
                            <option>---Name of Service Provider---</option>
                <option value="Shruti Furniture">Carpenter-Shruti Furniture</option>
                <option value="Auswalt Washing Centre">Car Wash-Auswalt Washing Centre</option>
                <option value="Akash Plumbing Services">Plumber-Akash Plumbing Services</option>
                <option value="Teddy Phones">Gadgets-Teddy Phones</option>
                <option value="Vaishnavi Supermarket">Groceries-Vaishnavi Supermarket</option>
                <option value="Nikhil Electrical Services">Electrician-Nikhil Electrical Services</option>
                <option value="RG IT Services">Others-RG IT Services</option>
                <option value="Ace Washing Center And Cares">Car Wash-Ace Washing Center And Cares</option>
                <option value="Raju TV And Gadgets">Gadgets-Raju TV And Gadgets</option>
                <option value="Riddhi Furniture">Carpenter-Riddhi Furniture</option>
                <option value="Sankarshan Plumbers">Plumber-Sankarshan Plumbers</option>
                <option value="Shivkumar Vegetables And Fruits">Vegetables-Shivkumar Vegetables And Fruits</option>
                <option value="Raj Super Complex">Groceries-Raj Super Complex</option>
                <option value="Santosh Electical Services And Fitter">Electrician-Santosh Electical Services And Fitter</option>
                        </select>
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Number of Years for service</b> </label><br>
                        <select class="selectpicker form-control" id="year" name="year" required="1">
                            {% for year in years %}
                            <option>---Years---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Service Preference(Urgent)</b> </label><br>
                        <select class="selectpicker form-control" id="fuel_type" name="fuel_type" required="1">
                            {% for fuel in fuel_types %}
                            <option>---Urgent---</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Enter the Number of Reviews:</b> </label><br>
                        <input type="text" class="form-control" id="kilo_driven" name="kilo_driven"
                               placeholder="Enter the Number of Reviews ">
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <input type="submit" class="btn btn-primary form-control" onclick="send_data()" name="submit" id="submit">
                    </div>
                    <div class="col-md-10 form-group" style="text-align: center">
                        <label><b>Cost:</b> </label><br>
                        <input type="text" class="form-control" value="<?php echo ($r); ?>">
                    </div>
                </form>
                <br>
                <div class="row">
                    <div class="col-12" style="text-align: center">
                        <h4><span id="prediction"></span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>