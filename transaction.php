<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="user1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .py-2{
            text-align: center;
            background-color: #c0dbe8;
            
        }
        footer{
            position: absolute;
            left: 42%;
            bottom: 0%;
            color: #b0acac;
        }
        .table{
            border:2px solid gray;
        }
        tr,td,th{
            border: 2px solid gray !important;
        }
        th{
            font-weight: bold;
        }

    </style>
</head>

<body style="background-image: url(https://livedemo00.template-help.com/wt_prod-20154/images/slider-9-1920x1328.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
<nav class="navbar navbar-inverse" style="padding-top: 2px;">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Spark Bank</a>
              </div>
              <ul class="nav navbar-nav  navbar-right">
                <li ><a href="home1.html">Home</a></li>
                <li><a href="user1.php">Users</a></li>
                <li><a href="tran.php?id=100">Transfer Money</a></li>
                <li class="active"><a href="transaction.php">Transaction History</a></li>
              </ul>
            </div>
          </nav>


	<div class="container">
        <h2 class="text-center pt-4" style="color : black;"><b>Transaction History</b></h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th> 
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th> 
            </tr>
        </thead>
        <tbody>
        <?php

$conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");


            $sql ="select * from Transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['Sno']; ?></td> 
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Amount']; ?> </td>
            <td class="py-2"><?php echo $rows['Time']; ?> </td> 
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center mt-5 ">
            <p>&copy 2021. Made by <b>Aditi Gorde</b> <br>Aditi Gorde Foundation</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>