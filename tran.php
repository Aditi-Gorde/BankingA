 <?php
 $from = $_GET['id'];
$conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
if(isset($_POST['submit']))
{
     
     $to = $_POST['to'];
     $amount = $_POST['amount'];


    $sql = "SELECT * from Users where Branch_Id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.


    $sql = "SELECT * from Users where Branch_Id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);


    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
    // constraint to check insufficient balance.
    else if($amount > $sql1['Account_Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    
    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }
    else {
        
                // deducting amount from sender's account
                $a=$sql1['Account_Balance'];
                $newbalance = $a - $amount;
                
                $sql = "UPDATE Users set Account_Balance=$newbalance where Branch_Id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['Account_Balance'] + $amount;
                $sql = "UPDATE Users set Account_Balance=$newbalance where Branch_Id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO Transaction(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> var x = new Date();
                      alert('Transaction Successful '+x);
                            window.location='transaction.php';
                           </script>";
                    
                }
                $newbalance= 0;
                $amount =0;
        }
     }
    ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="user1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   

    <style type="text/css">
    	
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
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
        .form-control{
        width : 40% !important
        }
        th{
            
            background-color: #919090;
        }
        td{
            background-color: #c0dbe8;
        }

    </style>
</head>

<body style="  background-image: url(https://livedemo00.template-help.com/wt_prod-20154/images/slider-9-1920x1328.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
    <nav class="navbar navbar-inverse" style="padding-top: 2px;">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Spark Bank</a>
              </div>
              <ul class="nav navbar-nav  navbar-right">
                <li><a href="home1.html">Home</a></li>
                <li><a href="user1.php">Users</a></li>
                <li class="active"><a href="tran.php?id=100">Transfer Money</a></li>
                <li><a href="transaction.php">Transaction History</a></li>
              </ul>
            </div>
          </nav><br><br><br>
 
	<div class="container">
       
     <h2 class="text-center pt-4" style="color : black;"><b>Transfer Money</b></h2>
            <?php
               $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  Users where Branch_Id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr style="color : black;">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class="py-2"><?php echo $rows['Branch_Id'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['Account_Balance'] ?></td>
                </tr>
            </table>
        </div>
        <label style="color :hsl(36deg 46% 40% / 82%);  "><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                 $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6417933","N2sBfMWEYg","sql6417933");
                $sid=$_GET['id'];
                $sql = "SELECT * FROM Users where Branch_Id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['Branch_Id'];?>" >
                
                    <?php echo $rows['Name'] ;?> (Balance: 
                    <?php echo $rows['Account_Balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color :hsl(36deg 46% 40% / 82%);"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3 btn-primary" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
        </form>
    </div>
    <footer class="text-center mt-5 py-2">
            <p>&copy 2021. Made by <b>Aditi Gorde</b> <br>Aditi Gorde Foundation</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>