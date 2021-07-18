<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "coastline bank"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>
            
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
        <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
               padding-top: 100px;
               font-size:25px;
               padding-bottom: 100px;
               background: white;
               background: -webkit-linear-gradient(to right, white, cyan );
               background: linear-gradient(to right, white, cyan );
              }
        .container{      
            padding-top:5px;
            display: block;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 60%; 
        }
        td,th { border: 1px solid #ddd; padding: 8px;}
        #Table{ font-family: Arial,Helvetica, sans-serif; border-collapse: collapse; margin-bottom: 15px;}
        #Table tr:nth-child(even){ background-color:white ; }
        #Table tr:nth-child(odd){ background-color:lavender ; }
        #Table tr:hover{ background-color:papayawhip; }
        #Table th { padding-top: 10px; padding-bottom: 12px; text-align:left; background-color:gray; color:white; }
        footer {
            background-color:darkturquoise;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow: hidden;
          
        }
    </style>
</head>

<body>
  <!-- navbar -->
  <?php include('navbar.php'); ?>
	<div class="container">
        <h3 style="text-align: center">TRANSACTION HISTORY</h3>

       <br>
       <div>
    <table id = "Table">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>PAYER</th>
                <th>PAYER Acc No</th>
                <th>PAYEE</th>
                <th>PAYEE Acc No</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
  ?> 
 <tr>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        <td><?php echo $row['payee']; ?></td>
        <td><?php echo $row['payeeAcc']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>

     
        </tr>
 <?php
    }
  
$conn->close();
?> 
</
</table>
    </div>
</div>
<footer style="text-align: center">
    <p>Helpline:9890608860, Email:coastlinebank@gmail.com<br/>@THE SPARKS FOUNDATION</p>
</footer>
<body>

</html>


