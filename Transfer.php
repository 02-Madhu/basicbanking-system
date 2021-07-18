<!-- 
THIS PAGE IS FOR TRANSACTION OF MONEY FROM ONE BANK ACCOUNT TO ANOTHER.
ON THIS PAGE,
user has to enter the account no of payer, payee and amount that needs to be transferred. 
Then click proceed to confirm transaction. If the transfer is successful then user will be shown details
of the two account else they will be shown errors. 
-->
<?php


//CONNECTING TO THE DATABASE
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "coastline bank"; 
    
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //IF CONNECTION IS NOT SUCCESSSFUL
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
?>
<!--HTML CODE STARTS -->
<html>
<head> 
    <h3 style="text-align:center"><br/><br/> AMOUNT TRANSFER</h3>
    <style>
    body {
               padding-top: 60px;
               font-size:25px;
               background: white;
               background: -webkit-linear-gradient(to right, white,cyan);
               background: linear-gradient(to right,white, cyan );
        }
    .transfermoney{
        color:black;
        background:lavenderblush;
        background: -webkit-linear-gradient(to bottom,lavenderblush,lavenderblush);
        background: linear-gradient(to bottom,lavenderblush,lavenderblush);
        padding: 20px;
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        }

 
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
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
       
    </script>
      
     
</head>
<!-- BODY-->
<body>
<img style="float:right" src="people.jpg" alt="" width="350" height="300">
<img style="float:left" src="save.jpg" alt="" width="350" height="300">
<!-- INCLUDING NAVBAR-->
<?php include('navbar.php'); ?>
<!-- Creating Form to collect information related to do transaction-->
<div class = 'transferMoney'>
    <!-- Form's action attribute points to this page only-->
    <!-- Note: To redirect page to samee php write "php echo $_SERVER['PHP_SELF'];" in action attribute-->
    <form name="myForm" action="ResultPage.php"  onsubmit="return validateForm()" method="post">
    <!-- To structurise form it is put in a table--onsubmit="return validateForm()"-->
        <table id="table1">
        <!-- ROW 1 : FROM ACCOUNT ID IS ASKED-->
        <tr>
            <td>FROM Account No</td>
            <td><input type="number" name="payerID"  min=100 required><td>
        </tr>
        <!-- ROW 2 : TO ACCOUNT ID IS ASKED-->
        <tr>
            <td>TO Account No</td>
            <td><input type="number" name="payeeID" min=100 required ><td>
        </tr>
        <!-- ROW 3 : AMOUNT TO BE TRANSFERRED IS ASKED-->
        <tr>
            <td>Amount (in Rupees)</td>
            <td><input type="number" name="amount" min=1 required><td>
        </tr>
        <!-- ROW 4 : BUTTON TO ASK TO CONFIRM TRANSACTION-->
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" value="TRANSFER MONEY"><td>
        </tr>
       
        </table>
    </form>
</div>
 <!-- FORM / TABLE ENDS HERE WITH DIV TAG-->
 <script>
 
 function validateForm() {
            var x = document.forms["myForm"]["payerID"].value;
            var y = document.forms["myForm"]["payeeID"].value;
            var z = document.forms["myForm"]["amount"].value;
            var regex=/^[0-9]+$/;

            
            if (x == "" || y=="" || z=="") {
                alert("Fill it!!");
                return false;
            }

            //var num = z>0?1:-1;
            if((Math.sign(z)==-1)||(Math.sign(z)==-0)||z==0){
                alert("Enter a valid amount to do transaction");
                return false;
            }
            if(isNaN(z)|| !x.match(regex)|| !y.match(regex) ||!z.match(regex)){
                alert("Enter correct input!");
                return false;
            }
            
           // var data = <?php //echo json_encode("42", JSON_HEX_TAG); ?>;
        }
            
 </script>
        <footer style="text-align: center">
            <p>Helpline:9890608860, Email:coastlinebank@gmail.com<br/>@THE SPARKS FOUNDATION</p>
        </footer>
</body>
</html>
<!--HTML CODE ENDS HERE-->
