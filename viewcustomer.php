<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/tablestyle.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<!-- <style>
  .test{
    padding-right: 20px;
    padding-left: 20px;
  }
</style>             -->

<body>

<div class="container">

  <?php
      include 'navabar.php'
  ?>

<!-- partial:index.partial.html -->
<!-- <div class="container"> -->
  <h2>Customer Details</h2>

  <ul class="responsive-table">
  <li class="table-header">
    <div class="col col-01">Job Id</div>
    <div class="col col-02">Customer Name</div>
    <div class="col col-03">Email</div>
    <div class="col col-04">Amount</div>
    <div class="col col-05">Operation</div>
  </li>

  <?php
  include "config.php";
  $selectquery = " select * from banksystem";
  $query = mysqli_query($con,$selectquery);
  $numofrows = mysqli_num_rows($query);


  
  while($res = mysqli_fetch_array($query))
  {
    ?>

      <li class="table-row">
        <div class="col col-01 test" data-label="Job Id" ><?php  echo $res['ID']; ?></div>
        <div class="col col-02 test" data-label="Customer Name"><?php echo $res['Name']; ?></div>
        <div class="col col-03 test" data-label="Email"><?php echo $res['Email']; ?></div>
        <div class="col col-04 test" data-label="Amount"> ₹ <?php echo $res['Amount']; ?></div>
        <div class="col col-05 test" data-label="">
          <a href="transfer.php?idtransfer=<?php  echo $res['ID']; ?>" class="text-white btn btn-secondary " style="text-decoration: none" >Transfer Money</a>
        </div>
      </li>
      <?php
  }
  ?>
    
  </ul>
</div>
<br>
<br>

</body>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>
