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
            position: absolute;
            left: 42%;
            top: 92%;
            bottom: 0%;
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
                <a class="navbar-brand" href="#">Spark Bank</a>
              </div>
              <ul class="nav navbar-nav  navbar-right">
                <li><a href="home1.html">Home</a></li>
                <li class="active"><a href="user1.php">Users</a></li>
                <li><a href="tran.php?id=100">Transfer Money</a></li>
                <li><a href="transaction.php">Transaction History</a></li>
              </ul>
            </div>
          </nav><br><br>
<div class="container">
      <table class="table">
          <tr>
              <th><b>Id</b></th>
              <th>Username</th>
              <th>E-mail</th>
              <th>Account Balance</th>
              <th>Operation</th>
          </tr>
            <?php
          $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
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
            <p>&copy 2021. Made by <b>Aditi Gorde</b> <br>Aditi Gorde Foundation</p>
    </footer>
</body>
</html>