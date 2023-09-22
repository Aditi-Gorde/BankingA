<?php 
       // include 'sql.php';
 $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com", "uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34", "bviwddg1tz90z0wafre4");

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $money = $_POST['money'];

              $sql = "SELECT * from Users WHERE Name='$name' ";
              $query = mysqli_query($conn,$sql);
              $sql1 = mysqli_fetch_array($query);
              if($sql1){
                echo '<script type="text/javascript">';
                echo ' alert("Sorry! the username alredy exists")';
                echo '</script>';
        
              }
             else{

                $a =110;
                echo $name;
                echo $money;
                echo $email;
                $sql = "INSERT INTO Users(`Name`,`Email`,`Account_Balance`) VALUES( '$name', '$email', '$money')";
            
                $query = mysqli_query($conn,$sql);
                echo '<script type="text/javascript">';
                echo ' alert(" new account with username '.$name.' is successfully created")';
                echo '</script>';
             }
              /*
            $sql = "INSERT INTO bank IF username!='$name' VALUES( NULL, '$name', '$email', '$money')";
            
            $query = mysqli_query($conn,$sql);*/
            
        }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <style>
       form{
        color :hsl(36deg 46% 40% / 82%);
       }
       
footer{
            position: absolute;
            color: #b0acac !important;
            left : 63%;
            bottom: -30%;

        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="padding-top: 2px;">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:#dfd3c3;">Spark Bank</a>
              </div>
              <ul class="nav navbar-nav  navbar-right">
                <li><a href="index.html" style="color:#dfd3c3;">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Users<span class="caret"></span></a>
                  <ul class="dropdown-menu" style="background-color: black; ">
                <li class="active"><a href="newuser.php"  style="color:#dfd3c3;">Create User</a></li>
                <li><a href="user1.php" style="color:#dfd3c3;">Users</a></li>
                  </ul>
                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Transaction<span class="caret"></span></a>
                  <ul class="dropdown-menu" style="background-color: black; ">
                <li><a href="tran.php?id=100"  style="color:#dfd3c3;">Transfer Money</a></li>
                <li><a href="transaction.php"  style="color:#dfd3c3;">Transaction History</a></li>
                <li><a href="Ufd.php" style="color:#dfd3c3;">FD Appliers</a></li>
        <li><a href="ULoan.php" style="color:#dfd3c3;">Loan Appliers</a></li>
                </ul>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Services<span class="caret"></span></a>
                  <ul class="dropdown-menu" style="background-color: black; ">
                    <li><a href="p22.html" style="color:#dfd3c3;">Personal Loan</a></li>
                    <li><a href="EMI1.html"  style="color:#dfd3c3;">EMI Calculator</a></li>
                    <li><a href="FD.html"  style="color:#dfd3c3;">Fixed Deposit(FD)</a></li>
                    <li><a href="BROCHURE1.pdf" download="Brochure" style="color:#dfd3c3;">Download Brochure</a></li>
                    <li><a href="pdf.php"  style="color:#dfd3c3;">Generate Report</a></li>
                  </ul>

                <li><a href="Contact.php" style="color:#dfd3c3;">Contact Us</a></li>

              </ul>
            </div>
          </nav>

    <h1 style="text-align: center; color: #dfd3c3;font-family:auto;"><b>CREATE A USER</b></h1><br><br><br>
   
        <!--newuser start-->
        <section id="newuser" class="main-heading my-5 ">
            <div class="container ">
              <div class="row">
                <div class="col-xxl-8 col-10 col-md-8 mx-auto">
                  <form action="user1.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputName" class="form-label">Name</label>
                      <input type="text" name="name" placeholder="Enter the name" pattern="[A-Za-z ]*" class="form-control" id="exampleInputPassword1" required ><br>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" placeholder="Enter the email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required><br>
                      
                    </div>
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Total Amount</label>
                      <input type="number" name="money" placeholder="Enter the amount" class="form-control" id="exampleInputnumber" aria-describedby="emailHelp" required pattern="[0-9]*"><br>
                      
                    </div><br><br>
                    
                    
                  <!-- Button trigger modal -->
        <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center;">
          Create
        </button>
        
        <br><br><br>
        <footer class="text-center mt-5 py-2" id="footer">
  <p>&copy 2021<br>A & D Foundation</p>
</footer>
</body>
</html>