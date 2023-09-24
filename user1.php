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
   
    <title>Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="user1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
      footer{
            position: relative;
            color: #b0acac;
        }
        th{
          background-color: #272626;
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


          <br><br>
<div class="container">
      <table class="table">
          <tr style=" font-family:auto;">
              <th><b>Id</b></th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Account Balance</th>
              <th>Operation</th>
          </tr>
            <?php
        //  $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
          $conn=mysqli_connect("bviwddg1tz90z0wafre4-mysql.services.clever-cloud.com","uviuwebmnzw39gxi","cfNMc3nJk9obhTRRNk34","bviwddg1tz90z0wafre4");

          $sql="Select Branch_id, Name, Email, Account_Balance from Users";
          $result=$conn->query($sql);
          if($result->num_rows>0){
              while($row=$result->fetch_assoc()){
                  //echo $row["Branch_id"] ,$row["Name"], $row["Email"], $row["Account_Balance"];
                        ?> <tr>
                  <td><?php echo $row['Branch_id']?></td>
                  <td><?php echo $row['Name']?></td>
                  <td><?php echo $row['Email']?></td>
                  <td><?php echo $row['Account_Balance']?></td>
                  <td><a href="tran.php?id=<?php echo$row['Branch_id'] ;?>"> <button type="button" class="btn btn-primary" >Transact</button></a></td> 
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
<footer class="text-center mt-5 py-2">
            <p>&copy 2021<br>A & D Foundation</p>
    </footer>
</body>
</html>