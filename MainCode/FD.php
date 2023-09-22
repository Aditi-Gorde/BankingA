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
        form{
            color: #dfd3c3;
            text-align: center;
        }
        input{
            display: inline-block
        }
        footer{
            position: relative;
        
            bottom: 0%;
            color: #b0acac !important;
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
            <li><a href="user1.php"  style="color:#dfd3c3;">Users</a></li>
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
                
				<li class="active"><a href="FD.html"  style="color:#dfd3c3;">Fixed Deposit(FD)</a></li>
        <li><a href="BROCHURE1.pdf" download="Brochure" style="color:#dfd3c3;">Download Brochure</a></li>
        
        <li><a href="pdf.php"  style="color:#dfd3c3;">Generate Report</a></li>
              </ul>

            <li><a href="Contact.php" style="color:#dfd3c3;">Contact Us</a></li>

          </ul>
        </div>
      </nav>

      <h2 style="color: #ca9753; font-family: auto; text-align: center; font-size: 43;">Fixed Deposit (FD)</h2><br>
      <p style="padding-left: 60px;padding-right: 60px ; color: #dfd3c3; font-size: 19px;">Earn assured returns on your savings and meet your short-term and long-term goals with fixed deposits from Spark Bank. With attractive interest rates and flexible investment tenures, our fixed deposits are one of the safe investment options available. Opt for a fixed deposit account with us and let your savings grow over a period ranging from seven days to a decade!</p>
      <br><br>
      <p style="padding-left: 60px;padding-right: 60px ; color: #dfd3c3; font-size: 19px; text-align: justify;">You can open a fixed deposit account with us through a number of channels like internet banking or mobile banking. If you prefer accessing our banking services in-person, simply visit the branch of Spark Bank that is near to you to open your fixed deposit account.</p><br>

      <div>
        <form action="" >
        <h3 style="font-size: 33px; font-family: auto; color: #ca9753;">Fixed Deposit Calculator</h3><br><br>
        <div style="display: flex; justify-content: space-evenly; 
        align-items: flex-start;">
        <div>
        <label for="">Type of Customer :</label>
        <input type="radio" name="cus">
        <label for="" selected>Normal</label>
        <input type="radio" name="cus">
        <label for="">Senior Citizen</label><br><br>

        <label for="">Type Of Fixed Deposit:</label>
        <select name="" id="" style="background-color: black;">
            <option value="">Cumulative</option>
            <option value="">Quaterly Payout</option>
            <option value="">Monthly Payout</option>
            <option value="">Part Time FD</option>
        </select>
<br>
        <label for="" >Amount</label>
        <input type="range" name="" id="amt" min="10000" max="500000" style="width:30rem;" onchange="ye()"><br><br>

        <label for="">Tenure:</label>
        <input type="number" name="" id="year" onchange="ye()" value="1" style="color: black;> <label for="">Years</label><br><br>
</div>
        <div style="font-size: 15px;"> 
        <p for="">Rate Of interest : 3.5%</p>
       <p>Monthly Interest : <b>2,713</b></p>
       <p>Date of FD : <b>22-JULY, 2021</b> </p>
       <p> Maturity Date : <span id="span1"> </span></p>
       <p>Maturity Value : <span id="tot"> </span></p>
       </div>
       </div>
       <script>
          
          var mv;
          var a;
           function ye(){
           var x= document.getElementById("year").value;
           var y= parseInt(2021) + parseInt(x);
           document.getElementById("span1").innerHTML= "22-JULY,"+y;
           a= document.getElementById("amt").value;
              var b=document.getElementById("year").value;
              b = b*12*2713;
              mv = parseInt(a)+b;
              document.getElementById("tot").innerHTML=mv;
              
           }
       </script>
        </form>
<br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Br88ax5dses" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="padding-left: 20px;"></iframe><br><br><br>

        <div style="color: #dfd3c3; padding-left: 60px; padding-right: 60px;">
            <h3 style="font-family: auto; color: #ca9753;">Benefits and features of fixed deposits from Spark Bank</h3>
            <p style="font-size: 16px;">Invest in fixed deposits from Spark Bank and make use of various features that help you meet your life goals. FD investors get to experience a variety of beneficial features, some of which we have explained here.</p>
            <ul style="font-size: 16px;">
                <li>Safety of your funds with the trust of Spark Bank. </li>
                <li>Assured returns on your investment.</li>
                <li>Designed for convenience – Invest anytime, anywhere using our iMobile, internet banking, branches, ATMs or customer care</li>
                <li>Instant liquidity – Need funds for emergencies? Get an overdraft against your FD or opt for partial withdrawal.</li>
                <li>Minimum Balance - You can avail of Spark Bank Fixed Deposits for a minimum deposit of ₹10,000.</li>
                <li>Loan against FD - Avail of a loan facility up to 90% of principal and accrued interest. Loan against the fixed deposit maybe given to the depositors at the discretion of the Bank.</li>
                <li>Competitive interest rates. Investment starts with as low as just ₹10,000 across flexible tenures to suit your needs, from seven (7) days to up to ten (10) years.</li>
            </ul>
        </div>
<br>

<div class="text-center" >
    <form  action="FD.php" method="post">
    <button class="btn mt-3 btn-primary" name="submit" type="submit" id="myBtn" onclick="con()">Start Your FD now</button><br>
  </form>
    </div>
    </div>
      <script >
           function con(){
             var id = prompt("Please enter your ID", "")
            document.getElementById("myBtn").value =id + "/" + a + "/" + mv;           
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
             $sql = "INSERT INTO FD Values('$id', '$amt', '$emi')";
             $query = mysqli_query($conn,$sql);
           
        }
?>
<br><br>
    <footer class="text-center mt-5 " id="footer">
        <p>&copy 2021<br>A & D Foundation</p>
      </footer>
    
</body>
</html>