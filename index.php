<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Bank Management System</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>    
    <div class="container">

        <h1 class="my-4">Welcome to Blood Bank Management System</h1>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                   
                        <p class="card-text" style="padding-left:2%;font-size:18px;">1)Saving lives of individual.</br>
                        2)Undergoing orthopedic surgeries.</br>3)Cancer cure.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%;font-size:18px;">1)Donate blood after three month</br>
                        2)About 350ml+/- blood can be donated at time</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>
                   
                        <p class="card-text" style="padding-left:2%;font-size:18px;">1)Help the person who have blood lacking</br>2)Blood is available to be shipped to hospitals 24 hours a day, 7 days a week.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
          <p style="font-size:18px;">  blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li style="font-size:18px;">A+ or A-</li>
<li style="font-size:18px;">B+ or B-</li>
<li style="font-size:18px;">O+ or O-</li>
<li style="font-size:18px;">AB+ or AB-</li>
                </ul>
               
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="">
            </div>
        </div>
    
        <hr>
        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="font-size:30px;">UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p style="font-size:18px;">
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php">Donor Registration</a>
            </div>
        </div>

    </div>
  <?php include('includes/footer.php');?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
