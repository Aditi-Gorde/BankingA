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

            position:absolute;
            bottom: 0%;
            left: 45%;
            color: #b0acac;
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
            
            <li class="active"><a href="Ufd.php" style="color:#dfd3c3;">FD Appliers</a></li>
        <li><a href="ULoan.php" style="color:#dfd3c3;">Loan Appliers</a></li>
            </ul>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#dfd3c3;">Loan<span class="caret"></span></a>
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

      <div class="text-center" >
    <form  action="Ufd.php" method="post">
    <button class="btn mt-3 btn-primary" name="submit" type="submit" id="myBtn" onclick="con()">Stop Your FD</button><br>
  </form>
    </div>
        <script >
           function con(){
             var id = prompt("Please enter your ID", "")
            document.getElementById("myBtn").value =id;           
            return false;
          }
        </script>
        

        <?php
         
         if(isset($_POST['submit']))
        { 
          
            $id = $_POST['submit'];
             $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com", "uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34", "bviwddg1tz90z0wafre4");
             $sql = "DELETE FROM FD WHERE Id =$id";
             $query = mysqli_query($conn,$sql);
           
        }
?>

      <br><br>
      <div class="container">
            <table class="table">
                <tr style=" font-family:auto; color:#dfd3c3">
                    <th><b>Id</b></th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>FD Amount</th>
                    <th>Maturity Value</th>
                </tr>
                  <?php
              //  $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
                $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com","uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34","bviwddg1tz90z0wafre4");
      
                $sql="Select Id, Name, Email, FD_amount, Mat_val from Users, FD where FD.id=Users.Branch_ID";
                $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        //echo $row["Branch_id"] ,$row["Name"], $row["Email"], $row["Account_Balance"];
                              ?> <tr>
                        <td style="color: #dfd3c3;"><?php echo $row['Id']?></td>
                        <td style="color: #dfd3c3;"><?php echo $row['Name']?></td>
                        <td style="color: #dfd3c3;"><?php echo $row['Email']?></td>
                        <td style="color: #dfd3c3;"><?php echo $row['FD_amount']?></td>
                        <td style="color: #dfd3c3;"><?php echo $row['Mat_val']?></td>
                    </tr>
      
                  <?php
                    }
                    
                }
                else{
                    echo "0 result";
                }
                $conn->close();
                ?>
            </table>
      </div>

      
<footer class="text-center mt-5 ">
            <p>&copy 2021<br>A & D Foundation</p>
    </footer>
    
</body>
</html>