<!DOCTYPE html>
<html>
<head>
<style>
body {margin:0;}
.nav{
    margin-bottom:12px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: lightsteelblue;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.title) {
  background-color: aquamarine;
}
.title {
  background-color: cornflowerblue;
}

</style>
</head>
<body>
   <nav class="Nav">
    <ul>
    <li>
    <a class="title" href="#">Coastline Bank</a>
    </li>
    <li>
    <a href="index.php">Home</a>
    </li>
    <li>
    <a href="ViewCustomers.php">Account holder Details</a>
    </li>
    <li>
    <a href="Transfer.php">Amount Transfer</a>
    </li>
    <li>
    <a href="RecordsPage.php">Transaction History</a>
    </li>
    </ul>
   </nav>
<body>
</html>

