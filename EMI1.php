<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        footer{
                position: absolute;
                left: 42%;
                bottom: 0%;
                color: #b0acac !important;
            }
            body{
            background-image: url(https://livedemo00.template-help.com/wt_prod-20154/images/slider-9-1920x1328.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: #dfd3c3;
        }
        input{
          width: 130% !important;
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
            <li><a href="newuser.php"  style="color:#dfd3c3;">Create User</a></li>
            <li class="active"><a href="user1.php"  style="color:#dfd3c3;">Users</a></li>
              </ul>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Transaction<span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: black; ">
            <li><a href="tran.php?id=100"  style="color:#dfd3c3;">Transfer Money</a></li>
            <li><a href="transaction.php"  style="color:#dfd3c3;">Transaction History</a></li>
            <li ><a href="Ufd.php" style="color:#dfd3c3;">FD Appliers</a></li>
        <li><a href="ULoan.php" style="color:#dfd3c3;">Loan Appliers</a></li>
            </ul>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Services<span class="caret"></span></a>
              <ul class="dropdown-menu" style="background-color: black; ">
                <li><a href="p22.html" style="color:#dfd3c3;">Personal Loan</a></li>
                <li><a href="EMI1.html"  style="color:#dfd3c3;">EMI Calculator</a></li>
                <li><a href="FD.html" style="color: #dfd3c3;">Fixed Deposit(FD)</a></li>
                <li><a href="BROCHURE1.pdf" download="Brochure" style="color:#dfd3c3;">Download Brochure</a></li>
                
            <li><a href="pdf.php"  style="color:#dfd3c3;">Generate Report</a></li>
              </ul>

            <li><a href="Contact.php" style="color:#dfd3c3;">Contact Us</a></li>

          </ul>
        </div>
      </nav>


      <h2 style="text-align: center; font-family: auto; color: #ca9753;">Personal Loan EMI Calculator</h2>
      <p style="padding-left: 60px;padding-right: 60px; font-size: 20px; font-family: auto;"><span style="font-size: 24px; color: #ca9753;">Planning to take a Personal Loan?</span> <br> <br> Use this Personal Loan EMI Calculator to estimate the EMI amount payable per month to repay the Personal Loan. <br> The Personal Loan EMI Calculator is easy to use. All you need to select is the:</p>
      <ul style="font-size: 17px; padding-left: 60px;padding-right: 60px">
          <li>Loan amount ranging from ₹ 50,000 to ₹ 25 lakh</li>
          <li>Interest Rate (starting from 10.5%* p.a.)</li>
          <li>Loan Tenure (ranging from 12 – 72* months).</li>
      </ul>
<br><br><br>
<h3 style="padding-left: 60px;padding-right: 60px; font-family: auto; color: #ca9753;">How the Calculator Works?</h3><br>
      <p style="padding-left: 60px;padding-right: 60px; font-size: 20px;">After selecting the Loan Amount, Interest Rate per annum and the Loan Tenure, the calculator will estimate the monthly EMI amount and the total Interest payable till the end of the loan tenure. You can also hover your mouse on the graph to view the Balance Loan Amount (Principle Outstanding) and the Interest accumulated till a particular period.</p>
      <br><br><br>
      <form action="" style="display: block;">
        <div style="display: flex;
    align-content: space-around;
    justify-content: space-between;
    border: white;
    border-style: outset;
    margin: 10rem;">
        <div style="margin-left: 19rem; margin-top: 2rem;">
          <label for="">Loan Amount</label><br>
          <input type="range" name="" id="la" min="50000" max="2500000" value="100000">
          <p id="demo1">Value: 
           Rs <button id="la1" style="color: black;"></button><br><br></p>
          <script>
          
            </script>
          <label for="">Interest Rate</label><br>
          <input type="range" name="" id="ir" min="10.5" max="19" value="10.5">
          <p id="demo2">Value: 
            <button id="la2" style="color: black;"></button>  p.a<br><br></p>
          <script>
            
            </script>
          <label for="">Loan Tenure</label><br>
          <input type="range" name="" id="lt" min="12" max="72" value="24">
          <p id="demo3">Value: 
            <button id="la3" style="color: black;"></button> months<br><br></p>
          <script>
            var a=100000;
            var b=10.5;
            var c=24;
            var emi=5041;
            let slider = document.getElementById("la");
            let output = document.getElementById("la1");
            output.innerHTML = slider.value;
            
            slider.oninput = function() {
              output.innerHTML = this.value;
                a=parseInt(this.value);          
                emi=parseInt((a+((a*b/12)*c))/c);
             document.getElementById("EMI").innerHTML=emi;
            }

            let slider1 = document.getElementById("ir");
            let output1 = document.getElementById("la2");
            output1.innerHTML = slider1.value;
            
            slider1.oninput = function() {
              output1.innerHTML = this.value;
               b=this.value;
               emi=parseInt((a+((a*b/12)*c))/c);
             document.getElementById("EMI").innerHTML=emi;
            }

            let slider2 = document.getElementById("lt");
            let output2 = document.getElementById("la3");
            output2.innerHTML = slider2.value;

            
            slider2.oninput = function() {
              output2.innerHTML = this.value;
               c= this.value;

             //var emi=[a * b * Math.pow((1+b),c)]/[Math.pow((1+b),c-1)];
              emi=parseInt((a+((a*b/12)*c))/c);
             document.getElementById("EMI").innerHTML=emi;
            }
            
            </script>
          </div>
      </form>

<div style="width: 50%">
  <h3 style="color: #ca9753;">Calculated Monthly Payment</h3>
   <p> <b>Rs. </b><em id="EMI">5041</em></p>

      <p>
        *Note : The EMI amount is indicative and may vary depending upon the date of disbursal and period between the disbursal date and the first EMI date.
      </p>

     
      <div class="text-center" >
        <form  action="EMI1.php" method="post">
         <button class="btn mt-3 btn-primary" name="submit" type="submit" id="myBtn" onclick="con()" >Apply Now</button><br>
        </form>
        </div>
        
       <script >
           function con(){
             alert("emi");
             var id = prompt("Please enter your ID", "")
            document.getElementById("myBtn").value =id + "/" + a + "/" + emi;           
            return false;
          }
        </script>
        

        <?php
         

       
         if(isset($_POST['submit']))
        { 
          $a =explode("/",$_POST['submit']);
           $id = $a[0];
           $amt = $a[1];
           $emi = $a[2];
             $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com", "uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34", "bviwddg1tz90z0wafre4");
          $sql = "INSERT INTO Loan Values('$id', '$amt', '$emi')";
                $query = mysqli_query($conn,$sql);
           
        }
?>

     </div>
   </div> 
</body>
</html>