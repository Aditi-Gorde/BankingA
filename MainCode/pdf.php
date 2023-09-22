<?php

 if(isset($_POST['submit']))
        { 
         $x= $_POST['id'];
require('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    // $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(80,10,'Spark Bank Report',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
     $this->Cell(0,10,"Aditi Gorde Foundation",0,0,'C');
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$conn = new mysqli("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com", "uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34", "bviwddg1tz90z0wafre4");
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(200,220,255);
    // Title
$pdf->Cell(0,6,"User Details",0,1,'L',true);
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',12);
$pdf->Cell(20,10,'ID',1);
  $pdf->Cell(60,10,'Name',1);
  $pdf->Cell(80,10,'Email',1);
  $pdf->Cell(35,10,'Balance',1);
  $pdf->Ln();
  $select = "SELECT * FROM Users where Branch_Id= '$x'";
$result = $conn->query($select);
while($row=$result->fetch_assoc()){
  $id = $row['Branch_Id'];
  $name = $row['Name'];
  $address = $row['Email'];
  $phone =  $row['Account_Balance'];
  $pdf->Cell(20,10,$id,1);
  $pdf->Cell(60,10,$name,1);
  $pdf->Cell(80,10,$address,1);
  $pdf->Cell(35,10,$phone,1);
  $pdf->Ln();
}
$pdf->Ln(4);
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(200,220,255);
  $pdf->Cell(0,6,"Transaction History",0,1,'L',true);
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Sender',1);
  $pdf->Cell(60,10,'Receiver',1);
  $pdf->Cell(30,10,'Amount',1);
  $pdf->Cell(45,10,'Time',1);
  $pdf->Ln();
  $select = "SELECT * FROM `Transaction` WHERE Sender = '$name' or Receiver = '$name' ";
$result = $conn->query($select);
while($row=$result->fetch_assoc()){
  $sname = $row['Sender'];
  $rname = $row['Receiver'];
  $address = $row['Amount'];
  $phone =  $row['Time'];
  $pdf->Cell(60,10,$sname,1);
  $pdf->Cell(60,10,$rname,1);
  $pdf->Cell(30,10,$address,1);
  $pdf->Cell(45,10,$phone,1);
  $pdf->Ln();
}
$pdf->Ln(4);
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(200,220,255);
  $pdf->Cell(0,6,"FD Details",0,1,'L',true);
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Name',1);
  $pdf->Cell(40,10,'FD Amount',1);
  $pdf->Cell(40,10,'Maturity Value',1);
  $pdf->Ln();
  $select = "SELECT * FROM `FD` WHERE Id= '$id' ";
$result = $conn->query($select);
while($row=$result->fetch_assoc()){
  $address = $row['FD_amount'];
  $phone =  $row['Mat_val'];
  $pdf->Cell(60,10,$name,1);
  $pdf->Cell(40,10,$address,1);
  $pdf->Cell(40,10,$phone,1);
  $pdf->Ln();
}
$pdf->Ln(4);
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(200,220,255);
  $pdf->Cell(0,6,"Loan Details",0,1,'L',true);
    // Line break
    $pdf->Ln(4);
    $pdf->SetFont('Arial','B',12);
$pdf->Cell(60,10,'Name',1);
  $pdf->Cell(40,10,'Loan Amount',1);
  $pdf->Cell(40,10,'Interest',1);
  $pdf->Ln();
  $select = "SELECT * FROM `Loan` WHERE Id= '$id' ";
$result = $conn->query($select);
while($row=$result->fetch_assoc()){
  $address = $row['Loan_amount'];
  $phone =  $row['Interest'];
  $pdf->Cell(60,10,$name,1);
  $pdf->Cell(40,10,$address,1);
  $pdf->Cell(40,10,$phone,1);
  $pdf->Ln();
}

$pdf->Output();
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
            bottom: -190%;

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
                <li><a href="home1.html" style="color:#dfd3c3;">Home</a></li>
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
                    <li class="active"><a href="pdf.php"  style="color:#dfd3c3;">Generate Report</a></li>
                  </ul>

                <li><a href="Contact.php" style="color:#dfd3c3;">Contact Us</a></li>

              </ul>
            </div>
          </nav>

   
        <!--newuser start-->
        <section id="newuser" class="main-heading my-5 ">
            <div class="container ">
              <div class="row">
                <div class="col-xxl-8 col-10 col-md-8 mx-auto">
                  <form action="pdf.php" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ID</label>
                       <input type="text" name="id" placeholder="Enter the ID" class="form-control" required >
                    </div>
                
                  <br><br>
                    
                    
                  <!-- Button trigger modal -->
        <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="text-align: center;">
          Generate Report
        </button>
          </form>
        <br><br><br>
        <footer class="text-center mt-5 py-2" id="footer">
  <p>&copy 2021<br>A & D Foundation</p>
</footer>
</body>
</html>