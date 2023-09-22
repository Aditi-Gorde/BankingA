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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
          var p="ghghjg"
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").toggle()
            });
        });
        $(document).ready(function(){
            $("#flip1").click(function(){
                $("#panel1").toggle()
            });
        });
        $(document).ready(function(){
            $("#flip2").click(function(){
                $("#panel2").toggle()
            });
        });
        $(document).ready(function(){
            $("#flip3").click(function(){
            $("#img1").toggle($("#img1").animate({marginLeft:'63rem'}));
                $("#panel3").toggle()
            });
        });
        
        $(document).ready(function(){
            $("#img1").click(function(){
              if($("#panel").hasClass("none")){
              $("#img1").animate({marginLeft:'0rem'})
          }
          else
          {
            $("#img1").animate({marginLeft:'63rem'})
          }
            $("#panel").toggle()
              $("#panel").toggleClass("none");  
        });
        });
          
        $(document).ready(function(){
            
            $("#img2").click(function(){
              if($("#panel1").hasClass("none")){
              $("#img2").animate({marginLeft:'0rem'})
          }
          else
          {
            $("#img2").animate({marginLeft:'63rem'})
          }
            $("#panel1").toggle()
              $("#panel1").toggleClass("none");  
        });
         });   
  
          
        $(document).ready(function(){
            
            $("#img3").click(function(){
              if($("#panel2").hasClass("none")){
              $("#img3").animate({marginLeft:'0rem'})
          }
          else
          {
            $("#img3").animate({marginLeft:'63rem'})
          }
            $("#panel2").toggle()
              $("#panel2").toggleClass("none");  
        });
        });
  
          
        $(document).ready(function(){
            $("#img4").click(function(){
              if($("#panel3").hasClass("none")){
              $("#img4").animate({marginLeft:'0rem'})
          }
          else
          {
            $("#img4").animate({marginLeft:'63rem'})
          }
            $("#panel3").toggle()
              $("#panel3").toggleClass("none");  
        });
        });
  
  

    </script>
    <style>
        #panel,#panel1,#panel2,#panel3{
            padding: 5px;
            text-align: center;
          color: white;
        }
        #panel,#panel1,#panel2,#panel3{
            padding: 20px;
            padding-left: 40px;
            padding-right: 40px;
            display: none;
        }
        #flip1,#flip2,#flip,#flip3{
          color: #ca9753;
          padding-left: 10px;
        }
        #img1,#img2,#img3,#img4{
          padding-left: 10px;
        }
    </style>
    <style>
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
        <li ><a href="index.html" style="color:#dfd3c3;">Home</a></li>
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
        <li><a href="FD.html"  style="color:#dfd3c3;">Fixed Deposit(FD)</a></li>
        <li><a href="BROCHURE1.pdf" download="Brochure" style="color:#dfd3c3;">Download Brochure</a></li>
        
        <li><a href="pdf.php"  style="color:#dfd3c3;">Generate Report</a></li>
          </ul>

        <li class="active"><a href="Contact.php" style="color:#dfd3c3;">Contact Us</a></li>

      </ul>
    </div>
  </nav>
    
      <h2 style="color:#ca9753; text-align:center"><b>Kindly Choose your kind of service</b></h2>
      

      <img src="https://cdn1.iconfinder.com/data/icons/ui-colored-1-of-3/100/UI_1__19-512.png" alt="" height="50px" width="50px" id="img1">
    <div id="flip"><b>Reach out to Customer Care for your queries</b></div>
    <div id="panel"  style="background: #009f9f">18004195592</div>
<hr>

<img src="https://icon-library.com/images/write-post-icon/write-post-icon-6.jpg" alt="" height="50px" width="50px" id="img2">
    <div id="flip1"><b>Write to us</b></div>
    <div id="panel1" style="background: #009f9f">Spark Bank Limited
      Spark Phone Banking Center, Spark Bank Tower, 7th floor,
      Survey no: 115/27, Plot no. 12, Nanakramguda, Serilingampally,
      Hyderabad – 500032. sparkbankcorp@gmail.com</div>
<hr> 
<img src="https://icon-library.com/images/service-request-icon/service-request-icon-15.jpg" alt="" height="50px" width="60px" id="img3">

    <div id="flip2"><b>Service Requests</b></div>
    <div id="panel2" style="background: #009f9f">Raise Service Requests to avail of our various services</div>
<hr>
<img src="https://st4.depositphotos.com/1842549/21008/i/1600/depositphotos_210083640-stock-photo-helpdesk-icon.jpg" alt="" height="50px" width="50px" id="img4"/>

    <div id="flip3"><b>Visit the helpdesk</b></div>
    <div id="panel3" style="background: #009f9f;">Visit the helpdesk at any of our branches or drop us a line at our
      our Branch / ATM / Bank@Home DropBox / ATM Sharing</div>
<br><br>
      <div class="text-center" >
        <form action="Contact.php" method="post">
        <button class="btn mt-3 btn-primary" name="submit" type="submit" id="myBtn"  onclick="con()">Reach us directly</button><br></form>
        </div>
        <script >
           function con(){
             var id = prompt("Please enter your ID", "")
             var time = prompt("Please enter your Time", "")
             var no = prompt("Please enter your Phone No.", "")
            document.getElementById("myBtn").value =id + "/" + time + "/" + no;           
            return false;
          }
        </script>
        

        <?php
         if(isset($_POST['submit']))
        {

           $a =explode("/",$_POST['submit']);
           $id = $a[0];
           $time = $a[1];
           $pno = $a[2];
          $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com", "uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34", "bviwddg1tz90z0wafre4");
          $sql = "INSERT INTO Contact VALUES('$id', '$pno', '$time')";
                $query = mysqli_query($conn,$sql);
           
        }
?>
        <br><br><br>
      <footer class="text-center mt-5 " id="footer">
        <p>&copy 2021 <br>A & D Foundation</p>
      </footer>

</body>
</html>